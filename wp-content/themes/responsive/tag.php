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
    <div id="maker">

    <h2 class="subttl"><?php echo single_tag_title(); ?>の注力商品（一例）</h2>
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
	                <!-- <div class="meta"><span class="cat"><?php the_category(' '); ?></span><span class="tags"><?php the_tags(' ', '　'); ?> </span></div> -->
			<p class="txt _large"><?php echo len_excerpt(80); ?>…</p>
                </div>
        </div>
<?php endwhile; endif; ?>
<!-- /tag/tag01/ -->
<div class="flex_box">
  <div class="item">
    <?php
    $prev_link = get_previous_posts_link('前のページ');
    $next_link = get_next_posts_link('次のページ');
    if(isset( $prev_link )): ?>
     <div class="link-button"><a class="button prev" href="<?php echo get_previous_posts_page_link(); ?>" rel="prev">前のページ</a></div>
    <?php endif; ?>
  </div>
  <div class="item">
    <?php
    if(isset( $next_link )): ?>
      <div class="link-button"><a class="button" href="<?php echo get_next_posts_page_link(); ?>" rel="next">次のページ</a></div>
    <?php endif; ?>
  </div>
</div>

</div>

<h2 class="main-title"><span class="ic-camera"><?php echo single_tag_title(); ?>の買取注力品(一例)</span></h2>
  <div class="box1">
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
    <p><?php echo tag_description(); ?></p>
  </div>
  <?php echo get_contact_block(); ?>


</div>

            </div><!--content-->

<?php get_sidebar(); ?><!-- get_sidebar -->
        </div>

<?php get_footer(); ?>
