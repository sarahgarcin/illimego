$(document).ready(function(){
	init();
});


function init(){

	// -------------- OPEN MENU MOBILE --------------- //
	var nav = $('.nav');
	var barBurger1 = $('span:nth-child(1)');
	var barBurger2 = $('span:nth-child(2)');
	var barBurger3 = $('span:nth-child(3)');

	$('.mobile-menu_btn, .mobile-menu_title').on("click", function(e){
	  if(nav.hasClass('active')){
	    nav.removeClass("active");
	    barBurger1.removeClass("rotate-top");
	    barBurger2.removeClass("transparent");
	    barBurger3.removeClass("rotate-bottom");
	  }
	  else{
	  	nav.addClass("active");
	    barBurger1.addClass("rotate-top");
	    barBurger2.addClass("transparent");
	    barBurger3.addClass("rotate-bottom");
	  }

	});

	// -------------- OPEN SUBMENU MOBILE --------------- //
	var menuEl = document.querySelector('.main-nav_first-level li');

	$('.main-nav_first-level li').on("click", function(e){
		var submenu = $(this).find('.main-nav_submenu');
	  if(submenu.hasClass('active')){
	    submenu.removeClass("active");
	    $(this).removeClass('active');
	  }
	  else{
	  	submenu.addClass("active");
	  	$(this).addClass('active');
	  }

	});

	// --------------  HOME -------------- 
	// Packery
		// init Packery
		var $grid = $('.list-projects_selected').packery({
		  itemSelector: 'li',
	  	gutter: 0
		});
		$grid.packery();
		// layout Packery after each image loads
		// $grid.imagesLoaded().progress( function() {
		//   $grid.packery();
		// });



	//  -------------- actualités ---------------
	// déplier actualités
	$('.actualite .see-more').on('click', function(){
		$('.actualite').find('.content-to-hide').removeClass('active');
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		}
		else{
			$('.actualite .see-more').removeClass('active');
			$(this).addClass('active');
			$(this).parents('.actualite').find('.content-to-hide').addClass('active');
		}	
	});

	// select menu for footer
	$('.select-btn').on('click', function(){
		if($(this).hasClass('active')){
			$('.languages li:not(".active")').css('display', "none");
			$(this).removeClass('active').html('▼');
		}
		else{
			$('.languages li').css('display', "block");
			$(this).addClass('active').html('▲');
		}

	});

}







