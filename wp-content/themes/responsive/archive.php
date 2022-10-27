<?php
/*アーカイブカテゴリテンプレート*/

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
            </div><!--content-->

<?php get_sidebar(); ?><!-- get_sidebar -->
        </div> 


<?php get_footer(); ?>