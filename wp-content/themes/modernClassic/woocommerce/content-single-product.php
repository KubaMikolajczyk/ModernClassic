<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column">
                <div class="product-image-slider-wrapper">

                        <?php foreach (get_field('zdjecia_produktowe', $post->ID) as $item) :?>
                            <div>
                                <div class="product-image d-flex justify-content-center">
                                    <img src="<?php echo $item['zdjecie_produktu']?>" alt="<?php the_title()?>">
                                </div>
                            </div>
                        <?php endforeach; ?>
                </div>
                <div class="product-desc-container">
                    <h3><?php echo get_field('naglowek_opisu_produktu', $post->ID)?></h3>
                    <p><?php echo get_field('opis_produktu', $post->ID)?></p>
                </div>
                <div class="product-advantages">
                    <h3><?php echo get_field('naglowek_zalet_produktu')?></h3>
                    <p><?php echo get_field('zalety_produktu', $post->ID)?></p>
                </div>
            </div>


            <div class="col-12 col-md-6 d-flex flex-column">
                    <div class="row summary-box">
                        <div class="col-12 d-flex">
                            <div class="summary entry-summary">
                                <?php
                                /**
                                 * Hook: woocommerce_single_product_summary.
                                 *
                                 * @hooked woocommerce_template_single_title - 5
                                 * @hooked woocommerce_template_single_rating - 10
                                 * @hooked woocommerce_template_single_price - 10
                                 * @hooked woocommerce_template_single_excerpt - 20
                                 * @hooked woocommerce_template_single_add_to_cart - 30
                                 * @hooked woocommerce_template_single_meta - 40
                                 * @hooked woocommerce_template_single_sharing - 50
                                 * @hooked WC_Structured_Data::generate_product_data() - 60
                                 */
                                do_action( 'woocommerce_single_product_summary' );
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="row icon-box">
                        <div class="row">
                            <div class="col4">

                            </div>
                            <div class="col4">

                            </div>
                            <div class="col4">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="icon-desc">

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php pr(get_field('do_pobrania', $post->ID))?>

                    <div class="row product-specification">
                        <div class="title-box">
                            <h3><?php echo get_field('naglowek_specyfikacji')?></h3>
                        </div>
                            <?php foreach(array_column(get_field('specyfikacja_techniczna', $post->ID), 'specyfikacja') as $item) :?>
                                <div class="specification-box d-flex">
                                    <div class="spec-field">
                                        <h3><?php echo $item['miara']?></h3>
                                    </div>
                                    <div class="spec-field">
                                        <p><?php echo $item['jednostka_miary']?></p>
                                    </div>
                                    <div class="spec-field">
                                        <p><?php echo $item['wymiary']?></p>
                                    </div>
                                </div>
                            <?php endforeach;?>
                    </div>

                    <div class="row product-instruction">
                        <div class="title-box">
                            <h3><?php echo get_field('naglowek_instrukcji', $post->ID)?></h3>
                            <form action="http://google.com">
                                <input type="submit" value="<?php echo get_field('przycisk_instrukcji', $post->ID)?>" />
                            </form>
                        </div>
                    </div>

            </div>
        </div>
    </div>




</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
