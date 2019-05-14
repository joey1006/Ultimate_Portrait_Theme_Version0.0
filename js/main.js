<<<<<<< HEAD
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
=======
>>>>>>> e6c49facc694e767f4c2aa1c30b33d76bca4f9de
