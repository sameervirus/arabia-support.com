<?php
$lang    = 'en';
$pageKey = 'contact';
$title   = 'Contact Us | Al-Arabia for Renting and Maintaining Tools and Equipment';
$description = 'Get in touch with Al-Arabia for Renting and Maintaining Tools and Equipment to request a quote for equipment rental or for maintenance, welding, and hardfacing services. Phone: 01027762665.';
require_once __DIR__ . '/../partials/config.php';
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
$mapQuery = $SITE['map_coords'];
?>

<section class="page-header">
  <div class="container">
    <div class="breadcrumb"><a href="/en/index.php">Home</a> / <span>Contact Us</span></div>
    <h1>Contact Us</h1>
    <p>Our team is ready to answer your questions and prepare a quote that fits your project.</p>
  </div>
</section>

<section class="section">
  <div class="container contact-grid">

    <div data-reveal>
      <div class="contact-card">
        <h2>Contact Information</h2>
        <div class="contact-line">
          <span class="dot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg></span>
          <div>
            <strong>Equipment Rental</strong>
            <a href="tel:<?= $SITE['phone_intl'] ?>" dir="ltr"><?= $SITE['phone'] ?></a>
          </div>
        </div>
        <div class="contact-line">
          <span class="dot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg></span>
          <div>
            <strong>Maintenance & Welding</strong>
            <a href="tel:<?= $SITE['phone_svc_intl'] ?>" dir="ltr"><?= $SITE['phone_svc'] ?></a>
          </div>
        </div>
        <div class="contact-line">
          <span class="dot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 6 12 13 2 6" />
              <rect x="2" y="4" width="20" height="16" rx="2" />
            </svg></span>
          <div>
            <strong>Email</strong>
            <a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a>
          </div>
        </div>
        <div class="contact-line">
          <span class="dot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg></span>
          <div>
            <strong>Address</strong>
            <span><?= $SITE['address_en'] ?></span>
          </div>
        </div>
        <div class="contact-line">
          <span class="dot"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="9" />
              <path d="M12 7v5l3 3" />
            </svg></span>
          <div>
            <strong>Working Hours</strong>
            <span>24/7 technical support & emergency response</span>
          </div>
        </div>
        <a href="https://wa.me/<?= $SITE['whatsapp'] ?>" class="btn btn-primary btn-block" target="_blank"
          rel="noopener">Message Us on WhatsApp</a>
      </div>
      <div class="map-embed">
        <iframe src="https://www.google.com/maps?q=<?= $mapQuery ?>&z=15&output=embed" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade" title="Our location on the map"></iframe>
      </div>
    </div>

    <div data-reveal>
      <div class="form-card">
        <h2 style="font-size:1.3rem;font-weight:800;color:var(--navy-900);margin-bottom:22px">Request a Quote</h2>
        <form id="quote-form" action="/php/contact-handler.php" method="post" data-sending-label="Sending..."
          data-success-label="Your request has been received. Our team will contact you shortly."
          data-error-label="Something went wrong while sending. Please try again or call us directly.">
          <input type="hidden" name="lang" value="en">
          <input type="hidden" name="ts" value="<?= time() ?>">
          <div class="form-row">
            <div class="field">
              <label for="name">Full Name *</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="field">
              <label for="phone">Phone Number *</label>
              <input type="tel" id="phone" name="phone" required>
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label for="email">Email</label>
              <input type="email" id="email" name="email">
            </div>
            <div class="field">
              <label for="equipment">Service Needed</label>
              <?php $preselect = (string)($_GET['service'] ?? ''); ?>
              <select id="equipment" name="equipment">
                <option value="">Select a service or equipment</option>
                <?php foreach ($SERVICE_OPTIONS as $group): ?>
                <optgroup label="<?= htmlspecialchars($group['label']['en']) ?>">
                  <?php foreach ($group['items'] as $key => $labels): ?>
                  <option value="<?= $key ?>" <?= $preselect === $key ? 'selected' : '' ?>><?= htmlspecialchars($labels['en']) ?></option>
                  <?php endforeach; ?>
                </optgroup>
                <?php endforeach; ?>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
          <div class="field">
            <label for="message">Request Details</label>
            <textarea id="message" name="message"
              placeholder="Rental duration and project location, or a description of the part and the problem..."></textarea>
          </div>
          <div class="field" style="display:none">
            <label for="company">Company</label>
            <input type="text" id="company" name="company" tabindex="-1" autocomplete="off">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Send Request</button>
          <div class="form-status"></div>
          <p class="form-note">By submitting this form, you agree to have our team contact you regarding your request.
          </p>
        </form>
      </div>
    </div>

  </div>
</section>

<?php require __DIR__ . '/../partials/footer.php'; ?>