
<?php
get_header();?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div id="wrapper" class="top50 container-fluid well">
	<?php
 woocommerce_content();
?>
          
 
	
		            
		            
		<?php
		        
		
 
		
			while ( have_posts() ) : the_post();

				  

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
     
            get_footer();
            
			?>
			
			  </div>
			
			  </div>
   



<style>

#wrapper {
	box-shadow:0 0 58px rgba(0,0,0,0.25);
  
}
#wrapper.well {

	border-radius:0;
}


div#wrapper {
    padding-top: 15%!important;
}

</style>
		</main><!-- #main -->
	</section><!-- #primary -->

