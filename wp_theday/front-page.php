<?php get_header(); ?>
<div id="loader-bg">
	<div class="mv_top" id="loading">
		<div class="load_wrap">
<!-- 			<img class="loading_img01" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/loading.jpg" width="1366" height="768"> -->
<!-- 			<p class="nowloading">NOW LOADING...</p> -->
			<span id="count-color"></span>
			<p class="loading_percent din"><span id="percent-text">0</span>%</p>
		</div>
	</div>
</div>

<!--
<div class="popup">
	<div class="popupwrap">
		<div class="popup_closer"></div>
		<p class="popuptitle01">OPEN 記念キャンペーン</p>
		<p class="popuptitle02">新車のキャンピングカーレンタル料が</p>
		<img class="popupimg" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/popup.svg" width="520" height="128" alt="¥10,000OFF">
		<p class="sub01">新品だから綺麗で清潔！初めてレンタルされる方でも、気持ちよくご利用いただけます。この機会に是非ご利用ください！</p>
		<p class="box"><span>キャンペーン期間：2021年12月31日まで</span></p>
		<p class="sub02">※期限はご予約日ではなくご利用日に準じます。</p>
	</div>
</div>
<div class="popup_open">
	<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/popupbtn.png" width="246" height="144" alt="今だけ10,000円OFF！！ OPEN記念 キャンペーン実施中！">
</div>
-->

<div class="background"></div>

<div id="luxy">
<div class="contentwrap">
	<div class="top_area">
<!--
		<div class="popupwrap_sp">
			<div class="popup_open toppopup">
				<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/popupbtn.png" width="246" height="144" alt="今だけ10,000円OFF！！ OPEN記念 キャンペーン実施中！">
			</div>
		</div>
-->
		<div class="textwrap">
			<h2 class="topmaintitle">三谷サービスエンジンの新しいサービス誕生</h2>
			<img class="topmainimg" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/topmain.png" width="636" height="161" alt="THEDAYs  Travelling Car Rent Service">
			<h3 class="topsub inview">キャンピングカーは<br>　トラベリングカーです。</h3>
			<p class="toptext inview">人生をとことん楽しむための<br class="sp_block">レンタルカーサービスです。<br>三谷サービスエンジンの<br class="sp_block">トラベリングカーで<br class="sp_block">旅をもっと自由に、<br>いつもよりも、もっと素敵な休日を、<br class="sp_block">もっと楽しい週末を。<br>最高なひと時になりますように。</p>
			<img class="topfootimg inview" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/top_foot.png" width="278" height="74" alt="THEDAYs  PRESENTED BY MITANI SERVICE ENGINE">
		</div>
		<div class="topback">
			<span class="back01"></span>
			<span class="back02"></span>
			<span class="back03"></span>
			<span class="back04"></span>
		</div>
	</div>
<!--
	<div id="memory" class="memory_area">
		<img class="topfootimg inview" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/memory_title.svg" width="333" height="106" alt="あなたのTHEDAYs MEMORY">
		<h2 class="memorytitle inview">THEDAYsのキャンピングカーを<br class="sp_block">実際に使用した皆様から、<br class="sp_block">旅の思い出をおすそ分けしてもらいました。</h2>
		<div class="photo_wrap inview">
	        <?php
	        $args = array(
	            "posts_per_page" => 8
	        );
	        $the_query = new WP_Query($args);
	        if ($the_query->have_posts()) :
	            while ($the_query->have_posts()) : $the_query->the_post(); ?>
	            <a href="<?php the_permalink(); ?>" class="photo"><span class="imgwrap" style="background-image: url(<?php if(has_post_thumbnail()){
				$image_id = get_post_thumbnail_id ();
				$image_url = wp_get_attachment_image_src ($image_id, true);
				echo $image_url[0];}else{echo '';} ?>);background-size: cover;background-position: center center;"></span></a>
	        <?php endwhile; endif; wp_reset_query(); ?>
		</div>
		<a class="linkbtn inview" href="/memory"><span class="din">VIEW ALL</span></a>
	</div>
