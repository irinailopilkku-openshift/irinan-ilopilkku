(function ($) {
	$( '#dl-menu' ).dlmenu();
	$('ul.dl-menu li a').smoothScroll();


	//animation
	new WOW().init();


	/*<!-- timma.fi
	<script type="text/javascript">iFrameResize({checkOrigin: false});</script>
	-->
	$('iframe').iFrameResize( [{options}] );
	*/
	$('iframe#timma').iFrameResize( {checkOrigin: false} );

})(jQuery);