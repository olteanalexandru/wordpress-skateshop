<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "1aeb746ace7e8df1ffcd9eefbe99fc7192d20d5fb2"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter-child/single-product.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter-child/single-product_2020-05-19-15.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>
<?php
get_header();
?>

<div id="wrapper" class="container-fluid well p-0">
    <div class="row">
<div class="col-lg-4 col-sm-2">

</div>
    <section id="primary" class="content-area col-sm-10 col-lg-8">
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
    </div>
    <?php
get_footer();
?>
<style>

body { 
	background:#e1e1e1;
}
#wrapper {
	box-shadow:0 0 8px rgba(0,0,0,0.25);
}
#wrapper.well {
	background:#fff;
	border-radius:0;
}
</style>
</div>
<?php
