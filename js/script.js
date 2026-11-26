/* Rete di particelle sul cielo notturno dell'hero */
if (typeof particlesJS === 'function' && document.getElementById('particles-js')) {
  particlesJS.load('particles-js', 'assets/particles.json');
}

var corsoVisible = false;
var countersVisible = false;

// Ogni sezione ha il suo controllo indipendente: con i return in cascata
// bastava che una sezione più in alto fosse ancora a schermo per non
// arrivare mai a quelle sotto.
function track_scroll(){
  if(!corsoVisible && isInViewport($('#corso'), 1)){
    corsoVisible = true;
    if (window.umami) umami.track('scroll_n101_corso');
  }

  if(!countersVisible && isInViewport($('#counters'), 1)){
    countersVisible = true;
    increment();
    if (window.umami) umami.track('scroll_n101_counters');
  }
}

$('.yt_video').fitVids();

$(window).scroll(function(){
  track_scroll();
});

$(document).ready(function(){
  track_scroll();
});
