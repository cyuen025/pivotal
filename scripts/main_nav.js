// JavaScript Document

// only do dropdown stuff if width is at least 980px
$programsLink = $("header .nav_items>ul>li:nth-of-type(2) a");
$dropdownHoverElement = $("header .nav_items>ul>li:nth-of-type(2)");
$dropdownMenuItems = $("header .nav_items ul ul li a");

if ($(this).width() > 980) {
	highlightPrograms();
}

$(window).resize(function() {
	if ($(this).width() <= 980) {
		removeHoverBackground();
	} else {
		highlightPrograms();
	}
});

function highlightPrograms() {
	$dropdownHoverElement.hover(
		function() {
			$programsLink.css("background-color", "#002047");
		}
	);
	
	$dropdownHoverElement.mouseleave(
		function() {
			$programsLink.css("background-color", "transparent");
		}
	);
	
	$dropdownMenuItems.hover(
		function() {
			$(this).css("background-color", "#3399FF");
		}
	);
	
	$dropdownMenuItems.mouseleave(
		function() {
			$(this).css("background-color", "transparent");
		}
	);
}

function removeHoverBackground() {
	$dropdownHoverElement.hover(
		function() {
			$programsLink.css("background-color", "transparent");
		}
	);
	
	$dropdownMenuItems.hover(
		function() {
			$(this).css("background-color", "transparent");
		}
	);
}
