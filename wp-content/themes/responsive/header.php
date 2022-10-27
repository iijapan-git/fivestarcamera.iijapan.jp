<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ( is_paged() ) :?>
  <meta name="robots" content="noindex,follow">
<?php endif; ?>
<?php $url = $_SERVER["REQUEST_URI"]; ?>
<?php get_template_part('noindex'); ?>
<?php get_template_part('canonical'); ?>
<title>
<?php if(is_home()): ?>
<?php bloginfo('name'); ?>
<?php else: ?>
<?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?>
<?php endif; ?>
</title>

<!--========= header-footer meta values =========-->
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<!--========= header-footer css and links =========-->
<link rel="preconnect" href="//fivestarcamera.net">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/normalize.css"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/style.css"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/layout.css?20190220"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/contents.css?20181119"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/webclip.png" />
<link rel="dns-prefetch" href="https://fivestarcamera.net">
<link rel="preconnect" href="https://fivestarcamera.net">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67299774-1', 'auto');
  ga('send', 'pageview');

</script>
<meta name="google-site-verification" content="ZsixTEGibdC3jo-wuY6VGK-aKA--yPd-1-N8GwoYUWk" />
</head>
<body id="top" <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4&appId=757410980951703";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header class="header">
	<div class="header-top">
		<div class="wbox">
			<h1>
				<?php if(is_home()): ?>
					<?php bloginfo('name'); ?>
				<?php else: ?>
					<?php wp_title('', true, 'right'); ?>
				<?php endif; ?>
			</h1>
			<div class="menu">
				<ul>
					<li><a href="<?php echo get_site_url(); ?>/company-profile">会社概要</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="wbox">
		<div id="logo"><a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo" /></a></div>
		<div class="header-middle">
			<div class="description">
				<img src="<?php bloginfo('template_directory'); ?>/img/header_img.png" alt="買い取り額の無料お見積りはこちら　お手元に品物をご用意の上ご連絡ください" />
			</div>
			<div class="contact">
				<div class="tel">
					<a href="tel:0120027740" onclick="ga('send', 'event', '電話リンク', 'タップ');"><img src="<?php bloginfo('template_directory'); ?>/img/tel2.gif" alt="0120-027-740 営業時間10:00～20:00" /></a>
				</div>
				<div class="mail">
					<a href="<?php echo get_site_url(); ?>/inquiry" class="hbtn"><img src="<?php bloginfo('template_directory'); ?>/img/btn_mail.png" alt="メールで無料お見積り" /></a>
				</div>
			</div>
		</div>
		<div class="header-tel-sp"><img src="<?php bloginfo('template_directory'); ?>/img/tel_sp.gif" alt="0120-027-740 営業時間 10:00~20:00"></div>
	</div>

	<nav id="gnav">
		<div class="wbox">
			<ul class="clearfix">
				<li class="item1"><a href="<?php echo get_site_url(); ?>">トップ</a></li>
				<li class="item2"><a href="https://fivestarcamera.net/shop/">オンラインショップ</a></li>
				<li class="item3"><a href="<?php echo get_site_url(); ?>/purchase/">選べる買取方法</a></li>
				<li class="item4"><a href="<?php echo get_site_url(); ?>#kaitoriitem">ジャンル別買取商品</a></li>
				<li class="item5"><a href="<?php echo get_site_url(); ?>/maker/">メーカー別買取商品</a></li>
				<li class="item6"><a href="<?php echo get_site_url(); ?>/about-purchase/">買取実績</a></li>
				<li class="item7"><a href="<?php echo get_site_url(); ?>/voices/">お客様の声</a></li>
				<li class="item8"><a href="<?php echo get_site_url(); ?>/faq/">よくあるご質問</a></li>
				<li class="item9"><a href="<?php echo get_site_url(); ?>/column/">特集・コラム</a></li>
			</ul>
		</div>
	</nav>
	<div id="spnav"><span>Menu</span></div>
</header>
