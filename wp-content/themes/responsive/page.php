<?php
/*ページテンプレート*/

if (get_query_var('column_id')) {
	get_template_part('page-column-detail');
	return;
} elseif (get_query_var('column_category')) {
	get_template_part('page-column-category');
	return;
}

get_header();
?>

<main id="main" class="wbox clearfix">

	<!--パンくずリスト：breadcrumb-navxt-->
	<div class="breadcrumb">
	<?php if(function_exists('bcn_display')) {bcn_display();} ?>
	</div>

	<div id="content">
<?php
if (have_posts()):
	while(have_posts()): the_post();

		the_content();

		endwhile;
	endif;
?>

	</div><!--content-->

	<?php get_sidebar(); ?><!-- get_sidebar -->

</main>

<?php
get_footer();