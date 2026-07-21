<?php
$lang    = 'en';
$pageKey = 'equipment';
$title   = 'Equipment | Crane, Boom Lift, Scissor Lift & Tool Rental - Al-Arabia';
$description = 'Browse our equipment categories available for rent: cranes, boom lifts & telehandlers, scissor lifts, and general tools & equipment for industrial and construction installations.';
require_once __DIR__ . '/../../partials/config.php';
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../partials/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="/en/index.php">Home</a> / <span>Equipment</span></div>
    <h1>Our Rental Equipment</h1>
    <p>A complete range of lifting, installation, and supporting tools, ready for delivery to your project site.</p>
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
        <h3>Cranes</h3>
        <p>All Terrain, Rough Terrain, and Truck Cranes with lifting capacities from 30 to 80 tons.</p>
        <a href="/en/equipment/cranes.php" class="eq-more">View Details
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
        <h3>Boom Lifts & Telehandlers</h3>
        <p>Telescopic and articulating boom lifts up to 40m, and telehandlers with capacity up to 4 tons.</p>
        <a href="/en/equipment/boom-lifts-telehandlers.php" class="eq-more">View Details
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
        <h3>Scissor Lifts</h3>
        <p>Indoor and outdoor lift platforms with heights up to 18 meters.</p>
        <a href="/en/equipment/scissor-lifts.php" class="eq-more">View Details
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
        <h3>Tools & General Equipment</h3>
        <p>Generators, compressors, welding & heat treatment machines, scaffolding, survey and rigging equipment.</p>
        <a href="/en/equipment/tools-general-equipment.php" class="eq-more">View Details
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
        <h3>Not sure which equipment fits your project?</h3>
        <p>Send us your site details and scope of work, and we'll help you pick the right equipment at the best price.
        </p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/en/contact.php" class="btn btn-primary">Talk to Our Team</a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>