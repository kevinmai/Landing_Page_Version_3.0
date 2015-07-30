
	jQuery(document).ready(function($){
		/****** MOVE 1 2 3 text to footer for mobile  ******/
		if($(window).width() <= 767){
			var $three_box = $("#three_box");
			$("footer").before($three_box);
		}   

		/****** OFF CANVAS MENU *******/
		var $trigger = $("div[rel*='trigger_mobile_']");
		var $off_canvas_menu = $("#off_canvas_menu");
		var $contact_us_mobile = $("#contact_us_mobile");
		var $mobile_contact_form = $("#mobile_contact_form");
		var $close_button = $(".close-button");
		var $slide_out;
		
		$trigger.click(function(){
			switch(	$(this).attr( "rel" ) ){
				case "trigger_mobile_nav":
					$slide_out = $off_canvas_menu;
					break;
				case "trigger_mobile_contact":
					$slide_out = $mobile_contact_form;
					break;
			}
			
			if($slide_out.css( "left" ) != 0 + "px"){
				$slide_out
					.animate( { left : 0 + "px"} , "fast" )
					.css( { zIndex : 11 } );
			}
		});
		
		$close_button.click(function(){
			if($(this).parent().css( "left" ) == 0 + "px"){
				$(this).parent()
					.animate( { left : -100 + "%" } , "fast" )
					.css( { zIndex : 1 } )
			}
		});

		/***** SLIDE OUT FOR MOBILE MENU *******/
		$(".sub-menu").hide();

		$(".sub-menu-mobile").click(function(){
			var $sub_menu = $(this).next();
			if($sub_menu.is(":hidden")){
				$(".sub-menu").slideUp();
				$sub_menu.slideDown();
				$(this).css({zIndex:11});
			}
			else{
				$sub_menu.slideUp();
				$(this).css({zIndex:1});			
			}

		});	

	});

