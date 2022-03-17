<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "90f8d01c3e477ee07a409a767e6aa10235428b023a"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/themes/wp-bootstrap-starter/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/themes/wp-bootstrap-starter/footer_2019-08-10-14.php") )  ) ){
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
                <div id="footer_content" class="clearer"><div class="footer_cbox"><strong>Serviciu clienți</strong><ul><li>tel. 0356-005873<br>
							e-mail: shop@u-man.ro<br>
							Luni - Vineri: 9.00 - 16.00<br>
							Sâmbătă - Duminică: ne odihnim
							</li></ul></div><div class="footer_cbox"><strong>Ajutor</strong><ul><li><a href="http://www.u-man.ro/contact.html">Contact</a></li><li><a href="http://www.u-man.ro/faqs.html">FAQs</a></li><li><a href="http://www.u-man.ro/"></a></li><li><a href="http://www.u-man.ro/plata-si-livrarea.html">Plata și livrarea</a></li><li><a href="http://www.u-man.ro/returnare.html">Returnare</a></li><li><a href="http://www.u-man.ro/garantie.html">Garanție</a></li><li><a href="http://www.u-man.ro/termeni-si-conditii.html">Termeni și Condiții</a></li><li><a href="http://www.u-man.ro/politica-de-confidentialitate.html">Politica de Confidențialitate</a></li><li><a href="http://www.u-man.ro/despre-cookie.html">Despre Cookie</a></li><li><a href="http://www.u-man.ro/site-map.html">Site Map</a></li></ul></div><div class="footer_cbox"><strong>U-man shops</strong><ul><li><a href="http://www.u-man.ro/despre-u-man.html">Magazine U Man</a></li><li><a href="http://www.u-man.ro/blog/">Blog U Man</a></li></ul></div><div class="footer_cbox"><strong>Socializăm</strong><ul id="social"><li><a href="https://www.facebook.com/UmanShop" target="_blank" class="ico_facebook">Facebook</a></li><li><a href="https://instagram.com/umanshop/" target="_blank" class="ico_instagram">Instagram</a></li><li><a href="https://www.youtube.com/user/UmanShop" target="_blank" class="ico_youtube">Youtube</a></li><li><a href="https://twitter.com/umancore" target="_blank" class="ico_twitter">Twitter</a></li><li><a href="https://foursquare.com/umancore" target="_blank" class="ico_foursquare">Foursquare</a></li></ul></div></div>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>