var toggle2 = false;
var navigation = "navigation";
document.getElementsByClassName("HamburgerMenu")[0].addEventListener("click", Animationleft);
function Animationleft(){
  if (toggle2){
      document.getElementsByClassName(navigation)[0].classList.remove("navigationOpen");
      toggle2 = false;
  } else {
      document.getElementsByClassName(navigation)[0].classList.add("navigationOpen");
      toggle2 = true;
  }
}