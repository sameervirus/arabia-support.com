<?php
$lang    = 'en';
$pageKey = 'cranes';
$title   = 'Crane Rental: All Terrain, Rough Terrain & Truck Cranes | Al-Arabia';
$description = 'Rent cranes of all types: All Terrain, Rough Terrain, and Truck Cranes with lifting capacities from 30 to 80 tons, with trained operating crews for construction and industrial projects in Egypt.';
require_once __DIR__ . '/../../partials/config.php';
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../partials/header.php';
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="/en/index.php">Home</a> / <a href="/en/equipment/index.php">Equipment</a> /
      <span>Cranes</span>
    </div>
    <h1>Crane Rental</h1>
    <p>Complete lifting solutions for construction and industrial sites, with capacities from 30 to 80 tons and types
      suited to different ground conditions.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Crane Types</span>
      <h2 class="section-title">Choose the right type for your site</h2>
    </div>

    <div class="fleet-list" data-reveal>
      <div class="fleet-row">
        <div class="img-placeholder ratio-1-1">
          <div class="ph-inner">
            <img src="/assets/img/equipment/crane1.jpg" alt="أوناش All Terrain" />
          </div>
        </div>
        <div>
          <h4>All Terrain Cranes</h4>
          <p>Versatile cranes with highway speed capacity and maneuverability, ideal for both on- and off-road
            construction and industrial projects. All terrain cranes can access confined job sites with all-wheel
            steering.</p>
          <div class="fleet-tags">
            <span>Capacity 30–80 tons</span>
            <span>All-wheel steering</span>
            <span>Suited for confined sites</span>
          </div>
        </div>
      </div>

      <div class="fleet-row">
        <div class="img-placeholder ratio-1-1">
          <div class="ph-inner">
            <img src="/assets/img/equipment/crane2.jpg" alt="أوناش Rough Terrain" />
          </div>
        </div>
        <div>
          <h4>Rough Terrain Cranes</h4>
          <p>Compact cranes with a single cab for both driving and lifting operation. They offer great maneuverability
            in narrow spaces and can be driven on rough or uneven terrain thanks to all-wheel drive.</p>
          <div class="fleet-tags">
            <span>Capacity 30–80 tons</span>
            <span>Single driving/operating cab</span>
            <span>Suited for rough terrain</span>
          </div>
        </div>
      </div>

      <div class="fleet-row">
        <div class="img-placeholder ratio-1-1">
          <div class="ph-inner">
            <img src="/assets/img/equipment/crane3.jpg" alt="أوناش Truck Cranes" />
          </div>
        </div>
        <div>
          <h4>Truck Cranes</h4>
          <p>Heavy-duty equipment that relies on an internal hydraulic system to hoist and lift heavy loads. They're set
            on wheels to give them greater mobility on the job site.</p>
          <div class="fleet-tags">
            <span>Capacity 30–70 tons</span>
            <span>Internal hydraulic system</span>
            <span>Greater on-site mobility</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section bg-tint">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Spec Sheet</span>
      <h2 class="section-title">General specifications by crane type</h2>
    </div>
    <div style="overflow-x:auto" data-reveal>
      <table class="spec-table">
        <thead>
          <tr>
            <th>Type</th>
            <th>Lifting Capacity</th>
            <th>Best Suited For</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>All Terrain Crane</td>
            <td>30–80 tons</td>
            <td>Mixed sites (roads and uneven ground)</td>
          </tr>
          <tr>
            <td>Rough Terrain Crane</td>
            <td>30–80 tons</td>
            <td>Confined spaces and rough terrain</td>
          </tr>
          <tr>
            <td>Truck Crane</td>
            <td>30–70 tons</td>
            <td>Sites needing fast on-site mobility</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="cta-band" data-reveal>
      <div>
        <h3>Need a crane for your project?</h3>
        <p>Tell us the required lifting capacity and site conditions, and we'll recommend the right crane.</p>
      </div>
      <div style="display:flex;gap:14px;flex-wrap:wrap">
        <a href="/en/contact.php" class="btn btn-primary">Get a Quote</a>
        <a href="/en/equipment/index.php" class="btn btn-outline">All Equipment</a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../../partials/footer.php'; ?>