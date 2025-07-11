<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
<meta name="format-detection" content="telephone=no">
<title>三谷サービスエンジン｜THE DAYs</title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets_mitani/slick/slick-theme.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets_mitani/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets_mitani/css/common.css?120<?php echo date("Ymd-Hi"); ?>" />
<?php if(is_home()||is_front_page()||is_page('contactcomp')) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets_mitani/css/top.css?01230<?php echo date("Ymd-Hi"); ?>" />
<?php elseif(is_page('memory')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets_mitani/css/memory.css?<?php echo date("Ymd-Hi"); ?>" />
<?php elseif(is_single()) : ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets_mitani/css/single.css?<?php echo date("Ymd-Hi"); ?>" />
<?php endif; ?>
<?php if(is_page('contactcomp')): ?>
<style>
	.navpc, .navsp{
		display: block;
	}
</style>
<?php endif; ?>
<script>
  (function(d) {
    var config = {
      kitId: 'duw5bgj',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RMMSRD3RFH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RMMSRD3RFH');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-201296483-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-201296483-2');
  gtag('config', 'AW-647226070');
</script>

<!-- Yahoo! site general tag -->
<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
<script>
window.yjDataLayer = window.yjDataLayer || [];
function ytag() { yjDataLayer.push(arguments); }
ytag({"type":"ycl_cookie"});
</script>

<?php if(is_page('contactcomp')): ?>
<!-- Event snippet for 予約 conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-647226070/e_gdCOjB2NwBENbFz7QC',
      'value': 1.0,
      'currency': 'JPY'
  });
</script>

<!-- Yahoo! conversion tracking tag -->
<script async>
ytag({
  "type": "yss_conversion",
  "config": {
    "yahoo_conversion_id": "1001160924",
    "yahoo_conversion_label": "e_rTCNutyPECEOHukZoC",
    "yahoo_conversion_value": "0"
  }
});
</script>
<?php endif; ?>

</head>
<body>
<?php if(is_mobile()) : ?>
<nav class="navsp">
	<div class="navwrap">
<?php if(is_home()||is_front_page()) : ?>
		<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/headlogo.svg" width="142" height="24" alt="THEDAY's"></a>
<?php else: ?>
		<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/headlogo.svg" width="142" height="24" alt="THEDAY's"></a>
<?php endif; ?>
		<a href="tel:0762948612" class="whiteback din" onClick="gtag('event', 'click', {'event_category': 'tel', 'event_label': '電話ボタン_SPヘッダ'});"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/headtel_b.svg" width="24" height="38" alt=""></a>
		<div class="humb">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</nav>
<nav class="spmenu">
	<div class="menuwrap">
<?php if(is_home()||is_front_page()) : ?>
<!-- 		<a href="#memory">THEDAYsMEMORY</a> -->
		<a href="#plan">トラベリングプラン例</a>
		<div class="pdm">
			<a class="pdmbtn">最高な1日を過ごす相棒たち</a>
			<div class="pdmwrap">
				<a href="#perice_01">クレア・カムロード料金表</a>
<!-- 				<a href="#perice_02">ハイゼット料金表</a> -->
			</div>
		</div>
		<a href="#reserve">ご予約状況</a>
		<a href="#terms">利用規約</a>
<?php else: ?>
		<a href="/#memory">THEDAYsMEMORY</a>
		<a href="/#plan">トラベリングプラン例</a>
<!-- 		<a href="/#cars">最高な1日を過ごす相棒たち</a> -->
		<div class="pdm">
			<a class="pdmbtn">最高な1日を過ごす相棒たち</a>
			<div class="pdmwrap">
				<a href="/#perice_01">クレア・カムロード料金表</a>
<!-- 				<a href="/#perice_02">ハイゼット料金表</a> -->
			</div>
		</div>
		<a href="/#reserve">ご予約状況</a>
		<a href="/#terms">利用規約</a>
<?php endif; ?>
		<a href="tel:0762948612" class="din" onClick="gtag('event', 'click', {'event_category': 'tel', 'event_label': '電話ボタン_SPメニュー'});"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/headtel.svg" width="24" height="38" alt="">076-294-8612</a>
	</div>
</nav>
<?php else: ?>
<nav class="navpc">
	<div class="navwrap">
<?php if(is_home()||is_front_page()) : ?>
		<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/headlogo.svg" width="142" height="24" alt="THEDAY's"></a>
<?php else: ?>
		<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/headlogo.svg" width="142" height="24" alt="THEDAY's"></a>
<?php endif; ?>
		<a href="#memory">THEDAYsMEMORY</a>
		<a href="#plan">トラベリングプラン例</a>
		<div class="pdm">
			<a href="#cars" class="pdmbtn">最高な1日を過ごす相棒たち</a>
			<div class="pdmwrap">
				<a href="#perice_01">クレア・カムロード料金表</a>
<!-- 				<a href="#perice_02">ハイゼット料金表</a> -->
			</div>
		</div>
		<a href="#reserve">ご予約状況</a>
		<a href="#terms">利用規約</a>
		<a href="tel:0762948612" class="din"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/headtel.svg" width="24" height="38" alt="">076-294-8612</a>
	</div>
</nav>
<?php endif; ?>
<?php if(is_home()||is_front_page()) : ?>
<a href="#reserve" class="fixbtn"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/fixbtn.png" width="180" height="180" alt="予約状況はこちらから"></a>
<?php else: ?>
<a href="/#reserve" class="fixbtn"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/fixbtn.png" width="180" height="180" alt="予約状況はこちらから"></a>
<?php endif; ?>