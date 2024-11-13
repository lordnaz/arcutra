//     AUTHOR : LAMAN BERUANG
//     VERSION : 1.1 
//     DEVELOPED DATE : 20181028


$(document).ready(function(){

	$(window).scroll(function(){
	  	var scroll = $(window).scrollTop();

		  if (scroll > 100) {
		    $(".navbar").css("cssText" , "background-color: rgba(0,0,0, 0.7) !important;");
		    $(".logo").css("cssText" , "background-color: transparent !important;");
		    $(".bg-out").fadeOut();
		    document.getElementById("logo").style.fontSize = "25px";
		    // document.getElementById("test2").style.padding = "30px 10px";
		  }

		  else{
			  $(".navbar").css("cssText" , "background-color: transparent !important;");
			  $(".logo").css("cssText" , "background-color: black;");  	
			  // $(".logo").css("cssText" , "background-color: #0E4749 !important;");
			  $(".bg-out").fadeIn();
		  }

		  
	  });

	$('.autoplay').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 1500,
	});


});