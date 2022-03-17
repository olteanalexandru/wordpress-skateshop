<?php
/* Template Name: Custom template nr2 */
get_header(); ?>
















	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
        <div id="wrapper" class="top50 container-fluid well">
 
	
		            
		            
		<?php
		        
		

		
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
      
            get_footer();

			?>
</div>

<style>
body { 
	background:rgb(252, 254, 252);
    
}
#wrapper {
	box-shadow:0 0 78px rgba(0,0,0,0.15);

  
}
figure.aligncenter.size-large.is-resized{
   margin-bottom:0px }

.wp-block-image{
     border-top: 1px solid grey;
    border-bottom: 1px solid grey;   
}
#wrapper.well {
	background:#fff;
	border-radius:0;
}
li.wc-block-grid__product{
    
    border: 1px solid grey; }
   .wc-block-grid__product-title{
       width: -webkit-fill-available;
        border-bottom:1px dotted grey;
        border-top:1px dotted grey;
    }
   .wc-block-grid__product-title{
    display: inline-block;   
   }
   .wc-block-grid__product-image {
       text-align:left;
       margin:0px}

/* quick view */
.owp-qv-content-wrap .owp-qv-image {
  text-align: center;
}
/* product page */
.woocommerce-product-gallery__image {
  text-align: center !important;
}
</style>
		</main><!-- #main -->
	</section><!-- #primary -->


