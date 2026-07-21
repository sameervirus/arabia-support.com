<?php
/**
 * Expects before include: $lang, $pageKey, $title, $description
 * Optional: $ogType (default 'website')
 */
require_once __DIR__ . '/config.php';

$dir       = $lang === 'ar' ? 'rtl' : 'ltr';
$canonical = $SITE['base_url'] . ph_url($pageKey, $lang);
$urlAr     = $SITE['base_url'] . ph_url($pageKey, 'ar');
$urlEn     = $SITE['base_url'] . ph_url($pageKey, 'en');
$ogType    = $ogType ?? 'website';
?>
<!DOCTYPE html>
<html lang="<?= $lang === 'ar' ? 'ar' : 'en' ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($description) ?>">
<link rel="canonical" href="<?= $canonical ?>">
<link rel="alternate" hreflang="ar" href="<?= $urlAr ?>">
<link rel="alternate" hreflang="en" href="<?= $urlEn ?>">
<link rel="alternate" hreflang="x-default" href="<?= $urlAr ?>">

<meta property="og:type" content="<?= $ogType ?>">
<meta property="og:title" content="<?= htmlspecialchars($title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($description) ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="<?= $SITE['base_url'] ?>/assets/img/og-cover.jpg">
<meta property="og:locale" content="<?= $lang === 'ar' ? 'ar_EG' : 'en_US' ?>">
<meta property="og:site_name" content="<?= htmlspecialchars($SITE[$lang === 'ar' ? 'name_ar' : 'name_en']) ?>">
<meta name="twitter:card" content="summary_large_image">

<link rel="icon" href="/assets/img/favicon.ico" sizes="any">
<link rel="icon" href="/assets/img/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
<?php if (!empty($preloadImage)): ?>
<link rel="preload" as="image" href="<?= $preloadImage ?>" fetchpriority="high">
<?php endif; ?>

<?php if (!empty($schema)): ?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
<?php endif; ?>
</head>
<body>
<!-- html/body stay dir="ltr" (the default) on purpose: with dir="rtl" on <html>,
     Chrome can mis-anchor horizontal clipping on responsive flex layouts even
     with overflow-x:hidden set, cutting content off-screen. Scoping dir="rtl"
     to this inner wrapper keeps the RTL visual layout without that bug. -->
<div class="page-shell" dir="<?= $dir ?>">
