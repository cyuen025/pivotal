// JavaScript Document

$('html').removeClass('no_js');
$('.content').wrap('<div class="outer_wrapper"></div>');
$('.outer_wrapper').prepend('<div class="menu"></div>');

var $body = $('body');
var $mobileMenu = $('.mobile_menu');
var navLi = $('.page_nav ul').html();

$('.menu').html('<nav class="new_page_nav"><ul>' + navLi + '</ul></nav>');

$mobileMenu.click(function(){
	$body.toggleClass('show_menu');		
})