-->
	<div class="what_area">
		<span class="centerline"></span>
		<p id="plan" class="plan_sub din inview">TRAVELING PLAN</p>
		<p class="plan_sub02 din inview">トラベリングカーで今日はどこ行く?</p>
		<h2 class="plan_title inview">最高な1日をおくるための<br class="sp_block">トラベリングプラン例</h2>
		<div class="plan_wrap">
			<div class="planblock">
				<div class="plantop inview">
<?php if(is_mobile()) : ?>
					<img class="no" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan01sp.svg" width="85" height="68" alt="Traveling Plan 01">
<?php else: ?>
					<img class="no" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan01.svg" width="266" height="76" alt="Traveling Plan 01">
<?php endif; ?>
					<div class="textwrap">
						<h3 class="plan_title02"><span>家族4人で</span><br><span>上高地3泊4日の旅、</span><br><span class="pdr0">93,500円＋ガソリン代でした。</span></h3>
						<p class="sub">※高速料<span>金を除く。</span></p>
					</div>
					<span class="plan_imgback"></span>
				</div>
				<div class="planbottom">
					<div class="imgwrap inview">
<?php if(is_mobile()) : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan01_img01sp.jpg" width="342" height="342" alt="">
<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan01_img01.jpg" width="372" height="500" alt="">
<?php endif; ?>
						<p  class="planbottom_text">自然に囲まれた温泉でリラックス。<br>体も心もぽかぽかで旅の疲れも綺麗さっぱり。</p>
					</div>
					<div class="photowrap">
						<div class="imgwrap inview">
<?php if(is_mobile()) : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan01_img02sp.jpg" width="342" height="342" alt="">
<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan01_img02.jpg" width="342" height="434" alt="">
<?php endif; ?>
							<p  class="planbottom_text">公園でピクニック。外で食べるご飯はいつも<br>よりおいしく感じるから不思議だね。</p>
						</div>
						<div class="imgwrap inview">
<?php if(is_mobile()) : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan01_img03sp.jpg" width="342" height="342" alt="">
<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan01_img03.jpg" width="390" height="194" alt="">
<?php endif; ?>
							<p  class="planbottom_text">夜空を見てゆったりと過ごす家族団らんの時間は<br>トラベリングカーならでは！</p>
						</div>
					</div>
				</div>
			</div>
			<div class="planblock">
				<div class="plantop inview">
<?php if(is_mobile()) : ?>
					<img class="no" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan02sp.svg" width="85" height="68" alt="Traveling Plan 02">
<?php else: ?>
					<img class="no" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan02.svg" width="262" height="74" alt="Traveling Plan 02">
<?php endif; ?>
					<div class="textwrap">
						<h3 class="plan_title02"><span>家族4人の</span><br><span>四国一周の旅</span><br><span class="pdr0">5泊6日で137,500円でした。</span></h3>
						<p class="sub"><span>※高速料金を除く。</span></p>
					</div>
					<span class="plan_imgback"></span>
				</div>
				<div class="planbottom">
					<div class="photowrap">
						<div class="imgwrap inview">
<?php if(is_mobile()) : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan02_img01sp.jpg" width="342" height="342" alt="">
<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan02_img01.jpg" width="342" height="233" alt="">
<?php endif; ?>
							<p  class="planbottom_text">心地よい風の中、たまには時計を外して<br>のんびりとした時間を過ごすのもいいね。</p>
						</div>
						<div class="imgwrap inview">
<?php if(is_mobile()) : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan02_img02sp.jpg" width="342" height="342" alt="">
<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan02_img02.jpg" width="390" height="194" alt="">
<?php endif; ?>
							<p  class="planbottom_text">見渡す限り広がる四国カルストの大自然。<br>ちょっと立ち止まっての空気を吸ってみませんか？</p>
						</div>
					</div>
					<div class="imgwrap inview">
<?php if(is_mobile()) : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan02_img03sp.jpg" width="342" height="342" alt="">
<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan02_img03.jpg" width="372" height="500" alt="">
<?php endif; ?>
						<p  class="planbottom_text">潮風を肌に感じながら、自然の力を浴びて<br>パワーチャージ！疲れた体も元気になりそう。</p>
					</div>
				</div>
			</div>
			<div class="planblock">
				<div class="plantop inview">
