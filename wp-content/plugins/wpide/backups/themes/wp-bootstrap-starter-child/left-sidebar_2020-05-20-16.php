<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "f0fe762fb2b9002ad3cbfedc16d66b0ded79e484fa"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter-child/left-sidebar.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter-child/left-sidebar_2020-05-20-16.php") )  ) ){
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
<div class="row row-reverse">
<div class="col-sm-2 ">
    <?php
get_sidebar();
?>
</div>
<div class="col-sm-10 col-12">
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









@media only screen and (max-width: 736px) {
  .woocommerce ul.products li.product {
    width: 49.0% !important;
    margin: 0.5% 4% 0.5% 0;
  }
  body.woocommerce ul.products.columns-3 li.product:nth-of-type(3n+1) {
    clear: none !important;
  }
  body.woocommerce ul.products.columns-3 li.product:nth-of_type(2n+1) {
    clear: both !important;
  }
}

















.wc-block-grid__product-title{
        display: inline-flex;
    margin: 0 auto;
    white-space:nowrap;
        min-width: -webkit-fill-available;
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
.wc-block-grid__product-image{
    display:contents;
}

  .wc-block-grid__product-price.price{
           font-weight: 600; 
           color: darkred;
          }
    
 a.wc-block-grid__product-link{
            background-color: white;
            text-align:left;
}

       


        @media screen and (max-width: 600px) {
            li.wc-block-grid__product{
max-width:48%!important;
   
  }
}








 
    .wc-block-grid__product-price.price{
        border-top:1px solid;
        background-color:rgb(242, 242, 235);
    }

    li.wc-block-grid__product{
        padding:0;
        margin:1px!important;
    }
    
</style>
</div>
<?php
