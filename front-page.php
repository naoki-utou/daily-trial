
<?php get_header(); ?>

	<!-- mv -->
	<section class="sec mv">
		<div class="mv_inner">
			<!-- mv_ttl -->
			<h1 class="mv_ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv-title.svg" alt="完全版マハーバーラタ"></h1><!-- /.mv_ttl -->
			<div class="mv_body">
				<!-- mv_schedule -->
				<h3 class="mv_schedule"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-schedule.svg" alt="2020年7月7日~8日"></h3><!-- /.mv_schedule -->

				<div class="mv_txt_area">
					<p class="mv_txt">小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！</p>
					<p class="mv_txt">アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！</p>
				</div>
			</div>
			<!-- link_btn -->
			<?php $link_btn = SCF::get('予約ボタン'); ?>
			<a href="#reserv" class="link_btn large mv_btn"><?php echo $link_btn; ?></a><!-- /.link_btn -->
		</div>
	</section><!-- /.mv -->


	<!-- introduction -->
	<section class="sec introduction">
		<div class="inner introduction_inner">
			<h2 class="sec_ttl introduction_ttl">INTRODUCTION</h2>
			<h3 class="introduction_heading">なぜ今、<br class="is_sp">「マハーバーラタ」なのか？</h3>
			<!-- introduction_img -->
			<div class="introduction_img"></div><!-- /.introduction_img -->

			<!-- introduction_body -->
			<div class="introduction_body">
				<p class="introduction_txt">
					「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。
				</p>
				<p class="introduction_txt">
					現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
				</p>
			</div><!-- /.introduction_body -->
		</div>
	</section><!-- /.introduction -->


	<!-- template-topNews -->
	<section class="sec template_news">
		<div class="inner">
			<h2 class="sec_ttl">NEWS</h2>
			<!-- template_topNews_list -->
			<ul class="template_topNews_list">
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
			</ul><!-- /.template_topNews_list -->
			<!-- link_btn -->
			<a href="<?php echo home_url('news'); ?>" class="link_btn small template_topNews_btn">ニュース一覧へ</a><!-- /.link_btn -->
		</div>
	</section><!-- /.template-topNews -->


	<!-- story -->
	<section class="sec top_story">
		<?php $storyTop = SCF::get('ストーリーの画像'); ?>
		<div class="top_story_img" style="background:url(<?php echo wp_get_attachment_image_src($storyTop, 'full')[0]; ?>) center / cover no-repeat"></div>
		<div class="inner top_story_inner">
			<h2 class="sec_ttl white top_story_ttl">STORY</h2>
			<!-- story_body -->
			<div class="top_story_body">
				<?php $storyTop = SCF::get('ストーリーの内容'); ?>
				<p class="top_story_txt"><?php echo nl2br($storyTop); ?></p>
			</div><!-- /.story_body -->
			<!-- link_btn -->
			<a href="<?php echo get_page_link('16'); ?>" class="link_btn small top_story_btn">もっと詳しく</a><!-- /.link_btn -->
		</div>
	</section><!-- /.story -->


	<!-- comment -->
	<section class="sec template_comment">
		<div class="inner">
			<h2 class="sec_ttl">COMMENT</h2>
			<h3 class="template_comment_heading">舞台関係者のみならず各界著名人からコメントが届いています！</h3>
			<!-- comment_body -->
			<div class="template_comment_body">
				<div class="template_comment_txt_area">
					<h3 class="template_comment_name">京都佛立ミュージアム館長 <span>長松清潤</span></h3>
					<p class="template_comment_txt">
						「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
					</p>
				</div>
			</div><!-- /.comment_body -->
			<!-- link_btn -->
			<a href="<?php echo get_page_link('21'); ?>" class="link_btn small template_comment_btn">もっと見る</a><!-- /.link_btn -->
		</div>
	</section><!-- /.comment -->


	<!-- template_topCast -->
	<section class="sec template_topCast">
		<div class="inner">
			<h2 class="sec_ttl template_topCast_ttl">CAST</h2>
			<!-- template_topCast_list -->
			<ul class="template_topCast_list">
				<!-- ループ -->
				<?php $cf_group = SCF::get('topCast');
				foreach ($cf_group as $field_name => $field_value) : ?>
					<!-- template_topCast_item -->
					<li class="template_topCast_item">
						<!-- template_topCast_img -->
						<div class="template_topCast_img">
							<?php echo wp_get_attachment_image($field_value['キャストの写真']); ?>
						</div><!-- /.template_topCast_img -->

						<!-- template_topCast_name -->
						<h3 class="template_topCast_name">
							<?php echo $field_value['キャストの役職']; ?><br>
							<span class="template_topCast_name medium"><?php echo $field_value['キャストの名前']; ?></span><br>
							<span class="template_topCast_name minimum"><?php echo $field_value['キャストの肩書き']; ?></span>
						</h3><!-- /.template_topCast_name -->

						<!-- template_topCast_txt -->
						<p class="template_topCast_txt">
							<?php echo nl2br($field_value['キャストのプロフィール']); ?>
						</p><!-- /.template_topCast_txt -->
					</li><!-- /.template_topCast_item -->
				<?php endforeach; ?><!-- /.ループ -->
			</ul><!-- /.template_topCast_list -->
			<!-- link_btn -->
			<div class="link_btn_area">
				<a href="<?php echo get_page_link('23'); ?>" class="link_btn medium template_topCast_btn">もっと見る</a><!-- /.link_btn -->
			</div>
		</div>
	</section><!-- /.template_topCast -->


	<!-- schedule -->
	<section class="sec template_schedule">
		<div class="inner template_schedule_inner">
			<h2 class="sec_ttl">SCHEDULE</h2>
			<!-- schedule_list -->
			<ul class="template_schedule_list">
				<!-- ループ -->
				<?php $cf_group = SCF::get('schedule');
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
			<?php $link_btn = SCF::get('予約ボタン'); ?>
			<a href="#reserv" class="link_btn large template_schedule_btn"><?php echo $link_btn; ?></a>
		</div>
		<!-- /.link_btn -->
	</section><!-- /.schedule -->


<?php get_footer(); ?>