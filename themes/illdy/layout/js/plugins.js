
jQuery( document ).ready( function( $ ) {
 
  // Counter Number
  function counterNumber() {
    var counter = $( '#counter' ).find( '.counter-number' );
    if ( counter.length ) {
      counter.countTo();
    }
  }

  // Called Functions
  $( function() {
    
    $( window ).scroll( function() {
      var counterVisible = $( '#counter' ).visible();

      if ( true === counterVisible ) {
        counterNumber();
      }
    } );
  } );
} );
