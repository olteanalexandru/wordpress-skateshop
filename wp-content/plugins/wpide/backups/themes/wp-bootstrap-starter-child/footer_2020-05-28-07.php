<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "676f952bd1ba9f23d4969ee93719ba3205932011da"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter-child/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter-child/footer_2020-05-28-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    
		
	
   		 <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container-fluid pt-3 pb-3">
            <div class="site-info">
               
               
               
              
                
<div class="container  rezolutiemicacentru">
	<div class="row">
		<div class="col-md-4">
			<ul class="list-unstyled">
		
			<li class="list-item2" style="font-weight:700 ; color:red;">
                <h3> Ne gasiti la:</h3> 
				</li>
				<li class="list-item">
					tel. 0269 123456 
				</li>
				<li class="list-item">
					e-mail: shop@theskate420.com
				</li>
				
				<li class="list-item">
					Luni - Vineri: 9.00 - 16.00
				</li>
				<li class="list-item">
					Sâmbătă - Duminică: inchis
				</li>
				<li class="list-item">
				<span class="sep"> | </span>  &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
				</li>
			</ul>
		</div>
		<div class="col-md-4 ">
			<ul class="list-unstyled">
				<li class="list-item2" style="font-weight:700 ; color:red; ">
                <h3> Ajutor</h3> 
				</li>
				<li class="list-item">
				<a href="https://theskate420.com/plata-si-livrarea/" class="lista-footer">Plata și livrarea</a>	
                </li>
                <li class="list-item">
                    <a href="https://theskate420.com/contact/" class="lista-footer">contact</a>	
                    </li>
				<li class="list-item">
				<a href="https://theskate420.com/termeni-si-conditii/" class="lista-footer">Termeni și Condiții</a>	
				</li>
				<li class="list-item">
				<a href="https://theskate420.com/despre-cookies/" class="lista-footer">Despre Cookie</a>	
				</li>
			
			</ul>
		</div>
		<div class="col-md-4">


  
			<ul class="list-unstyled">
				<li class="list-item3" style="font-weight:700 ; color:orange;">
					</br> </br> 
				<li class="list-item rezinline rezinline">
				<a href="https://www.facebook.com" class="lista-footer"><i class="iconite fab fa-facebook-square"></i></a>	
				</li>
				<li class="list-item rezinline">
				<a href="https://twitter.com" class="lista-footer"><i class="iconite fab fa-twitter-square"></i></a>	
				</li>
				<li class="list-item rezinline">
				<a href="https://www.youtube.com/watch?v=i6OwxEd0Th0" class="iconite lista-footer"><i class="fab fa-youtube"></i></a>	
				</li>
				
			</ul>
		</div>
	</div>
</div>
</div>
	</div>
</div>

<style>
.iconite{
    font-size:25px;
    margin-top:10px;
    }
.lista-footer{
    text-decoration:none;

}


.fa-twitter-square{
     background:#1C9DEB;
}

.fa-youtube{
     color:#F50000;
}
 .fa-facebook-square
{
 background:#4064AD;   
}
</style>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>