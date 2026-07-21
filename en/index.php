<?php
$lang    = 'en';
$pageKey = 'home';
$title   = 'Al-Arabia for Renting and Maintaining Tools and Equipment | Cranes, Boom Lifts & Scissor Lifts in Egypt';
$description = 'Al-Arabia for Renting and Maintaining Tools and Equipment: rent cranes of all types, boom lifts, telehandlers, scissor lifts, and general tools for construction and industrial projects in Egypt. Request a quote today.';
require_once __DIR__ . '/../partials/config.php';
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'LocalBusiness',
  'name' => $SITE['name_en'],
  'image' => $SITE['base_url'] . '/assets/img/og-cover.jpg',
  'url' => $SITE['base_url'] . '/en/index.php',
  'telephone' => $SITE['phone_intl'],
  'email' => $SITE['email'],
  'address' => [
    '@type' => 'PostalAddress',
    'streetAddress' => $SITE['address_en'],
    'addressCountry' => 'EG',
  ],
  'priceRange' => '$$',
];
$preloadImage = '/assets/img/hero.jpg';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>

<section class="hero">
  <div class="container hero-grid">
    <div>
      <span class="badge">Equipment Rental for Construction & Industry in Egypt</span>
      <h1>Equipping your project with the right <em>lifting equipment</em>, right on time</h1>
      <p class="hero-lead">
        Al-Arabia for Renting and Maintaining Tools and Equipment provides cranes of all types, boom lifts and
        telehandlers,
        scissor lifts, and general tools and equipment for steel structures, power plants, and industrial
        installations — backed by a technical team ready to support your project from day one to handover.
      </p>
      <div class="hero-actions">
        <a href="/en/contact.php" class="btn btn-primary">Get a Quote Now</a>
        <a href="/en/equipment/index.php" class="btn btn-outline">Browse Equipment</a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat"><strong data-count="10" data-suffix="+">0</strong><span>Equipment categories</span></div>
        <div class="hero-stat"><strong data-count="24" data-suffix="/7">0</strong><span>Technical support</span></div>
        <div class="hero-stat"><strong data-count="100" data-suffix="%">0</strong><span>Safety-standard
            commitment</span></div>
      </div>
    </div>
    <div class="hero-visual">
      <img src="/assets/img/hero.jpg" alt="hero image" width="513" height="513" fetchpriority="high">
      <div class="hero-badge-float">
        <span class="dot">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20 6 9 17l-5-5" />
          </svg>
        </span>
        <span>
          <strong>Regularly inspected fleet</strong>
          <span>Ready for immediate deployment</span>
        </span>
      </div>
    </div>
  </div>
</section>

