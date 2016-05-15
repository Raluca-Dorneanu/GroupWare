jQuery(function($) {

	



	$(document).ready(function(){


		//Superfish
		$(".sf-menu").superfish({
			dropShadows:   false
		});
		$('#mobnav-btn').click(	function () {
		    $('.sf-menu').toggleClass("xactive");
		});
		
		$('.top-search #searchform #s').attr('size', $('.top-search #searchform #s').attr('placeholder').length);
		$('.top-search #searchsubmit').hover(
			function() {
				$('.top-search #searchform #s').focus();
			},
			function() {
				
			}
		)


		$( "<div class='mobnav-subarrow'></div>" ).insertBefore( ".sf-menu ul" );	

		$('.mobnav-subarrow').click(function () {
		    $(this).parent().toggleClass("xpopdrop");
		});


		/* QTIP STARTS*/
		// $('[title!=""]').qtip({
			
		// 	style: { 
		// 	 	classes: 'qtip-tipsy',
			 	
		// 	}
		// }); // A bit better. Grab elements with a title attribute that isn't blank.

		/*FIT VIDEOS STARTS*/
	    jQuery("article").fitVids();
	    /*FIT VIDEOS ENDS*/


	    /*PRETTYPHOTO STARTS*/
	    jQuery("a[class^='prettyPhoto']").prettyPhoto();
	    /*PRETTYPHOTO ENDS*/

	});

});