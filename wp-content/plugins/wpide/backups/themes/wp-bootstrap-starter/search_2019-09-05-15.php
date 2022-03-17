<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "90f8d01c3e477ee07a409a767e6aa1024b4ff0496d"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter/search.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter/search_2019-09-05-15.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>// <?php
// /**
//  * The template for displaying search results pages
//  *
//  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
//  *
//  * @package WP_Bootstrap_Starter
//  */

// get_header(); ?>

// 	<section id="primary" class="content-area col-sm-12 col-lg-8">
// 		<main id="main" class="site-main" role="main">

// 		<?php
// 		if ( have_posts() ) : ?>

// 			<header class="page-header">
// 				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'wp-bootstrap-starter' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
// 			</header><!-- .page-header -->

// 			<?php
// 			/* Start the Loop */
// 			while ( have_posts() ) : the_post();

// 				/**
// 				 * Run the loop for the search to output the results.
// 				 * If you want to overload this in a child theme then include a file
// 				 * called content-search.php and that will be used instead.
// 				 */
// 				get_template_part( 'template-parts/content', 'search' );

// 			endwhile;

// 			the_posts_navigation();

// 		else :

// 			get_template_part( 'template-parts/content', 'none' );

// 		endif; ?>

// 		</main><!-- #main -->
// 	</section><!-- #primary -->

// <?php
// get_sidebar();
// get_footer();
