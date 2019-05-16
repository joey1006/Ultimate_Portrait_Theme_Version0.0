
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


var hamburger = document.querySelector(".hamburger");

hamburger.addEventListener("click", function() {
 hamburger.classList.toggle("is-active");
});

// $(document).ready(function () {
//     //caches a jQuery object containing the header element
//     var header = $(".landing-image");
//     $(window).scroll(function() {
//         var scroll = $(window).scrollTop();
//         //var viewHeight = header.style.height = '100vh';
//         if(scroll >= 1) {
//             header.addClass('on-scroll');
//             header.addClass('col-md-12');
//         }else{
//             // nothing
//         }
//     });
// });