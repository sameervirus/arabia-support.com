<?php
$lang    = 'ar';
$pageKey = 'services';
$title   = 'خدمات الصيانة الصناعية واللحام والتقسية | العربية';
$description = 'خدمات العربية للصيانة الصناعية: إصلاح الشروخ والكسور، لحام السبائك الصعبة، تقسية الطواحين الرأسية والكسارات في الموقع، تصنيع محلي لألواح CCO و D-Plate المقاومة للتآكل، طلاءات الحماية بالرش القوسي، والتصنيع المعدني وفق مواصفات ASME في مصر.';
require_once __DIR__ . '/../partials/config.php';
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'Service',
  'serviceType' => 'الصيانة الصناعية واللحام والتقسية',
  'provider' => [
    '@type' => 'LocalBusiness',
    'name' => $SITE['name_ar'],
    'url' => $SITE['base_url'] . '/index.php',
    'telephone' => $SITE['phone_svc_intl'],
  ],
  'areaServed' => 'EG',
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
$check = '<svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor"><path d="M20 6 9 17l-5-5" /></svg>';
?>

<section class="page-header svc">
  <div class="container">
    <div class="breadcrumb"><a href="/index.php">الرئيسية</a> / <span>الصيانة واللحام</span></div>
    <h1>الصيانة الصناعية واللحام والتقسية</h1>
    <p>شريككم المتخصص في تطبيقات اللحام والميتالورجي. من تحليل أسباب الأعطال إلى حلول اللحام والمعالجة المعدنية
      والميكانيكية المصممة لكل حالة، نقدم إصلاحات اقتصادية تتحمل أصعب ظروف التشغيل — في موقعكم أو في ورشتنا.</p>
    <nav class="chip-nav" aria-label="الخدمات">
      <a href="#repair">إصلاح الأعطال</a>
      <a href="#alloys">السبائك صعبة اللحام</a>
      <a href="#hardfacing">تقسية الطواحين والكسارات</a>
      <a href="#wear-plates">ألواح مقاومة التآكل</a>
      <a href="#coating">طلاءات الحماية</a>
      <a href="#fabrication">التصنيع المعدني</a>
    </nav>
  </div>
</section>

<section class="section svc-block" id="repair">
  <div class="container split">
    <div data-reveal>
      <span class="eyebrow svc">صيانة طارئة ومخططة</span>
      <h2 class="section-title">إصلاح الأعطال والكسور</h2>
      <p class="section-sub">يقوم فريق الخدمة لدينا بإصلاح الشروخ والكسور والتقشر وغيرها من الأضرار الحرجة في مكونات
        الصناعات الثقيلة، سواء من خلال الاستجابة الطارئة أو ضمن الصيانة المخططة.</p>
      <p class="section-sub">من تحليل الأعطال إلى حلول اللحام والمعالجة المعدنية والميكانيكية المصممة خصيصًا، نقدم
        إصلاحات اقتصادية مبنية لتتحمل ظروف التشغيل القاسية.</p>
      <ul class="check-list">
        <li><?= $check ?> تحليل الأعطال وإجراءات إصلاح مصممة لكل حالة</li>
        <li><?= $check ?> استجابة للأعطال الطارئة وأعمال التوقفات المخططة</li>
        <li><?= $check ?> إطارات الأفران وأجسام الطواحين والبطانات والهياكل الثقيلة</li>
      </ul>
    </div>
    <div class="photo-grid" data-reveal>
      <figure class="tall"><img src="/assets/img/services/repair-mill-welder.jpg" alt="فني لحام يصلح جسم طاحونة في الموقع" width="900" height="1168" loading="lazy"></figure>
      <figure class="tall"><img src="/assets/img/services/repair-crack.jpg" alt="شرخ في أحد مكونات الفرن قبل الإصلاح" width="900" height="1303" loading="lazy"></figure>
      <figure><img src="/assets/img/services/repair-kiln-tyre.jpg" alt="إطار فرن بعد الإصلاح" width="900" height="1380" loading="lazy"></figure>
      <figure><img src="/assets/img/services/repair-liner.jpg" alt="بطانة طاحونة متضررة" width="900" height="1178" loading="lazy"></figure>
    </div>
  </div>
