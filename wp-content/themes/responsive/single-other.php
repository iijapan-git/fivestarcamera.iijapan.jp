<?php
/*ポストテンプレート*/

get_header();

?>

        <div class="wrapContent">

 <div class="breadcom">
	<!--パンくずリスト：breadcrumb-navxt-->
        <?php
        if(function_exists('bcn_display'))
        {
        bcn_display();
        }
        ?>
        <!--パンくずリスト：breadcrumb-navxt-->
 </div><!--//topic_path-->
        	<div class="content">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_content(); ?>
<div class="tag"><?php the_tags(' ', '　'); ?></div>
<?php endwhile; endif; ?>
            </div><!--content-->

<?php get_sidebar(); ?><!-- get_sidebar -->
        </div> 



<?php get_footer(); ?>