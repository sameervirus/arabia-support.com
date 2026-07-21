<?php

/** Expects: $lang, $pageKey (for active nav state) */
$isAr = $lang === 'ar';
$otherLang = $isAr ? 'en' : 'ar';
$switchUrl = $SITE['base_url'] . ph_url($pageKey, $otherLang);
?>
<div class="topbar">
  <div class="container">
    <div class="topbar-links">
      <a href="tel:<?= $SITE['phone_intl'] ?>">
        <svg class="icon-sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path
            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
        </svg>
        <?= $SITE['phone'] ?>
      </a>
      <a href="mailto:<?= $SITE['email'] ?>">
        <svg class="icon-sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M4 4h16v16H4z" stroke="none" />
          <path d="M22 6 12 13 2 6" />
          <rect x="2" y="4" width="20" height="16" rx="2" />
        </svg>
        <?= $SITE['email'] ?>
      </a>
      <span>
        <svg class="icon-sm" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z" />
          <circle cx="12" cy="10" r="3" />
        </svg>
        <?= $isAr ? $SITE['address_ar'] : $SITE['address_en'] ?>
      </span>
    </div>
    <div class="topbar-lang">
      <a href="<?= $isAr ? ph_url($pageKey, 'ar') : $switchUrl ?>" class="<?= $isAr ? 'is-active' : '' ?>"
        hreflang="ar">AR</a>
      <a href="<?= $isAr ? $switchUrl : ph_url($pageKey, 'en') ?>" class="<?= !$isAr ? 'is-active' : '' ?>"
        hreflang="en">EN</a>
    </div>
  </div>
</div>

<header class="site-header">
  <div class="container">
    <a href="<?= ph_url('home', $lang) ?>" class="brand">
      <span class="brand-mark">
        <img src="/assets/img/logo.png" alt="" width="816" height="384">
      </span>
      <span class="brand-text">
        <strong><?= $isAr ? $SITE['short_ar'] : $SITE['short_en'] ?></strong>
        <span><?= $isAr ? 'لتأجير وصيانة العدد والمعدات' : 'for Renting and Maintaining Tools and Equipment.' ?></span>
      </span>
    </a>

    <nav class="main-nav">
      <?php foreach ($NAV as $item): ?>
      <a href="<?= ph_url($item['key'], $lang) ?>"
        class="<?= $pageKey === $item['key'] || ($pageKey !== 'home' && $item['key'] === 'equipment' && in_array($pageKey, ['cranes', 'boom-lifts', 'scissor-lifts', 'tools'])) ? 'is-active' : '' ?>">
        <?= $isAr ? $item['ar'] : $item['en'] ?>
      </a>
      <?php endforeach; ?>
    </nav>

    <div class="header-cta">
      <a href="tel:<?= $SITE['phone_intl'] ?>" class="btn btn-outline">
        <?= $isAr ? 'اتصل الآن' : 'Call Now' ?>
      </a>
      <a href="<?= ph_url('contact', $lang) ?>" class="btn btn-primary">
        <?= $isAr ? 'اطلب عرض سعر' : 'Get a Quote' ?>
      </a>
    </div>

    <button class="nav-toggle" aria-label="menu" data-nav-toggle>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M3 6h18M3 12h18M3 18h18" />
      </svg>
    </button>
  </div>
</header>

<div class="mobile-nav">
  <div class="mobile-nav-top">
    <span class="brand-text"><strong
        style="color:#fff"><?= $isAr ? $SITE['short_ar'] : $SITE['short_en'] ?></strong></span>
    <button class="nav-toggle mobile-nav-close" aria-label="close">
      <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
        <path d="M18 6 6 18M6 6l12 12" />
      </svg>
    </button>
  </div>
  <?php foreach ($NAV as $item): ?>
  <a href="<?= ph_url($item['key'], $lang) ?>" class="<?= $pageKey === $item['key'] ? 'is-active' : '' ?>">
    <?= $isAr ? $item['ar'] : $item['en'] ?>
  </a>
  <?php endforeach; ?>
  <a href="<?= $switchUrl ?>"><?= $isAr ? 'English Version' : 'النسخة العربية' ?></a>
  <a href="<?= ph_url('contact', $lang) ?>"
    class="btn btn-primary btn-block"><?= $isAr ? 'اطلب عرض سعر' : 'Get a Quote' ?></a>
</div>