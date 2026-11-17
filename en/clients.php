<?php
$lang    = 'en';
$pageKey = 'clients';
$title   = 'Our Clients & Industries | Al-Arabia for Renting and Maintaining Tools and Equipment';
$description = 'We work with construction contractors, industrial facilities, and cement plants across Egypt, in lifting equipment rental and in maintenance, welding, and hardfacing services.';
require_once __DIR__ . '/../partials/config.php';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="/en/index.php">Home</a> / <span>Our Clients</span></div>
    <h1>Our Clients & Industries</h1>
    <p>We're proud to work with construction contractors and industrial facilities, bringing our expertise to serve each
      sector's specific needs.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Industries We Serve</span>
      <h2 class="section-title">We understand each sector's requirements and provide the right equipment for it</h2>
    </div>
    <div class="cards-grid cols-2" data-reveal>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 21h18" />
            <path d="M5 21V7l7-4 7 4v14" />
            <path d="M9 21v-6h6v6" />
          </svg></span>
        <h3>Construction & Contracting</h3>
        <p>Lifting and installation equipment for build sites, steel structures, and structural installations of all
          sizes.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M13 2 3 14h7l-1 8 10-12h-7z" />
          </svg></span>
        <h3>Power & Energy</h3>
        <p>Lifting solutions for transformers, industrial tanks, and power plant components.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="3" />
            <path
              d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1" />
          </svg></span>
        <h3>Oil & Petrochemicals</h3>
        <p>Equipment that respects the strict safety requirements of petrochemical and chemical sites.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 7h18v13H3z" />
            <path d="M8 7V4h8v3" />
          </svg></span>
        <h3>Manufacturing & Industrial Facilities</h3>
        <p>Flexible equipment for production lines, factories, warehouses, and loading/unloading areas.</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Equipment Rental</span>
      <h2 class="section-title">Equipment Rental Clients</h2>
      <p class="section-sub" style="margin-inline:auto">Contractors and industrial companies that rely on our equipment
        fleet for their projects.</p>
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
    <div class="section-head center">
      <span class="eyebrow svc">Maintenance & Welding</span>
      <h2 class="section-title">Maintenance & Welding Clients</h2>
      <p class="section-sub" style="margin-inline:auto">Cement, fertilizer, and heavy-industry plants that trust our maintenance and welding team.</p>
    </div>
    <div class="logo-grid cols-4" data-reveal>
      <?php foreach ($SERVICE_CLIENTS as $file => $names): ?>
      <div class="logo-slot"><img src="/assets/img/clients/<?= $file ?>" alt="<?= htmlspecialchars($names['en']) ?>" loading="lazy"></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band" data-reveal>
      <div>
        <h3>Want to become one of our clients?</h3>
        <p>Get in touch and let's discuss your project's equipment needs or your plant's maintenance and welding needs.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/en/contact.php" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>