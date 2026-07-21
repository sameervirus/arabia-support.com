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
  'clients'         => ['ar' => '/clients.php',                            'en' => '/en/clients.php'],
  'contact'         => ['ar' => '/contact.php',                            'en' => '/en/contact.php'],
];

/** Main navigation, in order, with translated labels */
$NAV = [
  ['key' => 'home',      'ar' => 'الرئيسية',   'en' => 'Home'],
  ['key' => 'about',     'ar' => 'من نحن',      'en' => 'About Us'],
  ['key' => 'equipment', 'ar' => 'المعدات',      'en' => 'Equipment'],
  ['key' => 'clients',   'ar' => 'عملاؤنا',      'en' => 'Our Clients'],
  ['key' => 'contact',   'ar' => 'اتصل بنا',     'en' => 'Contact Us'],
];

function ph_url($key, $lang)
{
  global $PAGES;
  return $PAGES[$key][$lang] ?? ($lang === 'ar' ? '/index.php' : '/en/index.php');
}