<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function load_bootstrap() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js");
}
add_action("wp_enqueue_scripts", "load_bootstrap");

function print_producer() {
    ?>
        <span class="producer_wrapper">Producer: 
            <span class="producer">
                <?php foreach(get_field("producer") as $producer): ?>
                    <?php echo $producer->post_title ?>
                <?php endforeach ?>         
            </span>
        </span>
    <?php
}
add_action("woocommerce_product_meta_end", "print_producer");

function free_shipping_notice() {
    ?>
        <div id="free-shipping-notice">
            <p>Free shipping on orders over kr. 1300,-!</p>
        </div>
    <?php
}
add_action("woocommerce_before_main_content", "free_shipping_notice");