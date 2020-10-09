
<?php get_header(); ?>

	<!-- story -->
	<section class="sec story">
		<?php $storyTop = SCF::get('ストーリーの画像(ページ上部)'); ?>
		<div class="story_top" style="background: url(<?php echo wp_get_attachment_image_src($storyTop, 'full')[0]; ?>) center / cover no-repeat">

			<!-- top -->
			<div class="sec top is_story">
				<?php get_template_part('template-parts/top'); ?>
			</div><!-- /.top -->

			<!-- breadcrumb -->
			<div class="sec breadcrumb inner">
				<p class="breadcrumb_txt white">
					<?php get_template_part('template-parts/breadcrumb'); ?>
				</p>
			</div><!-- /.breadcrumb -->

			<!-- story_inner -->
			<div class="inner story_inner">
				<h2 class="sec_ttl white story_ttl"><?php the_title(); ?></h2>
				<!-- story_body -->
				<div class="story_top_body">
					<?php $storyTop = SCF::get('ストーリーの内容(ページ上部)'); ?>
					<p class="story_txt"><?php echo nl2br($storyTop); ?></p>
				</div><!-- /.story_body -->
			</div><!-- /.story_inner -->
		</div>

		<!-- story-list / ループ -->
		<?php $count = 0; ?>
		<?php $cf_group = SCF::get('story-list');
		foreach($cf_group as $field_name => $field_value) : $count++; ?>
			<?php if ($count % 2 === 0) : ?>
				<!-- story_wrap -->
				<div class="story_wrap">
					<!-- story_img -->
					<div class="story_img left" style="background:url(<?php echo wp_get_attachment_image_url($field_value['ストーリーの画像'], 'full');  ?>) center / cover no-repeat"></div>
					<!-- /.story_img -->

					<div class="inner story_inner">
						<!-- story_body -->
						<div class="story_body right">
							<p class="story_txt"><?php echo nl2br($field_value['ストーリーの内容']); ?></p>
						</div><!-- /.story_body -->
					</div>
				</div><!-- /.story_wrap -->
			<?php else : ?>
				<!-- story_wrap -->
				<div class="story_wrap">
					<!-- story_img -->
					<div class="story_img right" style="background:url(<?php echo wp_get_attachment_image_url($field_value['ストーリーの画像'], 'full'); ?>) center / cover no-repeat"></div>
					<!-- /.story_img -->

					<div class="inner story_inner">
						<!-- story_body -->
						<div class="story_body left">
							<p class="story_txt"><?php echo nl2br($field_value['ストーリーの内容']); ?></p>
						</div><!-- /.story_body -->
					</div>
				</div><!-- /.story_wrap -->
			<?php endif; ?>
		<?php endforeach; ?><!-- /.story-list / ループ -->
	</section><!-- /.story -->


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