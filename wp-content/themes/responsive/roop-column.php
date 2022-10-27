<?php
/*roop column*/

global $post;

// サムネイル
$size = 'column-thumbnail';
$img_url = '';
if (has_post_thumbnail()) {
    $attachment_id = get_post_thumbnail_id();
    $img_src = wp_get_attachment_image_src($attachment_id, $size);
    $img_url = $img_src[0];

// アイキャッチ画像が設定されていない場合に記事の最初の画像を表示する。
} else {
    preg_match('/wp-image-(\d+)/s' , $post->post_content, $thumb);
    if ($thumb) {
        $img_src = wp_get_attachment_image_src($thumb[1], $size);
        $img_url = $img_src[0];
    }
}

if (!$img_url) {
    $img_url = home_url() . "/common/images/noimage.gif";
}

// カテゴリ―名
$category = get_the_category();
if ($category[0]) {
    $category_name = $category[0]->cat_name;
}

?>

    <div class="postlist2 clearfix">
        <div class="pic"><a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($img_url); ?>" alt=""></a></div>

        <div class="Right">
        <div class="meta"><span class="day"><?php the_time('Y.n.j'); ?></span>

<?php
if (isset($category_name)) :
?>
            <span class="cat"><?php echo $category_name; ?></span>

<?php
endif;
?>
        </div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="txt"><?php echo len_excerpt(80); ?>…</p>
        </div>
    </div>

