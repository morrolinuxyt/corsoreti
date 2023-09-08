<!DOCTYPE html>
<html lang="it">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Chrome Mobile Top Bar Color-->
  <meta name="theme-color" content="#343a40" />

  <meta name="description" content="Studia i fondamenti del Networking: un settore in continua evoluzione - corso bestseller italiano. Scopri la nostra selezione di corsi ideati su misura per te!">

  <title>Networking 101: il corso bestseller in italiano | Corso Reti</title>
</head>

<body id="page-top">

  <?php

    //UDEMY STATS
    ini_set("allow_url_fopen", 1);

    $json = file_get_contents('https://www.udemy.com/api-2.0/courses/2712838?fields[course]=title,num_subscribers,num_lectures,num_reviews');
    $networking101 = json_decode($json);

    $subs = $networking101->num_subscribers;

    $reviews = $networking101->num_reviews;

    $lessons = $networking101->num_lectures;

    //UDEMY COUPONS
    $n101 = "";

    $json_data = file_get_contents('udemy_coupons.json');
    $data = json_decode($json_data, true);

    $n101 = $data["Networking 101"];

    if(empty($n101)){
      $n101 = "https://www.udemy.com/course/networking-101-corso-di-reti-da-zero/?referralCode=B2B920B2090248291B6B";
    }

  ?>

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
            <a class="nav-link js-scroll-trigger" href="#courses">Corso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#reviews">Recensioni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="landing">
    <div id="particles-js"></div>
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center text-white">
          <h1 class="font-weight-light">Il corso bestseller italiano sul Networking</h1>
          <p class="lead">impara i fondamenti della tecnologia che ha rivoluzionato il nostro modo di comunicare</p>
          <a class="btn btn-lg btn-outline-light js-scroll-trigger" href="#courses">Scopri</a>
        </div>
      </div>
    </div>
  </header>

  <section id="why">
    <div class="container text-center">
      <h2 class="my-5">PERCHÈ STUDIARE NETWORKING?</h2>
      <p class="my-5 text-justify">
	Il mondo come lo conosciamo oggi è tale grazie ad Internet e all'invenzione del web, due tecnologie che hanno rivoluzionato il nostro modo di comunicare, lavorare e perfino fare la spesa. <br>
	Ad oggi sono presenti nel mondo <b> oltre 22 miliardi di dispositivi connessi </b> alla rete, quasi 3 volte la popolazione mondiale! <br>
	Realizzare e mantenere un'infrastruttura di tale portata richiede una coordinazione internazionale tra gli innumerevoli enti indipendenti presenti sul territorio (detti Autonomous Systems) incaricati della gestione di <b>enormi datacenter </b> e backbone transoceaniche per <b> oltre settecentomila kilometri di cavi </b> - fra terrestri e sottomarini - stesi sia con fondi pubblici che privati da importanti nomi come <b>Microsoft, Google, Facebook </b>e molti altri. <br>
	Essere parte di questa realtà significa lavorare in un settore <b>stimolante</b>, ricco di sfide e <b>in continua evoluzione</b>.
      </p>
      <div class="yt_video">
         <iframe src="https://www.youtube-nocookie.com/embed/giF9F8s9hnU?rel=0" frameborder="0" allowfullscreen></iframe><br /><br />
      </div>
    </div>
  </section>

  <section id="statistics">
    <div class="container text-center">
      <p class="mb-5">
        Pronto per entrare in classe?<br>
        A pochi mesi dalla sua pubblicazione il corso è subito diventato un bestseller.<br>
	Unisciti agli altri studenti e scoprirai perchè!
      </p>
      <div class="row">
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

  <section id="courses">
    <div class="container">
      <p class="mb-5 text-justify">
	Il mondo delle <b>Reti di calcolatori </b>ti affascina?
