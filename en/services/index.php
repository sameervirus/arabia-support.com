<?php
$lang    = 'en';
$pageKey = 'services';
$title   = 'Industrial Maintenance, Welding & Hardfacing Services | Al-Arabia';
$description = 'Al-Arabia industrial maintenance services: repair of cracks and fractures, difficult-to-weld alloys, in-situ VRM and crusher hardfacing, locally made CCO and D-Plate wear plates, arc-spray protection coating, and ASME metal fabrication in Egypt.';
require_once __DIR__ . '/../../partials/config.php';
$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'Service',
  'serviceType' => 'Industrial maintenance, welding and hardfacing',
  'provider' => [
    '@type' => 'LocalBusiness',
    'name' => $SITE['name_en'],
    'url' => $SITE['base_url'] . '/en/index.php',
    'telephone' => $SITE['phone_svc_intl'],
  ],
  'areaServed' => 'EG',
];
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../partials/header.php';
$check = '<svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor"><path d="M20 6 9 17l-5-5" /></svg>';
?>

<section class="page-header svc">
  <div class="container">
    <div class="breadcrumb"><a href="/en/index.php">Home</a> / <span>Maintenance & Welding</span></div>
    <h1>Industrial Maintenance, Welding & Hardfacing</h1>
    <p>Your professional partner for welding-metallurgy applications. From failure analysis to tailored welding,
      metallurgical, and mechanical solutions, we deliver cost-effective repairs built for demanding operating
      conditions — on site or in our workshop.</p>
    <nav class="chip-nav" aria-label="Services">
      <a href="#repair">Repair of Damage</a>
      <a href="#alloys">Difficult-to-Weld Alloys</a>
      <a href="#hardfacing">Mill & Crusher Hardfacing</a>
      <a href="#wear-plates">Wear Plates</a>
      <a href="#coating">Protection Coating</a>
      <a href="#fabrication">Metal Fabrication</a>
    </nav>
  </div>
</section>

<section class="section svc-block" id="repair">
  <div class="container split">
    <div data-reveal>
      <span class="eyebrow svc">Emergency & Planned Maintenance</span>
      <h2 class="section-title">Repair of Damage</h2>
      <p class="section-sub">Our service team repairs cracks, fractures, spalling, and other critical damage to
        heavy-industry components — through emergency response or planned maintenance.</p>
      <p class="section-sub">From failure analysis to tailored welding, metallurgical, and mechanical solutions, we
        deliver cost-effective repairs built for demanding operating conditions.</p>
      <ul class="check-list">
        <li><?= $check ?> Failure analysis and tailored repair procedures</li>
        <li><?= $check ?> Emergency call-outs and planned shutdown work</li>
        <li><?= $check ?> Kiln tyres, mill shells, liners, and heavy structures</li>
      </ul>
    </div>
    <div class="photo-grid" data-reveal>
      <figure class="tall"><img src="/assets/img/services/repair-mill-welder.jpg" alt="Welder repairing a mill shell on site" width="900" height="1168" loading="lazy"></figure>
      <figure class="tall"><img src="/assets/img/services/repair-crack.jpg" alt="Cracked kiln component before repair" width="900" height="1303" loading="lazy"></figure>
      <figure><img src="/assets/img/services/repair-kiln-tyre.jpg" alt="Kiln tyre after repair" width="900" height="1380" loading="lazy"></figure>
      <figure><img src="/assets/img/services/repair-liner.jpg" alt="Damaged mill liner" width="900" height="1178" loading="lazy"></figure>
    </div>
  </div>
</section>

<section class="section svc-block bg-tint" id="alloys">
  <div class="container split">
    <div class="photo-grid" data-reveal>
      <figure><img src="/assets/img/services/alloy-shaft-buildup.jpg" alt="Weld build-up on a damaged shaft" width="1000" height="896" loading="lazy"></figure>
      <figure><img src="/assets/img/services/alloy-shaft-machined.jpg" alt="Shaft machined after weld repair" width="1000" height="895" loading="lazy"></figure>
      <figure><img src="/assets/img/services/alloy-casting-repair.jpg" alt="Crack repair on a cast component" width="1000" height="893" loading="lazy"></figure>
      <figure><img src="/assets/img/services/alloy-repair-4.jpg" alt="Repaired high-alloy steel component" width="1000" height="894" loading="lazy"></figure>
    </div>
    <div data-reveal>
      <span class="eyebrow svc">Welding Metallurgy</span>
      <h2 class="section-title">Repair of Critical Components in Difficult-to-Weld Alloys</h2>
      <p class="section-sub">We specialize in repairing challenging alloys, including cast iron, manganese steel, and
        high-alloy steels. With advanced welding techniques and precise heat control, we deliver reliable repairs
        designed to reduce cracking and distortion, restore component performance, and extend service life in
        demanding environments.</p>
      <ul class="check-list">
        <li><?= $check ?> Cast iron, manganese steel, and high-alloy steels</li>
        <li><?= $check ?> Precise heat control to minimize cracking and distortion</li>
        <li><?= $check ?> Restored performance and extended service life</li>
      </ul>
    </div>
  </div>
