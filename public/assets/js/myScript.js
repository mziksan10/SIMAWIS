window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
   document.getElementById("navbar").classList.remove("bg-opacity-25");
   document.getElementById("navbar").classList.add("bg-opacity-75");
  } else {
   document.getElementById("navbar").classList.add("bg-opacity-25");
   document.getElementById("navbar").classList.remove("bg-opacity-75");
  }
}

// Get the button
let mybutton = document.getElementById("scrlToUp");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}