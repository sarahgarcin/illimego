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

	// Get parameter from url to know on wich mode we are
	// const queryString = window.location.search;
	// const urlParams = new URLSearchParams(queryString);
	// if(urlParams.has('night')){
	// 	const night = urlParams.get('night');
	// 	if(night){
	// 		$('body').addClass('night');
	// 	}
	// 	else{
	// 		$('body').removeClass('night');
	// 	}
	// }


	// Night and day button
	// Toogle night and day
	$('.toogle-light').on("click",function(){
		if($('body').hasClass('night')){
			$('body').removeClass('night');
			setCookie('night', 'false', 1);
		}
		else{
			$('body').addClass('night');
			setCookie('night', 'true', 1);
		}
	});

	var night = getCookie('night');
	if(night == 'true'){
		$('body').addClass('night');
	}
	else{
		$('body').removeClass('night');
	}

	// function toogleMode(night){
	// 	console.log(night);
	// 	if(night == true){
	// 		$('body').addClass('night');
	// 	}
	// 	else{
	// 		$('body').removeClass('night');
	// 	}
	// }
	// toogleMode(getCookie('night'));

	function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
	}
	function getCookie(name) {
	    var nameEQ = name + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0;i < ca.length;i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1,c.length);
	        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	    }
	    return null;
	}
	function eraseCookie(name) {   
	    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
	}

	// --------------  HOME -------------- 
	// Packery
		// init Packery
		// if($('body').attr('data-template') == "home" || $('body').attr('data-template') == "projets"){
			var $grid = $('.list-projects').packery({
			  itemSelector: 'li',
		  	gutter: 20
			});
			$grid.packery();

			// $grid.imagesLoaded( function() {
	  //     $grid.packery('layout');
	  //   });

			// layout Packery after each image loads
			$grid.imagesLoaded().progress( function() {
			  $grid.packery();
			});
		// }

		var filters =[] ;

		// $('.filters > ul > li').each(function(i){
		// 	filters[i] = $(this).attr('data-filter');
		// });

		// $('.filters > ul > li').on( 'click', function() {
		// 	if($(this).hasClass('not-active')){
		// 		$(this).removeClass('not-active');
		// 		filters.push($(this).attr('data-filter'));
		// 		console.log(filters);
		// 	}
		// 	else{
		// 		$(this).addClass('not-active');
		// 		removeArray(filters, $(this).attr('data-filter'));
		// 		console.log(filters);
		// 	}
		//  $('.list-projects_template').isotope({ 
		//  		filter: filters.join(', '), 
		//  		transitionDuration: 200,
		// 	 	// masonry: {
	 //    // 		gutter: 20
	 //  		// }
  // 		});
		// });

		$('.filters > ul > li').on( 'click', function() {
			if($(this).hasClass('not-active')){
				$(this).removeClass('not-active');
				filters.push($(this).attr('data-filter'));
				console.log(filters);
			}
			else{
				$(this).addClass('not-active');
				removeArray(filters, $(this).attr('data-filter'));
				console.log(filters);
			}
			$('.list-projects_template').isotope({ 
		 		filter: filters.join(', '), 
		 		transitionDuration: 200,
			});
			$('.list-projects_text ul').isotope({ 
		 		filter: filters.join(', '), 
		 		transitionDuration: 200,
			});
		});





		//  -------------- projets ---------------
		// au survol allume liste de gauche et image à droite
	$('.list-projects_text li').mouseenter(function(){
		var projectUid = $(this).attr('data-project');
		$('.list-projects li[data-project="'+projectUid+'"]').addClass('active');
	});
	$('.list-projects_text li').mouseleave(function(){
		var projectUid = $(this).attr('data-project');
		$('.list-projects li[data-project="'+projectUid+'"]').removeClass('active');
	});

	$('.list-projects li').mouseenter(function(){
		var projectUid = $(this).attr('data-project');
		$('.list-projects_text li[data-project="'+projectUid+'"]').addClass('active');
	});
	$('.list-projects li').mouseleave(function(){
		var projectUid = $(this).attr('data-project');
		$('.list-projects_text li[data-project="'+projectUid+'"]').removeClass('active');
	});

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

	//  -------------- projet ---------------
	// déplier projet
	$('.projet_text-projet .see-more').on('click', function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active').html(' En savoir plus');
			$(this).parents('.projet_text-projet').find('.projet_text').removeClass('active');
		}
		else{
			console.log($(this).parent());
			$(this).addClass('active').html(' Replier');
			$(this).parents('.projet_text-projet').find('.projet_text').addClass('active');
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

	// footer open social media menu
	$('.social .icon-social').on('click', function(){
		var $sn = $('.social .list-social-networks');
		if($sn.hasClass('active')){
			$sn.css('display', 'none').removeClass('active');
		}
		else{
			$sn.css('display', 'block').addClass('active');
		}
		
	});

}

function removeArray(arr) {
  var what, a = arguments, L = a.length, ax;
  while (L > 1 && arr.length) {
      what = a[--L];
      while ((ax= arr.indexOf(what)) !== -1) {
          arr.splice(ax, 1);
      }
  }
  return arr;
}

function insertParam(key,value) {
    if (history.pushState) {
        var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?' +key+'='+value;
        window.history.pushState({path:newurl},'',newurl);
    }
  }






