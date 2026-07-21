<?php
http_response_code(404);
$lang    = 'ar';
$pageKey = 'home';
$title   = 'الصفحة غير موجودة | العربية لتأجير وصيانة العدد والمعدات';
$description = 'الصفحة التي تحاول الوصول إليها غير موجودة. عد إلى الرئيسية لتصفح معداتنا وخدماتنا.';
require_once __DIR__ . '/partials/config.php';
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>

<section class="section" style="text-align:center;padding-block:120px">
  <div class="container">
    <span class="eyebrow" style="justify-content:center">خطأ 404</span>
    <h1 class="section-title" style="margin-bottom:16px">الصفحة غير موجودة</h1>
    <p class="section-sub" style="margin-inline:auto">يبدو أن الرابط الذي اتبعته غير صحيح أو أن الصفحة تم نقلها.</p>
    <div style="margin-top:30px;display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
      <a href="/index.php" class="btn btn-primary">العودة للرئيسية</a>
      <a href="/contact.php" class="btn btn-dark">تواصل معنا</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>