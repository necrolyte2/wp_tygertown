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
		<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="PUBLIC">
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
					<a href='<?php bloginfo( 'url' ); ?>'><canvas id="header-image" width='100px' height='100px'><img src="<?php bloginfo( "template_url" ); ?>/images/Me.png" id="header-image"></canvas></a>
					<script type="text/javascript">  
							var canvas = document.getElementById("header-image");
							var context = canvas.getContext("2d");
						 
							var cornerRadius = 25;
						 
							context.beginPath();
							context.moveTo( cornerRadius, 0 );

							/* Top and Right Corner */
							context.lineTo( canvas.width - cornerRadius, 0 );
							context.arcTo( canvas.width, 0, canvas.width, cornerRadius, cornerRadius );

							/* Right and Right Bottom Corner */
							context.lineTo( canvas.width, canvas.height - cornerRadius );
							context.arcTo( canvas.width, canvas.height, canvas.width - cornerRadius, canvas.height, cornerRadius );

							/* Bottom and Left Corner */
							context.lineTo( cornerRadius, canvas.height );
							context.arcTo( 0, canvas.height, 0, canvas.height - cornerRadius, cornerRadius );

							/* Top and Left */
							context.lineTo( 0, cornerRadius );
							context.arcTo( 0, 0, cornerRadius, 0, cornerRadius );

						 
							context.clip();

							var img = new Image();
							img.addEventListener('load', function(e) {
								context.drawImage( img, 0, 0, 100, 100 );
							}, true );
							img.src = "<?= gPlusPic() ?>";
					</script>
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
							You can also find me at:
						</div>
						<a href='http://www.google.com/profiles/vallardt'><img src="<?php bloginfo( "template_url" ); ?>/images/gplus.png" width="32px" height="32px"></a>
						<a href='http://www.facebook.com/Montanimal'><img src="<?php bloginfo( "template_url" ); ?>/images/facebook.png" width="32px" height="32px"></a>
						<a href='https://github.com/necrolyte2'><img src="<?php bloginfo( "template_url" ); ?>/images/github.png" width="32px" height="32px"></a>
						<a href='http://stackoverflow.com/users/582569/necrolyte2'><img src="<?php bloginfo( "template_url" ); ?>/images/stackoverflow.png" width="32px" height="32px"></a>
						<a href='http://twitter.com/#!/necrolyte2'><img src="<?php bloginfo( "template_url" ); ?>/images/twitter.png" width="32px" height="32px"></a>
						<a href='http://www.linkedin.com/profile/view?id=33444318&locale=en_US'><img src="<?php bloginfo( "template_url" ); ?>/images/linkedin.png" width="32px" height="32px"></a>
						<a href='http://picasaweb.google.com/vallardt'><img src="<?php bloginfo( "template_url" ); ?>/images/picasa.png" width="32px" height="32px"></a>
						<a href='http://www.youtube.com/user/necrolyte2?feature=mhee'><img src="<?php bloginfo( "template_url" ); ?>/images/youtube.png" width="32px" height="32px"></a>
					</div>
				</div>
			</div>

