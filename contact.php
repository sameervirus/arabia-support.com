<?php
$lang    = 'ar';
$pageKey = 'contact';
$title   = 'اتصل بنا | العربية لتأجير وصيانة العدد والمعدات';
$description = 'تواصل مع العربية لتأجير وصيانة العدد والمعدات لطلب عرض سعر أو الاستفسار عن الأوناش والبوم ليفت والسيزر ليفت والأدوات. تليفون: 01027762665.';
require_once __DIR__ . '/partials/config.php';
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
$mapQuery = urlencode('arconsegypt');
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="/index.php">الرئيسية</a> / <span>اتصل بنا</span></div>
    <h1>اتصل بنا</h1>
    <p>فريقنا جاهز للرد على استفساراتكم وتجهيز عرض سعر مناسب لمشروعكم.</p>
  </div>
</section>

<section class="section">
  <div class="container contact-grid">

    <div data-reveal>
      <div class="contact-card">
        <h3>بيانات التواصل</h3>
        <div class="contact-line">
          <span class="dot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg></span>
          <div>
            <strong>تليفون</strong>
            <a href="tel:<?= $SITE['phone_intl'] ?>"><?= $SITE['phone'] ?></a>
          </div>
        </div>
        <div class="contact-line">
          <span class="dot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 6 12 13 2 6" />
              <rect x="2" y="4" width="20" height="16" rx="2" />
            </svg></span>
          <div>
            <strong>البريد الإلكتروني</strong>
            <a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a>
          </div>
        </div>
        <div class="contact-line">
          <span class="dot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg></span>
          <div>
            <strong>العنوان</strong>
            <span><?= $SITE['address_ar'] ?></span>
          </div>
        </div>
        <div class="contact-line">
          <span class="dot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="9" />
              <path d="M12 7v5l3 3" />
            </svg></span>
          <div>
            <strong>ساعات العمل</strong>
            <span>دعم فني وطوارئ على مدار الساعة</span>
          </div>
        </div>
        <a href="https://wa.me/<?= $SITE['whatsapp'] ?>" class="btn btn-primary btn-block" target="_blank"
          rel="noopener">راسلنا على واتساب</a>
      </div>
      <div class="map-embed">
        <iframe src="https://www.google.com/maps?q=<?= $mapQuery ?>&output=embed" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade" title="موقعنا على الخريطة"></iframe>
      </div>
    </div>

    <div data-reveal>
      <div class="form-card">
        <h3 style="font-size:1.3rem;font-weight:800;color:var(--navy-900);margin-bottom:22px">اطلب عرض سعر</h3>
        <form id="quote-form" action="/php/contact-handler.php" method="post" data-sending-label="جارٍ الإرسال..."
          data-success-label="تم استلام طلبكم بنجاح، سيتواصل معكم فريقنا في أقرب وقت."
          data-error-label="حدث خطأ أثناء الإرسال، برجاء المحاولة مرة أخرى أو التواصل عبر التليفون.">
          <input type="hidden" name="lang" value="ar">
          <input type="hidden" name="ts" value="<?= time() ?>">
          <div class="form-row">
            <div class="field">
              <label for="name">الاسم *</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="field">
              <label for="phone">رقم التليفون *</label>
              <input type="tel" id="phone" name="phone" required>
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label for="email">البريد الإلكتروني</label>
              <input type="email" id="email" name="email">
            </div>
            <div class="field">
              <label for="equipment">المعدة المطلوبة</label>
              <select id="equipment" name="equipment">
                <option value="">اختر نوع المعدة</option>
                <option value="cranes">أوناش (كرينات)</option>
                <option value="boom-lifts">بوم ليفت / تلي هاندلر</option>
                <option value="scissor-lifts">سيزر ليفت</option>
                <option value="tools">أدوات ومعدات عامة</option>
                <option value="other">أخرى</option>
              </select>
            </div>
          </div>
          <div class="field">
            <label for="message">تفاصيل الطلب</label>
            <textarea id="message" name="message"
              placeholder="مدة الإيجار، موقع المشروع، وأي تفاصيل إضافية..."></textarea>
          </div>
          <div class="field" style="display:none">
            <label for="company">الشركة</label>
            <input type="text" id="company" name="company" tabindex="-1" autocomplete="off">
          </div>
          <button type="submit" class="btn btn-primary btn-block">إرسال الطلب</button>
          <div class="form-status"></div>
          <p class="form-note">بإرسالك هذا النموذج فإنك توافق على تواصل فريقنا معك بخصوص طلبك.</p>
        </form>
      </div>
    </div>

  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>