<?php if(is_mobile()) : ?>
					<img class="no" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan03sp.svg" width="85" height="68" alt="Traveling Plan 03">
<?php else: ?>
					<img class="no" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan03.svg" width="268" height="74" alt="Traveling Plan 03">
<?php endif; ?>
					<div class="textwrap">
						<h3 class="plan_title02"><span>仲良し女子旅、</span><br><span>北海道ぐるっと一周6泊7日で、</span><br><span class="pdr0">181,500円＋ガソリン代でした。</span></h3>
						<p class="sub">※高速料<span>金を除く。</span></p>
					</div>
					<span class="plan_imgback"></span>
				</div>
				<div class="planbottom">
					<div class="imgwrap inview">
<?php if(is_mobile()) : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan03_img01sp.jpg" width="342" height="342" alt="">
<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan03_img01.jpg" width="372" height="500" alt="">
<?php endif; ?>
						<p  class="planbottom_text">北海道の魅力の一つ、真っ直ぐ続く直線道路。<br>車で走っているだけでも楽しい！</p>
					</div>
					<div class="photowrap">
						<div class="imgwrap inview">
<?php if(is_mobile()) : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan03_img02sp.jpg" width="342" height="342" alt="">
<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan03_img02.jpg" width="342" height="234" alt="">
<?php endif; ?>
							<p  class="planbottom_text">どこまでも続く紫色のじゅうたんと<br>花の香りで癒しの時間を満喫。</p>
						</div>
						<div class="imgwrap inview">
<?php if(is_mobile()) : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan03_img03sp.jpg" width="342" height="342" alt="">
<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/whats_plan03_img03.jpg" width="390" height="194" alt="">
<?php endif; ?>
							<p  class="planbottom_text">雪が降り積もって一面銀世界、<br>でもキャンピングカーなら寒さもへっちゃら！</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="cars" class="car_area">
		<p class="car_sub din inview">CAMPING CAR</p>
		<h2 class="car_title inview">最高な1日を過ごす相棒たち</h2>
		<p class="car_text inview">クルマというより<br class="sp_block">移動するホテルです。</p>
		<div class="car_wrap">
			<div class="car_block">
				<span class="bordersp"></span>
				<h3 class="cartitle din inview">CREA・CAMROAD</h3>
				<p class="carsub inview">クレア・カムロード</p>
				<p class="cartext inview">広々空間で、<br class="sp_block">長旅でも大活躍の本格派。</p>
				<div class="photowrap">
					<img class="mainimg inview" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_camroad01.jpg" width="546" height="368" alt="">
<?php if(is_mobile()) : ?>
					<img class="img00camroad inview" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_camroad_imgsp.gif" width="379" height="990" alt="シックで落ち着いた雰囲気の内装！　ふたくちコンロで、料理もスムーズ！　内部にもたっぷり収納！　大きな荷物もらくらく積載！">
<!--
					<img class="img01" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_camroad02sp.gif" width="336" height="324" alt="シックで落ち着いた雰囲気の内装！">
					<img class="img02" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_camroad03sp.gif" width="260" height="180" alt="">
					<img class="img03" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_camroad04sp.gif" width="260" height="255" alt="大きな荷物もらくらく積載！">
-->
<?php else: ?>
					<img class="img00camroad inview" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_camroad_imgpc.gif" width="463" height="638" alt="シックで落ち着いた雰囲気の内装！　ふたくちコンロで、料理もスムーズ！　内部にもたっぷり収納！　大きな荷物もらくらく積載！">
<!--
					<img class="img01" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_camroad02.gif" width="431" height="346" alt="シックで落ち着いた雰囲気の内装！">
					<img class="img02" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_camroad03.gif" width="196" height="125" alt="">
					<img class="img03" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_camroad04.gif" width="260" height="229" alt="大きな荷物もらくらく積載！">
-->
<?php endif; ?>
				</div>
				<ul id="perice_01" class="inview">
					<li>
						<div class="left">
							<p><span>乗車定員</span></p>
						</div>
						<div class="right">
							<p>7人</p>
						</div>
					</li>
					<li>
						<div class="left">
							<p><span>車内設備</span></p>
						</div>
						<div class="right">
							<p>エアコン、キッチン、カーナビ、<br>横滑り防止装置、ベット、テーブル等</p>
						</div>
					</li>
				</ul>