</section>

<section class="section svc-block bg-tint" id="alloys">
  <div class="container split">
    <div class="photo-grid" data-reveal>
      <figure><img src="/assets/img/services/alloy-shaft-buildup.jpg" alt="بناء باللحام على عمود متضرر" width="1000" height="896" loading="lazy"></figure>
      <figure><img src="/assets/img/services/alloy-shaft-machined.jpg" alt="عمود بعد التشغيل الميكانيكي عقب الإصلاح" width="1000" height="895" loading="lazy"></figure>
      <figure><img src="/assets/img/services/alloy-casting-repair.jpg" alt="إصلاح شرخ في قطعة مسبوكة" width="1000" height="893" loading="lazy"></figure>
      <figure><img src="/assets/img/services/alloy-repair-4.jpg" alt="مكون من صلب عالي السبائك بعد الإصلاح" width="1000" height="894" loading="lazy"></figure>
    </div>
    <div data-reveal>
      <span class="eyebrow svc">ميتالورجيا اللحام</span>
      <h2 class="section-title">إصلاح المكونات الحرجة من السبائك صعبة اللحام</h2>
      <p class="section-sub">نتخصص في إصلاح السبائك الصعبة مثل الحديد الزهر وصلب المنجنيز والصلب عالي السبائك. وبفضل
        تقنيات اللحام المتقدمة والتحكم الدقيق في الحرارة، نقدم إصلاحات موثوقة تقلل من التشققات والتشوهات، وتعيد
        للمكونات كفاءتها، وتطيل عمرها التشغيلي في أصعب البيئات.</p>
      <ul class="check-list">
        <li><?= $check ?> الحديد الزهر وصلب المنجنيز والصلب عالي السبائك</li>
        <li><?= $check ?> تحكم دقيق في الحرارة لتقليل التشققات والتشوهات</li>
        <li><?= $check ?> استعادة الأداء وإطالة العمر التشغيلي</li>
      </ul>
    </div>
  </div>
</section>

<section class="section svc-block" id="hardfacing">
  <div class="container split">
    <div data-reveal>
      <span class="eyebrow svc">تقسية في الموقع</span>
      <h2 class="section-title">تقسية الطواحين والكسارات في الموقع (Hardfacing)</h2>
      <p class="section-sub">منذ أكثر من عشر سنوات، يُعد فريقنا من رواد السوق في خدمات تقسية الطواحين الرأسية (VRM).</p>
      <div class="highlight-num"><strong>+250</strong> عملية تقسية طواحين رأسية</div>
      <p class="section-sub" style="margin-top:22px">نطوّر قدراتنا باستمرار لنبقى في مقدمة السوق؛ فماكينات اللحام
        الأوتوماتيكية بالكامل لدينا تعمل بتقنية IGBT مع ضبط ذاتي للمتغيرات ونسبة تخفيف منخفضة، لبناء سُمك آمن مع تقليل
        الحرارة الداخلة إلى أدنى حد.</p>

      <h3 class="svc-sub">تقسية مقاطع Magotteaux Xwin®</h3>
      <p class="section-sub">تقسية المقاطع المصنوعة من المواد المركبة ذات المصفوفة المعدنية المدعمة بالسيراميك (MMC)
        مهمة دقيقة. وباستخدام متغيرات لحام مضبوطة بدقة وتقنية تخفيف منخفض، نفذنا طبقة تقسية بسُمك 35 مم في الموقع مع
        ترابط ممتاز ودون أي تقشر أو تشققات.</p>
    </div>
    <div class="photo-grid" data-reveal>
      <figure class="tall"><img src="/assets/img/services/vrm-roller-hardfaced.jpg" alt="بكرة طاحونة رأسية بعد التقسية في الموقع" width="900" height="1504" loading="lazy"></figure>
      <figure class="tall"><img src="/assets/img/services/vrm-roller-welding.jpg" alt="تقسية أوتوماتيكية لبكرة طاحونة رأسية" width="900" height="1507" loading="lazy"></figure>
      <figure class="wide"><img src="/assets/img/services/xwin-1.jpg" alt="مقاطع Magotteaux Xwin بعد التقسية" width="1000" height="728" loading="lazy"></figure>
    </div>
  </div>
