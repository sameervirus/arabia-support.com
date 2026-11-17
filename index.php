<?php
// English is the default language: a visit to the bare domain ("/") goes to the English home page.
// The Arabic home stays reachable at /index.php (the AR language switch links there directly).
if (parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) === '/') {
  header('Location: /en/index.php', true, 302);
  exit;
}
$lang    = 'ar';
$pageKey = 'home';
$title   = 'العربية لتأجير وصيانة العدد والمعدات | تأجير المعدات والصيانة الصناعية واللحام في مصر';
$description = 'العربية لتأجير وصيانة العدد والمعدات: تأجير أوناش وبوم ليفت وتلي هاندلر وسيزر ليفت ومعدات عامة في مصر، إلى جانب الصيانة الصناعية وإصلاح الأعطال باللحام وتقسية الطواحين وألواح مقاومة التآكل وطلاءات الحماية لمصانع الأسمنت والصناعات الثقيلة.';
require_once __DIR__ . '/partials/config.php';
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'LocalBusiness',
  'name' => $SITE['name_ar'],
  'image' => $SITE['base_url'] . '/assets/img/og-share-en.jpg',
  'url' => $SITE['base_url'] . '/index.php',
  'telephone' => $SITE['phone_intl'],
  'email' => $SITE['email'],
  'address' => [
    '@type' => 'PostalAddress',
    'streetAddress' => $SITE['address_ar'],
    'addressCountry' => 'EG',
  ],
  'priceRange' => '$$',
];
$preloadImage = '/assets/img/hero.jpg';
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>

<section class="dual-hero">
  <div class="container">
    <div class="dual-hero-head">
      <span class="badge">تخصصان · شريك واحد موثوق في مصر</span>
      <h1><em>تأجير المعدات</em> و<em class="svc">الصيانة الصناعية</em> لمشاريع الإنشاءات والصناعات الثقيلة</h1>
      <p>معدات رفع جاهزة لموقعكم، وخبراء لحام وميتالورجي جاهزون لمصنعكم.</p>
    </div>

    <div class="dual-grid">
      <article class="dual-panel">
        <img src="/assets/img/hero.jpg" alt="ونش ومعدات رفع في موقع مشروع" width="513" height="513" fetchpriority="high">
        <span class="dual-tag">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h6" /><path d="M6 21V9l9-5v13" /><path d="M15 8h5l1 4h-6" /></svg>
          تأجير المعدات
        </span>
        <h2>معدة الرفع المناسبة في الوقت المناسب</h2>
        <p>أوناش بجميع الأنواع، بوم ليفت وتلي هاندلر، سيزر ليفت، وأدوات ومعدات عامة للتركيبات المعدنية ومحطات الطاقة
          والصناعة، مع فريق فني من أول يوم حتى التسليم.</p>
        <div class="dual-points">
          <span>أوناش 30–80 طن</span><span>بوم ليفت حتى 40 م</span><span>سيزر ليفت حتى 18 م</span><span>دعم 24/7</span>
        </div>
        <div class="hero-actions">
          <a href="/equipment/index.php" class="btn btn-primary">تصفح المعدات</a>
          <a href="/contact.php?service=cranes" class="btn btn-outline">اطلب عرض سعر إيجار</a>
        </div>
      </article>

      <article class="dual-panel is-svc">
        <img src="/assets/img/services/coating-1.jpg" alt="فني لحام يعمل داخل غلاية صناعية" width="1000" height="893">
        <span class="dual-tag">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" /></svg>
          الصيانة واللحام
        </span>
        <h2>حلول اللحام والميتالورجي للصناعات الثقيلة</h2>
        <p>إصلاح الشروخ والكسور، تقسية الطواحين والكسارات في الموقع، ألواح مقاومة للتآكل بتصنيع محلي، طلاءات الحماية،
          والتصنيع المعدني وفق ASME.</p>
        <div class="dual-points">
          <span>+250 عملية تقسية طواحين</span><span>+10 سنوات خبرة</span><span>ألواح CCO محلية</span><span>طلاء بالرش القوسي</span>
        </div>
        <div class="hero-actions">
          <a href="/services/index.php" class="btn btn-svc">استكشف الخدمات</a>
          <a href="/contact.php?service=svc-repair" class="btn btn-outline">اطلب زيارة فنية</a>
        </div>
      </article>
    </div>
  </div>
</section>

