<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "676f952bd1ba9f23d4969ee93719ba3205932011da"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter-child/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter-child/header_2020-05-28-07.php") )  ) ){
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







<div class="container-fluid  johny" id="johny">

<div class="container-fluid  john" id="john">
            

<div class="row customclass" id="menudark">
	  
<div class="col-sm-2  col-6 padding0">
   


<?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img class="logo" src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>
                 
                
                </button>
                </div>
                <div class="  col-6 padding0 ">
            
                <?php if ( is_active_sidebar( 'header-search' )) : ?>
                    <?php dynamic_sidebar( 'header-search' ); ?>
               
                    
                    <?php endif; ?>

                    </div>
					<div class="col-8 col-sm-2  justify-content-end width100">
				<a href="/my-account/">	<button type="button" class=" btn   btn-outline-dark" >
	              <p class="clasabtn">Cont  </p>
					</button> </a>
			
				
			
<a href="/basket/">
					<button type="button" class="  btn btn-outline-dark " >
				<p class="clasabtn clasabtn2"> <i class="fas fa-shopping-basket"> </i>  <?php global $woocommerce; ?>
<a class="your-class-name fas3" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"
title="<?php _e('Cart View', 'woothemes'); ?>">
<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'),
$woocommerce->cart->cart_contents_count);?> -
<?php echo $woocommerce->cart->get_cart_total(); ?>   </P>
					</button> </a>
                   
                  
                    </div> 
   
                    </div> 







<style>

 @media only screen and (max-width: 770px) {
     ::-webkit-scrollbar{
      display:none;   
     }
     
 }
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: red; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}



.btn-outline-danger{
    

    
    z-index:450;
   
    
    }
   .padding0{
    margin:0;   
   }
    .btn{
        background-color:orange;
        
        }
        header#masthead{
            padding:0;
            -webkit-box-shadow: 0px 28px 47px -16px rgba(0,0,0,0.6);
-moz-box-shadow: 0px 28px 47px -16px rgba(0,0,0,0.6);
box-shadow: 0px 28px 47px -16px rgba(0,0,0,0.6);
z-index:420;


        }
        div#john{
            position:sticky!important;
            position:-webkit-sticky;
  top: 0; 
        }
        .customclass , .menutoleft{
        padding-left:20%;
            padding-right:20%
      }
     
      
.navbar-inverse .navbar-inner {
background-image: -webkit-linear-gradient(top, rgb(0, 163, 255), rgb(31, 92, 158));
}

    .customclass{
        max-height:75px;

      
    }
      button.btn.btn-outline-dark{
              height: -webkit-fill-available;
     
</style>



  

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
 
	<header id="masthead" class="site-header navbar-static-top " role="banner">
    <div class="row  menutoleft "> 
            <nav class="navbar navbar-expand-xl p-0">
            <div  class="navbar-brand">
                

                
  



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

          
</div>


           
                  
                    </nav>

                    </div>
                    </div> 


                   
                    </div>









                  


    
       
	
	</header><!-- #masthead -->
   
	<div id="content" class="site-content">
		<div class="container darkmode">
			<div class="row">
            