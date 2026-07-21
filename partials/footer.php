<?php $isAr = $lang === 'ar'; ?>
<a href="https://wa.me/<?= $SITE['whatsapp'] ?>" class="wa-float" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24" fill="currentColor">
    <path
      d="M12.04 2c-5.5 0-9.96 4.46-9.96 9.96 0 1.76.46 3.45 1.32 4.95L2 22l5.25-1.38a9.9 9.9 0 0 0 4.79 1.22h.01c5.5 0 9.96-4.46 9.96-9.96S17.54 2 12.04 2zm5.83 14.08c-.25.7-1.25 1.28-2.03 1.44-.55.11-1.26.2-3.66-.78-2.99-1.23-4.91-4.24-5.06-4.44-.15-.2-1.22-1.62-1.22-3.09 0-1.47.77-2.19 1.04-2.49.27-.3.6-.37.8-.37.2 0 .4 0 .58.01.18.01.44-.07.68.53.25.6.85 2.08.92 2.23.07.15.12.33.02.53-.1.2-.15.32-.3.5-.15.18-.31.4-.44.53-.15.15-.3.31-.13.6.17.3.77 1.28 1.66 2.07 1.14 1.02 2.1 1.34 2.4 1.49.3.15.48.13.65-.08.18-.2.75-.87.95-1.17.2-.3.4-.25.68-.15.27.1 1.75.83 2.05.98.3.15.5.23.57.36.08.13.08.75-.17 1.45z" />
  </svg>
</a>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col footer-brand">
        <a href="<?= ph_url('home', $lang) ?>" class="brand">
          <span class="brand-mark">
            <img src="/assets/img/logo.png" alt="" width="816" height="384" loading="lazy">
          </span>
          <span class="brand-text">
            <strong style="color:#fff"><?= $isAr ? $SITE['short_ar'] : $SITE['short_en'] ?></strong>
            <span><?= $isAr ? 'لتأجير المعدات' : 'Equipment Rental' ?></span>
          </span>
        </a>
        <p>
          <?= $isAr
            ? 'شريككم الموثوق في تأجير معدات الرفع والتركيب والمعدات المساندة لمشاريع الإنشاءات والصناعة في مصر، بأعلى معايير السلامة والجاهزية.'
            : 'Your trusted partner for lifting, installation, and support equipment rental serving construction and industrial projects across Egypt, with the highest safety and readiness standards.' ?>
        </p>
        <div class="social-row">
          <a href="https://web.facebook.com/AlArabiaRental" target="_blank" aria-label="Facebook"><svg
              viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12z" />
            </svg></a>
          <a href="#" aria-label="LinkedIn" target="_blank"><svg viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M6.94 5a2 2 0 1 1-4-.02 2 2 0 0 1 4 .02zM3.3 8.75h3.6V21H3.3V8.75zm6.24 0h3.45v1.68h.05c.48-.9 1.66-1.86 3.42-1.86 3.66 0 4.33 2.4 4.33 5.53V21h-3.6v-5.9c0-1.4-.03-3.2-1.95-3.2-1.96 0-2.26 1.53-2.26 3.1V21H9.54V8.75z" />
            </svg></a>
          <a href="https://wa.me/<?= $SITE['whatsapp'] ?>" aria-label="WhatsApp" target="_blank" rel="noopener"><svg
              viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12.04 2c-5.5 0-9.96 4.46-9.96 9.96 0 1.76.46 3.45 1.32 4.95L2 22l5.25-1.38a9.9 9.9 0 0 0 4.79 1.22h.01c5.5 0 9.96-4.46 9.96-9.96S17.54 2 12.04 2zm5.83 14.08c-.25.7-1.25 1.28-2.03 1.44-.55.11-1.26.2-3.66-.78-2.99-1.23-4.91-4.24-5.06-4.44-.15-.2-1.22-1.62-1.22-3.09 0-1.47.77-2.19 1.04-2.49.27-.3.6-.37.8-.37.2 0 .4 0 .58.01.18.01.44-.07.68.53.25.6.85 2.08.92 2.23.07.15.12.33.02.53-.1.2-.15.32-.3.5-.15.18-.31.4-.44.53-.15.15-.3.31-.13.6.17.3.77 1.28 1.66 2.07 1.14 1.02 2.1 1.34 2.4 1.49.3.15.48.13.65-.08.18-.2.75-.87.95-1.17.2-.3.4-.25.68-.15.27.1 1.75.83 2.05.98.3.15.5.23.57.36.08.13.08.75-.17 1.45z" />
            </svg></a>
        </div>
      </div>

      <div class="footer-col">
        <h5><?= $isAr ? 'روابط سريعة' : 'Quick Links' ?></h5>
        <ul>
          <li><a href="<?= ph_url('home', $lang) ?>"><?= $isAr ? 'الرئيسية' : 'Home' ?></a></li>
          <li><a href="<?= ph_url('about', $lang) ?>"><?= $isAr ? 'من نحن' : 'About Us' ?></a></li>
          <li><a href="<?= ph_url('equipment', $lang) ?>"><?= $isAr ? 'المعدات' : 'Equipment' ?></a></li>
          <li><a href="<?= ph_url('clients', $lang) ?>"><?= $isAr ? 'عملاؤنا' : 'Our Clients' ?></a></li>
          <li><a href="<?= ph_url('contact', $lang) ?>"><?= $isAr ? 'اتصل بنا' : 'Contact Us' ?></a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5><?= $isAr ? 'أقسام المعدات' : 'Equipment Categories' ?></h5>
        <ul>
          <li><a href="<?= ph_url('cranes', $lang) ?>"><?= $isAr ? 'الأوناش (الكرينات)' : 'Cranes' ?></a></li>
          <li><a
              href="<?= ph_url('boom-lifts', $lang) ?>"><?= $isAr ? 'بوم ليفت وتلي هاندلر' : 'Boom Lifts & Telehandlers' ?></a>
          </li>
          <li><a href="<?= ph_url('scissor-lifts', $lang) ?>"><?= $isAr ? 'سيزر ليفت' : 'Scissor Lifts' ?></a></li>
          <li><a
              href="<?= ph_url('tools', $lang) ?>"><?= $isAr ? 'أدوات ومعدات عامة' : 'Tools & General Equipment' ?></a>
          </li>
        </ul>
      </div>

      <div class="footer-col">
        <h5><?= $isAr ? 'بيانات التواصل' : 'Contact Info' ?></h5>
        <ul>
          <li><a href="tel:<?= $SITE['phone_intl'] ?>"><?= $SITE['phone'] ?></a></li>
          <li><a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a></li>
          <li><?= $isAr ? $SITE['address_ar'] : $SITE['address_en'] ?></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span>&copy; <span data-year></span> <?= $isAr ? $SITE['name_ar'] : $SITE['name_en'] ?>.
        <?= $isAr ? 'جميع الحقوق محفوظة.' : 'All rights reserved.' ?></span>

    </div>
  </div>
</footer>
</div><!-- /.page-shell -->

<script src="/assets/js/main.js"></script>
</body>

</html>