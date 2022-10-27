<?php
/*メインインデックステンプレート*/

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
        <h2 class="main-title"><span class="ic-voice"><?php wp_title('', true, 'right'); ?></span></h2>

        <div id="voice">
        <div class="box1 clearfix">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   

            <div class="postlist clearfix">
                <div class="pic"><a href="<?php the_permalink(); ?>"><?php 
if (has_post_thumbnail()) {
	echo get_the_post_thumbnail();
}else {
	echo '<img src="' . get_bloginfo('template_directory') . '/img/noimage.jpg' . '" />';
}
?></a></div>

            <div class="Right">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="txt"><?php echo len_excerpt(100); ?>…</p>
            </div>
        </div>
<?php endwhile; endif; ?>

<?php
$next_link = get_next_posts_link('次のページ');
if(isset( $next_link )): ?>
    <div class="link-button"><a href="<?php echo get_next_posts_page_link(); ?>">お客様の声をもっと見る</a></div>
<?php endif; ?>

</div>

<?php echo get_contact_block(); ?>


</div>

            </div><!--content-->

<?php get_sidebar(); ?><!-- get_sidebar -->
        </div>

<?php get_footer(); ?>