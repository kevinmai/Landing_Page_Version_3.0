
	jQuery(document).ready(function($){
		/****** MOVE 1 2 3 text to footer for mobile  ******/
		if($(window).width() <= 767){
			var $three_box = $("#three_box");
			$("footer").before($three_box);
		}   

		/****** OFF CANVAS MENU *******/
		var mobile_button = document.querySelector("#mobile_nav");
		var $off_canvas_menu = $("#off_canvas_menu");
		var close_button = document.querySelector("#close_off_canvas");
		var close_button = document.querySelector("#close_off_contact");
		var $mobile_contact_form = $("#mobile_contact_form");

		mobile_button.addEventListener("click",function(){ 
			
			var $main_wrapper = $("#main_wrapper");

			$off_canvas_menu
				.animate({left: 0+"px"},"fast")
				.css({zIndex:11});
		});
		close_off_canvas.addEventListener("click",function(){
			$off_canvas_menu
				.animate({left: -100+"%"},"fast")
				.css({zIndex:1});			
		});

		close_off_contact.addEventListener("click",function(){
			$mobile_contact_form
				.animate({left: -100+"%"},"fast");
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