<?php if(is_mobile()) : ?>
				<table class="cartable inview">
					<tbody>
						<tr>
							<th colspan="3">レンタル価格（税込）</th>
						</tr>
						<tr>
							<td></td>
							<td>平日</td>
							<td>土日祝</td>
						</tr>
						<tr>
							<td>1日</td>
							<td><span class="price din">27,500</span>円</td>
							<td><span class="price din">38,500</span>円</td>
						</tr>
						<tr>
							<td>2日目〜</td>
							<td><span class="price din">22,000</span>円</td>
							<td><span class="price din">33,300</span>円</td>
						</tr>
						<tr>
							<td>延長<br>1時間</td>
							<td><span class="price din">3,300</span>円</td>
							<td><span class="price din">3,300</span>円</td>
						</tr>
					</tbody>
				</table>
				<table class="cartable inview">
					<tbody>
						<tr>
							<th class="f12">駆動方式</th>
							<th class="f12">ミッション</th>
							<th class="f12">エンジンタイプ</th>
							<th class="f12">排気量</th>
						</tr>
						<tr>
							<td>4WD</td>
							<td>A/T</td>
							<td>ディーゼル</td>
							<td>3000CC</td>
						</tr>
					</tbody>
				</table>
<?php else: ?>
				<table class="cartable inview">
					<tbody>
						<tr>
							<th colspan="4">レンタル価格（税込）</th>
							<th>駆動方式</th>
							<th>ミッション</th>
							<th>エンジンタイプ</th>
							<th>排気量</th>
						</tr>
						<tr>
							<th></th>
							<td>1日</td>
							<td>2日目〜</td>
							<td>延長1時間</td>
							<td rowspan="3">4WD</td>
							<td rowspan="3">A/T</td>
							<td rowspan="3">ディーゼル</td>
							<td rowspan="3">3000CC</td>
						</tr>
						<tr>
							<th>平日</th>
							<td><span class="price din">27,500</span>円</td>
							<td><span class="price din">22,000</span>円</td>
							<td><span class="price din">3,300</span>円</td>
						</tr>
						<tr>
							<th>土日祝</th>
							<td><span class="price din">38,500</span>円</td>
							<td><span class="price din">33,300</span>円</td>
							<td><span class="price din">3,300</span>円</td>
						</tr>
					</tbody>
				</table>
<?php endif; ?>
			</div>
<!--
			<div class="car_block">
				<span class="bordersp"></span>
				<h3 class="cartitle din inview">HIJET</h3>
				<p class="carsub inview">ハイゼット</p>
				<p class="cartext inview">コンパクトサイズだから、<br class="sp_block">初めての方でも気軽にドライブへ。</p>
				<div class="photowrap">
					<img class="mainimg inview" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_hijet01.jpg" width="546" height="368" alt="">
<?php if(is_mobile()) : ?>
					<img class="img00hijet inview" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_hijet_imgsp.gif" width="375" height="994" alt="明るくて広々としたリビングスペース！　車窓から美しい景色を望める！　運転席の上にもくつろぎスペース！　ソファーを倒せばベッドに早変わり！">
<?php else: ?>
					<img class="img00hijet inview" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_hijet_imgpc.gif" width="464" height="627" alt="明るくて広々としたリビングスペース！　車窓から美しい景色を望める！　運転席の上にもくつろぎスペース！　ソファーを倒せばベッドに早変わり！">
<?php endif; ?>
				</div>
				<ul id="perice_02" class="inview">
					<li>
						<div class="left">
							<p><span>乗車定員</span></p>
						</div>
						<div class="right">
							<p>4人</p>
						</div>
					</li>
					<li>
						<div class="left">
							<p><span>車内設備</span></p>
						</div>
						<div class="right">
							<p>キッチン、カーナビ、<br>横滑り防止装置、ベット、テーブル</p>
						</div>
					</li>
				</ul>
