 window.fbAsyncInit = function() {
    FB.init({appId: '177116303202', cookie: true, status: true, xfbml: true});
    jQuery(document).ready(function() {
      jQuery(document).trigger('facebook.init');
    });
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      'http://connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