</section>

<section class="section svc-block" id="hardfacing">
  <div class="container split">
    <div data-reveal>
      <span class="eyebrow svc">In-situ Hardfacing</span>
      <h2 class="section-title">In-situ Hardfacing for Crushers & Mills</h2>
      <p class="section-sub">For more than a decade, our team has been a market leader in hardfacing services for
        vertical roller mills (VRMs).</p>
      <div class="highlight-num"><strong>250+</strong> VRM hardfacing jobs completed</div>
      <p class="section-sub" style="margin-top:22px">We continually upgrade our VRM hardfacing capabilities to stay at
        the forefront of the market. Our fully automated welding machines feature IGBT inverter technology, with
        self-adjusting parameters and low dilution to build up a safe thickness while minimizing heat input.</p>

      <h3 class="svc-sub">Hardfacing of Magotteaux Xwin® Segments</h3>
      <p class="section-sub">Hardfacing ceramic-reinforced metal matrix composite (MMC) segments is a demanding task.
        Using precision-controlled welding parameters and a low-dilution technique, we applied a 35 mm in-situ overlay
        with excellent bonding and no spalling or cracking.</p>
    </div>
    <div class="photo-grid" data-reveal>
      <figure class="tall"><img src="/assets/img/services/vrm-roller-hardfaced.jpg" alt="VRM roller after in-situ hardfacing" width="900" height="1504" loading="lazy"></figure>
      <figure class="tall"><img src="/assets/img/services/vrm-roller-welding.jpg" alt="Automated hardfacing of a VRM roller" width="900" height="1507" loading="lazy"></figure>
      <figure class="wide"><img src="/assets/img/services/xwin-1.jpg" alt="Hardfaced Magotteaux Xwin segments" width="1000" height="728" loading="lazy"></figure>
    </div>
  </div>
</section>

<section class="section svc-block bg-tint" id="wear-plates">
  <div class="container split">
    <div class="photo-grid" data-reveal>
      <figure class="wide"><img src="/assets/img/services/dplate-pipe.jpg" alt="Fabricating a wear-resistant pipe from D-Plate" width="1200" height="923" loading="lazy"></figure>
      <figure><img src="/assets/img/services/plates-stack.jpg" alt="Finished wear plates ready for delivery" width="1000" height="896" loading="lazy"></figure>
      <figure><img src="/assets/img/services/plates-install.jpg" alt="Assembling a wear-plate lined chute" width="1000" height="898" loading="lazy"></figure>
      <figure><img src="/assets/img/services/cco-plate-1.jpg" alt="Chromium carbide overlay plate surface" width="800" height="922" loading="lazy"></figure>
      <figure><img src="/assets/img/services/dplate-1.jpg" alt="D-Plate wear parts" width="900" height="793" loading="lazy"></figure>
    </div>
    <div data-reveal>
      <span class="eyebrow svc">Made in Egypt</span>
      <h2 class="section-title">Locally Manufactured Wear Plates</h2>

      <h3 class="svc-sub" style="margin-top:6px">Chromium Carbide Overlay (CCO) Wear Plates</h3>
      <p class="section-sub">We have established a strategic partnership with Vietnam-based BCC to localize the
        production of chromium carbide overlay (CCO) wear plates. BCC transferred its technical expertise and installed
        production equipment featuring its technology at our facility — production is now underway at our plant.</p>

      <h3 class="svc-sub">D-Plate™ Engineered Wear Plates</h3>
      <p class="section-sub">Manufactured locally using BCC's technology, D-Plate™ combines a tough steel base with a
        hard, carbide-rich wear-resistant overlay. Produced through BCC's proprietary Powder Overlay Process (POP), the
        overlay's alloy composition can be tailored to the application.</p>
      <ul class="check-list">
        <li><?= $check ?> Engineered protection against abrasion and impact</li>
        <li><?= $check ?> Resistance to erosion, corrosion, and heat</li>
        <li><?= $check ?> Plates, liners, chutes, and pipes</li>
      </ul>
    </div>
  </div>
