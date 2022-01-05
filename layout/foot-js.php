<!-- greensock cdn -->
<?php if(isset($_SESSION['Hero']) && $_SESSION['Hero']==1){?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<?php }?>
<script type="text/javascript">
<?php if(isset($_SESSION['Hero']) && $_SESSION['Hero']==1){?>
// navigation starts here
$("#toggle").click(function() {
  $(this).toggleClass('on');
  $("#resize").toggleClass("active");
});

$("#resize ul li a").click(function() {
$(this).toggleClass('on');
$("#resize").toggleClass("active");
});

$(".close-btn").click(function() {
$(this).toggleClass('on');
$("#resize").toggleClass("active");
});

// navigation ends here

// nav animation

TweenMax.from("#brand", 1, {
delay: 0.4,
y: 10,
opacity: 0,
ease: Expo.easeInOut
})

TweenMax.staggerFrom("#menu li a", 1, {
delay: 0.4,
opacity: 0,
ease: Expo.easeInOut
}, 0.1);

// nav animation ends

new WOW().init();

<?php }if(isset($_SESSION['Greensock']) && $_SESSION['Greensock']==2){?>

// Content Slider Using Greensock
var $activeSlide = $('.active'),
$homeSlide = $(".slide-s"),
$slideNavPrev = $("#prev"),
$slideNavNext = $("#next");

function init() {
  TweenMax.set($homeSlide.not($activeSlide), {autoAlpha: 0});
  TweenMax.set($slideNavPrev, {autoAlpha: 0.2});
}

init();

function goToNextSlide(slideOut, slideIn, slideInAll) {
  var t1 = new TimelineLite(),
  slideOutContent = slideOut.find('.card-content-s'),
  slideInContent = slideIn.find('.card-content-s'),
  slideOutImg = slideOut.find('.card-img-s'),
  slideInImg = slideIn.find('.card-img-s'),
  index = slideIn.index(),
  size = $homeSlide.length;
  console.log(index);

  if(slideIn.length !== 0) {
    t1
    .set(slideIn, {autoAlpha: 1, className: '+=active'})
    .set(slideOut, {className: '-=active'})
    .to(slideOutContent, 0.65, {y: "+=40px", ease: Power3.easeInOut}, 0)
    .to(slideOutImg, 0.65, {backgroundPosition :'bottom', ease: Power3.easeInOut}, 0)
    .to(slideInAll, 1, {y: "-=100%", ease: Power3.easeInOut}, 0)
    .fromTo(slideInContent, 0.65, {y: '-=40px'}, {y : 0, ease: Power3.easeInOut}, "-=0.7")
    .fromTo(slideInImg, 0.65, {backgroundPosition: 'top'}, {backgroundPosition: 'bottom', ease: Power3.easeInOut}, '-=0.7')
  }

  TweenMax.set($slideNavPrev, {autoAlpha: 1});

  if(index === size - 1){
    TweenMax.to($slideNavNext, 0.3, {autoAlpha: 0.2, ease:Linear.easeNone});
  }
};

$slideNavNext.click(function(e) {
  e.preventDefault();

  var slideOut = $('.slide-s.active'),
  slideIn = $('.slide-s.active').next('.slide-s'),
  slideInAll = $('.slide-s');

  goToNextSlide(slideOut, slideIn, slideInAll);

});

function goToPrevSlide(slideOut, slideIn, slideInAll) {
  var t1 = new TimelineLite(),
  slideOutContent = slideOut.find('.card-content-s'),
  slideInContent = slideIn.find('.card-content-s'),
  slideOutImg = slideOut.find('.card-img-s'),
  slideInImg = slideIn.find('.card-img-s'),
  index = slideIn.index(),
  size = $homeSlide.length;

  if(slideIn.length !== 0) {
    t1
    .set(slideIn, {autoAlpha: 1, className: '+=active'})
    .set(slideOut, {className: '-=active'})
    .to(slideOutContent, 0.65, {y: "-=40px", ease: Power3.easeInOut}, 0)
    .to(slideOutImg, 0.65, {backgroundPosition :'top', ease: Power3.easeInOut}, 0)
    .to(slideInAll, 1, {y: "+=100%", ease: Power3.easeInOut}, 0)
    .fromTo(slideInContent, 0.65, {y: '+=40px'}, {y : 0, ease: Power3.easeInOut}, "-=0.7")
    .fromTo(slideInImg, 0.65, {backgroundPosition: 'bottom'}, {backgroundPosition: 'top', ease: Power3.easeInOut}, '-=0.7')
  }

  TweenMax.set($slideNavPrev, {autoAlpha: 1});

  if(index === 0){
    TweenMax.to($slideNavPrev, 0.3, {autoAlpha: 0.2, ease:Linear.easeNone});
  }
};

$slideNavPrev.click(function(e) {
  e.preventDefault();

  var slideOut = $('.slide-s.active'),
  slideIn = $('.slide-s.active').prev('.slide-s'),
  slideInAll = $('.slide-s');

  goToPrevSlide(slideOut, slideIn, slideInAll);
      
});
<?php }?>
// end Content Slider Using Greensock

// Sweet Alert
const message = $('.message-success').data('message');
if(message){
  Swal.fire({
    icon: 'success',
    title: 'Terkirim',
    text: 'Pesan kamu berhasil terkirim, terima kasih yah. akan saya balas secepatnya jika diperlukan!',
  })
}
// end Sweet Alert

</script>