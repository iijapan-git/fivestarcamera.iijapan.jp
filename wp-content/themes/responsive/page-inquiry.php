<?php
/*ページテンプレート サイドバーなし*/

get_header();
?>

<main id="main" class="wbox clearfix">

	<!--パンくずリスト：breadcrumb-navxt-->
	<div class="breadcrumb">
	<?php if(function_exists('bcn_display')) {bcn_display();} ?>
	</div>

<?php
if (have_posts()):
	while(have_posts()): the_post();

		the_content();

		endwhile;
	endif;
?>

</main>

<?php
get_footer();