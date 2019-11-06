<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<?php /*if(ale_get_option('sitelogo')){
    echo "<img src='".ale_get_option('sitelogo')."' />";
}*/ ?>
<?php /*ale_option('sitelogo'); */?>

<div class="parallax"></div>

<header class="header" id="header">
	<navbar class="header-menu" id="navbar">
		<div class="header-menu-zone">
			<div class="header-menu-zone-list">
				<ul class="hm-list-prop">
					<li class="hm-list-el">
						<a href="index.html#top" class="def-link">
							<div class="hm-list-el-into hm-el-active">Home</div>
						</a>
					</li>
					<li class="hm-list-el">
						<a href="blog.html" class="def-link">
							<div class="hm-list-el-into">Blog</div>
						</a>
					</li>
					<li class="hm-list-el">
						<a href="gallery.html" class="def-link">
							<div class="hm-list-el-into">Gallery</div>
						</a>
					</li>
					<li class="hm-list-el">
						<a href="404.html" class="def-link">
							<div class="hm-list-el-into">Prices</div>
						</a>
					</li>
					<li class="hm-list-el">
						<a href="404.html" class="def-link">
							<div class="hm-list-el-into">Voodoo</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</navbar>
</header>