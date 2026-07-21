<?php
$lang    = 'ar';
$pageKey = 'equipment';
$title   = 'المعدات | تأجير أوناش وبوم ليفت وسيزر ليفت وأدوات - العربية';
$description = 'تصفح أقسام المعدات المتاحة للتأجير: الأوناش (الكرينات)، بوم ليفت وتلي هاندلر، سيزر ليفت، وأدوات ومعدات عامة للتركيبات الصناعية والإنشائية.';
require_once __DIR__ . '/../partials/config.php';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="/index.php">الرئيسية</a> / <span>المعدات</span></div>
    <h1>معداتنا للتأجير</h1>
    <p>مجموعة متكاملة من معدات الرفع والتركيب والأدوات المساندة، جاهزة للتوريد إلى موقع مشروعك.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cards-grid" data-reveal>

      <div class="eq-card">
        <span class="eq-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 21h6" />
            <path d="M6 21V9l9-5v13" />
            <path d="M15 8h5l1 4h-6" />
            <circle cx="18" cy="18" r="3" />
          </svg>
        </span>
        <h3>الأوناش (الكرينات)</h3>
        <p>All Terrain، Rough Terrain، وTruck Cranes بقدرات رفع من 30 إلى 80 طن.</p>
        <a href="/equipment/cranes.php" class="eq-more">عرض التفاصيل
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 12h14M13 6l6 6-6 6" />
          </svg>
        </a>
      </div>

      <div class="eq-card">
        <span class="eq-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 20h6" />
            <path d="M7 20V9" />
            <path d="M7 9 20 4" />
            <circle cx="20" cy="4" r="1.6" />
          </svg>
        </span>
        <h3>بوم ليفت وتلي هاندلر</h3>
        <p>بوم ليفت تليسكوبي ومفصلي حتى 40 متر، وتلي هاندلر بقدرة تحميل حتى 4 طن.</p>
        <a href="/equipment/boom-lifts-telehandlers.php" class="eq-more">عرض التفاصيل
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 12h14M13 6l6 6-6 6" />
          </svg>
        </a>
      </div>

      <div class="eq-card">
        <span class="eq-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 20h16" />
            <path d="M6 20v-5l4-3v8" />
            <path d="M14 20v-8l4-3v11" />
          </svg>
        </span>
        <h3>سيزر ليفت (Scissor Lifts)</h3>
        <p>منصات رفع للأعمال الداخلية والخارجية بارتفاعات تصل إلى 18 متر.</p>
        <a href="/equipment/scissor-lifts.php" class="eq-more">عرض التفاصيل
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 12h14M13 6l6 6-6 6" />
          </svg>
        </a>
      </div>

      <div class="eq-card">
        <span class="eq-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path
              d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
          </svg>
        </span>
        <h3>أدوات ومعدات عامة</h3>
        <p>مولدات، كمبروسورات، ماكينات لحام ومعالجة حرارية، سقالات، معدات مساحة ورفع.</p>
        <a href="/equipment/tools-general-equipment.php" class="eq-more">عرض التفاصيل
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 12h14M13 6l6 6-6 6" />
          </svg>
        </a>
      </div>

    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container">
    <div class="cta-band" data-reveal>
      <div>
        <h3>مش متأكد أي معدة تناسب مشروعك؟</h3>
        <p>ابعتلنا تفاصيل الموقع ونوع الشغل وهنساعدك تختار المعدة المناسبة بأفضل سعر.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/contact.php" class="btn btn-primary">استشر فريقنا</a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>