</section>

<section class="section svc-block" id="coating">
  <div class="container split">
    <div data-reveal>
      <span class="eyebrow svc">Surface Engineering</span>
      <h2 class="section-title">Protection Coating</h2>
      <p class="section-sub">Our new arc-spray system is now fully operational, expanding our surface engineering
        capabilities. It applies high-performance metallic coatings that enhance wear resistance and corrosion
        protection across a wide range of industrial applications.</p>
      <ul class="check-list">
        <li><?= $check ?> Thermal arc-spray metallic coatings</li>
        <li><?= $check ?> Wear and corrosion protection</li>
        <li><?= $check ?> Boiler tubes, rolls, and process equipment</li>
      </ul>
    </div>
    <div class="photo-grid" data-reveal>
      <figure class="wide"><img src="/assets/img/services/coating-3.jpg" alt="Arc-spray coating of a large roll" width="1600" height="548" loading="lazy"></figure>
      <figure><img src="/assets/img/services/coating-1.jpg" alt="Technician applying protective coating inside a boiler" width="1000" height="893" loading="lazy"></figure>
      <figure><img src="/assets/img/services/coating-2.jpg" alt="Coated boiler tube walls" width="1000" height="896" loading="lazy"></figure>
    </div>
  </div>
</section>

<section class="section svc-block bg-tint" id="fabrication">
  <div class="container split">
    <div class="photo-grid" data-reveal>
      <figure><img src="/assets/img/services/fab-cone.jpg" alt="Fabricated steel cone" width="800" height="813" loading="lazy"></figure>
      <figure><img src="/assets/img/services/fab-structure.jpg" alt="Fabricated and erected steel structure" width="800" height="814" loading="lazy"></figure>
      <figure><img src="/assets/img/services/fab-pipes.jpg" alt="Coated pipe spools ready for shipping" width="800" height="813" loading="lazy"></figure>
      <figure><img src="/assets/img/services/fab-ficep.jpg" alt="CNC beam processing line in our workshop" width="800" height="814" loading="lazy"></figure>
    </div>
    <div data-reveal>
      <span class="eyebrow svc">Our Workshop</span>
      <h2 class="section-title">Metal Fabrication to ASME Specifications</h2>
      <p class="section-sub">In our workshop, we have the full range of capabilities to execute metal fabrication,
        including industrial coatings and engineering inspection, in accordance with ASME specifications.</p>
      <ul class="check-list">
        <li><?= $check ?> Steel structures, cones, hoppers, and pipe spools</li>
        <li><?= $check ?> CNC cutting and beam processing</li>
        <li><?= $check ?> Industrial coatings and engineering inspection</li>
      </ul>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow svc">Why Al-Arabia</span>
      <h2 class="section-title">Your professional partner for maintenance & welding applications</h2>
      <p class="section-sub" style="margin-inline:auto">We believe in building long-lasting partnerships with our
        clients. Let us be your reliable ally in overcoming challenges, enhancing equipment performance, and optimizing
        operations.</p>
    </div>
    <div class="cards-grid" data-reveal>
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7" /><path d="m21 21-4.3-4.3" /></svg></span>
        <h3>Failure Analysis First</h3>
        <p>We study the root cause before choosing the welding procedure and consumables.</p>
      </div>
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9" /><path d="M12 7v5l3 3" /></svg></span>
        <h3>Emergency or Planned</h3>
        <p>Rapid response for breakdowns, and careful planning for scheduled shutdowns.</p>
      </div>
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z" /><circle cx="12" cy="10" r="3" /></svg></span>
        <h3>In-situ Capability</h3>
        <p>Automated hardfacing and repairs performed inside your plant, minimizing downtime.</p>
      </div>
      <div class="eq-card svc">
        <span class="eq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18" /><path d="M5 21V8l5 3V8l5 3V5h4v16" /></svg></span>
        <h3>Local Manufacturing</h3>
        <p>Wear plates and fabricated parts produced at our own plant in Egypt.</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow svc">Trusted by Industry</span>
      <h2 class="section-title">Our core clients</h2>
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
        <h3>Have a worn or damaged component?</h3>
        <p>Send us photos and details of the part — our welding engineers will recommend the right repair or wear
          solution.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/en/contact.php?service=svc-repair" class="btn btn-svc">Request a Technical Visit</a>
        <a href="tel:<?= $SITE['phone_svc_intl'] ?>" class="btn btn-outline"><?= $SITE['phone_svc'] ?></a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>
