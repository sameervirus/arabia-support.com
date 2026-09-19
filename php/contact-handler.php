<?php
/**
 * Handles the quote-request form on /contact.php and /en/contact.php.
 * Sends a plain-text email via mail() and returns a small JSON status
 * so the front-end (assets/js/main.js) can show a success/error message.
 */

declare(strict_types=1);

require_once __DIR__ . '/../partials/config.php';

header('Content-Type: application/json; charset=utf-8');

function respond(bool $ok, string $message = ''): void {
  echo json_encode(['ok' => $ok, 'message' => $message], JSON_UNESCAPED_UNICODE);
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  respond(false, 'Method not allowed.');
}

// Honeypot: real users never fill this hidden field.
if (!empty($_POST['company'])) {
  respond(true); // silently pretend success to the bot
}

// Time-trap: the form embeds its render time; genuine users need at least a
// couple of seconds to fill it in, bots submit almost instantly.
$renderedAt = (int)($_POST['ts'] ?? 0);
if ($renderedAt <= 0 || time() - $renderedAt < 3) {
  respond(true); // silently pretend success to the bot
}

// Basic per-IP rate limiting so a script can't hammer the mailer.
function client_ip(): string {
  return (string)($_SERVER['REMOTE_ADDR'] ?? 'unknown');
}

function rate_limited(string $ip, int $cooldownSeconds = 30): bool {
  $dir = sys_get_temp_dir() . '/arabia-support-contact-throttle';
  if (!is_dir($dir) && !@mkdir($dir, 0700, true) && !is_dir($dir)) {
    return false; // can't track it, fail open rather than blocking real users
  }
  $file = $dir . '/' . hash('sha256', $ip) . '.txt';
  $last = @file_get_contents($file);
  $now  = time();
  if ($last !== false && $now - (int)$last < $cooldownSeconds) {
    return true;
  }
  @file_put_contents($file, (string)$now);
  return false;
}

if (rate_limited(client_ip())) {
  http_response_code(429);
  respond(false, $lang === 'ar' ? 'برجاء الانتظار قليلاً قبل إرسال طلب آخر.' : 'Please wait a moment before sending another request.');
}

function clean_line(string $value, int $maxLength = 200): string {
  $value = trim($value);
  $value = preg_replace('/[\r\n]+/', ' ', $value);
  return mb_substr($value, 0, $maxLength);
}

$lang     = ($_POST['lang'] ?? 'ar') === 'en' ? 'en' : 'ar';
$name     = clean_line((string)($_POST['name'] ?? ''), 100);
$phone    = clean_line((string)($_POST['phone'] ?? ''), 30);
$email    = clean_line((string)($_POST['email'] ?? ''), 150);
$equipment= clean_line((string)($_POST['equipment'] ?? ''), 50);
$message  = mb_substr(trim((string)($_POST['message'] ?? '')), 0, 3000);

if ($name === '' || $phone === '') {
  http_response_code(422);
  respond(false, $lang === 'ar' ? 'من فضلك أدخل الاسم ورقم التليفون.' : 'Please enter your name and phone number.');
}

if (!preg_match('/^[+0-9\s()\-\/]{6,25}$/', $phone)) {
  http_response_code(422);
  respond(false, $lang === 'ar' ? 'صيغة رقم التليفون غير صحيحة.' : 'Please enter a valid phone number.');
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(422);
  respond(false, $lang === 'ar' ? 'صيغة البريد الإلكتروني غير صحيحة.' : 'Please enter a valid email address.');
}

// Spam heuristic: legitimate quote requests don't carry multiple links.
$linkCount = preg_match_all('/https?:\/\/|www\./i', $name . ' ' . $message);
if ($linkCount >= 2) {
  respond(true); // silently pretend success to the bot
}

$equipmentLabels = [
  'cranes'        => 'Cranes / الأوناش',
  'boom-lifts'    => 'Boom Lifts & Telehandlers / بوم ليفت وتلي هاندلر',
  'scissor-lifts' => 'Scissor Lifts / سيزر ليفت',
  'tools'         => 'Tools & General Equipment / أدوات ومعدات عامة',
  'other'         => 'Other / أخرى',
];

$subject = ($lang === 'ar' ? 'طلب عرض سعر جديد من الموقع' : 'New quote request from the website');

$bodyLines = [
  'Name / الاسم: ' . $name,
  'Phone / التليفون: ' . $phone,
  'Email / البريد الإلكتروني: ' . ($email !== '' ? $email : '-'),
  'Equipment / المعدة المطلوبة: ' . ($equipmentLabels[$equipment] ?? '-'),
  'Language / اللغة: ' . strtoupper($lang),
  '',
  'Message / تفاصيل الطلب:',
  $message !== '' ? $message : '-',
];
$body = implode("\n", $bodyLines);

$headers   = [];
$headers[] = 'From: ' . $SITE['name_en'] . ' Website <no-reply@' . preg_replace('/^www\./', '', $SITE['domain']) . '>';
if ($email !== '') {
  $headers[] = 'Reply-To: ' . $email;
}
$headers[] = 'Content-Type: text/plain; charset=UTF-8';
$headers[] = 'X-Mailer: PHP/' . phpversion();

$sent = @mail($SITE['email'], '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\r\n", $headers));

if (!$sent) {
  http_response_code(500);
  respond(false, $lang === 'ar'
    ? 'تعذر إرسال الطلب حاليًا، برجاء التواصل عبر التليفون: ' . $SITE['phone']
    : 'Could not send your request right now, please call us at: ' . $SITE['phone']);
}

respond(true, $lang === 'ar' ? 'تم استلام طلبكم بنجاح.' : 'Your request has been received.');