O forse stai solo studiando per un <b>compito di sistemi</b>? Che tu sia un <b>appassionato</b>, uno <b>studente delle superiori</b> o un <b>universitario</b> alle prime armi con <i>Protocolli e Architetture di Rete</i>, sei nel posto giusto! <br>
	Ho pensato questo corso di Reti per guidarti in una <b>panoramica sul mondo del Networking</b> ed i suoi protocolli senza tralasciare, ove necessario, importanti <b>cenni sulla sicurezza informatica</b> troppo spesso "ignorati" nei corsi base di Networking.<br>
	Ad esempio: come funziona la rete <i> TOR? </i>è veramente in grado di garantirci il <b>totale anonimato</b> sulla rete? o ancora: come funziona il <b>furto d'identità</b> (<i>spoofing</i>) nel sistema email e perchè non è possibile prevenirlo completamente? <br>
	Per rispondere a questa domanda è necessario <b>capire come funziona</b> il sistema email e quali sono le sue debolezze.  <br>
	Nello svolgimento del corso, vedremo in dettaglio questo ed altri esempi di vitale importanza per un consapevole uso della rete.
      </p>
      <div class="card-deck">
        <a class="invisible-link" href="<?php echo $n101; ?>">
          <div class="card">
            <img src="assets/corso-networking-101-cover.jpg" class="card-img-top" alt="Copertina corso Networking 101" title="Corso di Reti online in italiano">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">Networking 101</h3>
              <p class="card-text">
		Percorreremo tutti i livelli dello stack TCP/IP soffermandoci sul funzionamento in dettaglio di tecnologie e protocolli di particolare attualità o rilevanza.
