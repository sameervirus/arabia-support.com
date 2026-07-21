<?php
http_response_code(404);
$lang    = 'en';
$pageKey = 'home';
$title   = 'Page Not Found | Al-Arabia for Renting and Maintaining Tools and Equipment';
$description = 'The page you are looking for does not exist. Return to the homepage to browse our equipment and services.';
require_once __DIR__ . '/../partials/config.php';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>

<section class="section" style="text-align:center;padding-block:120px">
  <div class="container">
    <span class="eyebrow" style="justify-content:center">Error 404</span>
    <h1 class="section-title" style="margin-bottom:16px">Page Not Found</h1>
    <p class="section-sub" style="margin-inline:auto">The link you followed may be broken, or the page may have been
      moved.</p>
    <div style="margin-top:30px;display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
      <a href="/en/index.php" class="btn btn-primary">Back to Home</a>
      <a href="/en/contact.php" class="btn btn-dark">Contact Us</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>