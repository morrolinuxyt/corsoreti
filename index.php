<!DOCTYPE html>
<html lang="it" class="theme-auto">

<head>
  <script defer src="https://analytics.morrolinux.it/script.js" data-website-id="3e22c6fa-de57-42a4-a5d7-1b36a91a45a2"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Chrome Mobile Top Bar Color-->
  <meta name="theme-color" content="#343a40" />

  <meta name="description" content="Studia i fondamenti del Networking: un settore in continua evoluzione - corso bestseller italiano. Scopri la nostra selezione di corsi ideati su misura per te!">

  <link rel="canonical" href="https://corsoreti.it/">

  <title>Networking 101: il corso bestseller in italiano | Corso Reti</title>

<?php include 'snippets/theme-init.php';?>
</head>

<body id="page-top" class="landing-page" style="--accent: #1fa2c4;">

  <?php include 'snippets/promo-banner.php';?>
  <?php include 'snippets/udemy.php';?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger font-weight-light" href="#page-top"><b>CorsoReti</b>.it</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a data-umami-event="navbar_corso" class="nav-link js-scroll-trigger" href="#corso">Corso</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="navbar_imparerai" class="nav-link js-scroll-trigger" href="#imparerai">Cosa imparerai</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="navbar_recensioni" class="nav-link js-scroll-trigger" href="#recensioni">Recensioni</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="navbar_faq" class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a data-umami-event="navbar_docente" class="nav-link js-scroll-trigger" href="#docente">Docente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php include 'snippets/theme-toggle.php';?>

  <?php /* Hero: il cielo notturno con la rete di particelle è l'identità di
           CorsoReti e prende il posto del teaser video delle altre landing. */ ?>
  <header class="landing landing--particles">
    <div id="particles-js"></div>
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center text-white">
          <h1 class="font-weight-light">Il corso bestseller italiano sul Networking</h1>
          <p class="lead">Impara i fondamenti della tecnologia che ha rivoluzionato il nostro modo di comunicare.</p>
          <?php if($show_promo): ?>
            <a data-umami-event="header_button_SPECIAL_OFFER" id="promo" class="js-scroll-trigger banner" href="#corso"><div><?php echo $promo_str; ?></div></a>
          <?php else: ?>
            <a data-umami-event="header_button_scopri" class="btn btn-lg btn-outline-light js-scroll-trigger" href="#corso">Scopri</a>
          <?php endif ?>
        </div>
      </div>
    </div>
  </header>

  <section id="perche">
    <div class="container">
      <h2 class="section-title">Perché studiare Networking?</h2>

      <p class="section-note text-justify">
        Il mondo come lo conosciamo oggi è tale grazie ad <b>Internet</b> e all'invenzione del <b>web</b>, due tecnologie che hanno
        rivoluzionato il nostro modo di comunicare, lavorare e perfino fare la spesa.
        Ad oggi sono presenti nel mondo <b>oltre 22 miliardi di dispositivi connessi</b> alla rete, quasi 3 volte la popolazione mondiale!
      </p>

      <p class="section-note text-justify">
        Realizzare e mantenere un'infrastruttura di tale portata richiede una coordinazione internazionale tra gli innumerevoli enti
        indipendenti presenti sul territorio (detti <i>Autonomous Systems</i>) incaricati della gestione di <b>enormi datacenter</b>
        e backbone transoceaniche per <b>oltre settecentomila kilometri di cavi</b> &mdash; fra terrestri e sottomarini &mdash;
        stesi sia con fondi pubblici che privati da importanti nomi come <b>Microsoft, Google, Facebook</b> e molti altri.
      </p>

      <p class="section-claim">
        Essere parte di questa realtà significa lavorare in un settore <b>stimolante</b>, ricco di sfide e
        <b>in continua evoluzione</b>.
      </p>

      <div class="yt_video">
        <iframe src="https://www.youtube-nocookie.com/embed/giF9F8s9hnU?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <section id="corso" class="section-alt">
    <div class="container">
      <h2 class="section-title">Networking 101</h2>

      <p class="section-note text-justify">
        Il mondo delle <b>Reti di calcolatori</b> ti affascina? O forse stai solo studiando per un <b>compito di sistemi</b>?
        Che tu sia un <b>appassionato</b>, uno <b>studente delle superiori</b> o un <b>universitario</b> alle prime armi con
        <i>Protocolli e Architetture di Rete</i>, sei nel posto giusto!
      </p>

      <p class="section-note text-justify">
        Ho pensato questo corso di Reti per guidarti in una <b>panoramica sul mondo del Networking</b> ed i suoi protocolli senza
        tralasciare, ove necessario, importanti <b>cenni sulla sicurezza informatica</b> troppo spesso "ignorati" nei corsi base di Networking.
      </p>

      <div class="row justify-content-center" style="margin-top: 3.5rem;">
        <div class="col-lg-7 col-md-9">
          <div class="card">
            <?php /* Superficie cliccabile della scheda: ancora vuota stesa sopra,
                     non un wrapper (conterrebbe il pulsante, e le ancore annidate
                     non sono valide). Vedi .card-link nel CSS. */ ?>
            <a data-umami-event="goto_n101_INVISIBLE" class="card-link" href="<?php echo $n101; ?>"
               tabindex="-1" aria-hidden="true" title="Corso Networking 101"></a>
            <img src="assets/corso-networking-101-cover.jpg" class="card-img-top" alt="Copertina corso Networking 101" title="Corso di Reti online in italiano">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">Networking 101</h3>
              <p class="card-text">
                Percorreremo tutti i livelli dello <b>stack TCP/IP</b> soffermandoci sul funzionamento in dettaglio di tecnologie
                e protocolli di particolare attualità o rilevanza.<br><br>
                Oltre a fornire una <b>visione d'insieme</b> non mancherà &mdash; dove opportuno &mdash; un'analisi critica di
                <b>debolezze e vulnerabilità</b> dei protocolli in esame.<br><br>
              </p>
              <div class="card-actions mt-auto">
                <?php if($show_promo): ?>
                <a data-umami-event="goto_n101_SPECIAL_OFFER" title="Corso Networking 101" href="<?php echo $n101; ?>" class="btn btn-special-offer"><?php echo $promo_cta_text; ?></a>
                <?php else: ?>
                <a data-umami-event="goto_n101" title="Corso Networking 101" href="<?php echo $n101; ?>" class="btn btn-primary"><b>Vai al corso</b></a>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="imparerai">
    <div class="container">
      <h2 class="section-title">Cosa imparerai</h2>

      <p class="section-lead text-center">
        Come funziona davvero la rete che usi ogni giorno, e dove sono i suoi punti deboli.
      </p>

      <div class="row" style="margin-top: 3rem;">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-sitemap" aria-hidden="true"></i>
            <span>Percorrere <b>tutti i livelli</b> dello stack <b>TCP/IP</b></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-cogs" aria-hidden="true"></i>
            <span>Il funzionamento in dettaglio dei <b>protocolli</b> di maggiore attualità e rilevanza</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <span>Una <b>visione d'insieme</b> sul mondo del Networking</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-shield" aria-hidden="true"></i>
            <span>Un'analisi critica di <b>debolezze e vulnerabilità</b> dei protocolli</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-user-secret" aria-hidden="true"></i>
            <span>Come funziona la rete <b>TOR</b>, e se garantisce davvero il <i>totale anonimato</i></span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="feature-item">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>Il <b>furto d'identità</b> (<i>spoofing</i>) nelle email, e perché non si può prevenire del tutto</span>
          </div>
        </div>
      </div>

      <p class="section-note text-justify" style="margin-top: 2rem;">
        Per rispondere a domande come queste è necessario <b>capire come funziona</b> un sistema e quali sono le sue debolezze.
        Nello svolgimento del corso vedremo in dettaglio questi ed altri esempi di vitale importanza per un <b>consapevole uso della rete</b>.
      </p>

      <div class="row" style="margin-top: 3rem;">
        <div class="col-md-6 mb-4">
          <div class="info-panel">
            <h5><i class="fa fa-users mr-2" aria-hidden="true"></i>A chi è rivolto</h5>
            <ul class="icon-list">
              <li>Gli <b>appassionati</b> curiosi di capire come funziona la rete</li>
              <li>Gli <b>studenti delle superiori</b> alle prese con il compito di sistemi</li>
              <li>Gli <b>universitari</b> alle prime armi con <i>Protocolli e Architetture di Rete</i></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="info-panel">
            <h5><i class="fa fa-play-circle-o mr-2" aria-hidden="true"></i>Come funziona il corso</h5>
            <ul class="icon-list">
              <li>Accesso <b>senza limiti di tempo</b>: ripassi quando vuoi</li>
              <li>Il docente risponde in <b>messaggi privati</b> e nella sezione D&amp;R</li>
              <li>Video scaricabili per vederli <b>offline</b> da iOS e Android</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if($show_counters): ?>
  <section data-umami-event="section_statistiche" id="statistiche" class="callout-flat">
    <div class="container text-center">
      <p class="mb-5">
        Pronto per entrare in classe?<br>
        A pochi mesi dalla sua pubblicazione il corso è subito diventato un <b>bestseller</b>.<br>
        Unisciti agli altri studenti e scoprirai perché!
      </p>
      <div id="counters" class="row">
        <div class="col-lg-4 stats">
          <i class="fa fa-users" aria-hidden="true"></i>
          <div class="counting" data-count="<?php echo $subs; ?>">0</div>
          <h5>Iscrizioni</h5>
        </div>
        <div class="col-lg-4 stats">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          <div class="counting" data-count="<?php echo $lessons; ?>">0</div>
          <h5>Lezioni</h5>
        </div>
        <div class="col-lg-4 stats">
          <i class="fa fa-thumbs-up" aria-hidden="true"></i>
          <div class="counting" data-count="<?php echo $reviews; ?>">0</div>
          <h5>Recensioni</h5>
        </div>
      </div>
    </div>
  </section>
  <?php endif ?>

  <?php
    $recensioni = array(
      array('Beauregard', "Corso ben fatto, per tutti quelli come me che non hanno conoscenze pregresse e vogliono imparare con buone basi l'argomento. <br>
              Due corsi di Morro in poche settimane, insegnante eccezionale."),
      array('Gioele', "Corso ben sviluppato e organizzato, di facile comprensione per i neofiti della materia e, soprattutto, insegnante di grande qualità con <br>
              notevoli capacità di spiegazione, sintetizzazione (senza mai essere superficiale negli argomenti trattati) e chiarezza <br>
              sia a livello teorico che rappresentativo tramite l'ausilio delle slide. Corso vivamente consigliato."),
      array('Marco', "Esperienza più che positiva, sono sempre stato molto curioso di capire come funzionano le reti<br>
              ma ho sempre pensato che non fosse alla mia portata. <br>
              Questo corso ha reso ognuno degli argomenti trattati comprensibili."),
      array('Jacopo', "Ho preso il corso a occhi chiusi conoscendo già l’autore dal suo canale YouTube. <br>
              Comunque finora corso molto utile e spiegato bene. <br>
              Lo affianco a lezioni di un corso di sicurezza informatica."),
      array('Dario', "davvero grande chiarezza espositiva. Un corso fondamentale per iniziare ad avere le basi nel mondo delle reti. <br>
              Davvero ben strutturato e chiaro. Complimenti."),
      array('Fabio', "Ottimo corso di facile comprensione per un'introduzione di base alle reti, il metodo di insegnamento usato <br>
              che va dritto la punto senza perdersi in troppi giri di parole e facendo esempi semplici e intuitivi è perfetto <br>
              per trasferire al meglio le conoscenze oggetto del corso, davvero complimenti!"),
      array('Monica', "Molto chiaro, contenuto interessante per chi parte da zero come me"),
      array('Mattia', "Sono uno studente universitario e sto usando questo corso come supporto per il corso di \"Reti di calcolatori\". Ovviamente ricopre solo una piccola parte del programma e non scende nei dettagli, ma è molto utile per cominciare con il piede giusto ed avere il quadro generale"),
    );
  ?>

  <section id="recensioni">
    <div class="text-center">
      <h2 class="section-title">Fidati di chi l'ha già acquistato</h2>
      <div id="slider" class="carousel slide" data-ride="carousel" data-interval="8000" style="width:100%;">
        <div class="carousel-inner col-sm-9 ml-auto mr-auto">
          <?php foreach ($recensioni as $i => $r): ?>
          <div class="carousel-item<?php echo $i === 0 ? ' active' : ''; ?>">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              <?php echo $r[1]; ?>
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name"><i><?php echo $r[0]; ?>, studente "Networking 101"</i></p>
            <div class="stars">
              <?php for ($s = 0; $s < 5; $s++): ?><i class="fa fa-star fa-lg" aria-hidden="true"></i> <?php endfor ?>
            </div>
          </div>
          <?php endforeach ?>
        </div>
        <a style="margin-top: -3rem;" class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a style="margin-top: -3rem;" class="carousel-control-next" href="#slider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <section id="faq">
    <div class="container">
      <h2 class="section-title">FAQ - Domande Frequenti</h2>
      <div class="tab-content" id="faq-tab-content">
        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
          <div class="accordion" id="accordion-tab-1">

            <div class="card">
              <div class="card-header" id="accordion-tab-1-heading-1">
                <h5>
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="true" aria-controls="accordion-tab-1-content-1">
                    Ci sono limitazioni alla consultazione? Una volta terminato il corso posso continuare a consultarlo o scade l'accesso?
                  </button>
                </h5>
              </div>
              <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                <div class="card-body">
                  <p>
                    Non c'è nessun limite di tempo per l'accesso ai corsi. Puoi studiare con calma e ritornare quando vuoi per ripassare: le video lezioni rimangono a tua disposizione per sempre.
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="accordion-tab-1-heading-2">
                <h5>
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                    A chi posso rivolgermi in caso di dubbi durante il corso?
                  </button>
                </h5>
              </div>
              <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                <div class="card-body">
                  <p>
                    Il docente è sempre a disposizione sulla piattaforma via messaggistica privata o nella sezione D&amp;R per qualsiasi dubbio/domanda/perplessità inerente al corso.
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="accordion-tab-1-heading-3">
                <h5>
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                    Il corso è fruibile anche offline?
                  </button>
                </h5>
              </div>
              <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                <div class="card-body">
                  <p>
                    Il corso è sempre disponibile offline su dispositivi iOS e Android. Tramite l'app potrai scaricare i video per vederli successivamente offline.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'snippets/docente.php';?>
  <?php include 'snippets/footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/fitvids/jquery.fitvids.js"></script>
  <script src="vendor/particles/particles.min.js"></script>

  <!-- Custom JavaScript -->
  <script src="js/common.js"></script>
  <script src="js/script.js"></script>

</body>

</html>