Oltre a fornire una visione d'insieme non mancherà - dove opportuno - un'analisi critica di debolezze e vulnerabilità dei protocolli in esame. <br><br>
              </p>
              <a title="Corso Networking 101" href="<?php echo $n101; ?>" class="btn btn-primary mt-auto">Vai al corso</a>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section id="faq">
    <div class="container">
      <h2 class="my-5 text-center">FAQ</h2>
      <div class="tab-content" id="faq-tab-content">
        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
            <div class="accordion" id="accordion-tab-1">

                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-1">
                        <h5>
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
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
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
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
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                              Il corso è fruibile anche offline?
                            </button>
                        </h5>
                    </div>
                    <div class="collapse " id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                             Il corso è sempre disponibile offline su dispositivi iOS e Android. Tramite l'app potrai scaricare i video per vederli sucessivamente offline.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
      </div>
    </div>

  </section>

  <section id="reviews">
    <div class="text-center">
      <h2>Fidati di chi l'ha già acquistato</h2>
      <div id="slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner col-sm-9 ml-auto mr-auto">

          <div class="carousel-item active">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
		Eccezionale ! Complimenti per essere riuscito a riassumure un quantitativo di infromazioni, relativo ad un tema così complesso, in soli 4,5 ore. Molto utile per coloro che hanno già visto qualcosa in merito ma hanno idee confuse.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Leonid, studente "Networking 101"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
		Seguivo Morrolinux su youtube da quando ho cominciato a lavorae nella cyber security ed ho preso questo corso proprio perche ' conoscevo le sue doti espilcative e non mi ha deluso.Perfetto per chi vuole capire bene il network
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Manuel, studente "Networking 101"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
		Corso che consiglio a quanti hanno bisogno di avere delle conoscienze basilari sulle reti. L'istruttore è veramente bravo e riesce a spiegare in modo semplice concetti anche complessi (come ad esempio il subnetting ed il supernetting). Mi ritengo quindi soddisfatto.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Pasquale, studente "Networking 101"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
		Ho preso il corso a occhi chiusi conoscendo già l’autore dal suo canale YouTube. Comunque finora corso molto utile e spiegato bene. Lo affianco a lezioni di un corso di sicurezza informatica.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Jacopo, studente "Networking 101"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
		Ottimo corso, avevo già acquistato e seguito i corsi Linux LPI di Moreno e avevo riscontrato delle lacune relativi agli argomenti riguardanti le reti. Questo corso è capitato a fagiolo, alcune cose le sapevo già ma per molte altre ho notato che avevo solo una conoscenza sommaria. Molto soddisfatto finora. Edit: terminato il corso mi sento di consigliarlo senza riserve. Ha il pregio di tenere alta l'attenzione dall'inizio alla fine e incuriosire nell'approfondire tanti aspetti trattati. A quando il prossimo corso di Morro?
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">David, studente "Networking 101"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
		Molto buona la struttura del corso e la capacità espositiva dell'insegnante. Sicuramente seguirò altri suoi corsi.
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Alan, studente "Networking 101"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
		Molto chiaro, contenuto interessante per chi parte da zero come me
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Monica, studente "Networking 101"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

          <div class="carousel-item">
            <p class="review-body">
              <i class="fa fa-quote-left" aria-hidden="true"></i>
		Sono uno studente universitario e sto usando questo corso come supporto per il corso di "Reti di calcolatori". Ovviamente ricopre solo una piccola parte del programma e non scende nei dettagli, ma è molto utile per cominciare con il piede giusto ed avere il quadro generale
              <i class="fa fa-quote-right" aria-hidden="true"></i>
            </p>
            <p class="review-name">Mattia, studente "Networking 101"</p>
            <div class="stars">
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-center my-5">IL DOCENTE<br>
            <a href="https://www.facebook.com/MorrolinuxOfficial/" target="_blank"><i class="fa fa-facebook-official mx-2" aria-hidden="true" style="color:#3c5a99;"></i></a>
            <a href="https://twitter.com/morrolinux/" target="_blank"><i class="fa fa-twitter-square mx-2" aria-hidden="true" style="color:#00acee;"></i></a>
            <a href="https://telegram.me/morrolinux_feed" target="_blank"><i class="fa fa-comment mx-2" aria-hidden="true" style="color:#0088cc;"></i></a>
          </h2>
          <img class="avatar float-left rounded-circle mr-4" src="assets/docente-corso-linux-moreno-razzoli.jpg" alt="avatar docente corso Reti: Moreno Razzoli" title="Docente del corso Networking 101: Moreno Razzoli">
          <div class="text-center my-5 socials">

          </div>
          <p>
            		Mi chiamo <b>Moreno Razzoli</b>,<br>
			Sono laureato in Scienze Informatiche, ho conseguito le certificazioni Linux <b>LPI</b>, <b>CompTIA Linux+</b> e <b>Suse CLA</b>,
			ho realizzato diversi <a href="https://morrolinux.it/progetti">progetti Open Source</a>,
			contribuito allo sviluppo di nuove funzionalità in altrettanti progetti già avviati su GitHub e 
			realizzo <b>video didattici dal 2008</b> su <a href="https://www.youtube.com/user/morrolinux/">YouTube</a> e sul
		        mio <a href="https://morrolinux.it"> sito ufficiale.</a><br><br>
          </p>
	  <p> 
			<b>Credo nella formazione di qualità.</b><br>
			Saper trasmettere le proprie competenze in modo efficace è importante tanto quanto avere delle competenze in primo luogo. 
			Durante il mio corso di studi ho imparato che essere massimo esperto di qualcosa non ti rende automaticamente capace di insegnare.<br><br>
		
			Numerosi studi hanno dimostrato che il picco dell'attenzione dura soltanto 15 minuti, perciò <b>non sprecherò il tuo tempo prezioso</b>
			con inutili giri di parole e prolissi monologhi. 
			Ho uno stile molto diretto: mi piace andare dritto al punto, accompagnando le spiegazioni con <b>esempi pratici ed efficaci</b>.<br><br>
			
			Insegnare non significa recitare un elenco di nozioni sparse: 
			è importante collocare ogni argomento come un tassello al proprio posto e dare allo studente una <b>visione d'insieme</b> sulla disciplina.<br><br>
			
			Se condividi i miei valori sono sicuro che apprezzerai i miei corsi.
	   	
	  </p>

        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container footer">
      <p class="m-0 text-center text-white">
        Made with ❤️ by <a href="https://github.com/r-carissimi" target="_blank">Riccardo Carissimi</a><br>
        Parte del progetto <a href="https://morrolinux.it">morrolinux.it</a><br><br>
        <a href="https://github.com/morrolinuxyt/corsoreti" target="_blank"><i class="fa fa-github-square mx-2" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/MorrolinuxOfficial/" target="_blank"><i class="fa fa-facebook-square mx-2" aria-hidden="true"></i></a>
        <a href="https://twitter.com/morrolinux/" target="_blank"><i class="fa fa-twitter-square mx-2" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/user/morrolinux/" target="_blank"><i class="fa fa-youtube-square mx-2" aria-hidden="true"></i></a>
      <br>
      <br>
      <a style="opacity:0.5;color:white;" >Moreno Razzoli<br>P.IVA IT04063670360</a> <br>
      <a style="opacity:0.5;color:white;" target="_blank" href="http://morrolinux.it/privacy_policy" title="Privacy Policy">Privacy Policy</a>
      <br>
      </p>

    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/fitvids/jquery.fitvids.js"></script>
  <script src="vendor/particles/particles.min.js"></script>

  <!-- Custom JavaScript -->
  <script src="js/script.js"></script>


</body>

</html>
