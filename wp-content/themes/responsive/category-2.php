<?php
/*メインインデックステンプレート*/

get_header();

?>

<?php
$children = get_term_children($cat, 'category');

$cats = get_the_category();
if (isset($cats[0])) {
    $cat_id = $cats[0]->cat_ID;
}

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

        <!-- <h2 class="main-title title-ja"><span class="ic-camera"><?php wp_title('', true, 'right'); ?></span></h2> -->

<div id="maker">


        <!-- <div class="box1 clearfix">


               <ul class="snsb">
                  <li>
                    <iframe src="https://www.facebook.com/plugins/like.php?href=<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>&amp;layout=box_count&amp;show_faces=false&amp;width=50&amp;action=like&amp;colorscheme=light&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:72px; height:62px;" allowTransparency="true"></iframe>
                  </li>
                  <li> <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="" data-url="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" data-text="<?php wp_title(' ', true, 'right'); ?>">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
                  </li>
                  <li><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                    <g:plusone size="tall" href="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>"></g:plusone>
                  </li>
                  <li>
<a href="//b.hatena.ne.jp/entry/<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" data-hatena-bookmark-title="<?php wp_title(' ', true, 'right'); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="//b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>

                  </li>
              </ul>
              <p><?php echo category_description(); ?></p>

      </div> -->


<?php if(is_category(2)): ?>

     <h3 class="subttl">高額買取メーカー・ブランド</h3>
    <div class="box1">
        <ul class="makerlist clearfix">
                        <li><a href="https://fivestarcamera.net/maker/nikon/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker01.gif" alt="ニコン" /><br>ニコン</a></li>
                        <li><a href="https://fivestarcamera.net/maker/canon/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker02.gif" alt="キヤノン" /><br>キヤノン</a></li>
                        <li><a href="https://fivestarcamera.net/maker/pentax/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker03.gif" alt="ペンタックス" /><br>ペンタックス</a></li>
                        <li><a href="https://fivestarcamera.net/maker/fujifilm/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker04.gif" alt="富士フイルム" /><br>富士フイルム</a></li>
                        <li><a href="https://fivestarcamera.net/maker/mamiya/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker05.gif" alt="マミヤ" /><br>マミヤ</a></li>
                        <li><a href="https://fivestarcamera.net/maker/bronica/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker06.gif" alt="ゼンザブロニカ" /><br>ゼンザブロニカ</a></li>
                        <li><a href="https://fivestarcamera.net/maker/contax/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker07.gif" alt="コンタックス/ヤシカ" /><br>コンタックス/ヤシカ</a></li>
                        <li><a href="https://fivestarcamera.net/maker/sigma/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker08.gif" alt="シグマ" /><br>シグマ</a></li>
                        <li><a href="https://fivestarcamera.net/maker/tamron/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker09.gif" alt="タムロン" /><br>タムロン</a></li>
                        <li><a href="https://fivestarcamera.net/maker/ricoh/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker10.gif" alt="リコー" /><br>リコー</a></li>
                        <li><a href="https://fivestarcamera.net/maker/voigtlander/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker11.gif" alt="フォクトレンダー" /><br>フォクトレンダー</a></li>
                        <li><a href="https://fivestarcamera.net/maker/minolta/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker12.gif" alt="ミノルタ" /><br>ミノルタ</a></li>
                        <li><a href="https://fivestarcamera.net/maker/leica/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker13.gif" alt="ライカ" /><br>ライカ</a></li>
                        <li><a href="https://fivestarcamera.net/maker/hasselblad/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker14.gif" alt="ハッセルブラッド" /><br>ハッセルブラッド</a></li>
                        <li><a href="https://fivestarcamera.net/maker/tokina/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker15.gif" alt="トキナー" /><br>トキナー</a></li>
                        <li><a href="https://fivestarcamera.net/maker/sony/"><img src="<?php bloginfo('template_directory'); ?>/img/maker/maker16.gif" alt="ソニー" /><br>ソニー</a></li>
        </ul>
        <ul class="makerlist2">
            <li><a href="https://fivestarcamera.net/maker/panasonic/">パナソニック</a></li>
            <li><a href="https://fivestarcamera.net/maker/olympus/">オリンパス</a></li>
            <li><a href="https://fivestarcamera.net/maker/casio/">カシオ</a></li>
            <li><a href="https://fivestarcamera.net/maker/topcon/">トプコン</a></li>
            <li>ホースマン</li>
            <li>ローライ</li>
            <li><a href="https://fivestarcamera.net/maker/rodenstock/">ローデンシュトック</a></li>
            <li>ツァイス</li>
            <li><a href="https://fivestarcamera.net/maker/schneider/">シュナイダー</a></li>
            <li><a href="https://fivestarcamera.net/maker/konica/">コニカ</a></li>
            <li><a href="https://fivestarcamera.net/maker/tokyo-kogaku/">東京光学</a></li>
        </ul>

        <div class="label-other"><img src="<?php bloginfo('template_directory'); ?>/img/label_other.gif" alt="どんな機種・状態でもお気軽にご相談ください" /></div>
    </div>


