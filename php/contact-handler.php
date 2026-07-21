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

function clean_line(string $value): string {
  $value = trim($value);
  return preg_replace('/[\r\n]+/', ' ', $value);
}

$lang     = ($_POST['lang'] ?? 'ar') === 'en' ? 'en' : 'ar';
$name     = clean_line((string)($_POST['name'] ?? ''));
$phone    = clean_line((string)($_POST['phone'] ?? ''));
$email    = clean_line((string)($_POST['email'] ?? ''));
$equipment= clean_line((string)($_POST['equipment'] ?? ''));
$message  = trim((string)($_POST['message'] ?? ''));

if ($name === '' || $phone === '') {
  http_response_code(422);
  respond(false, $lang === 'ar' ? 'من فضلك أدخل الاسم ورقم التليفون.' : 'Please enter your name and phone number.');
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(422);
  respond(false, $lang === 'ar' ? 'صيغة البريد الإلكتروني غير صحيحة.' : 'Please enter a valid email address.');
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
