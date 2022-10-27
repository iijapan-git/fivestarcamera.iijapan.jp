<?php
/**
 * tab-special
 */

$args = array(
	'show_count'         => 0,
	'hide_empty'         => 1,
	'title_li'           => false,
	'echo'               => 0,
);
$categories = wp_list_categories($args);

$active = '';
if (is_page('special')) {
	$active = 'current-cat';
}
?>


	<div id="tab-menu" class="">
		<ul class="cf">

			<li class="<?php echo $active; ?>"><a href="<?php echo esc_url(home_url()); ?>/special">すべての記事</a></li>
			<?php echo $categories; ?>


		</ul>
	</div>
