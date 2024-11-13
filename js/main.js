$(document).ready(function(){

    $(window).on('load', function(){

    $(".preloader").addClass("complete");
   
    });
    
    $(window).scroll(function() {
       var hT = $('#odo').offset().top,
           hH = $('#odo').outerHeight(),
           wH = $(window).height(),
           wS = $(this).scrollTop();
  
       if (wS > (hT+hH-wH)){
         odometer.innerHTML = 31;
       }
    });

    $('.autoplay').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
    });

    $(".pro_list_conf").click(function(){
        $(".all_list").load("project/project_conf.php", function() {
   
        });
    });

    $(".pro_list_eng").click(function(){
        $(".all_list").load("product/project_eng.php", function() {
   
        });
    });

    $(".pro_list_res").click(function(){
        $(".all_list").load("project/project_res.php", function() {
   
        });
    });

    $(".pro_list_arc").click(function(){
        $(".all_list").load("project/project_arc.php", function() {
   
        });
    });

    $(".gas_detector").click(function(){
        $(".all_list").load("product/gas_detector.php", function() {
   
        });
    });

    $(".harness").click(function(){
        $(".all_list").load("product/harness.php", function() {
   
        });
    });

    $(".scba").click(function(){
        $(".all_list").load("product/scba.php", function() {
   
        });
    });

    $(".escape").click(function(){
        $(".all_list").load("product/escape.php", function() {
   
        });
    });

    $(".tripod").click(function(){
        $(".all_list").load("product/tripod.php", function() {
   
        });
    });

    $(".fall").click(function(){
        $(".all_list").load("product/fall.php", function() {
   
        });
    });

    $(".ppe").click(function(){
        $(".all_list").load("product/ppe.php", function() {
   
        });
    });

    $(".magnetic").click(function(){
        $(".all_list").load("product/magnetic.php", function() {
   
        });
    });

    

    $(".home_content").click(function(){
  	 	window.location = 'index.php';
  	});

  	$(".services_content").click(function(){
  	 	window.location = 'services.php';
  	});

  	$(".product_content").click(function(){
  	 	window.location = 'product.php';
  	});

    $(".project_content").click(function(){
      window.location = 'project.php';
    });

    $(".contact_content").click(function(){
      window.location = 'contact_new.php';
    });

    $(".training_content").click(function(){
      window.location = 'soon.php';
    });


    $('.view').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.autoplay'
    });
    $('.autoplay').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.view',
      dots: false,
      centerMode: true,
      focusOnSelect: true
    });
    
     $(".go-to").click(function(){
      var target = $(this).attr("go-to");

      if(target.length){
        event.preventDefault();
        $('html, body').animate({
          scrollTop: $("."+target).offset().top},1000,function(){
        });
      }
    });

})