<?php if(is_mobile()) : ?>
				<table class="cartable inview">
					<tbody>
						<tr>
							<th colspan="3">レンタル価格（税込）</th>
						</tr>
						<tr>
							<td></td>
							<td>平日</td>
							<td>土日祝</td>
						</tr>
						<tr>
							<td>1日</td>
							<td><span class="price din">22,000</span>円</td>
							<td><span class="price din">27,500</span>円</td>
						</tr>
						<tr>
							<td>2日目〜</td>
							<td><span class="price din">16,500</span>円</td>
							<td><span class="price din">22,000</span>円</td>
						</tr>
						<tr>
							<td>延長<br>1時間</td>
							<td><span class="price din">3,300</span>円</td>
							<td><span class="price din">3,300</span>円</td>
						</tr>
					</tbody>
				</table>
				<table class="cartable inview">
					<tbody>
						<tr>
							<th class="f12">駆動方式</th>
							<th class="f12">ミッション</th>
							<th class="f12">エンジンタイプ</th>
							<th class="f12">排気量</th>
						</tr>
						<tr>
							<td>4WD</td>
							<td>A/T</td>
							<td>ガソリン</td>
							<td>660CC</td>
						</tr>
					</tbody>
				</table>
<?php else: ?>
				<table class="cartable inview">
					<tbody>
						<tr>
							<th class="f14" colspan="4">レンタル価格（税込）</th>
							<th class="f12">駆動方式</th>
							<th class="f12">ミッション</th>
							<th class="f12">エンジンタイプ</th>
							<th class="f12">排気量</th>
						</tr>
						<tr>
							<th></th>
							<td class="f14">1日</td>
							<td class="f14">2日目〜</td>
							<td class="f14">延長1時間</td>
							<td rowspan="3">4WD</td>
							<td rowspan="3">A/T</td>
							<td rowspan="3">ガソリン</td>
							<td rowspan="3">660CC</td>
						</tr>
						<tr>
							<th class="f14">平日</th>
							<td class="f12"><span class="price din">22,000</span>円</td>
							<td class="f12"><span class="price din">16,500</span>円</td>
							<td class="f12"><span class="price din">3,300</span>円</td>
						</tr>
						<tr>
							<th class="f14">土日祝</th>
							<td class="f12"><span class="price din">27,500</span>円</td>
							<td class="f12"><span class="price din">22,000</span>円</td>
							<td class="f12"><span class="price din">3,300</span>円</td>
						</tr>
					</tbody>
				</table>
<?php endif; ?>
			</div>
-->
			<div class="car_block">
				<span class="bordersp"></span>
				<h3 class="cartitle din inview">OPTION</h3>
				<p class="carsub inview">オプション</p>
				<p class="cartext inview">自分で道具を揃えなくても<br class="sp_block">セットで借りられる！</p>
				<div class="photowrapflex">
					<img class="mainimg inview" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/car_option.jpg" width="540" height="334" alt="">
					<div class="textwrap inview">
						<p class="listtext">・キャリーカート 1台<br>・テーブル 1台<br>・椅子 5 脚<br>・キッチンコンロ 1 台<br>・サウンドアンドライト 2 台</p>
						<table>
							<tbody>
								<tr>
									<th colspan="2">セットレンタル価格（税込）</th>
								</tr>
								<tr>
									<td>1日</td>
									<td><span class="price din">11,000</span>円</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="reserve" class="reserve_area">
<!-- 		<span class="centerline"></span> -->
		<p class="reserve_sub din inview">RESERVE</p>
		<h2 class="reserve_title inview">ご予約状況</h2>
		<p class="reserve_text01 inview">予約状況をご確認のもと、<br class="sp_block">店頭またはお電話にてお気軽に<br class="sp_block">ご予約ください。</p>
		<p class="reserve_text02 inview">※すでに予約済みの日はご利用いただけません。<br>また、予約状況の反映にはタイムラグが<br class="sp_block">生じることがあります。ご了承ください。</p>
