<<<<<<< HEAD
=======

>>>>>>> 1dd8fe08e3ff39aa68999d3262115667e094d9fc
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
<<<<<<< HEAD
                       hamburger.addEventListener("click", function() {
                         hamburger.classList.toggle("is-active");
                       });
=======

hamburger.addEventListener("click", function() {
 hamburger.classList.toggle("is-active");
});
>>>>>>> 1dd8fe08e3ff39aa68999d3262115667e094d9fc
