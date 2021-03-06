<!doctype html>
<?php $site_url = site_url(); ?>
<?php $template_directory = get_template_directory_uri() . '/favicon.ico'; ?>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager - Mightily -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P855NRC');</script>
	<!-- End Google Tag Manager -->

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $template_directory; ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $template_directory; ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $template_directory; ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $template_directory; ?>/site.webmanifest">

	<?php gravity_form_enqueue_scripts( 2, true ); ?>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) - Mightily -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P855NRC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="loader active">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 513.2 401.4" style="enable-background:new 0 0 513.2 401.4;" xml:space="preserve" class="svg replaced-svg">
			<style type="text/css">
				.white { 
					fill: #FFFFFF;
				}
				.st1 { 
					fill: #FC9D29;
					stroke: #FC9D29;
					stroke-width: 0.8285;
					stroke-miterlimit: 10;
				}
				.orange {
					fill: #FC9D29;
				}
			</style>
			<g>
				<g>
					<path class="white" d="M269.1,364.8l-1.1,2.1l-3.3,18.5l8.4,0l0,0l2.2-0.7l-0.3,0.7l-1.7,4.5h-15.2l1-1.9l3.7-21.2l-0.3-2H269.1z"></path>
					<path class="white" d="M295.6,364.8l0.2,5.3l-2-0.7h-7l-1,5.4h5l2.2-0.7l-1,5.8l-1.8-0.6l-5.1,0l-1.1,6.1l8.4,0l0,0l2.2-0.7l-2,5.3    h-15.2l1-1.9l3.7-21.2l-0.3-2H295.6z"></path>
					<path class="white" d="M315.8,364.8l0.2,5.3l-2-0.7h-3.8L307,388l0.6,1.9h-6.7l1-1.9l3.3-18.7h-3.7l-2.2,0.7l2-5.3H315.8z"></path>
					<path class="white" d="M325.5,363l-0.9,5c0,0-0.9,1.1-2.6,3.2h-2.4l2.4-3.2h-2.6l0.9-5H325.5z"></path>
					<path class="white" d="M340.7,364.8l2.7,3.4l-0.6,3.5l-5.5,2.2l0.6-3.7l-0.7-0.9l-3.2,0l-1.1,1l-0.5,3.1l8.8,5.2l-1.4,7.9l-4,3.4    h-8.5l-2.7-3.3l0.6-3.6l5.4-1.8l-0.6,3.3l0.7,0.9h3.2l1.1-1l0.5-3l-8.8-5.2l1.4-8.1l3.9-3.3H340.7z"></path>
					<path class="white" d="M368.1,364.8l2.8,3.3l-0.4,2.3l-6,2.5l0.8-2l0.1-0.6l-0.7-0.9l-3.2,0l-1.1,0.9l-2.5,14.1l0.8,0.9l3.2,0    l1.1-0.9l0.8-4.7l-1.2-1.3l7.1-2.9l-2,11l-3.9,3.3h-8.5l-2.8-3.3l3.3-18.4l3.9-3.3H368.1z"></path>
					<path class="white" d="M386.9,364.8l2.8,3.3l-3.3,18.4l-4,3.3H374l-2.8-3.3l3.3-18.4l3.9-3.3H386.9z M380.7,385.3l1.1-1l2.5-14.1    l-0.7-0.9h-3.2l-1.2,1l-2.5,14.1l0.7,0.9H380.7z"></path>
					<path class="white" d="M415.1,364.8l2.7,3.3l-1.7,9.6l-3.8,3.2h-6.9l-1.2,7l0.6,1.9h-6.7l1-1.9l3.8-21.4l-0.3-1.9H415.1z     M406.3,376.4h3.9l1.3-1.1l0.9-4.9l-0.9-1.1h-4L406.3,376.4z"></path>
					<path class="white" d="M434.1,364.8l2.7,3.3l-1.7,9.6l-3.5,3l2.1,7l1.5,2.1h-7.7l0.8-1.6l-1.9-7.3h-2l-1.2,7l0.6,1.9h-6.7l1-1.9    l3.8-21.4l-0.3-1.9H434.1z M425.3,376.4h3.9l1.3-1.1l0.9-4.9l-0.9-1.1h-4L425.3,376.4z"></path>
					<path class="white" d="M453.6,364.8l2.8,3.3l-3.3,18.4l-4,3.3h-8.5l-2.8-3.3l3.3-18.4l3.9-3.3H453.6z M447.3,385.3l1.1-1l2.5-14.1    l-0.7-0.9H447l-1.2,1l-2.5,14.1l0.7,0.9H447.3z"></path>
					<path class="white" d="M456.8,384.8h5.2l-0.9,5.1H456L456.8,384.8z"></path>
				</g>
				<path class="st1" d="M160.2,142.7c-10.8,5.9-25.9,12.2-37.3,19.7c-23.9,15.7-42,31.2-55.8,45.2c5.6,9.3,11.6,17.9,18.1,25.8   c10.9-11.4,30.8-25,64-26.5l-1.2,8.6c-28.8,2.2-48.1,14.2-57.5,24.2c14.3,16.1,29.1,28.2,46.7,37.8l-1.5,8.5   c-19.1-10.4-36.4-24.3-50.5-40c-11.3,15.4-13.7,32.4-7,50.5c2.5,6.9,6,12.8,9,17.1c-21.7-6.8-26.5-49.1-7.4-73.9   c-6.6-8-12.8-16.7-18.5-26c-19.8,21.6-28.9,39.2-32.7,48.1c0.7-21.8,9.9-35.9,28.3-55.5c-4.8-8.6-8.8-17.1-11.9-25.4   c-15.7,7.1-34.5,8.6-42-5.8c10.1,5.8,23.9,5.2,39.2-1.9c-12.3-37.3-6.1-83.4,6.3-105c-5.1,17-13.2,56,1.2,101.1   C66.9,159.2,85.1,139.9,96,85c0,0,10.1-56.8,67.8-60.8c-18.8,5.7-51.6,21.3-59.8,62.4c-11.8,59.5-32.4,79.8-51.7,90.6   c2.8,7.6,6.3,15.2,10.5,23c13.9-13.9,32-29.1,55.5-44.6c13.9-9.2,29.8-18,43.7-24.9L160.2,142.7z"></path>
				<g>
					<path class="orange" d="M243.4,285.2l1-0.1l8.4-2.4l-3,17.2l-52.7,0l2.6-14.7L243.4,285.2z"></path>
				</g>
				<g>
					<path class="orange" d="M258.3,184.4l9.8,11.9l-5.1,28.8l-38,18.5l-2.4,14.1h16.6l2.6-14.8l17,6.4l-4.4,24.8h-52.8l7.1-40l38-18.5    l2-11.4l-2.8-3.4h-11.4l-3.7,3.2l-1.8,10.3l-16.7-7.9l1.7-9.9l14-12H258.3z"></path>
				</g>
				<g>
					<path class="white" d="M188.7,4.4c23.1,0,34.3,0,33.5,0c-0.8,0,7.6,25.4,25.3,76.2L259,16.4l-2.8-12h39.5l-6.5,11.8l-24.5,138.9    l3.3,10.8h-31.6L210.8,82l-12.7,71.8l0-0.1l3.7,12.2h-40.4l6.4-11.7l24.4-138.1L188.7,4.4z"></path>
					<path class="white" d="M389.5,4.4l17.6,21.4l-7.7,43.6l-15.8,13.5l11.1,13.3l-8.8,49l-24.4,20.8h-81l6-10.9l24.4-138.5L309,4.4    H389.5z M322.4,137.3h25.1l8.4-6.9l4.3-24.3l-5.7-6.9l-27.8,13.2L322.4,137.3z M332.4,79.9l27.8-13.2l8-6.9l3.2-18.4l-5.8-6.9    h-25.3L332.4,79.9z"></path>
					<path class="white" d="M504.9,4.2l-7,12.9l2.4,137.7l4.8,11h-45.9l6.3-11.6l0.3-22.9H439l-7.8,23.2l2.2,11.3h-46l8.7-10.9    l50.8-137.5l-2.2-13.3H504.9z M448.9,102.2h17.2l1-54.9L448.9,102.2z"></path>
				</g>
				<g>
					<path class="white" d="M242.6,346.7l-111.3,0l6.5-11.9l24.1-136.6l-2.1-13.2h41.8l-6.9,13.4l-21.1,119l56.3,0.1l1.9-0.1l16.5-4.6    L242.6,346.7z"></path>
					<path class="white" d="M363.5,185.2l17.9,21.4l-20.9,118.7L335,346.7h-54.7l-17.7-21.5l20.9-118.5l25.3-21.5H363.5z M323.1,317.2    l7.1-6.3l16-90.6l-4.6-5.9h-20.5l-7.4,6.3l-16,90.6l4.7,5.9H323.1z"></path>
					<path class="white" d="M503,185l-6.6,12.9l-22.9,128.3l-24,20.5h-54.9L377,325.5l22.5-127.3l-2.1-13.2h41.1l-6.7,13.2l-20.1,113.7    l4.6,5.7l20.4,0.1l7-6.1l20.1-113.7l-2.1-12.9H503z"></path>
				</g>
			</g>
		</svg>
	</div>

	<header class="header">
		<div class="wrapper">
			<?php $header_logo = get_field('header_logo', 'option'); ?>
			<?php if($header_logo) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
					<img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>">
				</a>
			<?php else : ?>
				<a href="/" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/logo-vertical.svg" class="svg" alt="NBA2Lou Logo">
				</a>
			<?php endif; ?>
			<div class="right">
				<ul class="menu home-menu">
					<?php
						$args = array(
							'theme_location' => 'home-menu',
							'menu' => 'home-menu',
							'container' => false,
							'items_wrap' => '%3$s'
						);
					?>
					<?php wp_nav_menu($args); ?>	
				</ul>
				<button class="nav-toggle">
					<span class="toggle-wrapper">
						<span class="toggle-bar toggle-bar-1"></span>
						<span class="toggle-bar toggle-bar-2"></span>
						<span class="toggle-bar toggle-bar-3"></span>
						<span class="toggle-bar toggle-bar-4"></span>
					</span>
					<span class="visually-hide-text">Show Main Menu</span>
				</button>
			</div>
			<nav class="header-nav">
				<ul class="menu mobile-menu">
					<?php
						$args = array(
							'theme_location' => 'main-menu',
							'menu' => 'main-menu',
							'container' => false,
							'items_wrap' => '%3$s'
						);
					?>
					<?php wp_nav_menu($args); ?>	
				</ul>
				<?php $social = get_field('social', 'option'); ?>
				<ul class="menu social-menu social header-social">
					<?php if($social['facebook']) : ?>
						<li class="social-item"><a href="<?php echo $social['facebook']; ?>" target="_blank"><span class="visually-hide-text">Facebook</span><i class="fab fa-facebook-f icon"></i></a></li>
					<?php endif; ?>
					<?php if($social['twitter']) : ?>
						<li class="social-item"><a href="<?php echo $social['twitter']; ?>" target="_blank"><span class="visually-hide-text">Twitter</span><i class="fab fa-twitter icon"></i></a></li>
					<?php endif; ?>
					<?php if($social['instagram']) : ?>
						<li class="social-item"><a href="<?php echo $social['instagram']; ?>" target="_blank"><span class="visually-hide-text">Instagram</span><i class="fab fa-instagram icon"></i></a></li>
					<?php endif; ?>
					<?php if($social['youtube']) : ?>
						<li class="social-item"><a href="<?php echo $social['youtube']; ?>" target="_blank"><span class="visually-hide-text">YouTube</span><i class="fab fa-youtube icon"></i></a></li>
					<?php endif; ?>
					<?php if($social['linkedin']) : ?>
                        <li class="social-item"><a href="<?php echo $social['linkedin']; ?>" target="_blank"><span class="visually-hide-text">LinkedIn</span><i class="fab fa-linkedin-in icon"></i></a></li>
                    <?php endif; ?>
				</ul>
			</nav>
			<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/basketball_shadow.png" class="basketball" alt="Basketball">			
		</div>
	</header>
