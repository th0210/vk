<?php
//機能開放
function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}

add_action("after_setup_theme", "my_setup");


//headでの読み込み部分
function my_script_init()
{
    wp_enqueue_style("font1", "https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap");
    wp_enqueue_style("wow", get_template_directory_uri() . "/assets/css/animate.css");
    wp_enqueue_script("wow", get_template_directory_uri() . "/assets/js/wow.min.js");
    wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.css", array(), filemtime(get_theme_file_path('/assets/css/style.css')), "all");
    wp_enqueue_script("my", get_template_directory_uri() . "/assets/js/script.js", array("jquery"), filemtime(get_theme_file_path('/assets/js/script.js')), true);
}

add_action("wp_enqueue_scripts", "my_script_init");


//wow.jsを</body>前で読み込みスマホ表示時に無効
function my_js_function()
{
    echo <<< EOM
        
        <script>
            if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){new WOW().init();}
        </script>
        
        EOM;
}
add_action('wp_footer', 'my_js_function');


//デフォルトの投稿アーカイブを有効にする
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'archive';
        $args['label'] = 'お知らせ一覧';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}


// the_excerptのpタグ削除
remove_filter('the_excerpt', 'wpautop');

// 問い合わせフォームお名前欄のエラーメッセージ変更
function custom_wpcf7_validation_error_message($result, $tag)
{
    if ('your-name' == $tag->name) {
        if (empty($_POST[$tag->name])) {
            $result->invalidate($tag, 'お名前を入力してください。');
        }
    }
        return $result;
}
add_filter('wpcf7_validate_text', 'custom_wpcf7_validation_error_message', 10, 2);


// 問い合わせフォームメール欄のエラーメッセージ変更
function custom_wpcf7_validation_error_email($result, $tag)
{
    if ('your-email' == $tag->name) {
        if (empty($_POST[$tag->name])) {
            $result->invalidate($tag, 'メールアドレスを入力してください。');
        }
    }
        return $result;
}
add_filter('wpcf7_validate_email', 'custom_wpcf7_validation_error_email', 10, 2);


// 問い合わせフォームメッセージ欄のエラーメッセージ変更
function custom_wpcf7_validation_error_textarea($result, $tag)
{
    if ('your-message' == $tag->name) {
        if (empty($_POST[$tag->name])) {
            $result->invalidate($tag, 'ご相談内容を入力してください。');
        }
    }
        return $result;
}
add_filter('wpcf7_validate_textarea', 'custom_wpcf7_validation_error_textarea', 10, 2);


//デフォルトのアーカイブページ(お知らせ一覧)でSEO SIMPLE PACKでのtitleタグ変更
function overwrite_ssp_title($ssp_title) { 
    if ( is_post_type_archive('post') && !is_tax() ) {
        // デフォルトの投稿一覧ページでのみ、特別な設定で書き換えたい場合
        return "お知らせ一覧 | " . get_bloginfo('name') ;
    }
    // 特定のページ以外はそのまま出力
    return $ssp_title;
}
add_filter('ssp_output_title', 'overwrite_ssp_title');


//デフォルトのアーカイブページ(お知らせ一覧)でSEO SIMPLE PACKでのdescriptionタグ変更
function overwrite_ssp_description($ssp_description) { 
    if ( is_post_type_archive('post') && !is_tax()) {
        return "季節の農作物のお知らせ、見学ツアーのご案内、オンライン販売セールのお知らせなど、自然の恵み農園の最新情報をお届けします。";
    }
    return $ssp_description;
}
add_filter('ssp_output_description', 'overwrite_ssp_description');


//
function overwrite_ssp_robots($ssp_robots) { 
    if ( is_post_type_archive('post') && !is_tax() ) { // 'archive' の部分は実際の投稿タイプやページスラッグに合わせて変更してください
        return ''; // メタタグを空にすることで、noindexを削除
    }
    return $ssp_robots;
}
add_filter('ssp_output_robots', 'overwrite_ssp_robots'); 