<div class="trust-strip">
  <div class="container">
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M12 2 3 6v6c0 5 4 9 9 10 5-1 9-5 9-10V6l-9-4z" />
      </svg>
      معايير السلامة المهنية
    </div>
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <rect x="1" y="6" width="15" height="12" rx="2" />
        <path d="M16 10h4l3 4v4h-7" />
        <circle cx="6" cy="20" r="2" />
        <circle cx="19" cy="20" r="2" />
      </svg>
      نقل وتركيب في الموقع
    </div>
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="12" cy="12" r="9" />
        <path d="M12 7v5l3 3" />
      </svg>
      استجابة سريعة على مدار الساعة
    </div>
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
        <circle cx="9" cy="7" r="4" />
        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
      </svg>
      فريق فني متخصص
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">ماذا نقدم</span>
      <h2 class="section-title">نشاطان رئيسيان بمعيار جودة واحد</h2>
      <p class="section-sub" style="margin-inline:auto">استأجر المعدات التي يحتاجها مشروعك، وحافظ على تشغيل المكونات
        الحرجة في مصنعك مع فريق الصيانة واللحام لدينا.</p>
    </div>
    <div class="offer-split" data-reveal>

      <div class="offer-col">
        <div class="offer-col-head">
          <span class="eyebrow">تأجير المعدات</span>
          <h3>أسطول يغطي احتياجات مشروعك بالكامل</h3>
        </div>
        <div class="cards-grid cols-2">
          <div class="eq-card">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h6" /><path d="M6 21V9l9-5v13" /><path d="M15 8h5l1 4h-6" /><circle cx="18" cy="18" r="3" /></svg></span>
            <h3>الأوناش (الكرينات)</h3>
            <p>أوناش All Terrain و Rough Terrain و Truck Crane من 30 إلى 80 طن.</p>
            <a href="/equipment/cranes.php" class="eq-more">اعرف المزيد<span class="sr-only"> عن الأوناش (الكرينات)</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 20h6" /><path d="M7 20V9" /><path d="M7 9 20 4" /><circle cx="20" cy="4" r="1.6" /></svg></span>
            <h3>بوم ليفت وتلي هاندلر</h3>
            <p>بوم ليفت حتى 40 متر وتلي هاندلر بحمولة حتى 4 طن.</p>
            <a href="/equipment/boom-lifts-telehandlers.php" class="eq-more">اعرف المزيد<span class="sr-only"> عن بوم ليفت وتلي هاندلر</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 20h16" /><path d="M6 20v-5l4-3v8" /><path d="M14 20v-8l4-3v11" /></svg></span>
            <h3>سيزر ليفت</h3>
            <p>منصات رفع داخلية وخارجية بارتفاعات حتى 18 متر.</p>
            <a href="/equipment/scissor-lifts.php" class="eq-more">اعرف المزيد<span class="sr-only"> عن سيزر ليفت</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.9 4.9l2.8 2.8M16.3 16.3l2.8 2.8M2 12h4M18 12h4" /><circle cx="12" cy="12" r="3" /></svg></span>
            <h3>أدوات ومعدات عامة</h3>
            <p>مولدات، كمبروسرات، ماكينات لحام، سقالات، ومعدات رفع وتعليق.</p>
            <a href="/equipment/tools-general-equipment.php" class="eq-more">اعرف المزيد<span class="sr-only"> عن أدوات ومعدات عامة</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
        </div>
        <a href="/equipment/index.php" class="btn btn-dark">كل معدات التأجير</a>
      </div>

      <div class="offer-col svc">
        <div class="offer-col-head">
          <span class="eyebrow svc">الصيانة واللحام</span>
          <h3>نحافظ على استمرار تشغيل الصناعات الثقيلة</h3>
        </div>
        <div class="cards-grid cols-2">
          <div class="eq-card svc">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" /></svg></span>
            <h3>إصلاح الأعطال</h3>
            <p>الشروخ والكسور والتقشر، بما فيها السبائك صعبة اللحام.</p>
            <a href="/services/index.php#repair" class="eq-more">اعرف المزيد<span class="sr-only"> عن إصلاح الأعطال</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card svc">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9" /><circle cx="12" cy="12" r="4" /></svg></span>
            <h3>تقسية الطواحين والكسارات</h3>
            <p>تقسية أوتوماتيكية في الموقع لبكرات وأطباق ومقاطع الطواحين الرأسية.</p>
            <a href="/services/index.php#hardfacing" class="eq-more">اعرف المزيد<span class="sr-only"> عن تقسية الطواحين والكسارات</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card svc">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="1" /><path d="M7 5v14M11 5v14M15 5v14M19 5v14" /></svg></span>
            <h3>ألواح مقاومة للتآكل</h3>
            <p>ألواح وبطانات CCO و D-Plate™ بتصنيع محلي.</p>
            <a href="/services/index.php#wear-plates" class="eq-more">اعرف المزيد<span class="sr-only"> عن ألواح مقاومة للتآكل</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card svc">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 3 6v6c0 5 4 9 9 10 5-1 9-5 9-10V6l-9-4z" /></svg></span>
            <h3>الطلاءات والتصنيع</h3>
            <p>طلاءات حماية بالرش القوسي وتصنيع معدني وفق ASME.</p>
            <a href="/services/index.php#coating" class="eq-more">اعرف المزيد<span class="sr-only"> عن الطلاءات والتصنيع</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
        </div>
        <a href="/services/index.php" class="btn btn-svc">كل خدمات الصيانة</a>
      </div>

    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container split">
    <div data-reveal>
      <span class="eyebrow">من نحن</span>
      <h2 class="section-title">شريككم في تأجير المعدات والصيانة الصناعية</h2>
      <p class="section-sub">
        نعمل مع مقاولي الإنشاءات والمنشآت الصناعية في مجالين: توفير معدات رفع وتركيب جاهزة للتشغيل،
        وفريق متخصص في الصيانة واللحام يصلح ويقسّي ويحمي المكونات الحرجة التي تعتمد عليها الصناعات الثقيلة.
      </p>
      <ul class="check-list" style="margin-top:26px">
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor">
            <path d="M20 6 9 17l-5-5" />
          </svg>
          فحص وصيانة دورية لكل معدة قبل التوريد
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor">
            <path d="M20 6 9 17l-5-5" />
          </svg>
          فريق تشغيل وصيانة مدرّب على معايير السلامة
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor">
            <path d="M20 6 9 17l-5-5" />
          </svg>
          خبراء لحام وميتالورجي للإصلاحات والتقسية في الموقع
        </li>
      </ul>
      <a href="/about.php" class="btn btn-dark" style="margin-top:10px">تعرف علينا أكثر</a>
    </div>
    <div class="img-placeholder ratio-4-3" data-reveal>
      <div class="ph-inner">
        <img src="/assets/img/team.jpg" alt="فريق العمل" width="640" height="480" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="stats-band">
  <div class="container">
    <div class="stat"><strong data-count="80" data-suffix=" طن">0</strong><span>أقصى قدرة رفع للأوناش</span></div>
    <div class="stat"><strong data-count="40" data-suffix="م">0</strong><span>أقصى ارتفاع للبوم ليفت</span></div>
    <div class="stat svc"><strong data-count="250" data-suffix="+">0</strong><span>عملية تقسية طواحين رأسية</span></div>
    <div class="stat svc"><strong data-count="10" data-suffix="+">0</strong><span>سنوات في تقسية الطواحين</span></div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">آلية العمل</span>
      <h2 class="section-title">من الطلب إلى التنفيذ في 4 خطوات</h2>
    </div>
    <div class="steps" data-reveal>
      <div class="step">
        <span class="step-num">1</span>
        <h3>التواصل وتحديد الاحتياج</h3>
        <p>تخبرنا بالمعدة المطلوبة، أو بالمكون والمشكلة التي تواجهها.</p>
      </div>
      <div class="step">
        <span class="step-num">2</span>
        <h3>المعاينة وعرض السعر</h3>
        <p>نعاين الموقع أو القطعة ونرسل عرضًا فنيًا وماليًا مفصلًا.</p>
      </div>
      <div class="step">
        <span class="step-num">3</span>
        <h3>التوريد أو التنفيذ</h3>
        <p>نورّد المعدة، أو ننفذ الإصلاح في الموقع أو في ورشتنا، في الموعد المتفق عليه.</p>
      </div>
      <div class="step">
        <span class="step-num">4</span>
        <h3>متابعة ودعم فني</h3>
        <p>متابعة دورية طوال فترة الإيجار وبعد كل عملية إصلاح.</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">القطاعات التي نخدمها</span>
      <h2 class="section-title">نعمل مع مختلف قطاعات الإنشاءات والصناعة</h2>
    </div>
    <div class="cards-grid cols-3" data-reveal>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 21h18" />
            <path d="M5 21V7l7-4 7 4v14" />
            <path d="M9 21v-6h6v6" />
          </svg></span>
        <h3>الإنشاءات والمقاولات</h3>
        <p>دعم مواقع البناء والتركيبات المعدنية والهياكل الإنشائية بمعدات الرفع المناسبة.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M13 2 3 14h7l-1 8 10-12h-7z" />
          </svg></span>
        <h3>الطاقة والمحطات الكهربائية</h3>
        <p>معدات رفع وتركيب لمحطات الطاقة والمحولات والخزانات الصناعية.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="3" />
            <path
              d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1" />
          </svg></span>
        <h3>البترول والبتروكيماويات</h3>
        <p>معدات مطابقة لمتطلبات السلامة الصارمة في مواقع الصناعات البترولية.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 7h18v13H3z" />
            <path d="M8 7V4h8v3" />
          </svg></span>
        <h3>التصنيع والمنشآت الصناعية</h3>
        <p>حلول رفع وتركيب مرنة لخطوط الإنتاج والمصانع والمخازن.</p>
      </div>
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18" /><path d="M5 21V8l5 3V8l5 3V5h4v16" /></svg></span>
        <h3>الأسمنت والتعدين</h3>
        <p>إصلاح وتقسية الطواحين والكسارات والأفران وقطع التآكل.</p>
      </div>
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 3h6" /><path d="M10 3v6L4 19a2 2 0 0 0 1.7 3h12.6a2 2 0 0 0 1.7-3L14 9V3" /></svg></span>
        <h3>الأسمدة والكيماويات</h3>
        <p>طلاءات حماية وألواح مقاومة للتآكل وصيانة لمعدات التشغيل.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band" data-reveal>
      <div>
        <h3>محتاج معدة لمشروعك أو إصلاح لمصنعك؟</h3>
        <p>تواصل معنا الآن واحصل على عرض سعر مخصص خلال ساعات العمل.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/contact.php?service=cranes" class="btn btn-primary">عرض سعر إيجار</a>
        <a href="tel:<?= $SITE['phone_intl'] ?>" class="btn btn-outline">التأجير: <span dir="ltr"><?= $SITE['phone'] ?></span></a>
        <a href="/contact.php?service=svc-repair" class="btn btn-svc">طلب صيانة</a>
        <a href="tel:<?= $SITE['phone_svc_intl'] ?>" class="btn btn-outline">الصيانة: <span dir="ltr"><?= $SITE['phone_svc'] ?></span></a>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container" style="max-width:820px">
    <div class="section-head center">
      <span class="eyebrow">أسئلة شائعة</span>
      <h2 class="section-title">إجابات على أكثر الأسئلة تكرارًا</h2>
    </div>
    <div data-reveal>
      <details class="faq-item" open>
        <summary>هل توفرون فريق تشغيل مع المعدة؟</summary>
        <p>نعم، نوفر مشغلين وفنيين مدربين مع معظم المعدات لضمان التشغيل الآمن والفعّال في الموقع.</p>
      </details>
      <details class="faq-item">
        <summary>هل التأجير متاح لفترات قصيرة وطويلة؟</summary>
        <p>نعم، نوفر باقات تأجير يومية وأسبوعية وشهرية حسب طبيعة مشروعك ومدته.</p>
      </details>
      <details class="faq-item">
        <summary>هل يمكن معاينة الموقع قبل تحديد المعدة المناسبة؟</summary>
        <p>بالتأكيد، فريقنا الفني يمكنه معاينة الموقع لتحديد نوع وقدرة المعدة الأنسب لطبيعة العمل.</p>
      </details>
      <details class="faq-item">
        <summary>هل تنفذون الإصلاحات والتقسية داخل مصنعنا؟</summary>
        <p>نعم، ينفذ فريقنا الإصلاحات والتقسية الأوتوماتيكية للطواحين والكسارات في الموقع، إلى جانب الإصلاحات والتصنيع
          في ورشتنا، سواء في حالات الطوارئ أو التوقفات المخططة.</p>
      </details>
      <details class="faq-item">
        <summary>هل تصنعون ألواح مقاومة التآكل محليًا؟</summary>
        <p>نعم، من خلال شراكتنا مع BCC ننتج ألواح كربيد الكروم (CCO) وألواح D-Plate™ في مصنعنا داخل مصر.</p>
      </details>
      <details class="faq-item">
        <summary>ما هي مناطق التغطية؟</summary>
        <p>نخدم مشاريع الإنشاءات والصناعة في مختلف مناطق مصر، تواصل معنا لتأكيد التغطية في موقع مشروعك.</p>
      </details>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>