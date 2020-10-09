
<?php get_header(); ?>

	<!-- top -->
	<section class="sec top">
		<?php get_template_part('template-parts/top'); ?>
	</section><!-- /.top -->


	<!-- breadcrumb -->
	<div class="sec breadcrumb inner">
		<p class="breadcrumb_txt">
			<?php get_template_part('template-parts/breadcrumb'); ?>
		</p>
	</div>


	<!-- single_news -->
	<section class="sec single_news">
		<div class="inner">
			<h2 class="sec_ttl">NEWS</h2>
			<!-- 個別記事ループ -->
			<?php if (have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('news_wrap'); ?>>
						<!-- single_news_img -->
						<div class="single_news_img">
							<?php the_post_thumbnail(); ?>
						</div><!-- /.single_news_img -->

						<!-- single_news_heading -->
						<div class="single_news_heading">
							<time class="single_news_heading_data" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
							<h2 class="single_news_heading_ttl"><?php the_title(); ?></h2>
						</div><!-- single_news_heading -->

						<!-- single_news_body -->
						<div class="single_news_body">
							<?php the_content(); ?>
						</div><!-- /.single_news_body -->

						<!-- single_news_pagelink -->
						<div class="single_news_pagelink">
							<!-- 前の記事へのリンク -->
							<div class="single_news_pagelink_area">
								<?php previous_post_link('%link', '<i class="fas fa-chevron-circle-left icon i_left i_size"></i>') ?>
								<div class="single_news_pagelink_ttl">
									<span class="single_news_pagelink_time"><?php previous_post_link('%link', '%date'); ?></span><br>
									<p class="single_news_pagelink_ttl left"><?php previous_post_link('%link', '%title'); ?></p>
								</div>
							</div><!-- /.前の記事へのリンク -->

							<!-- 次の記事へのリンク -->
							<div class="single_news_pagelink_area right">
								<div class="single_news_pagelink_ttl">
									<span class="single_news_pagelink_time"><?php next_post_link('%link', '%date'); ?></span><br>
									<p class="single_news_pagelink_ttl right"><?php next_post_link('%link', '%title'); ?></p>
								</div>
								<?php next_post_link('%link', '<i class="fas fa-chevron-circle-right icon i_right i_size"></i>') ?>
							</div><!-- /.次の記事へのリンク -->
						</div><!-- /.single_news_pagelink -->
					</article>
				<?php endwhile; ?>
			<?php endif; ?><!-- /.個別記事ループ -->
		</div>
	</section><!-- /.single_news -->


	<!-- schedule -->
	<section class="sec template_schedule">
		<div class="inner template_schedule_inner">
			<h2 class="sec_ttl">SCHEDULE</h2>
			<!-- schedule_list -->
			<ul class="template_schedule_list">
				<!-- ループ -->
				<?php $cf_group = SCF::get('schedule', 214);
				foreach($cf_group as $field_name => $field_value) : ?>
					<li class="template_schedule_item">
						<p class="template_schedule_item_txt date"><?php echo $field_value['舞台の日程']; ?></p>
						<p class="template_schedule_item_txt"><?php echo $field_value['上演場所']; ?></p>
						<a href="#" class="template_schedule_item_link"><?php echo $field_value['チケット予約']; ?></a>
					</li>
				<?php endforeach ?><!-- /.ループ -->
			</ul><!-- /.schedule_list -->
		</div>
		<!-- link_btn -->
		<div class="link_btn_area flex">
			<a href="<?php echo get_page_link('29'); ?>" class="link_btn large brown template_schedule_btn">お問い合わせはこちら</a>
			<?php $link_btn = SCF::get('予約ボタン', 214); ?>
			<a href="#reserv" class="link_btn large template_schedule_btn"><?php echo $link_btn; ?></a>
		</div>
		<!-- /.link_btn -->
	</section><!-- /.schedule -->


<?php get_footer(); ?>