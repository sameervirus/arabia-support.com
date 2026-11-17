<?php
$lang    = 'en';
$pageKey = 'home';
$title   = 'Al-Arabia | Equipment Rental & Industrial Maintenance, Welding and Hardfacing in Egypt';
$description = 'Al-Arabia: rent cranes, boom lifts, telehandlers, scissor lifts, and tools in Egypt — plus industrial maintenance, welding repair, VRM hardfacing, wear plates, and protection coating for cement plants and heavy industry.';
require_once __DIR__ . '/../partials/config.php';
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'LocalBusiness',
  'name' => $SITE['name_en'],
  'image' => $SITE['base_url'] . '/assets/img/og-share-en.jpg',
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

<section class="dual-hero">
  <div class="container">
    <div class="dual-hero-head">
      <span class="badge">Two specialties · One trusted partner in Egypt</span>
      <h1><em>Equipment Rental</em> & <em class="svc">Industrial Maintenance</em> for construction and heavy industry</h1>
      <p>Lifting equipment ready for your site, and welding-metallurgy experts ready for your plant.</p>
    </div>

    <div class="dual-grid">
      <article class="dual-panel">
        <img src="/assets/img/hero.jpg" alt="Crane and lifting equipment on a project site" width="513" height="513" fetchpriority="high">
        <span class="dual-tag">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h6" /><path d="M6 21V9l9-5v13" /><path d="M15 8h5l1 4h-6" /></svg>
          Equipment Rental
        </span>
        <h2>The right lifting equipment, delivered on time</h2>
        <p>Cranes, boom lifts, telehandlers, scissor lifts, and general tools for steel structures, power plants, and
          industrial installations — with a technical team from day one to handover.</p>
        <div class="dual-points">
          <span>Cranes 30–80 t</span><span>Boom lifts up to 40 m</span><span>Scissor lifts up to 18 m</span><span>24/7 support</span>
        </div>
        <div class="hero-actions">
          <a href="/en/equipment/index.php" class="btn btn-primary">Browse Equipment</a>
          <a href="/en/contact.php?service=cranes" class="btn btn-outline">Get a Rental Quote</a>
        </div>
      </article>

      <article class="dual-panel is-svc">
        <img src="/assets/img/services/coating-1.jpg" alt="Technician welding inside an industrial boiler" width="1000" height="893">
        <span class="dual-tag">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" /></svg>
          Maintenance & Welding
        </span>
        <h2>Welding-metallurgy solutions for heavy industry</h2>
        <p>Repair of cracks and fractures, in-situ hardfacing of mills and crushers, locally made wear plates, protection
          coatings, and ASME metal fabrication.</p>
        <div class="dual-points">
          <span>250+ VRM hardfacing jobs</span><span>10+ years</span><span>Local CCO wear plates</span><span>Arc-spray coating</span>
        </div>
        <div class="hero-actions">
          <a href="/en/services/index.php" class="btn btn-svc">Explore Services</a>
          <a href="/en/contact.php?service=svc-repair" class="btn btn-outline">Request a Technical Visit</a>
        </div>
      </article>
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
      <h2 class="section-title">Two business lines, one standard of quality</h2>
      <p class="section-sub" style="margin-inline:auto">Rent the equipment your project needs, and keep your plant's
        critical components running with our maintenance and welding team.</p>
    </div>
    <div class="offer-split" data-reveal>

      <div class="offer-col">
        <div class="offer-col-head">
          <span class="eyebrow">Equipment Rental</span>
          <h3>A fleet that covers your project end to end</h3>
        </div>
        <div class="cards-grid cols-2">
          <div class="eq-card">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h6" /><path d="M6 21V9l9-5v13" /><path d="M15 8h5l1 4h-6" /><circle cx="18" cy="18" r="3" /></svg></span>
            <h3>Cranes</h3>
            <p>All Terrain, Rough Terrain, and Truck Cranes from 30 to 80 tons.</p>
            <a href="/en/equipment/cranes.php" class="eq-more">Learn more<span class="sr-only"> about Cranes</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 20h6" /><path d="M7 20V9" /><path d="M7 9 20 4" /><circle cx="20" cy="4" r="1.6" /></svg></span>
            <h3>Boom Lifts & Telehandlers</h3>
            <p>Boom lifts up to 40 m and telehandlers up to 4 tons.</p>
            <a href="/en/equipment/boom-lifts-telehandlers.php" class="eq-more">Learn more<span class="sr-only"> about Boom Lifts & Telehandlers</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 20h16" /><path d="M6 20v-5l4-3v8" /><path d="M14 20v-8l4-3v11" /></svg></span>
            <h3>Scissor Lifts</h3>
            <p>Indoor and outdoor platforms with heights up to 18 m.</p>
            <a href="/en/equipment/scissor-lifts.php" class="eq-more">Learn more<span class="sr-only"> about Scissor Lifts</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.9 4.9l2.8 2.8M16.3 16.3l2.8 2.8M2 12h4M18 12h4" /><circle cx="12" cy="12" r="3" /></svg></span>
            <h3>Tools & General Equipment</h3>
            <p>Generators, compressors, welding machines, scaffolding, and rigging.</p>
            <a href="/en/equipment/tools-general-equipment.php" class="eq-more">Learn more<span class="sr-only"> about Tools & General Equipment</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
        </div>
        <a href="/en/equipment/index.php" class="btn btn-dark">All Rental Equipment</a>
      </div>

      <div class="offer-col svc">
        <div class="offer-col-head">
          <span class="eyebrow svc">Maintenance & Welding</span>
          <h3>Keeping heavy industry running</h3>
        </div>
        <div class="cards-grid cols-2">
          <div class="eq-card svc">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" /></svg></span>
            <h3>Repair of Damage</h3>
            <p>Cracks, fractures, and spalling — including difficult-to-weld alloys.</p>
            <a href="/en/services/index.php#repair" class="eq-more">Learn more<span class="sr-only"> about Repair of Damage</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card svc">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9" /><circle cx="12" cy="12" r="4" /></svg></span>
            <h3>Mill & Crusher Hardfacing</h3>
            <p>In-situ automated hardfacing of VRM rollers, tables, and segments.</p>
            <a href="/en/services/index.php#hardfacing" class="eq-more">Learn more<span class="sr-only"> about Mill & Crusher Hardfacing</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card svc">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="1" /><path d="M7 5v14M11 5v14M15 5v14M19 5v14" /></svg></span>
            <h3>Wear Plates</h3>
            <p>Locally made CCO and D-Plate™ wear-resistant plates and liners.</p>
            <a href="/en/services/index.php#wear-plates" class="eq-more">Learn more<span class="sr-only"> about Wear Plates</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
          <div class="eq-card svc">
            <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2 3 6v6c0 5 4 9 9 10 5-1 9-5 9-10V6l-9-4z" /></svg></span>
            <h3>Coating & Fabrication</h3>
            <p>Arc-spray protection coatings and ASME metal fabrication.</p>
            <a href="/en/services/index.php#coating" class="eq-more">Learn more<span class="sr-only"> about Coating & Fabrication</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
          </div>
        </div>
        <a href="/en/services/index.php" class="btn btn-svc">All Maintenance Services</a>
      </div>

    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container split">
    <div data-reveal>
      <span class="eyebrow">About Us</span>
      <h2 class="section-title">Your partner in equipment rental & industrial maintenance</h2>
      <p class="section-sub">
        We work with construction contractors and industrial plants on two fronts: lifting and installation
        equipment that's ready to run, and a specialized maintenance and welding team that repairs, hardfaces,
        and protects the critical components that keep heavy industry running.
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
          Welding-metallurgy experts for repairs and in-situ hardfacing
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
    <div class="stat"><strong data-count="80" data-suffix=" t">0</strong><span>Max crane lifting capacity</span></div>
    <div class="stat"><strong data-count="40" data-suffix="m">0</strong><span>Max boom lift height</span></div>
    <div class="stat svc"><strong data-count="250" data-suffix="+">0</strong><span>VRM hardfacing jobs</span></div>
    <div class="stat svc"><strong data-count="10" data-suffix="+">0</strong><span>Years in mill hardfacing</span></div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How It Works</span>
      <h2 class="section-title">From request to result in 4 steps</h2>
    </div>
    <div class="steps" data-reveal>
      <div class="step">
        <span class="step-num">1</span>
        <h3>Tell us what you need</h3>
        <p>Share the equipment you need, or the component and problem you're facing.</p>
      </div>
      <div class="step">
        <span class="step-num">2</span>
        <h3>Survey & quotation</h3>
        <p>We inspect the site or the part and send a detailed technical and commercial offer.</p>
      </div>
      <div class="step">
        <span class="step-num">3</span>
        <h3>Delivery or execution</h3>
        <p>We deliver the equipment, or carry out the repair on site or in our workshop, on schedule.</p>
      </div>
      <div class="step">
        <span class="step-num">4</span>
        <h3>Ongoing support</h3>
        <p>Regular follow-up throughout the rental period and after every repair.</p>
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
    <div class="cards-grid cols-3" data-reveal>
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
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18" /><path d="M5 21V8l5 3V8l5 3V5h4v16" /></svg></span>
        <h3>Cement & Mining</h3>
        <p>Repair and hardfacing of mills, crushers, kilns, and wear parts.</p>
      </div>
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 3h6" /><path d="M10 3v6L4 19a2 2 0 0 0 1.7 3h12.6a2 2 0 0 0 1.7-3L14 9V3" /></svg></span>
        <h3>Fertilizers & Chemicals</h3>
        <p>Protection coatings, wear plates, and maintenance for process equipment.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band" data-reveal>
      <div>
        <h3>Need equipment for your project, or a repair for your plant?</h3>
        <p>Get in touch now and receive a tailored quote within business hours.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/en/contact.php?service=cranes" class="btn btn-primary">Rental Quote</a>
        <a href="tel:<?= $SITE['phone_intl'] ?>" class="btn btn-outline">Rental: <?= $SITE['phone'] ?></a>
        <a href="/en/contact.php?service=svc-repair" class="btn btn-svc">Maintenance Request</a>
        <a href="tel:<?= $SITE['phone_svc_intl'] ?>" class="btn btn-outline">Maintenance: <?= $SITE['phone_svc'] ?></a>
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
        <summary>Can you carry out repairs and hardfacing inside our plant?</summary>
        <p>Yes. Our team performs in-situ repairs and automated hardfacing of mills and crushers on site, as well as
          workshop repairs and fabrication — during emergencies or planned shutdowns.</p>
      </details>
      <details class="faq-item">
        <summary>Do you manufacture wear plates locally?</summary>
        <p>Yes. Through our partnership with BCC, we produce chromium carbide overlay (CCO) and D-Plate™ wear plates at
          our own plant in Egypt.</p>
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