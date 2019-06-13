var toggle2 = false;
var navigation = "navigation";
document.getElementsByClassName("hamburger")[0].addEventListener("click", Animationleft);
function Animationleft(){
  if (toggle2){
      document.getElementsByClassName(navigation)[0].classList.remove("navigationOpen");
      toggle2 = false;
  } else {
      document.getElementsByClassName(navigation)[0].classList.add("navigationOpen");
      toggle2 = true;
  }
}


// var menuItem = document.querySelector(".menu-center");
var menuItem = document.getElementById("menu-item-94");
menuItem.addEventListener("click", function() {
 Animationleft();
 hamburger.classList.toggle("is-active");

});


var hamburger = document.querySelector(".hamburger");

hamburger.addEventListener("click", function() {
 hamburger.classList.toggle("is-active");

});

$(document).ready(function () {
    //caches a jQuery object containing the header element
    var header = $("landing-image");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        //var viewHeight = header.style.height = '100vh';
        if(scroll >= 1) {
            header.addClass('on-scroll');
            header.addClass('col-md-12');
        }else{
            // nothing
        }
    });
});

var checkbox = document.querySelector('input[name=mode]');
//var checkbox = document.querySelector('.fa-adjust');
checkbox.addEventListener('change', function() {
    if(this.checked) {
        trans();
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('dark-theme', 'enabled');
    } else {
        trans();
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('dark-theme', 'disabled');
    }
});

var trans = function() {
    document.documentElement.classList.add('transition');
    window.setTimeout(function() {
        document.documentElement.classList.remove('transition');
    }, 1000)
};

$('multiple-portraits-slider').click(function(){
    $('single-portrait-slider').addClass('reveal');
});

$(".close").click(function() {
  $('.icon-bar').toggleClass('closed');
});
$('.multiple-portraits').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    autoplay: true,
    autoplaySpeed: 3500
});


$('.single-portrait-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.multiple-portraits-slider'
});
$('.multiple-portraits-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.single-portrait-slider',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    arrows: false,

});

function addClassByClick(button){
  $(button).addClass("pop-active")
}

$(document).ready(function(){
  $(".share").click(function(){
    $(".overlay").addClass("overlay-target");
  });
});

$(document).ready(function(){
  $(".close2").click(function(){
    $(".overlay").removeClass("overlay-target");
  });
});

$(document).ready(function(){
  $(".click_1").click(function(){
    $(".lightbox_1").addClass("lightbox_1-target");
  });
});

//$(document).ready(function(){
//  $(".lightbox_1").click(function(){
//    $(".lightbox_1").removeClass("lightbox_1-target");
//  });
//});

$(document).ready(function(){
  $(".click_1").click(function(){
    $(".light").addClass("light-target");
  });
});

$(document).ready(function(){
  $(".light").click(function(){
    $(".light").removeClass("light-target");
  });
});

$(document).ready(function(){
  $(".light").click(function(){
    $(".lightbox_1").removeClass("lightbox_1-target");
  });
});


//

$(document).ready(function(){
  $(".rood").click(function(){
    $(".rood").toggleClass("rood-2");
  });
});

//$(document).ready(function(){
//  $(".rood").click(function(){
//    $(".rood").removeClass("rood-2");
//  });
//});
