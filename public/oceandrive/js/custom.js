// JavaScript Document
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   7000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1000,		// Speed of transition
															   
					// Components							
					slide_links				:	'false',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														
														{image : 'imagenes/1.JPG'}
														
												]
					
				});
		    });
		    

$(document).ready(function(){
  $(".titulo").click(function(){
    $(".content").slideToggle();
	$(".mas").toggleClass("menos");
  });
});
