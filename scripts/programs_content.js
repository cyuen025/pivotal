// JavaScript Document

$expandableContentLink = $(".pg_programs h3");

$expandableContentLink.click(function() {
	$(this).next().toggle();
});