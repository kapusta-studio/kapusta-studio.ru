jQuery(document).ready(function(){ 
    jQuery('h1.class').each(function() {var h = jQuery(this).html();var index = h.indexOf(' ');if(index == -1){index = h.length;}
       jQuery(this).html('<span class="white">' + h.substring(0, index) + '</span>' + h.substring(index, h.length));
	});
});