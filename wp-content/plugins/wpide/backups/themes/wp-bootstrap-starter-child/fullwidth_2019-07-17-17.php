<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e8450e15e6294c4b252f7dc79128b548e2f70b9fc4"){
                                        if ( file_put_contents ( "/home/user9996/public_html/wp-content/themes/wp-bootstrap-starter-child/fullwidth.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/user9996/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter-child/fullwidth_2019-07-17-17.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
* Template Name: Full Width
 */

get_header(); ?>
<!--inchidere row si container-->
</div>
</div>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
