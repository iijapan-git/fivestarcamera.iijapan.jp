<?php
/**
 * special/roop
 */

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
// $category = get_the_category();
// if ($category[0]) {
// 	$category_name = $category[0]->cat_name;
// }

$term = wp_get_object_terms($post->ID,'column_cat'); //指定されたタクソノミーのタームを取得
$category_name = $term[0]->name; //ターム名

?>

	<div class="special">
		<div class="photo"><img src="<?php echo esc_url($img_url); ?>" alt=""></div>
		<div class="text">
			<div class="special-date"><?php the_time("Y.n.j"); ?></div>
			<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>

<?php
if (isset($category_name)) :
?>
			<div class="category"><span><?php echo $category_name; ?></span></div>

<?php
endif;
?>

		</div>
	</div>

