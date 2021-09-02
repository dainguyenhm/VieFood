/* slide show product */
$(document).ready(function() {
	var owl = $("#owl-demo");
	owl.owlCarousel({
          items : 5, //10 items above 1000px browser width
          itemsDesktop : [1190,4], //5 items between 1000px and 901px
          itemsDesktopSmall : [977,3], // betweem 900px and 601px
          itemsTablet: [752,2], //2 items between 600 and 0
          itemsMobile : [523,1] // itemsMobile disabled - inherit from itemsTablet option
      });
  owl.owlCarousel({
  });
  // Custom Navigation Events
  $(".next").click(function(){
  	owl.trigger('owl.next');
  });
  $(".prev").click(function(){
  	owl.trigger('owl.prev');
  });
  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  });
  $(".stop").click(function(){
  	owl.trigger('owl.stop');
  });
  /* scroll to top */
  $(window).scroll(function () {
    if ($(this).scrollTop() > 30) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });
  /* scroll body to 0px on click */
  $('#back-to-top').click(function () {
    $('#back-to-top').tooltip('hide');
    $('body,html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
  $('#back-to-top').tooltip('show');
});
/* remove item in cart */
$(document).on('click', '.remove-item', function() {
    $(this).parent().parent().remove();
});

/* modal image product */
var modal = document.getElementById("modal-image");
var img = document.getElementById("img-product");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
} 
/* modal cart */
var modalCart = document.getElementById("modal-cart");
var addCart = document.getElementById("add-cart");
addCart.onclick = function() {
  modalCart.style.display = "block";
}
var closeCart = document.getElementsByClassName("close-cart")[0];
closeCart.onclick = function() {
  modalCart.style.display = "none";
}