<!--
		<div class="reserveflex">
			<div class="reserveflex02">
				<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/reserve_img01.svg" width="72" height="50" alt="カムロード出庫中　ハイゼット出庫中">
				<p class="text">ご利用いただけません。</p>
			</div>
			<div class="reserveflex02">
				<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/reserve_img02.svg" width="46" height="46" alt="空欄">
				<p class="text">ご利用いただけます。</p>
			</div>
		</div>
-->
		<div class="calendarwrap inview">
<!-- 			echo do_shortcode('[my_calendar]'); -->
			<iframe src="<?php echo get_template_directory_uri(); ?>/gcalendar-wrapper.php?height=600&wkst=2&bgcolor=%23ffffff&ctz=Asia%2FTokyo&src=bWl0YW5pLnRoZS5kYXlzQGdtYWlsLmNvbQ&src=c3Q4bGZsbjVucTF1bnQ1cjZidWFtNWxxdXNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23616161&color=%23A79B8E&showTitle=0&showPrint=0&showTabs=0&showCalendars=0&showTz=0&showNav=1&showDate=1" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
		</div>
	</div>
	<div class="contact_area">
		<h2 class="contacttitle inview">三谷サービスエンジンの<br class="sp_block">トラベリングカーで<br class="sp_block">旅をもっと自由に。<br>お気軽にお電話ください！</h2>
		<p class="contacttext inview">トラベリングカーをご予約の方は<br class="sp_block">店頭または電話から！</p>
		<p class="tel din inview"><a href="tel:0762948612" onClick="gtag('event', 'click', {'event_category': 'tel', 'event_label': '電話ボタン_SPフッタ'});"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/contact_icon.svg" width="42" height="66" alt="">076-294-8612</a></p>
		<p class="contactsub inview">営業時間：9:00〜18:00　<br class="sp_block">定休日：祭日／お盆／年末／正月休み<br>営業時間外にお申込の場合は、<br class="sp_block">下部フォームからお問い合わせください。</p>
	</div>
	<div class="form_area">
		<p class="form_sub din inview">FORM</p>
		<h2 class="form_title inview">お問い合わせ</h2>
<?php if(is_mobile()) : ?>
		<p  class="form_text">予約状況をご確認のもと、<br>店頭またはお電話にてお気軽に<br>ご予約ください。</p>
<?php endif; ?>
<!--
		<table>
			<tbody>
				<tr>
					<td>名前</td>
					<td><input type="text"></td>
					<td>フリガナ</td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td>TEL</td>
					<td><input type="text">-<input type="text">-<input type="text"></td>
					<td>MAIL</td>
					<td><input type="email"></td>
				</tr>
				<tr>
					<td>備考欄</td>
					<td colspan="3"><textarea></textarea></td>
				</tr>
			</tbody>
		</table>
		<p class="formsub">※希望日、希望車種（ハイゼット・カムロード）等をご記入ください。</p>
		<input type="submit">
