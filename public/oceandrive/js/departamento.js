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
														{image : 'imagenes/departamento/01.jpg'},
														{image : 'imagenes/departamento/02.jpg'}, 
														{image : 'imagenes/departamento/03.jpg'},
														{image : 'imagenes/departamento/04.jpg'}, 
														{image : 'imagenes/departamento/05.jpg'},
														{image : 'imagenes/departamento/06.jpg'}, 
														{image : 'imagenes/departamento/07.jpg'},
														{image : 'imagenes/departamento/08.jpg'}, 
														{image : 'imagenes/departamento/09.jpg'},
														{image : 'imagenes/departamento/10.jpg'}, 
														{image : 'imagenes/departamento/11.jpg'},
														{image : 'imagenes/departamento/12.jpg'}, 
														{image : 'imagenes/departamento/13.jpg'},
														{image : 'imagenes/departamento/14.jpg'}, 
														{image : 'imagenes/departamento/15.jpg'}
														
												]
					
				});
		    });
		    


