jQuery(document).ready(function($) {
  $( '#primary-nav li' ).addClass('orange-bg');

  $( '#footer-nav li' ).addClass('orange').addClass('bottom-line');

  $( '#masthead' ).click(function(){
    if ( $( '#primary-nav' ).hasClass( 'is-down' ) ) {
      $( '#primary-nav' ).slideUp('fast').toggleClass('is-down');
      $( '#primary-nav li').fadeOut('fast');
      $( '#masthead' ).toggleClass('orange');
    } else {
      $( '#masthead' ).toggleClass('orange');
      $( '#primary-nav li').fadeIn('fast');
      $( '#primary-nav' ).slideDown('fast').toggleClass('is-down');
    }
    $('header').toggleClass('bottom-line');
  });
});
