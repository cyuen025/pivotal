// JavaScript Document

var $bioH2 = $('.bio h2');
var $bioDiv = $('.bio div');

enquire.register('screen and (max-width: 480px)', {

	match : function() {
		
		accordian($bioH2, $bioDiv);
	
	},  

    unmatch : function() {
    
	    destroyAccordian($bioH2, $bioDiv);
	
	}

});






function accordian(elClick, elHide){
	
	elHide.hide();
	
	elClick.on('click', function() {
	  var $this = $(this);
	  $this.toggleClass('rotate_triangle_180');	  
	  $this.next().animate({
		'height':'toggle'
	  }, 'fast');
	});

}

function destroyAccordian(elClickRemove, elShow){

	elClickRemove.off('click');
	elShow.show();	

}

