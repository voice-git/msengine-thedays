<?php get_header(); ?>
<div class="memory_wrap">
	<div class="memorytop">
		<img class="topimg" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/memory_title.svg" width="333" height="106" alt="あなたのTHEDAYs MEMORY">
		<h2 class="memorytext">家族や友達とわいわい楽しくキャンプもよし、<br class="sp_block">1人でゆったりたとした時間を過ごすのもよし、<br>キャンピングカーの楽しみ方は人それぞれです。<br>皆さまがどのように<br class="sp_block">キャンピングカーライフを楽しまれたのか、<br class="sp_block">是非ご覧ください！</h2>
	</div>
	<div class="memorylist_wrap">
		<ul class="memorylist">
	        <?php
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$args = array('post_type' => 'post', 'posts_per_page' => 9, 'paged' => $paged,);
			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
			$category = get_the_category();
			$cat_name = $category[0]->cat_name;
			?>
			<li><a href="<?php the_permalink(); ?>">
				<div class="memoryimg"><span class="imgwrap" style="background: url(<?php if(has_post_thumbnail()){
				$image_id = get_post_thumbnail_id ();
				$image_url = wp_get_attachment_image_src ($image_id, true);
				echo $image_url[0];}else{echo '';} ?>);background-size: cover;background-position: center center;"></span></div>
	<!--
				<p class="date lato"><?php the_time('Y.n.j'); ?></p>
				<p class="n_title sp_none"><?php if(mb_strlen($post->post_title, 'UTF-8')>27){
				$title= mb_substr($post->post_title, 0, 27, 'UTF-8');
				echo $title.'…';}else{echo $post->post_title;} ?></p>
				<p class="n_title sp_block"><?php the_title(); ?></p>
	-->
				<p class="more"><span>MORE</span></p>
			</a></li>
			<?php endwhile;endif; ?>
		</ul>
	</div>
	<?php if ( function_exists( 'pagination' ) ) :
		pagination( $the_query->max_num_pages, $paged );
		endif;
	?>					
	<a href="/" class="linkbtn"><span>BACK</span></a>
	<p class="copyright">©2021 Mitani Service Engine</p>
</div>

<?php get_footer();