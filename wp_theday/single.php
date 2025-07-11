<?php get_header(); ?>

<div class="memorydetail">
	<div class="detailwrap">
		<span class="imgwrap" style="background-image: url(<?php if(has_post_thumbnail()){
				$image_id = get_post_thumbnail_id ();
				$image_url = wp_get_attachment_image_src ($image_id, true);
				echo $image_url[0];}else{echo '';} ?>);background-size: cover;background-position: center center;"></span>
		<div class="textwrap">
			<p class="date din"><?php the_time('Y.n.j'); ?></p>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<a href="/memory/" class="linkbtn"><span>BACK</span></a>
	<p class="copyright">©2021 Mitani Service Engine</p>
</div>

<?php get_footer(); ?>