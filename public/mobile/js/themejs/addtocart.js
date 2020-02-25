/* -------------------------------------------------------------------------------- /
	
	Magentech jQuery
	Created by Magentech
	v1.0 - 20.9.2016
	All rights reserved.
	
/ -------------------------------------------------------------------------------- */


// Cart add remove functions
var cart = {
	'add': function(product_id, quantity) {
		addProductNotice('Product added to Cart','success');
	}
}

var wishlist = {
	'add': function(product_id) {
		addProductNotice('Product added to Wishlist','success');
		
	}
}
var compare = {
	'add': function(product_id) {
		addProductNotice('Product added to compare','success');
		
	}
}

/* ---------------------------------------------------
	jGrowl – jQuery alerts and message box
-------------------------------------------------- */
function addProductNotice(title, thumb, text, type) {
	$.jGrowl.defaults.closer = false;
	//Stop jGrowl
	//$.jGrowl.defaults.sticky = true;
	var tpl =  '<h3>'+text+'</h3>';
	$.jGrowl(tpl, {		
		life: 4000,
		header: title,
		speed: 'slow',
		theme: type
	});
}

