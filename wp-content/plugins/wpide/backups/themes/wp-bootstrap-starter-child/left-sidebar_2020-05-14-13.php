<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "532698aa106f8a74336da8f25b6e28cacdd0234948"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter-child/left-sidebar.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter-child/left-sidebar_2020-05-14-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>
<?php
/**
 * Template Name: Left - Sidebar
 */

get_header();
?>

















<div id="wrapper" class="container-fluid well p-0">
    <div class="row">
<div class="col-md-1">
    <?php
get_sidebar();
?>
</div>
<div class="col-md-11">
<section id="primary" class="content-area ">
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
 </section><!-- #primary -->
</main><!-- #main -->
</div>
        </div>
<?php
get_footer();
?>


   
    

<style>
.content-area {
    margin-top:30px
}
.row{
    padding:30px;
}
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
li.wc-block-grid__product{
    margin:1px;
    border: 1px double;
}
.wc-block-grid__product-title{
    padding-top:200px;
}
</style>
</div>
<?php
