<?php get_header(); ?>
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
    <div id="not_found">
      <h2 class="sub_ttl">404 Not Found</h2>
      <p class="txt">ご指定のページが見つかりません。</p>
      <a class="link" href="/"><span class="btn">トップへ戻る</span></a>
    </div>
  </div><!--content-->

</div>
<?php get_footer(); ?>
