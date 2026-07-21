<?php
$lang    = 'en';
$pageKey = 'scissor-lifts';
$title   = 'Scissor Lift Rental | Al-Arabia for Renting and Maintaining Tools and Equipment';
$description = 'Rent engine-powered scissor lift platforms with heights up to 18 meters and various load capacities, suited for indoor and outdoor work and rough site terrain.';
require_once __DIR__ . '/../../partials/config.php';
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../partials/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="/en/index.php">Home</a> / <a href="/en/equipment/index.php">Equipment</a> /
      <span>Scissor Lifts</span>
    </div>
    <h1>Scissor Lift Rental</h1>
    <p>Vertical lift platforms providing greater working space and high stability for installation and maintenance work
      at height.</p>
  </div>
</section>

<section class="section">
  <div class="container split">
    <div class="img-placeholder ratio-4-3" data-reveal>
      <div class="ph-inner">
        <img src="/assets/img/equipment/scissor.jpg" alt="Scissor Lift photo" />
      </div>
    </div>
    <div data-reveal>
      <span class="eyebrow">Engine Powered Scissor Lifts</span>
      <h2 class="section-title">Durable, high-capacity scissor lift platforms</h2>
      <p class="section-sub">
        Durable engine-powered scissor lifts that carry more thanks to enhanced power and stability, with
        larger platforms for more work space. Multiple models are available to traverse rough terrain and
        tackle industrial jobs with ease, with heights up to 18 meters.
      </p>
      <ul class="check-list" style="margin-top:26px">
        <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor">
            <path d="M20 6 9 17l-5-5" />
          </svg> Increased lift capacities with enhanced power and stability</li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor">
            <path d="M20 6 9 17l-5-5" />
          </svg> Larger platforms with more work space</li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor">
            <path d="M20 6 9 17l-5-5" />
          </svg> Models suited for rough terrain and industrial sites</li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor">
            <path d="M20 6 9 17l-5-5" />
          </svg> Heights up to 18 meters</li>
      </ul>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container">
    <div class="cta-band" data-reveal>
      <div>
        <h3>Need a scissor lift for your site?</h3>
        <p>Send us the required height and ground type, and we'll recommend the right platform.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/en/contact.php" class="btn btn-primary">Get a Quote</a>
        <a href="/en/equipment/index.php" class="btn btn-outline">All Equipment</a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>