<div class="trust-strip">
  <div class="container">
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M12 2 3 6v6c0 5 4 9 9 10 5-1 9-5 9-10V6l-9-4z" />
      </svg>
      Occupational safety standards
    </div>
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <rect x="1" y="6" width="15" height="12" rx="2" />
        <path d="M16 10h4l3 4v4h-7" />
        <circle cx="6" cy="20" r="2" />
        <circle cx="19" cy="20" r="2" />
      </svg>
      On-site delivery & setup
    </div>
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="12" cy="12" r="9" />
        <path d="M12 7v5l3 3" />
      </svg>
      Round-the-clock response
    </div>
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
        <circle cx="9" cy="7" r="4" />
        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
      </svg>
      Specialized technical crew
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">What We Offer</span>
      <h2 class="section-title">A fleet that covers your project end to end</h2>
      <p class="section-sub">From heavy lifting to work at height, plus the supporting tools and equipment your site
        needs.</p>
    </div>
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
        <a href="/en/equipment/cranes.php" class="eq-more">Learn more
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
        <a href="/en/equipment/boom-lifts-telehandlers.php" class="eq-more">Learn more
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
        <p>Indoor and outdoor scissor lift platforms with heights up to 18m and various load capacities.</p>
        <a href="/en/equipment/scissor-lifts.php" class="eq-more">Learn more
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
        <a href="/en/equipment/tools-general-equipment.php" class="eq-more">Learn more
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 12h14M13 6l6 6-6 6" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container split">
    <div data-reveal>
      <span class="eyebrow">About Us</span>
      <h2 class="section-title">Your partner in lifting & installation equipment rental</h2>
      <p class="section-sub">
        We work with construction contractors and industrial facilities to provide lifting and installation
        equipment that's ready to run — backed by a technical team that keeps up regular maintenance and
        inspection of every unit before it goes out to site.
      </p>
      <ul class="check-list" style="margin-top:26px">
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor">
            <path d="M20 6 9 17l-5-5" />
          </svg>
          Regular inspection and maintenance before every dispatch
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor">
            <path d="M20 6 9 17l-5-5" />
          </svg>
          Operations and maintenance crew trained on safety standards
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor">
            <path d="M20 6 9 17l-5-5" />
          </svg>
          On-site delivery and setup on a schedule that fits your project
        </li>
      </ul>
      <a href="/en/about.php" class="btn btn-dark" style="margin-top:10px">More About Us</a>
    </div>
    <div class="img-placeholder ratio-4-3" data-reveal>
      <div class="ph-inner">
        <img src="/assets/img/team.jpg" alt="فريق العمل" width="640" height="480" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="stats-band">
  <div class="container">
    <div class="stat"><strong data-count="10" data-suffix="+">0</strong><span>Equipment categories</span></div>
    <div class="stat"><strong data-count="80" data-suffix=" t">0</strong><span>Max crane lifting capacity</span></div>
    <div class="stat"><strong data-count="40" data-suffix="m">0</strong><span>Max boom lift height</span></div>
    <div class="stat"><strong data-count="24" data-suffix="/7">0</strong><span>Support availability</span></div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How It Works</span>
      <h2 class="section-title">From request to delivery in 4 steps</h2>
    </div>
    <div class="steps" data-reveal>
      <div class="step">
        <span class="step-num">1</span>
        <h4>Tell us what you need</h4>
        <p>Share the equipment type, duration, and project location.</p>
      </div>
      <div class="step">
        <span class="step-num">2</span>
        <h4>Quotation & site survey</h4>
        <p>We send a detailed quote, with a site visit if needed.</p>
      </div>
      <div class="step">
        <span class="step-num">3</span>
        <h4>Delivery & setup</h4>
        <p>We deliver the equipment and crew on the agreed schedule.</p>
      </div>
      <div class="step">
        <span class="step-num">4</span>
        <h4>Ongoing support</h4>
        <p>Regular follow-up and maintenance throughout the rental period.</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Industries We Serve</span>
      <h2 class="section-title">Supporting a range of construction & industrial sectors</h2>
    </div>
    <div class="cards-grid cols-2" data-reveal>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 21h18" />
            <path d="M5 21V7l7-4 7 4v14" />
            <path d="M9 21v-6h6v6" />
          </svg></span>
        <h3>Construction & Contracting</h3>
        <p>Supporting build sites, steel structures, and structural installations with the right lifting gear.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M13 2 3 14h7l-1 8 10-12h-7z" />
          </svg></span>
        <h3>Power & Energy</h3>
        <p>Lifting and installation equipment for power plants, transformers, and industrial tanks.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="3" />
            <path
              d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1" />
          </svg></span>
        <h3>Oil & Petrochemicals</h3>
        <p>Equipment matched to the strict safety requirements of petrochemical sites.</p>
      </div>
      <div class="eq-card">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 7h18v13H3z" />
            <path d="M8 7V4h8v3" />
          </svg></span>
        <h3>Manufacturing & Industrial Facilities</h3>
        <p>Flexible lifting and installation solutions for production lines, factories, and warehouses.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band" data-reveal>
      <div>
        <h3>Need lifting or installation equipment for your project?</h3>
        <p>Get in touch now and receive a tailored quote within business hours.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/en/contact.php" class="btn btn-primary">Get a Quote</a>
        <a href="tel:<?= $SITE['phone_intl'] ?>" class="btn btn-outline"><?= $SITE['phone'] ?></a>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container" style="max-width:820px">
    <div class="section-head center">
      <span class="eyebrow">FAQ</span>
      <h2 class="section-title">Answers to common questions</h2>
    </div>
    <div data-reveal>
      <details class="faq-item" open>
        <summary>Do you provide an operator with the equipment?</summary>
        <p>Yes, we provide trained operators and technicians with most equipment to ensure safe and efficient on-site
          operation.</p>
      </details>
      <details class="faq-item">
        <summary>Is rental available for short and long terms?</summary>
        <p>Yes, we offer daily, weekly, and monthly rental packages depending on your project's nature and duration.</p>
      </details>
      <details class="faq-item">
        <summary>Can you survey the site before recommending equipment?</summary>
        <p>Absolutely — our technical team can visit the site to determine the right equipment type and capacity for the
          job.</p>
      </details>
      <details class="faq-item">
        <summary>What areas do you cover?</summary>
        <p>We serve construction and industrial projects across Egypt — contact us to confirm coverage for your
          project's location.</p>
      </details>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>