( function( $ ) {
	$( 'body > footer' ).append( '<a href="" class="scroll-top"><svg xmlns="http://www.w3.org/2000/svg"><path d="M20 32v-16l6 6 6-6-16-16-16 16 6 6 6-6v16z"/></svg></a>' ); // Création de l'élément 'a.scroll-top'
	var scrolltop = $( '.scroll-top' ); // Création de la variable uniquement après création de l'élément dans le DOM
	scrolltop.on( 'click', function() {
		$( 'html, body' ).animate( {scrollTop: 0}, 600 ); // Retour en haut progressif
		return false; // Empêche la génération de l'ancre sur le permalien
	} );
	$( window ).scroll( function() { // Apparition de la flèche 'retour en haut' au scroll de la page
		if ( $( this ).scrollTop() > 100 ) {
			scrolltop.fadeIn();
		} else {
			scrolltop.fadeOut();
		}
	} );
} )( jQuery );