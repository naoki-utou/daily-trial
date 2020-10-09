<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="オンラインスクール「デイトラ」の卒後制作です。">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?> background="<?php echo get_template_directory_uri(); ?>/assets/img/bg.jpg">
	<?php wp_body_open(); ?>
		<!-- header -->
		<header class="header">
			<div class="inner">

				<!-- header_nav -->
				<nav class="header_nav">
					<?php 
						wp_nav_menu(
							array(
								'depth' => 1,
								'theme_location' => 'global',
								'container' => 'navi',
								'menu_class' => 'header_nav_list',
							)
						);
					 ?>
				</nav><!-- /.header_nav -->
			</div>
		</header><!-- /.header -->