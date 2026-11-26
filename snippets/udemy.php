<?php
  // DATI UDEMY: statistiche pubbliche del corso e coupon del giorno.
  //
  // Entrambe le fonti sono servizi esterni: se non rispondono (irraggiungibili,
  // lenti, JSON storto) la pagina continua a funzionare senza stampare Warning.
  // Senza statistiche la fascia dei contatori resta nascosta; senza coupon si
  // usa il link normale al corso.

  $ctx = stream_context_create(array('http' => array('timeout' => 3)));

  // --- Statistiche ---
  $subs = $lessons = $reviews = 0;

  $json = @file_get_contents('https://www.udemy.com/api-2.0/courses/2712838?fields[course]=title,num_subscribers,num_lectures,num_reviews', false, $ctx);
  if ($json !== false) {
    $corso = json_decode($json, true);
    if (is_array($corso)) {
      $subs    = (int) ($corso['num_subscribers'] ?? 0);
      $lessons = (int) ($corso['num_lectures'] ?? 0);
      $reviews = (int) ($corso['num_reviews'] ?? 0);
    }
  }

  $show_counters = ($subs > 0 || $lessons > 0 || $reviews > 0);

  // --- Coupon ---
  $n101 = 'https://www.udemy.com/course/networking-101-corso-di-reti-da-zero/?referralCode=B2B920B2090248291B6B';

  $json = @file_get_contents('http://udemy-coupon-dump', false, $ctx);
  if ($json !== false) {
    $coupons = json_decode($json, true);
    if (is_array($coupons) && !empty($coupons['Networking 101'])) {
      $n101 = $coupons['Networking 101'];
    }
  }
?>
