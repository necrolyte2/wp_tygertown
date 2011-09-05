<?php
/**
 * @package Tygertown
 * @subpackage Tygertown_theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="page" class="">
			<div id="header" class="contentBackground">
				<div id="header-left">
					<a href='<?php bloginfo( 'url' ); ?>'><img src="<?php bloginfo( "template_url" ); ?>/images/Me.png" id="header-image"></a>
				</div>
				<div id="header-middle">
					<div id="header-text">
						<div id="blog-name"><a href='<?php bloginfo( 'url' ); ?>'><?php bloginfo( 'name' ); ?></a></div>
						<div id="blog-description"><?php bloginfo( 'description' ); ?></div>
					</div>
				</div>
				<div id="header-right">
					<div id="social-images">
						<div id="findme-text">
							Also you can find me at:
						</div>
						<a href='http://www.google.com/profiles/vallardt'><img src="<?php bloginfo( "template_url" ); ?>/images/gplus.png" height="32px"></a>
						<a href='http://www.facebook.com/Montanimal'><img src="<?php bloginfo( "template_url" ); ?>/images/facebook.png" height="32px"></a>
						<a href='https://github.com/necrolyte2'><img src="<?php bloginfo( "template_url" ); ?>/images/github.png" height="32px"></a>
						<a href='http://twitter.com/#!/necrolyte2'><img src="<?php bloginfo( "template_url" ); ?>/images/twitter.png" height="32px"></a>
						<a href='http://www.linkedin.com/profile/view?id=33444318&locale=en_US'><img src="<?php bloginfo( "template_url" ); ?>/images/linkedin.png" height="32px"></a>
						<a href='http://picasaweb.google.com/vallardt'><img src="<?php bloginfo( "template_url" ); ?>/images/picasa.png" height="32px"></a>
						<a href='http://www.youtube.com/user/necrolyte2?feature=mhee'><img src="<?php bloginfo( "template_url" ); ?>/images/youtube.png" height="32px"></a>
					</div>
				</div>
			</div>

