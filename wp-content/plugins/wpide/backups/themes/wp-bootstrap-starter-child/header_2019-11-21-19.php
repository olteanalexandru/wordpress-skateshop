<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "532698aa106f8a74336da8f25b6e28caa52f6fce78"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter-child/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter-child/header_2019-11-21-19.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div class="container-fluid john">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div class="row">
			<div class="col-md-4">
					 
				<a href="http://theskate420.com/my-account/">	<button type="button" class=" btn  btn-outline-danger " >
	              <p class="clasabtn">Cont  </p>
					</button> </a>
				</div>
				<div class="col-md-4">
					 <a href="http://theskate420.com/checkout/">
					<button type="button" class="  btn btn-outline-danger btn-md" >
						<p class="clasabtn">Checkout</P>	
					</button></a>
				</div>
				<div class="col-md-4">
<a href="http://theskate420.com/basket/">
					<button type="button" class="  btn btn-outline-danger  btn-md" >
				<p class="clasabtn">Cos</P>
					</button> </a>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
.john{
    padding-bottom:14px;
 padding-top:5px;
 position: sticky;
    top:17px;
    z-index:400;
    
    }
    .btn{
        background-color:orange;
        opacity:0.8;
        }
</style>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-sidebar') ) : 
 
endif; ?>
	
	</header><!-- #masthead -->
   
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">

                <?php endif; ?>