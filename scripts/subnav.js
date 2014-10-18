// JavaScript Document

$navLinkCollapsed = $(".subpage_sub_nav_collapsed");
$navLinkExpanded = $(".subpage_sub_nav_expanded");

$navLinkCollapsed.mouseover(function() {
	// hide any previously expanded links
	$expandedSiblings = $(this).parent().siblings(".subpage_sub_nav_expanded");
	$expandedSiblings.each(function() {
		if ($(this).css("display") == "block") {
			$(this).css("display", "none");	
		}
	});
	
	// show the "collapsed" state of all the links
	$collapsedSiblings = $(this).parent().siblings("li").find(".subpage_sub_nav_collapsed");
	$collapsedSiblings.each(function() {
		if ($(this).css("display") == "none") {
			$(this).css("display", "block");	
		}
	});
	
	// finally, show the expanded state of the link that was clicked on
	// and hide the collapsed state
	$(this).css("display", "none");
	$navLinkToExpand = $(this).parent().next(".subpage_sub_nav_expanded");
	$navLinkToExpand.css("display", "block");
});

$navLinkExpanded.mouseleave(function() {
	$(this).css("display", "none");
	$collapsedState = $(this).prev().find(".subpage_sub_nav_collapsed");
	$collapsedState.css("display", "block");
});

function equalHeights(element1, element2) {
	var height;

	if (element1.outerHeight() > element2.outerHeight())
	{
		height = element1.outerHeight();
		element2.css("height", height);
	}
	else {
		height = element2.outerHeight();
		element1.css("height", height);
	}
}

equalHeights($(".subpage_subnav_div"), $(".content_div"));