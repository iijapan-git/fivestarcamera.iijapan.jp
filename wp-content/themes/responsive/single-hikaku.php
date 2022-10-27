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
<div id="hikaku">            
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<h2 class="hikakuttl"><?php the_title(); ?>の買取・見積り価格、相場よりも高くお売りいただけます</h2>



<?php echo get_contact_block(); ?>

<div class="post">

<?php the_content(); ?>

</div>

<?php echo get_contact_block(); ?>

<?php endwhile; endif; ?>

</div>
            </div><!--content-->

<?php get_sidebar(); ?><!-- get_sidebar -->
        </div> 



<?php get_footer(); ?>