<?php echo get_contact_block(); ?>


        <h2 class="subttl"><?php wp_title('', true, 'right'); ?>の買取注力商品</h2>

        <div class="box1">
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
                        <div class="meta"><span class="cat test"><?php the_category(' '); ?></span><span class="tags"><?php the_tags(' ', '　'); ?> </span></div>
                <p class="txt"><?php echo len_excerpt(80); ?>…</p>
                    </div>
            </div>
 <?php endwhile; endif; ?>

<?php
$next_link = get_next_posts_link('次のページ');
if(isset( $next_link )): ?>

    <div class="link-button"><a href="<?php echo get_next_posts_page_link(); ?>">注力商品をもっと見る</a></div>

<?php endif; ?>

        </div>


<?php else: ?>


<?php
  $cat_id = get_queried_object()->cat_ID;
  $post_id = 'category_'.$cat_id;
?>
<?php
//2階層目
if ($children) : ?>


     <!-- <h3 class="subttl"><?php the_field('メーカー名',$post_id); ?>買取商品の一例</h3>
    <div class="box1">
        <?php the_field('カテゴリーコンテンツ',$post_id); ?>
    </div> -->

  <?php if ( have_posts() ) : ?>
        <h2 class="subttl"><?php the_field('メーカー名',$post_id); ?>の買取注力商品（一例）</h2>

        <div class="box1">
  <?php while ( have_posts() ) : the_post(); ?>
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
                        <!-- <div class="meta"><span class="cat test"><?php the_category(' '); ?></span><span class="tags"><?php the_tags(' ', '　'); ?> </span></div> -->
                <p class="txt _large"><?php echo len_excerpt(80); ?>…</p>
                    </div>
            </div>
 <?php endwhile; ?>
<!-- /maker/nikon/ -->
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
        <?php echo get_contact_block(); ?>
        <h3 class="subttl"><?php the_field('メーカー名',$post_id); ?>買取商品の一例</h3>
       <div class="box1">
           <?php the_field('カテゴリーコンテンツ',$post_id); ?>
       </div>
<?php endif; ?>

<h3 class="subttl"><?php wp_title('', true, 'right'); ?>のジャンル別注力商品</h3>
<div class="box1">
<ul class="kanrenlist">

<?php wp_list_categories('&title_li=&hide_empty=0&child_of='.$cat_id); ?>
</ul>
</div>


<?php
//最下層
else: ?>




<?php echo get_contact_block(); ?>


<?php if ( have_posts() ) : ?>
        <h3 class="subttl"><?php the_field('メーカー名',$post_id); ?>の買取注力品（一例）</h3>

        <div class="box1">
  <?php while ( have_posts() ) : the_post(); ?>
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
 <?php endwhile; ?>

<?php
$next_link = get_next_posts_link('次のページ');
if(isset( $next_link )): ?>
 <div class="link-button"><a href="<?php echo get_next_posts_page_link(); ?>">注力商品をもっと見る</a></div>
<?php endif; ?>

        </div>
<?php endif; ?>

<h3 class="subttl"><?php the_field('メーカー名',$post_id); ?>のジャンル別注力商品</h3>

<div class="box1">
<ul class="kanrenlist">
<?php
$cat_now = get_queried_object();
$parent_id = $cat_now->parent;
?>

<?php wp_list_categories('&title_li=&hide_empty=0&child_of='.$parent_id); ?>
</ul>
</div>

<?php endif; ?>
<?php endif; ?>
<h2 class="main-title title-ja">
  <span class="ic-camera">
    <?php if(get_field('メーカー名',$post_id) != ''): ?>
      <?php the_field('メーカー名',$post_id); ?>
    <?php else: ?>
      中古カメラ買取メーカー
    <?php endif; ?>
    について
  </span>
</h2>
<div class="box1 clearfix">


       <ul class="snsb _add">
          <li class="sns_list">
            <iframe src="https://www.facebook.com/plugins/like.php?href=<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>&amp;layout=box_count&amp;show_faces=false&amp;width=50&amp;action=like&amp;colorscheme=light&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:72px; height:62px;" allowTransparency="true"></iframe>
          </li>
          <li class="sns_list _add"> <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="" data-url="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" data-text="<?php wp_title(' ', true, 'right'); ?>">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
          </li>
          <!-- <li><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
            <g:plusone size="tall" href="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>"></g:plusone>
          </li> -->
          <li class="sns_list">
<a href="//b.hatena.ne.jp/entry/<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" data-hatena-bookmark-title="<?php wp_title(' ', true, 'right'); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="//b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>

          </li>
      </ul>
      <p><?php echo category_description(); ?></p>

</div>
</div>

            </div><!--content-->

<?php get_sidebar(); ?><!-- get_sidebar -->
        </div>

<?php get_footer(); ?>
