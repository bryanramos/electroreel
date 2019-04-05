<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flash
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( get_theme_mod( 'flash_disable_preloader', '' ) != 1 ) : ?>
<div id="preloader-background">
	<div id="spinners">
		<div id="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</div>
<?php endif; ?>

<?php
/**
 * flash_before hook
 */
do_action( 'flash_before' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'flash' ); ?></a>

	<?php
	/**
	 * flash_before_header hook
	 */
	do_action( 'flash_before_header' ); ?>

	<nav class="pushy pushy-left" data-focus="#first-link">
        <div class="pushy-content">
			<section class="nav-section">
				<ul>
					<li class="pushy-link"><a href="//www.electroreel.com/">Home</a></li>
					<li class="pushy-link"><a href="//www.electroreel.com/products/">Products</a></li>
					<li class="pushy-submenu">
						<button>About</button>
						<ul>
							<li class="pushy-link"><a href="//www.electroreel.com/why-electroreel/">Why Electroreel?</a></li>
							<li class="pushy-link"><a href="//www.electroreel.com/gallery/">Gallery</a></li>
							<li class="pushy-link"><a href="//www.electroreel.com/brands/">Brands</a></li>
							<li class="pushy-link"><a href="//www.electroreel.com/leadership/">Leadership</a></li>
							<li class="pushy-link"><a href="//www.electroreel.com/patents/">Patents</a></li>
						</ul>
						</li>
						<li class="pushy-link"><a href="//www.electroreel.com/support/">Support</a></li>
						<li class="pushy-link"><a href="//www.electroreel.com/contact/">Contact</a></li>
					</ul>
				</section>
				<section class="brands-section">
					<ul>
						<li class="pushy-link title">Our Global Brands</li>
						<li class="pushy-link current"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Electroreel</a></li>
						<li class="pushy-link"><a href="//www.cinchstrip.com">Cinchstrip</a></li>
						<li class="pushy-link"><a href="//www.advancedpaperworks.com">API El Paso</a></li>
					</ul>
				</section>
            </div>
	</nav>

	<div class="site-overlay"></div>

	<div id="anchor"></div>

	<header id="masthead" class="site-header" role="banner">
		<?php
		if ( get_theme_mod( 'flash_top_header', '1') == '1' ) : ?>
		<div class="header-top">
			<div class="tg-container">
				<div class="tg-column-wrapper clearfix">
					<div class="left-content">
						<?php echo flash_top_header_content( 'flash_top_header_left' ); ?>
					</div>
					<div class="right-content">
						<?php echo flash_top_header_content( 'flash_top_header_right' ); ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<div class="header-bottom">
			<div class="tg-container">

                <button class="btn hamburger-button menu-btn" type="button">
					<i class="material-icons">menu</i>
                </button>

				<div class="logo">

					<?php if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
					<figure class="logo-image">
						<?php flash_the_custom_logo(); ?>
						<?php if( get_theme_mod( 'flash_transparent_logo', '') != '') : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class="transparent-logo" src="<?php echo esc_url( get_theme_mod( 'flash_transparent_logo', '' ) ); ?>" />
						</a>
						<?php endif; ?>
					</figure>
					<?php endif; ?>

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 307.76 51.6"><defs><style>.cls-1{fill:#262626;}.cls-2{fill:#3f70b7;}.cls-3{fill:#6194c6;}.cls-4{fill:#a1c3e4;}</style></defs><title>Asset 2</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M7.1,15.7v6.57H23.67v6.39H7.1V35.9H25.39v6.39H0v-33H25.39V15.7Z"/><path class="cls-1" d="M30.58,8.73h7V42.29h-7Z"/><path class="cls-1" d="M61.1,34.46,65.57,39c-2.21,2.31-6.48,3.85-10.13,3.85A12.77,12.77,0,0,1,42.29,29.81,12.5,12.5,0,0,1,55.06,16.9c7.77,0,12.33,5.9,12.33,15.26H49.49a6,6,0,0,0,5.9,4.51A9,9,0,0,0,61.1,34.46ZM49.58,27.12H60.67a5.17,5.17,0,0,0-5.33-4A6,6,0,0,0,49.58,27.12Z"/><path class="cls-1" d="M70.75,29.86c0-7.06,6.24-13,13.58-13a13,13,0,0,1,9.75,4.22l-4.66,4a7.1,7.1,0,0,0-5.13-2.3,7.09,7.09,0,0,0,0,14.16,7.34,7.34,0,0,0,5.24-2.4l4.65,3.94a13.06,13.06,0,0,1-9.93,4.37C76.94,42.87,70.75,36.91,70.75,29.86Z"/><path class="cls-1" d="M113.18,40.71a9.06,9.06,0,0,1-5.71,2.16A7.2,7.2,0,0,1,100,35.28V23.14H96.62V17.47H100V10.65h6.72v6.82h5.38v5.67h-5.38v11A2.54,2.54,0,0,0,109.1,37a3.66,3.66,0,0,0,2.4-.81Z"/><path class="cls-1" d="M133.05,16.9v5.9c-5.18,0-8.49,3-8.49,7.63V42.29h-7V17.47h7v4.61A9.24,9.24,0,0,1,133.05,16.9Z"/><path class="cls-1" d="M135.12,29.86c0-7.06,6.19-13,13.58-13s13.49,5.9,13.49,13-6.14,13-13.49,13S135.12,36.91,135.12,29.86Zm20.4,0A6.84,6.84,0,1,0,148.7,37,7,7,0,0,0,155.52,29.86Z"/><path class="cls-1" d="M182.45,16.9v5.9c-5.19,0-8.5,3-8.5,7.63V42.29h-7V17.47h7v4.61A9.24,9.24,0,0,1,182.45,16.9Z"/><path class="cls-1" d="M203.9,34.46,208.37,39c-2.21,2.31-6.48,3.85-10.13,3.85a12.78,12.78,0,0,1-13.16-13.06A12.51,12.51,0,0,1,197.85,16.9c7.78,0,12.34,5.9,12.34,15.26h-17.9a6,6,0,0,0,5.9,4.51A9,9,0,0,0,203.9,34.46Zm-11.52-7.34h11.09a5.18,5.18,0,0,0-5.33-4A6,6,0,0,0,192.38,27.12Z"/><path class="cls-1" d="M232.37,34.46,236.83,39c-2.21,2.31-6.48,3.85-10.13,3.85a12.77,12.77,0,0,1-13.15-13.06A12.5,12.5,0,0,1,226.32,16.9c7.77,0,12.33,5.9,12.33,15.26h-17.9a6,6,0,0,0,5.9,4.51A9,9,0,0,0,232.37,34.46Zm-11.53-7.34h11.09a5.17,5.17,0,0,0-5.32-4A6,6,0,0,0,220.84,27.12Z"/><path class="cls-1" d="M243.4,8.73h7V42.29h-7Z"/><path class="cls-2" d="M263.73,29.21s10.6-24.11,13-1.87a24.16,24.16,0,0,1-4.33,14.79,14,14,0,0,1-5.6,4.7s6.35,5.67,12.4-8.44a65.24,65.24,0,0,0,4-16.75,46.86,46.86,0,0,0-.21-14c-.43-2.26-1.17-4.79-2.88-6.45A3.65,3.65,0,0,0,278,0a2.44,2.44,0,0,0-1.44.33,10.86,10.86,0,0,0-3.79,3.8,51.81,51.81,0,0,0-5.06,10.13,52.25,52.25,0,0,0-2.45,7.8C264.71,24.45,264.33,26.85,263.73,29.21Z"/><path class="cls-3" d="M284.41,18.46s0,5.38-.6,6.57c0,0,4.63-1.34,4,3.29s-2.17,8-8.29,13.73S273.51,48.1,269.48,49c0,0,6.57,4.48,21.8-12s9.26-22.69,9.26-22.69-2.84-2.76-9-.37C291.58,13.91,286.5,16.45,284.41,18.46Z"/><path class="cls-4" d="M293.89,35.18l-3.58,4s4.1,1.8,2.31,3.89-4.77,4.62-13.58,5.37c0,0-3.81,1.72-6,1.79A43.3,43.3,0,0,0,303,47.13s10.15-5.9.82-9.86C303.82,37.27,300.69,35.56,293.89,35.18Z"/></g></g></svg>
					</a>

					<div class="logo-text site-branding">
						<?php
						if ( ( is_front_page() && is_home() ) || ( is_front_page() && !is_home() ) ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div>
				</div>
				<div class="site-navigation-wrapper">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<div class="menu-toggle">
							<i class="fa fa-bars"></i>
						</div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->

					<?php $logo_position = get_theme_mod( 'flash_logo_position', 'left-logo-right-menu' ); ?>

					<?php if ( $logo_position == 'center-logo-below-menu' ): ?>
						<div class="header-action-container">

							<?php if( ( get_theme_mod( 'flash_header_cart', '' ) !=  '1' ) && class_exists( 'WooCommerce' ) ) :
							$cart_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : WC()->cart->get_cart_url();
							?>

							<div class="cart-wrap">
								<div class="flash-cart-views">
									<a href="<?php echo esc_url( $cart_url ); ?>" class="wcmenucart-contents">
										<i class="fa fa-opencart"></i>
										<span class="cart-value"><?php echo wp_kses_data ( WC()->cart->get_cart_contents_count() ); ?></span>
									</a>
								</div>
								<?php the_widget( 'WC_Widget_Cart', '' ); ?>
							</div>
							<?php endif; ?>

							<?php if( get_theme_mod( 'flash_header_search', '' ) !=  '1' ) : ?>
							<div class="search-wrap">
								<div class="search-icon">
									<i class="fa fa-search"></i>
								</div>
								<div class="search-box">
									<?php get_search_form(); ?>
								</div>
							</div>
							<?php endif; ?>
						</div>
					<?php endif ?>
                </div>
                
                <form autocomplete="off" role="search" method="get" class="searchform site-search" id="searchform" action="">
                    <div class="searchbox">
                        <div class="search-ico">
                            <i class="material-icons notranslate">search</i>
                        </div>
						<input name="s" id="s" class="search-input" type="search" aria-label="Search box" placeholder="Search" onfocus="this.style.webkitTransform = 'translate3d(0px,-10000px,0)'; webkitRequestAnimationFrame(function() { this.style.webkitTransform = ''; }.bind(this))">
						<input type="hidden" value="product" name="post_type" id="post_type" onfocus="this.style.webkitTransform = 'translate3d(0px,-10000px,0)'; webkitRequestAnimationFrame(function() { this.style.webkitTransform = ''; }.bind(this))"/>
                    </div>
                </form>

                <button class="btn search-close" type="button">
					<i class="material-icons">close</i>
                </button>

				<div class="header-action-container">
					<?php if( ( get_theme_mod( 'flash_header_cart', '' ) !=  '1' ) && class_exists( 'WooCommerce' ) ) : ?>
					<div class="cart-wrap">
						<button class="flash-cart-views">

							<?php $cart_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : WC()->cart->get_cart_url(); ?>

							<a href="<?php echo esc_url( $cart_url ); ?>" class="wcmenucart-contents">
								<i class="material-icons">shopping_cart</i>
								<span class="cart-value"><?php echo wp_kses_data ( WC()->cart->get_cart_contents_count() ); ?></span>
							</a>
                            </button>
						<?php the_widget( 'WC_Widget_Cart', '' ); ?>
					</div>
					<?php endif; ?>

					
				</div>
				<button class="btn user-actions" type="button">
					<i class="material-icons">account_circle</i>
				</button>
                <!--
                <button onclick="window.location.href='<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>''" class="btn action-button" type="button">
                    Shop Now
                </button>-->
			</div>
		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * flash_after_header hook
	 */
	do_action( 'flash_after_header' ); ?>

	<?php get_template_part( 'template-parts/header-media' ); ?>

	<?php if( is_front_page() ) : ?>

		
		<?php echo do_shortcode('[rev_slider alias="Electroreel Slider"]'); ?>



	<?php endif; ?>

	<?php if( !is_front_page() ) : ?>
	<nav id="flash-breadcrumbs" class="breadcrumb-trail breadcrumbs">
		<div class="tg-container">
			<?php flash_page_title(); ?>
			<?php flash_breadcrumbs(); ?>
		</div>
	</nav>
	<?php endif; ?>

	<?php
	/**
	 * flash_before_main hook
	 */
	do_action( 'flash_before_main' ); ?>

	<div id="content" class="site-content">
		<div class="tg-container">

<script src="//electroreel.com/wp-content/themes/electroreel/assets/js/search-jquery.js"></script>
<script src="//electroreel.com/wp-content/themes/electroreel/assets/js/search-nojquery.js"></script>
<script>
$(document).ready(function () {
  
  'use strict';
  
   var c, currentScrollTop = 0,
       navbar = $('.header-bottom');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.height();
     
	  currentScrollTop = a;

     
      if ( (c < currentScrollTop && a > b + b )) {
        navbar.addClass("scrollUp");
      } else if (c > currentScrollTop && !(a <= b)) {
        navbar.removeClass("scrollUp");
      }
      c = currentScrollTop;
  });
  
});
</script>

