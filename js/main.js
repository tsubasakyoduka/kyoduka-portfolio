$(function(){
    

$(".list1").hover(function() {
     $(".characters-poster").css({
      "background-image": "url(img/image9.jpeg)",
      "background-size": "cover", 
    
    });
    
  }, function() {
  
    $(".characters-poster").css({
      "background-image": "url(img/image9.jpeg)",
      "background-size": "cover",
    });
  });
  

  
  $(".list2").hover(function() {
    $(".characters-poster").css({
      "background-image": "url(img/362.png)",
      "background-size": "cover",
      "background-position": "100% 85%",
    });
    
  }, function() {
    $(".characters-poster").css({
      "background-image": "url(img/362.png)",
      "background-size": "cover",
    });
  });
  
 
  
  $(".list3").hover(function() {
    $(".characters-poster").css({
      "background-image": "url(img/site.jpg)",
      "background-size": "cover",
      "background-position": "80% 80%",
    });
    
  }, function() {
    $(".characters-poster").css({
      "background-image": "url(img/site.jpg)",
      "background-size": "cover",
    });
  });
  
  
  
  $(".list4").hover(function() {
    $(".characters-poster").css({
      "background-image": "url(img/contact.jpg)",
      "background-size": "cover",
    });
    
  }, function() {
    $(".characters-poster").css({
      "background-image": "url(img/contact.jpg)",
      "background-size": "cover",
    });
  });
  
  
    
}); 



$('html').addClass('animated');


$body.vegas({
    preload: true,
    overlay: '/js/vegas/dist/overlays/01.png',
    transitionDuration: 4000,
    delay: 10000,
    // slides: backgrounds,
    walk: function (nb, settings) {
        if (settings.video) {
            $('.logo').addClass('collapsed');
        } else {
            $('.logo').removeClass('collapsed');
        }
    }
});




