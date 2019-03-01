$(document).ready(function(){
  //add scroll to all anchors (links)
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      //uses jQuery's animate() method to add smooth page scroll
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500 /*it takes to scroll to the specified area in milliseconds*/, function(){
        window.location.hash = hash;
      });
    } 
  });
});