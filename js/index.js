 

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
