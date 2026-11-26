<?php
  // SHOW PROMO BANNER?
  // promo/promo.json (montato dalla ConfigMap "promo", stesso percorso di
  // CorsoLinux), esempio:
  // {"promo_str": "Offerta a tempo limitato!<br>Tutti i corsi in <b>offerta speciale</b><br>termina venerdì", "expire_date": "07-03-2026 23:59:59"}
  // expire_date in formato dd-mm-YYYY HH:MM:SS
  $show_promo = false;
  $promo_str = "";
  $promo_cta_text = "Vai all'offerta!";

  $promo_file = __DIR__ . '/../promo/promo.json';
  if (is_readable($promo_file)) {
    $promo = json_decode(file_get_contents($promo_file), true);
    if (is_array($promo)) {
      $promo_str = $promo["promo_str"] ?? "";
      $promo_expire_date = strtotime($promo["expire_date"] ?? "");
      if ($promo_str !== "" && $promo_expire_date !== false && time() <= $promo_expire_date) {
        $show_promo = true;
      }
    }
  }
?>
