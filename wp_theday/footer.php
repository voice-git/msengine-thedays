<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/slick/slick.js"></script>
<?php if(is_home()||is_front_page()) : ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/js/script_top.js?<?php echo date("Ymd-Hi"); ?>"></script>
<!--
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/js/luxy.js"></script>
<script>
var windowWidth = $(window).width();
var windowLuxy = 559;
if (windowLuxy <= windowWidth) {
	luxy.init({
		wrapper: "#luxy",
		wrapperSpeed:  0.05
	});
};
</script>
-->
<?php else: ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/js/script.js?<?php echo date("Ymd-Hi"); ?>"></script>
<?php endif; ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/js/jquery.inview.min.js"></script>
<script>
$(function(){
	$(".inview").on("inview", function (event, isInView) {
		if (isInView) {
			$(this).stop().addClass("is-show");
		}
	});
});
<?php if(is_home()||is_front_page()) : ?>
document.addEventListener( 'wpcf7mailsent', function( event ) {
	location = '<?php echo esc_url( home_url('/') ); ?>contactcomp/';
}, false );
// メニュー表示
$(function() {
	var h1 = $('#cars').offset().top;
	var h2 = $('#reserve').offset().top - 500;
	var windowWidth = $(window).width();
	var windowLuxy = 559;
	if (windowLuxy <= windowWidth) {
	    $(window).scroll(function (){
	        if ($(this).scrollTop() > 700) {
	            $('.navpc').fadeIn();
	            $('.fixbtn').fadeIn();
	        } else {
	            $('.navpc').fadeOut();
	            $('.fixbtn').fadeOut();
	        }

/*
			var scroll = $(this).scrollTop();
			if (h1 > scroll){
				$('.popup_open').not('.toppopup').fadeOut();
			}else if (h2 < scroll){
				$('.popup_open').not('.toppopup').fadeOut();
			}else{
				$('.popup_open').fadeIn();
			}
*/
	    });
	}else{
	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 700) {
	            $('.navsp').fadeIn();
	            $('.fixbtn').fadeIn();
	        } else {
	            $('.navsp').fadeOut();
	            $('.fixbtn').fadeOut();
	        }

/*
			var scroll = $(this).scrollTop();
			if (h1 > scroll){
				$('.popup_open').not('.toppopup').fadeOut();
			}else if (h2 < scroll){
				$('.popup_open').not('.toppopup').fadeOut();
			}else{
				$('.popup_open').fadeIn();
			}
*/
	    });
	}
	
// ハンバーガーメニュー
	$('.navsp .humb').on('click', function() {
		$(this).toggleClass('active');
		$('.spmenu').toggleClass('active');
	});
	$('.spmenu a').not('.pdmbtn').on('click', function(){
		$('.navsp .humb').removeClass('active');
		$('.spmenu').removeClass('active');
	});
});
<?php else: ?>
	$('.navsp .humb').on('click', function() {
		$(this).toggleClass('active');
		$('.spmenu').toggleClass('active');
	});
	$('.spmenu a').not('.pdmbtn').on('click', function(){
		$('.navsp .humb').removeClass('active');
		$('.spmenu').removeClass('active');
	});
<?php endif; ?>

// プルダウンメニュー
<?php if(is_mobile()) : ?>
$('.pdmbtn').on('click', function () {
	$(this).toggleClass('active');
	$('.pdmwrap').slideToggle();
});
$('.pdmwrap a').on('click', function () {
	$('.pdmwrap').slideUp();
});
<?php else: ?>
$('.pdm').mouseenter(function(){
	$(this).addClass('active');
	$('.pdmwrap').stop().slideDown();
}).mouseleave(function(){
	$(this).removeClass('active');
	$('.pdmwrap').stop().slideUp();
});
<?php endif; ?>
</script>
<?php wp_footer(); ?>
</body>
</html>