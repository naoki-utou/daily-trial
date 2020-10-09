<?php 
/*
* Template Name: コンタクトテンプレート
* Description: コンタクトフォームを設置するテンプレート
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


	<!-- inquiry -->
	<section class="sec inquiry">
		<div class="inner">
			<h2 class="sec_ttl"><?php the_title(); ?></h2>
			<div class="inquiry_form_area">
				<p class="inquiry_txt">
					小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。
				</p>
				<!-- フォーム -->
				<?php the_content(); ?>
				<!-- /.フォーム -->
			</div>
		</div>
	</section><!-- /.inquiry -->


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