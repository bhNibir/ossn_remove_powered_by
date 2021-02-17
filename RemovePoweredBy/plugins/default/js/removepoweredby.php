$(document).ready(function() {
  var poweredBy = "";

  if(document.querySelector(".menu-footer-powered")){
    poweredBy = document.querySelector(".menu-footer-powered");
  } else{
    poweredBy = document.querySelector(".footer .col-md-6, .text-right");
  }


  poweredBy.hidden=true  ; 

    
});