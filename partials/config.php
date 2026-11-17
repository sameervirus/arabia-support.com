<?php

/**
 * Site-wide configuration: company data, navigation map, translated strings.
 * Edit this single file to update contact details across the whole site.
 */

$SITE = [
  'name_ar'   => 'العربية لتأجير وصيانة العدد والمعدات',
  'name_en'   => 'Al-Arabia for Renting and Maintaining Tools and Equipment.',
  'short_ar'  => 'العربية',
  'short_en'  => 'Al-Arabia Support',
  'domain'    => 'www.arabia-support.com',
  'base_url'  => 'https://www.arabia-support.com',
  'phone'     => '01027762665',
  'phone_intl' => '+201027762665',
  'email'     => 'info@arabia-support.com',
  'address_ar' => 'بوابة 12، جمعية المهندسين العرب، الزوامل، انشاص، بلبيس، مصر',
  'address_en' => 'Gate 12, Arab Engineers Association, Zawamel, Inshas, Belbeis, Egypt',
  'whatsapp'  => '201027762665',
  // Maintenance & welding line has its own mobile
  'phone_svc'      => '01006683908',
  'phone_svc_intl' => '+201006683908',
  // Contact-page map pin (ARCONS Workshop): https://maps.app.goo.gl/pAJrfq4vTSBnHxLf8
  'map_coords' => '30.3120971,31.4464392',
];

/**
 * Central map of every page: keys are used by header/footer/breadcrumbs
 * to build the correct URL for the current language + its language-swap link.
 */
$PAGES = [
  'home'            => ['ar' => '/index.php',                              'en' => '/en/index.php'],
  'about'           => ['ar' => '/about.php',                              'en' => '/en/about.php'],
  'equipment'       => ['ar' => '/equipment/index.php',                    'en' => '/en/equipment/index.php'],
  'cranes'          => ['ar' => '/equipment/cranes.php',                   'en' => '/en/equipment/cranes.php'],
  'boom-lifts'      => ['ar' => '/equipment/boom-lifts-telehandlers.php',  'en' => '/en/equipment/boom-lifts-telehandlers.php'],
  'scissor-lifts'   => ['ar' => '/equipment/scissor-lifts.php',            'en' => '/en/equipment/scissor-lifts.php'],
  'tools'           => ['ar' => '/equipment/tools-general-equipment.php',  'en' => '/en/equipment/tools-general-equipment.php'],
  'services'        => ['ar' => '/services/index.php',                     'en' => '/en/services/index.php'],
  'clients'         => ['ar' => '/clients.php',                            'en' => '/en/clients.php'],
  'contact'         => ['ar' => '/contact.php',                            'en' => '/en/contact.php'],
];

/**
 * Options for the "service needed" select on the contact form, grouped by business line.
 * Keys are posted as `equipment` and used by php/contact-handler.php for the email label.
 * Pages can pre-select one with ?service=<key>.
 */
$SERVICE_OPTIONS = [
  'rental' => [
    'label' => ['ar' => 'تأجير المعدات', 'en' => 'Equipment Rental'],
    'items' => [
      'cranes'        => ['ar' => 'أوناش (كرينات)',          'en' => 'Cranes'],
      'boom-lifts'    => ['ar' => 'بوم ليفت / تلي هاندلر',   'en' => 'Boom Lifts / Telehandlers'],
      'scissor-lifts' => ['ar' => 'سيزر ليفت',               'en' => 'Scissor Lifts'],
      'tools'         => ['ar' => 'أدوات ومعدات عامة',        'en' => 'Tools & General Equipment'],
    ],
  ],
  'services' => [
    'label' => ['ar' => 'الصيانة واللحام', 'en' => 'Maintenance & Welding'],
    'items' => [
      'svc-repair'      => ['ar' => 'إصلاح أعطال وكسور / سبائك صعبة', 'en' => 'Repair of Damage / Difficult Alloys'],
      'svc-hardfacing'  => ['ar' => 'تقسية الطواحين والكسارات',      'en' => 'Mill & Crusher Hardfacing'],
      'svc-wear-plates' => ['ar' => 'ألواح مقاومة للتآكل (CCO / D-Plate)', 'en' => 'Wear Plates (CCO / D-Plate)'],
      'svc-coating'     => ['ar' => 'طلاءات الحماية',                'en' => 'Protection Coating'],
      'svc-fabrication' => ['ar' => 'التصنيع المعدني',               'en' => 'Metal Fabrication'],
    ],
  ],
];

/** Core clients of the maintenance & welding line (logos in /assets/img/clients/svc-*.jpg) */
$SERVICE_CLIENTS = [
  'svc-rhi.jpg'            => ['ar' => 'RHI',                         'en' => 'RHI'],
  'svc-asec.jpg'           => ['ar' => 'أسيك للهندسة والإدارة',       'en' => 'ASEC Engineering & Management'],
  'svc-sinoma.jpg'         => ['ar' => 'سينوما',                      'en' => 'Sinoma'],
  'svc-misr-cement.jpg'    => ['ar' => 'مجموعة مصر للأسمنت',          'en' => 'Misr Cement Group'],
  'svc-lafarge.jpg'        => ['ar' => 'لافارج',                      'en' => 'Lafarge'],
  'svc-sinai-cement.jpg'   => ['ar' => 'أسمنت سيناء',                 'en' => 'Sinai Cement'],
  'svc-misr-beni-suef.jpg' => ['ar' => 'مصر بني سويف للأسمنت',        'en' => 'Misr Beni Suef Cement'],
  'svc-wadi-el-nile.jpg'   => ['ar' => 'أسمنت وادي النيل',            'en' => 'Wadi El Nile Cement'],
  'svc-vicat.jpg'          => ['ar' => 'فيكا مصر لصناعة الأسمنت',     'en' => 'Vicat Egypt for Cement Industry'],
  'svc-ferchem.jpg'        => ['ar' => 'فيركيم مصر',                  'en' => 'Ferchem Masr'],
  'svc-amreyah.jpg'        => ['ar' => 'أسمنت العامرية',              'en' => 'Amreyah Cement'],
  'svc-arabian-cement.jpg' => ['ar' => 'العربية للأسمنت',             'en' => 'Arabian Cement'],
];

/** Main navigation, in order, with translated labels */
$NAV = [
  ['key' => 'home',      'ar' => 'الرئيسية',   'en' => 'Home'],
  ['key' => 'about',     'ar' => 'من نحن',      'en' => 'About Us'],
  ['key' => 'equipment', 'ar' => 'التأجير',  'en' => 'Rental'],
  ['key' => 'services',  'ar' => 'الصيانة',  'en' => 'Maintenance'],
  ['key' => 'clients',   'ar' => 'عملاؤنا',      'en' => 'Our Clients'],
  ['key' => 'contact',   'ar' => 'اتصل بنا',     'en' => 'Contact Us'],
];

function ph_url($key, $lang)
{
  global $PAGES;
  return $PAGES[$key][$lang] ?? ($lang === 'ar' ? '/index.php' : '/en/index.php');
}