</section>

<section class="section svc-block bg-tint" id="wear-plates">
  <div class="container split">
    <div class="photo-grid" data-reveal>
      <figure class="wide"><img src="/assets/img/services/dplate-pipe.jpg" alt="تصنيع ماسورة مقاومة للتآكل من ألواح D-Plate" width="1200" height="923" loading="lazy"></figure>
      <figure><img src="/assets/img/services/plates-stack.jpg" alt="ألواح مقاومة للتآكل جاهزة للتسليم" width="1000" height="896" loading="lazy"></figure>
      <figure><img src="/assets/img/services/plates-install.jpg" alt="تجميع مجرى مبطن بألواح مقاومة للتآكل" width="1000" height="898" loading="lazy"></figure>
      <figure><img src="/assets/img/services/cco-plate-1.jpg" alt="سطح لوح كربيد الكروم" width="800" height="922" loading="lazy"></figure>
      <figure><img src="/assets/img/services/dplate-1.jpg" alt="قطع D-Plate مقاومة للتآكل" width="900" height="793" loading="lazy"></figure>
    </div>
    <div data-reveal>
      <span class="eyebrow svc">صناعة مصرية</span>
      <h2 class="section-title">ألواح مقاومة للتآكل بتصنيع محلي</h2>

      <h3 class="svc-sub" style="margin-top:6px">ألواح كربيد الكروم (CCO)</h3>
      <p class="section-sub">أقمنا شراكة استراتيجية مع شركة BCC الفيتنامية لتوطين صناعة ألواح كربيد الكروم (CCO)
        المقاومة للتآكل. ومن خلال هذه الشراكة نقلت BCC خبرتها الفنية وركّبت معدات الإنتاج بتقنيتها في منشأتنا، وبدأ
        الإنتاج بالفعل في مصنعنا.</p>

      <h3 class="svc-sub">ألواح D-Plate™ الهندسية</h3>
      <p class="section-sub">تُصنَّع محليًا في منشأتنا بتقنية BCC، وتجمع بين قاعدة من الصلب المتين وطبقة سطحية صلبة غنية
        بالكربيدات مقاومة للتآكل. وتُنتج بعملية BCC الحصرية للتغطية بالمسحوق (POP)، مما يتيح تصميم تركيبة السبيكة
        بحسب طبيعة الاستخدام.</p>
      <ul class="check-list">
        <li><?= $check ?> حماية هندسية ضد الاحتكاك والصدمات</li>
        <li><?= $check ?> مقاومة للتآكل بالتعرية والتآكل الكيميائي والحرارة</li>
        <li><?= $check ?> ألواح وبطانات ومجاري ومواسير</li>
      </ul>
    </div>
  </div>
</section>

<section class="section svc-block" id="coating">
  <div class="container split">
    <div data-reveal>
      <span class="eyebrow svc">هندسة الأسطح</span>
      <h2 class="section-title">طلاءات الحماية</h2>
      <p class="section-sub">أصبح نظام الرش القوسي (Arc Spray) الجديد لدينا يعمل بكامل طاقته، ليوسّع قدراتنا في هندسة
        الأسطح. ويطبّق طلاءات معدنية عالية الأداء تعزز مقاومة التآكل والحماية من الصدأ في مجموعة واسعة من التطبيقات
        الصناعية.</p>
      <ul class="check-list">
        <li><?= $check ?> طلاءات معدنية بالرش الحراري القوسي</li>
        <li><?= $check ?> حماية من التآكل والصدأ</li>
        <li><?= $check ?> مواسير الغلايات والبكرات ومعدات التشغيل</li>
      </ul>
    </div>
    <div class="photo-grid" data-reveal>
      <figure class="wide"><img src="/assets/img/services/coating-3.jpg" alt="طلاء بكرة كبيرة بالرش القوسي" width="1600" height="548" loading="lazy"></figure>
      <figure><img src="/assets/img/services/coating-1.jpg" alt="فني يطبق طلاء حماية داخل غلاية" width="1000" height="893" loading="lazy"></figure>
      <figure><img src="/assets/img/services/coating-2.jpg" alt="جدران مواسير غلاية بعد الطلاء" width="1000" height="896" loading="lazy"></figure>
    </div>
  </div>
