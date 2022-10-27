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
<div id="column">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="post">
<h2><?php the_title(); ?></h2>

<p class="day"><?php the_time('Y/n/j'); ?></p>
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

<h3>この記事が少しでもお役にたったら、Twitter、Facebook、はてブでシェアを頂けると励みになります。</h3>

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

<h3>フォローはこちら 役立つ情報配信がんばります。<br>ぜひお願いいたします。</h3>

<div class="fb-page" data-href="https://www.facebook.com/fivestarcameranet" data-width="500" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/fivestarcameranet"><a href="https://www.facebook.com/fivestarcameranet">中古カメラ買取のファイブスターカメラ</a></blockquote></div></div>

</div>

<?php endwhile; endif; ?>

<div class="link-button"><a href="<?php echo get_site_url(); ?>/column">特集・コラムをもっと見る</a></div>

</div>

            </div><!--content-->


<?php
get_sidebar('column');
?><!-- get_sidebar -->

          </div>

<?php
get_footer();
