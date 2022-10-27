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

<?php
switch_shop_db();
$category_slug = get_query_var('column_category');
$category = get_category_by_slug($category_slug);

?>
        <div class="content">
            <h2 class="main-title"><span class="ic-pen"><?php echo $category->name; ?></span></h2>

            <div id="column">


                <div class="box1 clearfix">
<?php
$args = array(
    'paged' => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
    'posts_per_page' => 10,
    'category_name' => $category_slug
);
$query = new WP_Query($args);
if ($query->have_posts()):
    while ($query->have_posts()): $query->the_post();

        get_template_part('roop-column');

    endwhile;
endif;

if(function_exists('wp_pagenavi')) { wp_pagenavi(array('query' => $query));}

wp_reset_postdata();
restore_current_site();
?>

                </div>
            </div>
        </div><!--content-->

<?php get_sidebar('column'); ?><!-- get_sidebar -->

        </div>

<?php
get_footer();