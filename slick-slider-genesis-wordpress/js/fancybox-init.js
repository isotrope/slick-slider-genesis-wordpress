jQuery(function( $ ){

	/* This is basic - uses default settings */
	
	$('a.fancybox-ss').fancybox({
		'transitionIn'	:	'fade',
		'transitionOut'	:	'fade',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	true,
		'showCloseButton':  true,
		'showNavArrows' :	true,
		'padding'		:	0,
		'cyclic'		:	true,
		'centerOnScroll':	true
	});
	
	$(".iframe").fancybox({
		'width'         : '75%',
		'height'        : '85%',
		'autoScale'     : false,
		'transitionIn'  : 'none',
		'transitionOut' : 'none',
		'type'          : 'iframe',
		'centerOnScroll': true
	});
	
	$("a.iframeCommentForms").fancybox({
		'width'		      :	600,
		'height'		      :	650,
		'overlayOpacity'	 :	'0.4',
		'overlayColor'		 :	'#000',
		'hideOnContentClick' :   false,
		'autoScale'     	 :   false,
   		'transitionIn'		 :   'elastic',
		'transitionOut'      :   'elastic',
		'wrapCSS'            :   'comment-form-lightbox-class',
		'type'			     :   'iframe'
	});
	
});