var $mainNav = $('.subpage_subnav_div nav');
var $bigNav = $(".subpage_sub_nav");
var $tabletNav = $(".subpage_sub_nav_tablet");
var $stickyNav = $(".subpage_sub_nav_sticky");
var mainNavTopPos = $mainNav.offset().top;

$(document).ready(function() {
	if (window.matchMedia("(min-width:1025px)").matches) {
		doStickyNav();	
		$tabletNav.css("display", "none");
	}
	else if (window.matchMedia("(max-width:1024px)").matches) {
		$mainNav.removeClass('sticky');		
		$bigNav.css("display", "none");	
	}
});

$(window).resize(function() {
	if (window.matchMedia("(min-width:1025px)").matches) {
		$tabletNav.css("display", "none");
		doStickyNav();
		if($(window).scrollTop() > mainNavTopPos) {
			$mainNav.removeClass('sticky');	
			$bigNav.css("display", "none");
			//$(".subpage_sub_nav .sticky").css("display", "none");
		}
		else 
			$bigNav.css("display", "block");
	} else if (window.matchMedia("(max-width:1024px)").matches) {
		$mainNav.removeClass('sticky');		
		$bigNav.css("display", "none");
		$stickyNav.css("display", "none");
		$tabletNav.css("display", "block");
	}
});

function doStickyNav() {
	$(window).scroll(function() {
		if (window.matchMedia("(min-width:1025px)").matches) {
			if($(window).scrollTop() > mainNavTopPos) {
				$mainNav.addClass('sticky');
				$bigNav.css("display", "none");
				$stickyNav.css("display", "block");
			} else { 
				$mainNav.removeClass('sticky');	
				$bigNav.css("display", "block");
				$stickyNav.css("display", "none");
			}
		}
	});
}

	// desktop view
	//if ($(this).width() > 1024) {

	//} else {
		// tablet view - only use collapsed nav
		/*$mainNav.removeClass('sticky');	
		$mainNav.css("display", "none");	
		if($(window).scrollTop() > mainNavTopPos) {
			$tabletNav.css("display", "block");
			$tabletNav.css("width", "24%");
			$tabletNav.addClass('sticky');
		} else {
			$tabletNav.css("display", "block");
			$tabletNav.css("width", "100%");
		}
	}*/