</section>

<section class="section svc-block bg-tint" id="fabrication">
  <div class="container split">
    <div class="photo-grid" data-reveal>
      <figure><img src="/assets/img/services/fab-cone.jpg" alt="مخروط صلب مصنّع" width="800" height="813" loading="lazy"></figure>
      <figure><img src="/assets/img/services/fab-structure.jpg" alt="هيكل معدني مصنّع ومركّب" width="800" height="814" loading="lazy"></figure>
      <figure><img src="/assets/img/services/fab-pipes.jpg" alt="مواسير مطلية جاهزة للشحن" width="800" height="813" loading="lazy"></figure>
      <figure><img src="/assets/img/services/fab-ficep.jpg" alt="خط تشغيل كمرات CNC في ورشتنا" width="800" height="814" loading="lazy"></figure>
    </div>
    <div data-reveal>
      <span class="eyebrow svc">ورشتنا</span>
      <h2 class="section-title">التصنيع المعدني وفق مواصفات ASME</h2>
      <p class="section-sub">تمتلك ورشتنا كامل الإمكانيات لتنفيذ أعمال التصنيع المعدني، بما في ذلك الطلاءات الصناعية
        والفحص الهندسي، وفقًا لمواصفات ASME.</p>
      <ul class="check-list">
        <li><?= $check ?> هياكل معدنية ومخاريط وهوبرات ومواسير</li>
        <li><?= $check ?> قطع وتشغيل الكمرات بماكينات CNC</li>
        <li><?= $check ?> طلاءات صناعية وفحص هندسي</li>
      </ul>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow svc">لماذا العربية</span>
      <h2 class="section-title">شريككم المحترف في تطبيقات الصيانة واللحام</h2>
      <p class="section-sub" style="margin-inline:auto">نؤمن ببناء شراكات طويلة الأمد مع عملائنا. دعونا نكون حليفكم
        الموثوق في تجاوز التحديات، ورفع كفاءة المعدات، وتحسين التشغيل.</p>
    </div>
    <div class="cards-grid" data-reveal>
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7" /><path d="m21 21-4.3-4.3" /></svg></span>
        <h3>تحليل العطل أولًا</h3>
        <p>ندرس السبب الجذري قبل اختيار إجراء اللحام والمواد المستهلكة.</p>
      </div>
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9" /><path d="M12 7v5l3 3" /></svg></span>
        <h3>طارئ أو مخطط</h3>
        <p>استجابة سريعة للأعطال المفاجئة، وتخطيط دقيق للتوقفات المجدولة.</p>
      </div>
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z" /><circle cx="12" cy="10" r="3" /></svg></span>
        <h3>العمل في الموقع</h3>
        <p>تقسية أوتوماتيكية وإصلاحات داخل مصنعكم لتقليل فترات التوقف.</p>
      </div>
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18" /><path d="M5 21V8l5 3V8l5 3V5h4v16" /></svg></span>
        <h3>تصنيع محلي</h3>
        <p>ألواح مقاومة للتآكل وقطع مصنّعة في مصنعنا داخل مصر.</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow svc">ثقة الصناعة</span>
      <h2 class="section-title">أبرز عملائنا</h2>
    </div>
    <div class="logo-grid cols-4" data-reveal>
      <?php foreach ($SERVICE_CLIENTS as $file => $names): ?>
      <div class="logo-slot"><img src="/assets/img/clients/<?= $file ?>" alt="<?= htmlspecialchars($names['ar']) ?>" loading="lazy"></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band" data-reveal>
      <div>
        <h3>لديك مكون متآكل أو متضرر؟</h3>
        <p>أرسل لنا صور وتفاصيل القطعة، وسيقترح مهندسو اللحام لدينا الحل الأنسب للإصلاح أو الحماية من التآكل.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/contact.php?service=svc-repair" class="btn btn-svc">اطلب زيارة فنية</a>
        <a href="tel:<?= $SITE['phone_svc_intl'] ?>" class="btn btn-outline"><?= $SITE['phone_svc'] ?></a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>