-->
		<?php echo do_shortcode('[contact-form-7 id="36" title="お問い合わせ"]'); ?>
		<p  class="formsub02">※お問い合わせの段階ではご予約は完了しておりません。<br>後日担当から折り返しご連絡させていただきます。</p>
	</div>
	<div id="terms" class="terms_area">
		<div class="termswrap">
			<div class="termstop">
				<h2 class="reserve_title01">利用規約</h2>
				<p class="reserve_text01">レンタカーご利用のお客様へ 必ずお読みください</p>
				<p class="reserve_text02">交通ルールを守り、違法駐車はやめましょう。<br class="sp_block">無事故でのお帰りをお待ちしております。</p>
			</div>
			<h3 class="reserve_title02"><span>保険補償制度について</span></h3>
			<h4 class="reserve_title03">保険補償額</h4>
			<table class="termstable">
				<tbody>
					<tr>
						<th colspan="2"></th>
						<th>補償額</th>
						<th>免責額</th>
					</tr>
					<tr>
						<th>対　人</th>
						<td>1名限度額</td>
						<td>無制限</td>
						<td>無し</td>
					</tr>
					<tr>
						<th>対　物</th>
						<td rowspan="2">1事故限度額</td>
						<td>無制限</td>
						<td>無し</td>
					</tr>
					<tr>
						<th>車　両</th>
						<td>時　価</td>
						<td>10万円</td>
					</tr>
					<tr>
						<th rowspan="4">人身傷害<br>保険</th>
						<td>死亡</td>
						<td colspan="2">3,000万円<br class="sp_block">（1名につき）</td>
					</tr>
					<tr>
						<td>後遺障害</td>
						<td colspan="2">程度により3,000万円<br class="sp_block">（1名につき）</td>
					</tr>
					<tr>
						<td>入院</td>
						<td>実費<br class="sp_block">（保険金額限度)</td>
						<td rowspan="2">事故発生日から<br class="sp_block">180日を<br class="sp_block">限度とします</td>
					</tr>
					<tr>
						<td>通院</td>
						<td>実費<br class="sp_block">（保険金額限度)</td>
					</tr>
				</tbody>
			</table>
			<h4 class="reserve_title03">お客様のご負担について</h4>
			<p class="text01">ノンオペレーションチャージ（ＮＯＣ）<br>万一当社の責任によらない事故・盗難・故障・汚損等が発生し、車両の修理・清掃が必要となった場合、その期間中の「営業補償」の一部ととして、車両保険の免責金額以外に下記金額をご負担いただきます。（車内装備の損害、シートの焦げ穴等もＮＯＣの対象となります）<br><br>●自走して予定の営業店（営業所）に変換された場合	100,000 円<br>●自走不可能な場合	200,000 円</p>
			<p class="text02">※レッカー代など車両移送費（当社指定工場まで）は、お客様のご負担となります。</p>
			<h3 class="reserve_title02"><span>注 意 事 項</span></h3>
			<h4 class="reserve_title03">保険補償制度が適用できないケース</h4>
			<p class="text01">①事故時に警察及び当社への連絡など所定の手続きが無かった場合<br>②貸渡約款に違反している場合<br><br>①事故時に警察及び当社への連絡など所定の手続きが無かった場合<br>②貸渡約款に違反している場合<br>◆迷惑（違法）駐車に起因した損害　◆飲酒及び酒気帯び運転　◆薬物使用　◆無断延長◆契約書記載の運転者及び副運転者以外の運転　◆又貸し　◆無免許運転（運転免許停止期間中や運転できる自動車の種類に違反している場合を含む）　◆無断で示談した場合◆各種テスト・競技に使用し、又は他車のけん引・後押しに使用した場合　◆その他、レンタル約款（貸渡約款）に定める免責事項に該当する事故 等<br>③当社が締結する損害保険の保険約款の免責事項に該当する場合<br>◆故意による事故　◆クレーン車両のクレーン本体の損傷（アウトリガーを含む）<br>◆パンクやタイヤの損傷　◆ホイールキャップの紛失・破損　◆鍵の紛失<br>◆パンク応急修理キット代　◆お客様の所有、使用、管理する財物の損害 等<br>④使用、管理上の落ち度があった場合<br>◆キーをつけたまま、又は施錠しないで駐車し盗難にあった場合　◆使用方法が劣悪なために生じた車体等の損害や腐食の補修費　◆車内装備の汚損　◆装備品の紛失　◆タイヤチェーン・キャリア・チャイルドシートの取付及び、装着不備による損害　◆海岸、河川敷又は林間等車道以外で走行した場合の車両損害（維持・管理された道路以外での事故）　◆給油時の燃料種別の間違いにより生じた補修費　◆クレーンや高所作業車等の有資格者以外の方の操作により生じた損害 等<br><br>※上記、補償制度が適用されない損害、又補償の限度額を超えた損害については、お客様の実費負担となります。<br>※相手不明の当て逃げ・車上荒らしによる損害・ガラスへの飛び石について補償制度の適用を受ける為には、警察への届出が必要です。</p>
			<h4 class="reserve_title03">駐車違反違約金について</h4>
			<p class="text01">万一、放置駐車違反の確認標章が取り付けられたら</p>
			<div class="flowwrap">
				<div class="flow01"><span>速やかに管轄の警察署に出頭し、<br class="sp_block">所定の手続きを完了してください</span></div>
				<div class="flow01"><span>指定の金融機関で<br class="sp_block">反則金の納付を完了してください</span></div>
				<div class="flow02"><span>ご返却時に「交通反則告知書」及び<br class="sp_block">領収日付のある「納付書・領収証書等」<br class="sp_block">の書類を確認させていただきます</span></div>
			</div>
			<p class="text01">「交通反則告知書」及び「納付書・領収書等」をご提示いただけない場合（反則金の納付が確認できない場合）は、<br>下記の違約金をお支払いいただきますのでご注意ください。</p>
