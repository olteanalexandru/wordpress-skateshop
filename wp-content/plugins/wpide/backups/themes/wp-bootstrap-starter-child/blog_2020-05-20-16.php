<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "f0fe762fb2b9002ad3cbfedc16d66b0ded79e484fa"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter-child/blog.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter-child/blog_2020-05-20-16.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* Template Name: blogul */
get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
   
		<div id="wrapper" class="top50 container-fluid well">
	
		            
		<?php
		        

		
			while ( have_posts() ) : 

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
       
            

			?>
</div>

<style>
body { 
	background-color:rgb(252, 254, 252);
    
}
#wrapper {
	box-shadow:0 0 1px rgba(0,0,0,0.1);
  text-align:left
}
#wrapper.well {
	background:red;
	border-radius:0;
}

</style>
		</main><!-- #main -->
	</section><!-- #primary -->


