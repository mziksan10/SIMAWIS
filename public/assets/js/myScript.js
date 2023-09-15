window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
   document.getElementById("navbar").classList.add("bg-light");
   document.getElementById("navbar").classList.add("bg-opacity-75");
  } else {
   document.getElementById("navbar").classList.remove("bg-light");
  }
}