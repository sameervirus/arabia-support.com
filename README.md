# Al-Arabia Support

Marketing website for **العربية لتأجير وصيانة العدد والمعدات** (Al-Arabia for Renting and Maintaining Tools and Equipment) — a construction equipment rental company in Egypt. Built as a bilingual (Arabic/English) static PHP site, no framework or build step required.

Live at [arabia-support.com](https://www.arabia-support.com).

## Structure

```
index.php, about.php, clients.php, contact.php   Arabic pages (default)
en/                                               English mirror of every page
equipment/                                        Equipment category pages (cranes, boom lifts,
en/equipment/                                     scissor lifts, tools & general equipment)
partials/                                         Shared head/header/footer + site config
php/contact-handler.php                           Handles the quote-request form (AJAX, mail())
assets/css/style.css                              Site styles
assets/js/main.js                                 Front-end behavior (nav, forms, etc.)
assets/img/                                        Images
404.php, en/404.php                               Custom 404 pages
robots.txt, sitemap.xml                           SEO files
.htaccess                                          Apache rewrite/config rules
```

## Configuration

All site-wide data — company name, contact details, address, and the page/nav URL map — lives in [partials/config.php](partials/config.php). Edit that single file to update contact info or add a page across the whole site.

## Contact form

Submissions from `/contact.php` and `/en/contact.php` post to [php/contact-handler.php](php/contact-handler.php), which validates input and sends a plain-text email via PHP's `mail()` to the address configured in `config.php`. Requires a working mail transport on the host (e.g. sendmail/Postfix) since it does not use SMTP/PHPMailer.

## Local development

Any PHP-enabled web server works, e.g.:

```bash
php -S localhost:8000
```

Then visit `http://localhost:8000/` (Arabic) or `http://localhost:8000/en/index.php` (English).
