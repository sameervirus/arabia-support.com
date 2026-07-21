<?php
$lang    = 'ar';
$pageKey = 'home';
$title   = 'العربية لتأجير وصيانة العدد والمعدات | تأجير أوناش وبوم ليفت وسيزر ليفت في مصر';
$description = 'العربية لتأجير وصيانة العدد والمعدات: تأجير أوناش (كرينات) بجميع الأنواع، بوم ليفت، تلي هاندلر، سيزر ليفت، سقالات ومعدات تركيب لمشاريع الإنشاءات والصناعة في مصر. اطلب عرض سعر الآن.';
require_once __DIR__ . '/partials/config.php';
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'LocalBusiness',
  'name' => $SITE['name_ar'],
  'image' => $SITE['base_url'] . '/assets/img/og-cover.jpg',
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

<section class="hero">
  <div class="container hero-grid">
    <div>
      <span class="badge">تأجير معدات الرفع والتركيب في مصر</span>
      <h1>نجهّز مشروعك بأنسب <em>معدة رفع</em> في الوقت المناسب</h1>
      <p class="hero-lead">
        العربية لتأجير وصيانة العدد والمعدات توفر لكم أوناش بجميع الأنواع، بوم ليفت وتلي هاندلر، سيزر ليفت،
        وأدوات ومعدات عامة للتركيبات المعدنية ومحطات الطاقة والصناعة، مع فريق فني جاهز لدعم مشروعكم
        من أول يوم حتى التسليم.
      </p>
      <div class="hero-actions">
        <a href="/contact.php" class="btn btn-primary">اطلب عرض سعر الآن</a>
        <a href="/equipment/index.php" class="btn btn-outline">تصفح المعدات</a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat"><strong data-count="10" data-suffix="+">0</strong><span>فئات معدات متنوعة</span></div>
        <div class="hero-stat"><strong data-count="24" data-suffix="/7">0</strong><span>دعم فني وطوارئ</span></div>
        <div class="hero-stat"><strong data-count="100" data-suffix="%">0</strong><span>التزام بمعايير السلامة</span>
        </div>
      </div>
    </div>
    <div class="hero-visual">
      <img src="/assets/img/hero.jpg" alt="hero image" width="513" height="513" fetchpriority="high">
      <div class="hero-badge-float">
        <span class="dot">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20 6 9 17l-5-5" />
          </svg>
        </span>
        <span>
          <strong>معدات مفحوصة دوريًا</strong>
          <span>جاهزة للتشغيل الفوري</span>
        </span>
      </div>
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
      <span class="eyebrow">مجالات عملنا</span>
      <h2 class="section-title">أسطول معدات يغطي احتياجات مشروعك بالكامل</h2>
      <p class="section-sub">من رفع المعدات الثقيلة إلى التركيبات على الارتفاعات، وحتى الأدوات والمعدات المساندة في
        الموقع.</p>
    </div>
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
        <p>أوناش All Terrain وRough Terrain وTruck Cranes بقدرات رفع من 30 إلى 80 طن لمختلف بيئات العمل.</p>
        <a href="/equipment/cranes.php" class="eq-more">التفاصيل
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
        <p>بوم ليفت تليسكوبي ومفصلي بارتفاعات حتى 40 متر، وتلي هاندلر بقدرة تحميل حتى 4 طن.</p>
        <a href="/equipment/boom-lifts-telehandlers.php" class="eq-more">التفاصيل
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
        <p>منصات رفع سيزر ليفت للأعمال الداخلية والخارجية بارتفاعات تصل إلى 18 متر وسعات حمل متنوعة.</p>
        <a href="/equipment/scissor-lifts.php" class="eq-more">التفاصيل
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
        <p>مولدات كهربائية، كمبروسورات، ماكينات لحام ومعالجة حرارية، سقالات ومعدات مساحة ورفع.</p>
        <a href="/equipment/tools-general-equipment.php" class="eq-more">التفاصيل
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 12h14M13 6l6 6-6 6" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container split">
    <div data-reveal>
      <span class="eyebrow">من نحن</span>
      <h2 class="section-title">شريككم في تأجير معدات الرفع والتركيب</h2>
      <p class="section-sub">
        نعمل مع مقاولي الإنشاءات والمنشآت الصناعية لتوفير معدات رفع وتركيب جاهزة للتشغيل، مدعومة
        بفريق فني يتابع الصيانة الدورية والفحص المستمر لكل معدة قبل خروجها للموقع.
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
          تسليم وتركيب في الموقع بجدول زمني يناسب مشروعك
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
    <div class="stat"><strong data-count="10" data-suffix="+">0</strong><span>فئات معدات</span></div>
    <div class="stat"><strong data-count="80" data-suffix=" طن">0</strong><span>أقصى قدرة رفع للأوناش</span></div>
    <div class="stat"><strong data-count="40" data-suffix="م">0</strong><span>أقصى ارتفاع للبوم ليفت</span></div>
    <div class="stat"><strong data-count="24" data-suffix="/7">0</strong><span>جاهزية الدعم الفني</span></div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">آلية العمل</span>
      <h2 class="section-title">من الطلب إلى التسليم في 4 خطوات</h2>
    </div>
    <div class="steps" data-reveal>
      <div class="step">
        <span class="step-num">1</span>
        <h4>التواصل وتحديد الاحتياج</h4>
        <p>تخبرنا بنوع المعدة والمدة ومكان المشروع.</p>
      </div>
      <div class="step">
        <span class="step-num">2</span>
        <h4>عرض السعر والمعاينة</h4>
        <p>نرسل عرض سعر مفصل، ومعاينة للموقع عند الحاجة.</p>
      </div>
      <div class="step">
        <span class="step-num">3</span>
        <h4>التوريد والتركيب</h4>
        <p>نوصل المعدة وفريق التشغيل في الموعد المتفق عليه.</p>
      </div>
      <div class="step">
        <span class="step-num">4</span>
        <h4>متابعة ودعم فني</h4>
        <p>متابعة دورية وصيانة طوال فترة الإيجار.</p>
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
    <div class="cards-grid cols-2" data-reveal>
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
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band" data-reveal>
      <div>
        <h3>محتاج معدة رفع أو تركيب لمشروعك؟</h3>
        <p>تواصل معنا الآن واحصل على عرض سعر مخصص خلال ساعات العمل.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/contact.php" class="btn btn-primary">اطلب عرض سعر</a>
        <a href="tel:<?= $SITE['phone_intl'] ?>" class="btn btn-outline"><?= $SITE['phone'] ?></a>
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
        <summary>ما هي مناطق التغطية؟</summary>
        <p>نخدم مشاريع الإنشاءات والصناعة في مختلف مناطق مصر، تواصل معنا لتأكيد التغطية في موقع مشروعك.</p>
      </details>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>