<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "532698aa106f8a74336da8f25b6e28cacc9892acb7"){
                                        if ( file_put_contents ( "/home/theskate/public_html/wp-content/plugins/woocommerce/includes/widgets/class-wc-widget-top-rated-products.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/theskate/public_html/wp-content/plugins/wpide/backups/plugins/woocommerce/includes/widgets/class-wc-widget-top-rated-products_2019-11-19-17.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Top Rated Products Widget.
 * Gets and displays top rated products in an unordered list.
 *
 * @package WooCommerce/Widgets
 * @version 3.3.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Widget top rated products class.
 */
class WC_Widget_Top_Rated_Products extends WC_Widget {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->widget_cssclass    = 'woocommerce widget_top_rated_products';
		$this->widget_description = __( "A list of your store's top-rated products.", 'woocommerce' );
		$this->widget_id          = 'woocommerce_top_rated_products';
		$this->widget_name        = __( 'Products by Rating', 'woocommerce' );
		$this->settings           = array(
			'title'  => array(
				'type'  => 'text',
				'std'   => __( 'Top rated products', 'woocommerce' ),
				'label' => __( 'Title', 'woocommerce' ),
			),
			'number' => array(
				'type'  => 'number',
				'step'  => 1,
				'min'   => 1,
				'max'   => '',
				'std'   => 5,
				'label' => __( 'Number of products to show', 'woocommerce' ),
			),
		);

		parent::__construct();
	}

	/**
	 * Output widget.
	 *
	 * @see WP_Widget
	 * @param array $args     Arguments.
	 * @param array $instance Widget instance.
	 */
	public function widget( $args, $instance ) {

		if ( $this->get_cached_widget( $args ) ) {
			return;
		}

		ob_start();

		$number = ! empty( $instance['number'] ) ? absint( $instance['number'] ) : $this->settings['number']['std'];

		$query_args = array(
			'posts_per_page' => $number,
			'no_found_rows'  => 1,
			'post_status'    => 'publish',
			'post_type'      => 'product',
			'meta_key'       => '_wc_average_rating',
			'orderby'        => 'meta_value_num',
			'order'          => 'DESC',
			'meta_query'     => WC()->query->get_meta_query(),
			'tax_query'      => WC()->query->get_tax_query(),
		); // WPCS: slow query ok.

		$r = new WP_Query( $query_args );

		if ( $r->have_posts() ) {

			$this->widget_start( $args, $instance );

			echo wp_kses_post( apply_filters( 'woocommerce_before_widget_product_list', '<ul class="product_list_widget">' ) );

			$template_args = array(
				'widget_id'   => $args['widget_id'],
				'show_rating' => true,
			);

			while ( $r->have_posts() ) {
				$r->the_post();
				wc_get_template( 'content-widget-product.php', $template_args );
			}

			echo wp_kses_post( apply_filters( 'woocommerce_after_widget_product_list', '</ul>' ) );

			$this->widget_end( $args );
		}

		wp_reset_postdata();

		$content = ob_get_clean();

		echo $content; // WPCS: XSS ok.

		$this->cache_widget( $args, $content );
	}
}
