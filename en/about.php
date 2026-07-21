<?php
$lang    = 'en';
$pageKey = 'about';
$title   = 'About Us | Al-Arabia for Renting and Maintaining Tools and Equipment';
$description = 'Learn about Al-Arabia for Renting and Maintaining Tools and Equipment: our approach, our commitment to safety and quality, and our lifting and installation equipment services for construction and industrial projects in Egypt.';
require_once __DIR__ . '/../partials/config.php';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="/en/index.php">Home</a> / <span>About Us</span></div>
    <h1>About Us</h1>
    <p>Your specialized partner in lifting, installation, and supporting equipment rental for construction and
      industrial projects.</p>
  </div>
</section>

<section class="section">
  <div class="container split">
    <div class="img-placeholder ratio-4-3" data-reveal>
      <div class="ph-inner">
        <img src="/assets/img/about.jpg" alt="فريق العمل" />
      </div>
    </div>
    <div data-reveal>
      <span class="eyebrow">Our Story</span>
      <h2 class="section-title">Lifting & installation equipment rental you can rely on</h2>
      <p class="section-sub">
        Al-Arabia for Renting and Maintaining Tools and Equipment was established to meet the needs of construction
        contractors
        and industrial facilities in Egypt for reliable lifting and installation equipment that's ready
        to run and backed by a specialized technical team. We support steel structure projects, mechanical
        installations, power plants, industrial tanks, and other fields that require lifting equipment of
        varying capacities and heights.
      </p>
      <p class="section-sub" style="margin-top:16px">
        Our goal is to be an extension of your project team: helping you choose the right equipment,
        delivering and installing it on schedule, and following up with regular maintenance throughout
        the rental period.
      </p>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Our Values</span>
      <h2 class="section-title">What sets our approach apart</h2>
    </div>
    <div class="cards-grid cols-3" data-reveal>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 2 3 6v6c0 5 4 9 9 10 5-1 9-5 9-10V6l-9-4z" />
          </svg></span>
        <h3>Safety First</h3>
        <p>Every unit is inspected and technically reviewed before it goes out to site, in line with occupational safety
          standards.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="9" />
            <path d="M12 7v5l3 3" />
          </svg></span>
        <h3>Readiness & Fast Response</h3>
        <p>A support team ready to handle your project's requests and emergencies at any time.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
          </svg></span>
        <h3>Specialized Technical Crew</h3>
        <p>Operators and technicians trained to work with various types of lifting and installation equipment.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Our Commitment</span>
      <h2 class="section-title">Safety and quality standards at every stage</h2>
      <p class="section-sub">We apply operating and maintenance practices aligned with occupational health and safety
        standards throughout the rental process.</p>
    </div>
    <div class="cards-grid cols-2" data-reveal>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 11 12 14l6-6" />
            <path d="M21 12a9 9 0 1 1-6-8.49" />
          </svg></span>
        <h3>Regular Inspection & Maintenance</h3>
        <p>Ongoing technical follow-up for every unit to ensure efficiency and safe operation.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 8v4l3 2" />
            <circle cx="12" cy="12" r="9" />
          </svg></span>
        <h3>Clear Work & Safety Plans</h3>
        <p>Prior coordination with your project team on operating procedures and on-site safety steps.</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container">
    <div class="cta-band" data-reveal>
      <div>
        <h3>Want to know more about our services?</h3>
        <p>Get in touch and we'll help you choose the right equipment for your project.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/en/contact.php" class="btn btn-primary">Contact Us</a>
        <a href="/en/equipment/index.php" class="btn btn-outline">Browse Equipment</a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>