// ポップアップ
/*
$(function() {
	$('.popup_open').on('click',function(){
		$('.popup').fadeIn();
	});
	$('.popup_closer').on('click',function(){
		$('.popup').fadeOut();
	});
	$('.popup').click(function(event) {
		if(!$(event.target).closest('.popupwrap').length) {
			$('.popup').fadeOut();
			return false;
		}
	});

	$(window).on("scroll load", function() {
		if ($(this).scrollTop() > 100) {
			$('.popup').fadeOut();
		}
	});
});
*/



// ローディングアニメーション
var images = document.querySelectorAll('img,video');
var percent = document.getElementById('percent-text');
var gauge = document.getElementById('count-color');
var imgCount = 0;
var baseCount = 0;
var gaugeMax = 60;
var current;
 
// 画像の読み込み
for (var i = 0; i < images.length; i++) {
    var img = new Image(); 
    // 画像読み込み完了したとき
    img.onload = function() {
        imgCount += 1;
    }
    // 画像読み込み失敗したとき
    img.onerror = function() {
        imgCount += 1;
    }
    img.src = images[i].src;
};
 
// ローディング処理
var nowLoading = setInterval(function() {
    if(baseCount <= imgCount) {
        current = Math.floor(baseCount / images.length * 100);
        percent.innerHTML = current;
        gauge.style.clip = 'rect(0,' + Math.floor(gaugeMax / 100 * current) + 'px,60px,0)';
        baseCount += 1;
        if(baseCount == images.length) {
		    jQuery('#loader-bg').delay(900).fadeOut(800);
		    jQuery('#loader').delay(600).fadeOut(300);
			jQuery("#loading").fadeOut();
            clearInterval(nowLoading);
        }
    }
}, 10);


// メイン画像ランダム
//付与したいクラスの配列
var arr = ["bg01", "bg02", "bg03", "bg04"];
var a = arr.length;

//シャッフルアルゴリズム
while (a) {
  var j = Math.floor(Math.random() * a);
  var t = arr[--a];
  arr[a] = arr[j];
  arr[j] = t;
}

//シャッフルされた配列の要素を順番に表示する
arr.forEach(function (value, index) {
  $(".topback span").eq(index).addClass(value);
});



// トップメインサイズ
$(function(){
	var window_width = window.innerWidth;
	$('.topback').height(1.3 * window_width);
	$('.top_area').height(1.3 * window_width);
});
$(window).resize(function(){
});


// スライダー
$('.topback').slick({
	fade: true,
	arrows: false,
    dots: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    slidesToShow: 1,
/*
    responsive: [
	    {
		    breakpoint: 559,
		    settings: {
			    slidesToShow: 1,
			    centerMode: true,
			    centerPadding: '40px',
		    }
	    }
	]
*/
});
$('.photo_wrap').slick({
	autoplay: true,
	autoplaySpeed: 5000,
	arrows: false,
    dots: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    slidesToShow: 4,
    responsive: [
	    {
		    breakpoint: 559,
		    settings: {
			    slidesToShow: 1,
			    centerMode: true,
			    centerPadding: '20%',
		    }
	    }
    ]
});




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