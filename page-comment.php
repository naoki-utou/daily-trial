
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


	<!-- comment -->
	<section class="sec template_comment">
		<div class="inner">
			<h2 class="sec_ttl"><?php the_title(); ?></h2>
			<h3 class="template_comment_heading">舞台関係者のみならず各界著名人からコメントが届いています！</h3>
			<!-- comment_body -->
			<div class="template_comment_body comment_body">
				<div class="template_comment_txt_area">
					<h3 class="template_comment_name">京都佛立ミュージアム館長 <span>長松清潤</span></h3>
					<p class="template_comment_txt">
						「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
					</p>
				</div>
			</div><!-- /.comment_body -->

			<!-- comment_list -->
			<ul class="comment_list">
				<!-- ループ -->
				<?php get_template_part('template-parts/loop-comment'); ?>
				<!-- /.ループ -->
			</ul><!-- /.comment_list -->
		</div>
	</section><!-- /.comment -->


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