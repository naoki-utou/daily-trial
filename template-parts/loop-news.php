<!-- news_card -->
<article class="news_card">
	<a href="<?php the_permalink(); ?>">
		<!-- アイキャッチ画像 -->
		<div class="news_card_img">
			<?php if (has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt="ノーイメージ">
			<?php endif; ?>
		</div><!-- /.アイキャッチ画像 -->

		<!-- news_card_body -->
		<div class="news_card_body">
			<time class="news_card_data" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
			<h3 class="news_card_ttl"><?php the_title(); ?></h3>
		</div><!-- /.news_card_body -->

	</a>
</article><!-- /.news_card -->

