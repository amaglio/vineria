 

$(function(){

  	
	$('.carousel').carousel({
		interval: 5000 

	});	

	$(".item1").click(function(){
		$(".carousel").carousel(0);
	});

	$(".item2").click(function(){
		$(".carousel").carousel(1);
	});
	
	$(".item3").click(function(){
		$(".carousel").carousel(2);
	});

	// Enable Carousel Controls	
	$(".carousel-control-prev").click(function(){
		$(".carousel").carousel("prev");
	});

	$(".carousel-control-next").click(function(){
		$(".carousel").carousel("next");
	});

	$(document).on("click", '[data-toggle="lightbox"]', function(event) {
	  event.preventDefault();
	  $(this).ekkoLightbox();
	});

});

$(function(){
	
	var lastScrollTop = 0;

	$(window).scroll(function(event){
	   var st = $(this).scrollTop();
	   if (st > lastScrollTop){
	       // downscroll code
	   } else {
	      // upscroll code
	   }
	   lastScrollTop = st;

	   if( lastScrollTop > 438 )
	   {
			$("#button_up").css("display","block");
	   }
	   else
	   {
	   		$("#button_up").css("display","none");
	   }

	   console.log(lastScrollTop);	

	});

	
});