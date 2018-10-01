var wpcf7ElmAnother = document.querySelector( 'section#form div.wpcf7' );
wpcf7ElmAnother.addEventListener( 'wpcf7mailsent', function( event ) {
    jQuery("#successfully").modal();
}, false );
