


	
<?php /* Template Name: Blog Template */ 
get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
        <div id="wrapper" class="top50 container-fluid well ">
 
	
		            
	
		        
        <?php while ( have_posts() ) : the_post();  ?>             

                <h2 class="blogtitles"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  
                <?php the_content(); 
if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // end of the loop.
      
            
             get_footer(); ?>


</div>

<style>
    
body { 
	background-color:rgb(252, 254, 252);
    
}
p{
    margin-top:50px;
}
#wrapper {
    box-shadow:0 0 8px rgba(0,0,0,0.05);
 margin-top:100px;
  
}
div#content{
    margin-left: 0px!important;
}
#wrapper.well {
	background:#fff;
	border-radius:0;
}

</style>
		</main><!-- #main -->
	</section><!-- #primary -->