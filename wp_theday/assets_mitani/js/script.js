// スムーズスクロール
var scrollElm = (function() {
  if('scrollingElement' in document) {
    return document.scrollingElement;
  }
  if(navigator.userAgent.indexOf('WebKit') != -1) {
    return document.body;
  }
  return document.documentElement;
})();
 
$('a[href^="#"],area[href^="#"]').not('.noscroll').on('click', function() {
  var speed = 500;
  var easing = 'swing';
  var href= $(this).attr("href");
  $(scrollElm).animate({
    scrollTop: $(href == "#" ? 'html' : href).offset().top
  }, speed, easing);
  return false;
});