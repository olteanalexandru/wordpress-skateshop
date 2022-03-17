<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "676f952bd1ba9f23d4969ee93719ba3230c5c0ba23"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter-child/woocommerce/single-product.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter-child/woocommerce/single-product_2020-06-05-19.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying Woocommerce Product
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>


<?php
get_header();?>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
        <main id="main" class="site-main" role="main">
	
        <div id="wrapper" class="top50 container-fluid well">
 
	
		            
		            

		        


    

            <?php woocommerce_content(); 



		
     
            get_footer();
			?>
</div>

<style>
.related.products{
margin-left:5em;
margin-right:5em;
}
#wrapper{
 margin-top:3em;   
}
#footer-widget{
    border-top:2px black solid;
}

#wrapper {
	box-shadow:0 0 58px rgba(0,0,0,0.25);
  
}
#wrapper.well {
	background:#fff;
	border-radius:0;
}
button.single_add_to_cart_button.button.alt.disabled.wc-variation-selection-needed{
    background:grey;}
    button.single_add_to_cart_button.button.alt{
        background:black;
    }
    h2.woocommerce-loop-product__title{
        border-bottom:1px solid grey;
    }
   img.attachment-woocommerce_thumbnail.size-woocommerce_thumbnail{
       border: 1px black dotted; 
    }
    img.wp-post-image{
        border:1px solid black;
    }

</style>
		</main><!-- #main -->
	</section><!-- #primary -->