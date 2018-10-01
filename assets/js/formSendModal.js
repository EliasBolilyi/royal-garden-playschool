var wpcf7Elm = document.querySelector( 'div#leaveAppli div.wpcf7' );
wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
    jQuery("#leaveAppli").find('.main-cont').toggleClass('hidden') && jQuery("#leaveAppli").find('.sub-cont').toggleClass('hidden') && jQuery("#leaveAppli").find('.wpcf7').hide();
}, false );