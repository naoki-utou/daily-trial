<?php 
/*
* Template Name: コンタクト-完了テンプレート
* Description: お問い合わせ完了テンプレート
*/
?>


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


	<!-- inquiry_done -->
	<section class="sec inquiry_done">
		<div class="inner">
			<h2 class="sec_ttl"><?php the_title(); ?></h2>
			<div class="inquiry_done_body">
				<p class="inquiry_done_txt">
					お問い合わせありがとうございました。<br>
					メッセージは正常に送信されました。
				</p>
			</div>
		</div>
	</section><!-- /.inquiry_done -->


	<!-- template-topNews -->
	<section class="sec template_topNews">
		<div class="inner">
			<h2 class="sec_ttl">LATEST NEWS</h2>
			<!-- template_topNews_list -->
			<div class="template_topNews_list">
				<!-- 記事をループ -->
				<?php 
					global $post;
					$args = array('posts_per_page' => 5);
					$myposts = get_posts($args);
					foreach($myposts as $post) {
						setup_postdata($post);
				?>
				<!-- template_topNews_card -->
					<article class="template_topNews_card">
						<a href="<?php the_permalink(); ?>">
							<!-- template_topNews_card_img -->
							<div class="template_topNews_card_img">
								<?php if (has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail(); ?>
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt="ノーイメージ">
								<?php endif; ?>
							</div><!-- /.template_topNews_card_img -->
							<!-- template_topNews_card_body -->
							<div class="template_topNews_card_body">
								<time class="template_topNews_card_data" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
								<h3 class="template_topNews_card_ttl"><?php the_title(); ?></h3>
							</div><!-- /.template_topNews_card_body -->
						</a>
					</article><!-- /.template_topNews_card -->
					<?php
					}
						wp_reset_postdata();
				 	?><!-- /.記事ループ -->
			</div><!-- /.template_topNews_list -->
			<!-- link_btn -->
			<a href="<?php echo home_url('news'); ?>" class="link_btn small template_topNews_btn">ニュース一覧へ</a><!-- /.link_btn -->
		</div>
	</section><!-- /.template-topNews -->


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












