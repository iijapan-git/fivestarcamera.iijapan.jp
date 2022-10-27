<?php
/**
 * Template Name: 会社概要
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
/*ページテンプレート*/

if (get_query_var('column_id')) {
	get_template_part('page-column-detail');
	return;
} elseif (get_query_var('column_category')) {
	get_template_part('page-column-category');
	return;
}

get_header();
?>

<main id="main" class="wbox clearfix">

	<!--パンくずリスト：breadcrumb-navxt-->
	<div class="breadcrumb">
	<?php if(function_exists('bcn_display')) {bcn_display();} ?>
	</div>

	<div id="content">
<?php
if (have_posts()):
	while(have_posts()): the_post();

		the_content();

		endwhile;
	endif;
?>

	</div><!--content-->

	<?php get_sidebar(); ?><!-- get_sidebar -->

</main>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "ファイブスターカメラ",
  "url": "https://fivestarcamera.net/",
  "logo": "https://fivestarcamera.net/wp-content/themes/responsive/img/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+81-120-027-740",
    "contactType": "customer service",
    "areaServed": "JP",
    "availableLanguage": "Japanese"
    },
  "location": {
    "@type": "Place",
    "@id": "https://fivestarcamera.net/",
    "name": "ファイブスターカメラ",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "JP",
      "postalCode": "939-8271",
      "addressRegion": "富山県",
      "addressLocality": "富山市",
      "streetAddress": "太郎丸西町1-9-1"
      }
    }
}
</script>

<?php
get_footer();