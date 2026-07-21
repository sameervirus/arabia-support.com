<?php
$lang    = 'ar';
$pageKey = 'clients';
$title   = 'عملاؤنا وقطاعات العمل | العربية لتأجير وصيانة العدد والمعدات';
$description = 'نعمل مع مقاولي الإنشاءات والمنشآت الصناعية في قطاعات الطاقة والبترول والتصنيع، ونوفر معدات رفع وتركيب موثوقة تناسب متطلبات كل قطاع.';
require_once __DIR__ . '/partials/config.php';
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="/index.php">الرئيسية</a> / <span>عملاؤنا</span></div>
    <h1>عملاؤنا وقطاعات العمل</h1>
    <p>نفخر بالعمل مع مقاولي الإنشاءات والمنشآت الصناعية، ونضع خبرتنا في خدمة كل قطاع باحتياجاته الخاصة.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">القطاعات التي نخدمها</span>
      <h2 class="section-title">نتفهم متطلبات كل قطاع ونوفر المعدة المناسبة له</h2>
    </div>
    <div class="cards-grid cols-2" data-reveal>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 21h18" />
            <path d="M5 21V7l7-4 7 4v14" />
            <path d="M9 21v-6h6v6" />
          </svg></span>
        <h3>الإنشاءات والمقاولات</h3>
        <p>معدات رفع وتركيب لمواقع البناء والهياكل المعدنية والتركيبات الإنشائية بمختلف أحجامها.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M13 2 3 14h7l-1 8 10-12h-7z" />
          </svg></span>
        <h3>الطاقة والمحطات الكهربائية</h3>
        <p>حلول رفع للمحولات والخزانات الصناعية ومكونات محطات الطاقة.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="3" />
            <path
              d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1" />
          </svg></span>
        <h3>البترول والبتروكيماويات</h3>
        <p>معدات تراعي متطلبات السلامة الصارمة في مواقع الصناعات البترولية والكيميائية.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 7h18v13H3z" />
            <path d="M8 7V4h8v3" />
          </svg></span>
        <h3>التصنيع والمنشآت الصناعية</h3>
        <p>معدات مرنة لخطوط الإنتاج والمصانع والمخازن ومناطق التحميل والتفريغ.</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">شركاء نجاحنا</span>
      <h2 class="section-title">شعارات عملائنا</h2>
      <p class="section-sub">هذا القسم مخصص لعرض شعارات عملائكم الفعليين — أضيفوا شعارات شركاتكم الشريكة هنا لتعزيز
        الثقة لدى الزوار.</p>
    </div>
    <div class="logo-grid" data-reveal>
      <div class="logo-slot"><img src="/assets/img/clients/CCC.gif" /></div>
      <div class="logo-slot"><img src="/assets/img/clients/construction_logo.jpg" /></div>
      <div class="logo-slot"><img src="/assets/img/clients/Petrojet.png" /></div>
      <div class="logo-slot"><img src="/assets/img/clients/ASF.jpg" /></div>
      <div class="logo-slot"><img src="/assets/img/clients/Knauf Limited and Partner.png" /></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band" data-reveal>
      <div>
        <h3>عايز تبقى من عملائنا؟</h3>
        <p>تواصل معنا وخلينا نناقش احتياجات مشروعك من معدات الرفع والتركيب.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/contact.php" class="btn btn-primary">تواصل معنا</a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>