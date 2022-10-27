<?php
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
            <h2 class="main-title"><span class="ic-pen"><?php wp_title('', true, 'right'); ?></span></h2>

            <div id="column">

                <div class="box1 clearfix">
									<?php if ( have_posts() ) : ?>
									<?php while ( have_posts() ) : the_post(); ?>
									<?php 
										// サムネイル
										$size = 'column-thumbnail';
										$img_url = '';
										if (has_post_thumbnail()) {
												$attachment_id = get_post_thumbnail_id();
												$img_src = wp_get_attachment_image_src($attachment_id, $size);
												$img_url = $img_src[0];

										// アイキャッチ画像が設定されていない場合に記事の最初の画像を表示する。
										} else {
												preg_match('/wp-image-(\d+)/s' , $post->post_content, $thumb);
												if ($thumb) {
														$img_src = wp_get_attachment_image_src($thumb[1], $size);
														$img_url = $img_src[0];
												}
										}

										if (!$img_url) {
												$img_url = home_url() . "/common/images/noimage.gif";
										}

										// カテゴリ―名
										$term = wp_get_object_terms($post->ID,'column_cat'); //指定されたタクソノミーのタームを取得
										$term_name = $term[0]->name; //ターム名
									?>

									<div class="postlist2 clearfix">
											<div class="pic"><a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($img_url); ?>" alt=""></a></div>
											<div class="Right">
												<div class="meta"><span class="day"><?php the_time('Y.n.j'); ?></span>
												<?php
												if (isset($term_name)) :
												?>
												<span class="cat"><?php echo $term_name; ?></span>
												<?php
												endif;
												?>
												</div>
												<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
												<p class="txt"><?php echo len_excerpt(80); ?>…</p>
											</div>
									</div>
									<?php endwhile; ?>
									<?php endif; ?>
									<!-- <?php $next_link = get_next_posts_link('次のページ');
									if(isset( $next_link )): ?>
									<div class="link-button"><a href="<?php echo get_next_posts_page_link(); ?>">特集・コラムをもっと見る</a></div>
									<?php endif; ?> -->
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
            </div>
        </div><!--content-->

<?php get_sidebar('column'); ?><!-- get_sidebar -->

        </div>

<?php
get_footer();