<?php if(is_mobile()) : ?>
			<img class="termsimg" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/terms_img_sp.svg" width="350" height="430" alt="車種別違約金額と運転免許区分 車種別違約金額 普通自動車25,000円 中型自動車以上30,000円">
<?php else: ?>
			<img class="termsimg" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/terms_img.svg" width="1014" height="414" alt="車種別違約金額と運転免許区分 車種別違約金額 普通自動車25,000円 中型自動車以上30,000円">
<?php endif; ?>
			<p class="text01">※後日反則金を納付し、「交通反則告知書」及び「納付書・領収証書等」をご提示いただければ違約金をご返金させていただきます。<br>ご返金につきましては指定口座へのお振込みとなり振込手数料はお客様のご負担となります。<br>※反則金納付の確認が取れない場合及び違約金のお支払いをされなかった場合は、<br>（社）全国レンタカー協会のシステムへ登録されますので同協会に加盟するレンタカー会社は、該当のお客様への以後のレンタカー利用をお断りする場合がございます。<br><br>当社全車両、喫煙禁止及びペット（盲導犬・介助犬含まず）の乗車を禁止としておりますので、予めご了承ください。</p>
			<h3 class="reserve_title02"><span>ご利用時の注意事項</span></h3>
			<h4 class="reserve_title03">カーナビ利用について</h4>
			<p class="text01">カーナビ使用により設定されるルートはあくまでも参考ルートとしてお使いください。所定時間の相違等による損害については責任を負いかねます。</p>
			<h4 class="reserve_title03">後部座席シートベルト着用について</h4>
			<p class="text01">助手席はもちろん、後部座席にも乗車する方がいるときはシートベルトを着用するようお願いいたします。</p>
			<h3 class="reserve_title02"><span>ご返却時の注意事項</span></h3>
			<h4 class="reserve_title03">燃料について</h4>
			<p class="text01">ガソリン（または軽油）は満タンでご返却ください。ご都合により満タンにできない場合は、走行距離換算にて精算させていただきます。この場合実際の給油金額より割高となりますので予めご了承ください。なお、料金は店舗によって異なります。詳しくはご利用店舗にお問い合わせください。</p>
			<h4 class="reserve_title03">ご返却時間について</h4>
			<p class="text01">ご予定返却時間を変更される場合や返却時間に間に合わない場合は、営業店にご連絡ください。</p>
			<h4 class="reserve_title03">ご予約キャンセルについて</h4>
			<p class="text01">8日前から14日前までは基本料金の20%、7日前から前日まで30%、当日については50%のキャンセル料が発生致しますので、予めご了承ください。尚、前使用のお客様の事故及び故障等が原因で、その車両が使用不能になりました際には、勝手ながらお客様のご予約をキャンセルさせていただく事がありますので、併せてご了承ください。</p>
		</div>
	</div>
	<div class="background_area"></div>
	<div class="footer">
		<h2 class="foottitle inview">株式会社三谷サービスエンジン <br class="sp_block">カー・ドック三谷</h2>
		<p class="toottext inview">営業時間：9:00〜18:00　<br class="sp_block">祭日／お盆／年末／正月休み<br>〒921-8835　石川県野々市市上林5丁目39</p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12828.800068922039!2d136.59794446772514!3d36.50103358001125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff849f9fd9aad5b%3A0x23000ba914f7dc0f!2z44CSOTIxLTg4MzUg55-z5bed55yM6YeO44CF5biC5biC5LiK5p6X77yV5LiB55uu77yT77yZ!5e0!3m2!1sja!2sjp!4v1629783032642!5m2!1sja!2sjp" width="945" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<p class="copyright">©2021 Mitani Service Engine</p>
	</div>
</div>
</div>
<?php get_footer(); ?>