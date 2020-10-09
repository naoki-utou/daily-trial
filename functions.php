<?php 

	// 外部ファイル読み込み
	function my_scripts() {
		wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.14.0/css/all.css', array(), '5.14.0', 'all');
		wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap', array());
		wp_enqueue_style('reset', get_template_directory_uri(). '/assets/dest/css/reset.min.css', array(), '1.0.1', 'all');
		wp_enqueue_style('style', get_template_directory_uri(). '/assets/dest/css/style.min.css', array(), '1.0.1', 'all');
	}
	add_action('wp_enqueue_scripts', 'my_scripts');



	// メニューを動的にする
	function my_menu() {
		register_nav_menus(
			array(
				'global' => 'ヘッダーメニュー'
			)
		);
	}
	add_action('init', 'my_menu');



	// titleタグを自動生成
	add_theme_support('title-tag');



	// アイキャッチ画像を有効化
	add_theme_support('post-thumbnails');



	// 投稿アーカイブページ作成
	function post_has_archive( $args, $post_type ) {
    		if ( 'post' == $post_type ) {
        		$args['rewrite'] = true;
        		$args['has_archive'] = 'news'; // スラッグ名
    		}
    		return $args;
	}
	add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );



	// ヘッダーメニューの不要なクラスを削除
	add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
	add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
	add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
	 
	function my_css_attributes_filter($var) {
	    return is_array($var) ? array_intersect($var,  array( 'header_nav_top', 'header_nav_news', 'header_nav_story', 'header_nav_comment', 'header_nav_cast', 'header_nav_inquiry') ) : '';
	}



	// お問い合わせ完了ページへの遷移
	add_action( 'wp_footer', 'add_thanks_page' );
	function add_thanks_page() {
		echo <<< EOD
		<script>
			document.addEventListener( 'wpcf7mailsent', function( event ) {
		  		location = 'http://daytra-last.local/contact/thanks/'; /* 遷移先のURL */
			}, false );
		</script>
		EOD;
	}
