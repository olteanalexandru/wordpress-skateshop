<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "532698aa106f8a74336da8f25b6e28cacdd0234948"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter-child/custom-page1.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter-child/custom-page1_2020-05-14-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/* Template Name: CustomPageT1 */
get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div id="wrapper" class="container-fluid well p-0">
		    
		    <div class="row acesta w-100 p-0 m-o px-0 no-gutters">
		        
		        <div class="col-md-1  col-sm-6 ">
		            
		            
		            	<div class="row customstuff no-gutters">
			<div class="col-md-12 clasabtn2">
					 
				<a href="https://theskate420.com/home/contact">	<button type="button" class=" btn  btn-outline-danger " >
	              <p class="clasabtn22">Contact </p>
					</button> </a>
				</div>
				<div class="col-md-12 clasabtn2">
					 <a href="https://theskate420.com/termeni-si-conditii">
					<button type="button" class="  btn btn-outline-danger btn-md" >
						<p class="clasabtn22">Termeni si conditii</P>	
					</button></a>
				</div>
				<div class="col-md-12 clasabtn2">
<a href="https://theskate420.com/home/plata-si-livrarea/">
					<button type="button" class="  btn btn-outline-danger  btn-md" >
				<p class="clasabtn22">plata si livrarea</P>
					</button> </a>
				</div>
			</div>
		         
		         
		            
		</div>
		<div class="col-lg-11 col-md-12 col-12">
		

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
           
			?>
</div>
    </div>
   <?php get_footer(); ?>
</div>
<style>










    
 
  .entry-content{
   text-align:left;
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
</style>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php


