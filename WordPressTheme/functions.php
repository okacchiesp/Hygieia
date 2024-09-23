<?php
function enqueue_custom_scripts_and_styles()
{
    // Googleフォント
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Noto+Sans+JP:wght@500&family=Lato:wght@400;700&display=swap', array(), null);

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

    // カスタムCSS
    wp_enqueue_style('custom-style', get_theme_file_uri('/assets/css/style.css'), array(), null);

    // jQuery（WordPressに同梱されているバージョンを使用）
    wp_enqueue_script('jquery');

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // jQuery Inview
    wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), null, true);

    // カスタムJS
    wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), null, true);

    // Googleフォントのpreconnect
    add_filter('style_loader_tag', 'add_preconnect', 10, 2);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts_and_styles');

function add_preconnect($html, $handle)
{
    if ($handle === 'google-fonts') {
        $html = str_replace("rel='stylesheet'", "rel='stylesheet' rel='preconnect' href='https://fonts.googleapis.com' crossorigin", $html);
        $html = "<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>\n" . $html;
    }
    return $html;
}
function mytheme_setup()
{
    // アイキャッチ画像を有効にする
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');

// キャンペーンページの表示数
function set_campaign_posts_per_page($query)
{
    if ($query->is_post_type_archive('campaign') && !is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page', 4);
    }
}
add_action('pre_get_posts', 'set_campaign_posts_per_page');

function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if ($count == "") {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// クローラーカウントしない場合は追加
function is_bot()
{
    $ua = $_SERVER['HTTP_USER_AGENT'];

    $bot = array(
        'Googlebot',
        'Yahoo! Slurp',
        'Mediapartners-Google',
        'msnbot',
        'bingbot',
        'MJ12bot',
        'Ezooms',
        'pirst; MSIE 8.0;',
        'Google Web Preview',
        'ia_archiver',
        'Sogou web spider',
        'Googlebot-Mobile',
        'AhrefsBot',
        'YandexBot',
        'Purebot',
        'Baiduspider',
        'UnwindFetchor',
        'TweetmemeBot',
        'MetaURI',
        'PaperLiBot',
        'Showyoubot',
        'JS-Kit',
        'PostRank',
        'Crowsnest',
        'PycURL',
        'bitlybot',
        'Hatena',
        'facebookexternalhit',
        'NINJA bot',
        'YahooCacheSystem',
        'NHN Corp.',
        'Steeler',
        'DoCoMo',
    );

    foreach ($bot as $bot) {
        if (stripos($ua, $bot) !== false) {
            return true;
        }
    }

    return false;
}
// 最新のキャンペーン2件を取得
function get_latest_archive_campaign_posts($number_of_posts = 2)
{
    $args = array(
        'post_type' => 'campaign',
        'posts_per_page' => $number_of_posts,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    return new WP_Query($args);
}
// date.phpの表示件数
function set_posts_per_page_for_archives($query)
{
    if ($query->is_archive() && $query->is_main_query()) {
        $query->set('posts_per_page', 10);
    }
}
add_action('pre_get_posts', 'set_posts_per_page_for_archives');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

function add_original_choices($tag, $unused)
{
    if ($tag['name'] != 'campagin-menu') {
        return $tag;
    }

    $args = array(
        'numberposts' => -1,
        'post_type' => 'campaign',
        'order' => 'ASC'
    );

    //クエリをget_posts()に入れる
    $posts = get_posts($args);
    //クエリがなければ戻す
    if (!$posts) {
        return $tag;
    }
    //セレクトボックスにforeachで入れる
    foreach ($posts as $post) {
        $tag['raw_values'][] = $post->post_title;
        $tag['values'][] = $post->post_title;
        $tag['labels'][] = $post->post_title;
    }
    return $tag;
}
add_filter('wpcf7_form_tag', 'add_original_choices', 10, 2);

function remove_editor_from_multiple_pages()
{
    // エディタを非表示にしたいページのIDを配列で指定
    $pages_to_hide_editor = array(46, 48, 50, 52, 61);  // IDを追加

    // 現在の投稿が配列内の特定の固定ページかどうかを確認
    if (isset($_GET['post']) && in_array($_GET['post'], $pages_to_hide_editor)) {
        remove_post_type_support('page', 'editor');
    }
}
add_action('admin_init', 'remove_editor_from_multiple_pages');
