<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "90f8d01c3e477ee07a409a767e6aa10235428b023a"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter/footer_2019-08-10-15.php") )  ) ){
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
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<ul class="list-unstyled frfr">
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
			</ul>
		</div>
		<div class="col-md-4">
			<ul class="list-unstyled">
				<li class="list-item2" style="font-weight:700 ; color:orange;">
                <h2> Ajutor</h2> 
				</li>
				<li class="list-item">
				<a href="#" class="lista-footer">Plata și livrarea</a>	
                </li>
                <li class="list-item">
                    <a href="#" class="lista-footer">contact</a>	
                    </li>
				<li class="list-item">
				<a href="" class="lista-footer">Termeni și Condiții</a>	
				</li>
				<li class="list-item">
				<a href="" class="lista-footer">Despre Cookie</a>	
				</li>
			
			</ul>
		</div>
		<div class="col-md-4">
			<ul class="list-unstyled">
				<li class="list-item3" style="font-weight:700 ; color:orange;">
					<h2> Retele sociale</h2>
				</li>
				<li class="list-item">
				<a href="" class="lista-footer">facebook</a>	
				</li>
				<li class="list-item">
				<a href="" class="lista-footer">twitter</a>	
				</li>
				<li class="list-item">
				<a href="" class="lista-footer">youtube</a>	
				</li>
				
			</ul>
		</div>
	</div>
</div>
<style>
.lista-footer{
    text-decoration:none;

}
.frfr{margin-top:30px;}

</style>
<style>
.lista-footer{
    text-decoration:none;
    
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