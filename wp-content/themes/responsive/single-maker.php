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
<div id="maker">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<h2 class="main-title"><span class="ic-camera"><?php the_title(); ?></span></h2>

<div class="box1">
    	<?php
if (has_post_thumbnail()): ?>
<div class="pic"><?php echo get_the_post_thumbnail(); ?></div>
<?php endif; ?>

<ul class="snsb _add">
  <li class="sns_list">
    <iframe src="https://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;layout=box_count&amp;show_faces=false&amp;width=50&amp;action=like&amp;colorscheme=light&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:72px; height:62px;" allowTransparency="true"></iframe>
  </li>
  <li class="sns_list _add"> <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script> 
  </li>
  <!-- <li><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <g:plusone size="tall" href="<?php the_permalink(); ?>"></g:plusone>
  </li> -->
  <li class="sns_list"><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="//b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>
  </li>
</ul>
              <?php the_content(); ?>

</div>

<?php
$exclude_category_ids = exclude_different_child_category_posts();
?>
<div class="clearfix">
<div class="prev"><?php previous_post_link('%link','%title',TRUE, $exclude_category_ids); ?></div>
<div class="nextpg"><?php next_post_link('%link','%title',TRUE, $exclude_category_ids); ?></div>
</div>
<?php endwhile; endif; ?>



<?php echo get_contact_block(); ?>


<?php
$cats = get_the_category();
//2つ以上の記事が存在する場合のみ表示する
if(($cats[0]->count) > 1 ):
?>
<h3 class="subttl"><?php wp_title('', true, 'right'); ?>の注力商品</h3>

<div class="box1">

<?php
	$posts = get_posts('numberposts=5&exclude='.get_the_ID().'&category='.$cats[0]->term_id);
	if($posts): foreach($posts as $post) : setup_postdata($post);
?>
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
	                <div class="meta"><span class="cat"><?php the_category(' '); ?></span><span class="tags"><?php the_tags(' ', '　'); ?> </span></div>
			<p class="txt"><?php echo len_excerpt(80); ?>…</p>
                </div>
        </div>

<?php endforeach; endif; ?>
<div class="link-button"><a href="<?php echo get_category_link('2'); ?>">注力商品をもっと見る</a></div>

</div>
<?php endif; ?>


<h3 class="subttl"><?php wp_title('', true, 'right'); ?>のジャンル別注力商品</h3>

<div class="box1">
<ul class="kanrenlist">
<?php
$cats = get_the_category();
$cat_pid = $cats[0]->parent;
?>
<?php wp_list_categories('&title_li=&child_of='.$cat_pid); ?>
</ul>
</div>



</div>

            </div><!--content-->

<?php get_sidebar(); ?><!-- get_sidebar -->
        </div>



<?php get_footer(); ?>
