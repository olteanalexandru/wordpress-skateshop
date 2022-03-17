<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "1aeb746ace7e8df1ffcd9eefbe99fc7192d20d5fb2"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter-child/404.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter-child/404_2020-05-19-16.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cinematograf
 */

?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main row">

			<section class="error-404 not-found col-md-12">
				<header class="page-header">
                    <div class="content404"><img src="/wp-content/uploads/2020/05/saedx-blog-featured-70.jpg" alt="" srcset=""></div>
					<h1 class="page-title"><?php esc_html_e( '404 - Pagina nu a fost gasita
Uh oh. ¯\_(ツ)_/¯', 'cinematograf' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Se pare ca nimic nu a fost gasit la aceasta locatie. Poate doresti sa dai un search ?', 'cinematograf' ); ?></p>

					<?php
					get_search_form();

					
					?>


	
						
					</div><!-- .widget -->

					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
<style>
.content404{
    


background-image: url("/wp-content/uploads/2020/05/saedx-blog-featured-70.jpg");
background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */



   
}
.content-area::after{
    opacity: 0.5;
}
.acfnomarg{
margin:0 auto;
}
#primary {
    border-bottom: 1px dotted rgb(76, 74, 71);
}
.error-404 ,.page-title{
   
  
    text-align:center!important;
    margin:0 auto;
}


</style>


