jQuery( document ).ready( function( $ ){
	var eventFired     = false;
	var options        = {};
	var counterObjects = {};

	function wpcjs_get_counter() {
		//Loop to class counter which contains all data provided into the shortcode.
		$.each( $( '.counter' ), function( index, value ) {
			$( this ).attr( 'id', 'counter-' + index ); //Add an id to each counter.

			var start     = $( this ).data( 'start' );
			var count     = $( this ).data( 'count' );
			var decimals  = $( this ).data( 'decimals' );
			var duration  = $( this ).data( 'duration' );
			var onScroll  = $( this ).data( 'scroll' );
			var easing    = $( this ).data( 'easing' );
			var grouping  = $( this ).data( 'grouping' );
			var separator = $( this ).data( 'separator' );
			var decimal   = $( this ).data( 'decimal' );
			var prefix    = $( this ).data( 'prefix' );
			var suffix    = $( this ).data( 'suffix' );

			//Options Variables
			var options_in_shortcode = {
				useEasing:   easing,
				useGrouping: grouping,
				separator:   separator,
				decimal:     decimal,
				prefix:      prefix,
				suffix:      suffix
			};

			//Loop to options_in_shortcode, this means if one option value inside of shortcode is empty, the default value is pull from the options page.
			$.each( options_in_shortcode, function( key, value ){
				if( value == " " ){
					options[ key ] = setting[ key ];
				} else {
					options[ key ] = value;
				}
			});

			//Get counter id.
			var counterId = $( this ).attr( 'id' );

			//Object Instance.
			var numAnim = new CountUp( counterId, start, count, decimals, duration, options );

			//Get the counter id position.
			objectPositionTop = $( '#' + counterId ).offset().top - window.innerHeight;

			if( onScroll === false && eventFired === false ){
				numAnim.start();
			} else {
				counterObjects[ 'counterObj' + index ] = {
					'objectPositionTop' : objectPositionTop,
					'numAnimObject'     : numAnim
				};
			}
		});
	}

	function wpcjs_onload() {
		$( window ).on( 'scroll', function(){
			var currentPosition = $( document ).scrollTop();

			for ( var i in counterObjects ) {
				if ( currentPosition > counterObjects[i].objectPositionTop && eventFired === false ) {
					counterObjects[i].numAnimObject.start();
				}
			}
		});
	}

	window.onload = function() {
		wpcjs_get_counter();
		wpcjs_onload();
	};
});