<script type="text/javascript"> 

/*! Pushy - v1.1.0 - 2017-1-30
* Pushy is a responsive off-canvas navigation menu using CSS transforms & transitions.
* https://github.com/christophery/pushy/
* by Christopher Yee */

(function ($) {
	var pushy = $('.pushy'), //menu css class
		body = $('body'),
		container = $('#container'), //container css class
		push = $('.push'), //css class to add pushy capability
		pushyLeft = 'pushy-left', //css class for left menu position
		pushyOpenLeft = 'pushy-open-left', //css class when menu is open (left position)
		pushyOpenRight = 'pushy-open-right', //css class when menu is open (right position)
		siteOverlay = $('.site-overlay'), //site overlay
		menuBtn = $('.menu-btn, .pushy-link'), //css classes to toggle the menu
		menuBtnFocus = $('.menu-btn'), //css class to focus when menu is closed w/ esc key
		menuLinkFocus = $(pushy.data('focus')), //focus on link when menu is open
		menuSpeed = 200, //jQuery fallback menu speed
		menuWidth = pushy.width() + 'px', //jQuery fallback menu width
		submenuClass = '.pushy-submenu',
		submenuOpenClass = 'pushy-submenu-open',
		submenuClosedClass = 'pushy-submenu-closed',
		submenu = $(submenuClass);

	//close menu w/ esc key
	$(document).keyup(function(e) {
		//check if esc key is pressed
		if (e.keyCode == 27) {

			//check if menu is open
			if( body.hasClass(pushyOpenLeft) || body.hasClass(pushyOpenRight) ){
				if(cssTransforms3d){
					closePushy(); //close pushy
				}else{
					closePushyFallback();
					opened = false; //set menu state
				}
				
				//focus on menu button after menu is closed
				if(menuBtnFocus){
					menuBtnFocus.focus();
				}
				
			}

		}   
	});

	function togglePushy(){
		//add class to body based on menu position
		if( pushy.hasClass(pushyLeft) ){
			body.toggleClass(pushyOpenLeft);
		}else{
			body.toggleClass(pushyOpenRight);
		}

		//focus on link in menu after css transition ends
		if(menuLinkFocus){
			pushy.one('transitionend', function() {
				menuLinkFocus.focus();
			});
		}
		
	}

	function closePushy(){
		if( pushy.hasClass(pushyLeft) ){
			body.removeClass(pushyOpenLeft);
		}else{
			body.removeClass(pushyOpenRight);
		}
	}

	function openPushyFallback(){
		//animate menu position based on CSS class
		if( pushy.hasClass(pushyLeft) ){
			body.addClass(pushyOpenLeft);
			pushy.animate({left: "0px"}, menuSpeed);
			container.animate({left: menuWidth}, menuSpeed);
			//css class to add pushy capability
			push.animate({left: menuWidth}, menuSpeed);
		}else{
			body.addClass(pushyOpenRight);
			pushy.animate({right: '0px'}, menuSpeed);
			container.animate({right: menuWidth}, menuSpeed);
			push.animate({right: menuWidth}, menuSpeed);
		}

		//focus on link in menu
		if(menuLinkFocus){
			menuLinkFocus.focus();
		}
	}

	function closePushyFallback(){
		//animate menu position based on CSS class
		if( pushy.hasClass(pushyLeft) ){
			body.removeClass(pushyOpenLeft);
			pushy.animate({left: "-" + menuWidth}, menuSpeed);
			container.animate({left: "0px"}, menuSpeed);
			//css class to add pushy capability
			push.animate({left: "0px"}, menuSpeed);
		}else{
			body.removeClass(pushyOpenRight);
			pushy.animate({right: "-" + menuWidth}, menuSpeed);
			container.animate({right: "0px"}, menuSpeed);
			push.animate({right: "0px"}, menuSpeed);
		}
	}

	function toggleSubmenu(){
		//hide submenu by default
		$(submenuClass).addClass(submenuClosedClass);

		$(submenuClass).on('click', function(){
	        var selected = $(this);

	        if( selected.hasClass(submenuClosedClass) ) {
	            //hide opened submenus
	            $(submenuClass).addClass(submenuClosedClass).removeClass(submenuOpenClass);
	            //show submenu
	            selected.removeClass(submenuClosedClass).addClass(submenuOpenClass);
	        }else{
	            //hide submenu
	            selected.addClass(submenuClosedClass).removeClass(submenuOpenClass);
	        }
	    });
	}

	//checks if 3d transforms are supported removing the modernizr dependency
	var cssTransforms3d = (function csstransforms3d(){
		var el = document.createElement('p'),
		supported = false,
		transforms = {
		    'webkitTransform':'-webkit-transform',
		    'OTransform':'-o-transform',
		    'msTransform':'-ms-transform',
		    'MozTransform':'-moz-transform',
		    'transform':'transform'
		};

		if(document.body !== null) {
			// Add it to the body to get the computed style
			document.body.insertBefore(el, null);

			for(var t in transforms){
			    if( el.style[t] !== undefined ){
			        el.style[t] = 'translate3d(1px,1px,1px)';
			        supported = window.getComputedStyle(el).getPropertyValue(transforms[t]);
			    }
			}

			document.body.removeChild(el);

			return (supported !== undefined && supported.length > 0 && supported !== "none");
		}else{
			return false;
		}
	})();

	if(cssTransforms3d){
		//toggle submenu
		toggleSubmenu();

		//toggle menu
		menuBtn.on('click', function(){
			togglePushy();
		});
		//close menu when clicking site overlay
		siteOverlay.on('click', function(){
			togglePushy();
		});
	}else{
		//add css class to body
		body.addClass('no-csstransforms3d');

		//hide menu by default
		if( pushy.hasClass(pushyLeft) ){
			pushy.css({left: "-" + menuWidth});
		}else{
			pushy.css({right: "-" + menuWidth});
		}

		//fixes IE scrollbar issue
		container.css({"overflow-x": "hidden"});

		//keep track of menu state (open/close)
		var opened = false;

		//toggle submenu
		toggleSubmenu();

		//toggle menu
		menuBtn.on('click', function(){
			if (opened) {
				closePushyFallback();
				opened = false;
			} else {
				openPushyFallback();
				opened = true;
			}
		});

		//close menu when clicking site overlay
		siteOverlay.on('click', function(){
			if (opened) {
				closePushyFallback();
				opened = false;
			} else {
				openPushyFallback();
				opened = true;
			}
		});
	}
}(jQuery));

</script>

<script type="text/javascript">

$(document).ready(function(){
  $(".nav-tabs.brand .menu-btn").click(function(){
    $(".brands-section").toggleClass('section-visible');
  });

  $(".hamburger-button").click(function(){
    $(".nav-section").toggleClass('section-visible');
  });

  $(".site-overlay, .pushy-link").click(function(){
    $(".brands-section, .nav-section").removeClass('section-visible');
  });
});
		
</script>

<script type="text/javascript">

function sticky_relocate() {
    var window_top = jQuery(window).scrollTop() + 0;
    var div_top = jQuery("#anchor").offset().top;
	var $navigation = jQuery(".site-header .header-bottom");
	var $body = $('html,body');
	
    if (window_top > div_top) {
		$navigation.addClass('sticky');
	} else {
		$navigation.removeClass('sticky');
	}
}

jQuery(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});

</script>

