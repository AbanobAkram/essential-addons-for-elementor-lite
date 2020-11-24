<?php

use \Essential_Addons_Elementor\Classes\Helper;

/**
 * Template Name: Default
 */

use Essential_Addons_Elementor\Elements\Product_Grid;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

$product = wc_get_product( get_the_ID() );
if ( ! $product ) {
	error_log( '$product not found in ' . __FILE__ );
	return;
}
$should_print_compare_btn = isset( $settings['show_compare'] ) && 'yes' === $settings['show_compare'];

if ( $settings['eael_product_grid_style_preset'] == 'eael-product-simple' || $settings['eael_product_grid_style_preset'] == 'eael-product-reveal' ) { ?>
    <li class="product">
        <a href="<?php echo esc_url( $product->get_permalink() ); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
			<?php echo wp_kses_post( $product->get_image( 'woocommerce_thumbnail' ) ); ?>
            <h2 class="woocommerce-loop-product__title"> <?php echo esc_html( $product->get_title() ); ?> </h2>
			<?php
			if ( $settings['eael_product_grid_rating'] == 'yes' ) {
				echo wp_kses_post( wc_get_rating_html( $product->get_average_rating(), $product->get_rating_count() ) );
			}
			if ( ! $product->managing_stock() && ! $product->is_in_stock() ) {
				printf( '<span class="outofstock-badge">%s</span>', __( 'Stock <br/> Out', 'essential-addons-for-elementor-lite' ) );
			} elseif ( $product->is_on_sale() ) {
				printf( '<span class="onsale">%s</span>', __( 'Sale!', 'essential-addons-for-elementor-lite' ) );
			}
			?>
            <span class="price"><?php echo wp_kses_post( $product->get_price_html() ); ?></span>
        </a>
		<?php
		woocommerce_template_loop_add_to_cart();
		if ( $should_print_compare_btn ) {
			Product_Grid::print_compare_button( $product->get_id() );
		}
		?>
    </li>
	<?php
} else if ( $settings['eael_product_grid_style_preset'] == 'eael-product-overlay' ) {
	?>
    <li class="product">
        <div class="overlay">
			<?php echo $product->get_image( 'woocommerce_thumbnail' ); ?>
            <div class="button-wrap clearfix">
                <a href="<?php echo esc_url( $product->get_permalink() ); ?>" class="product-link"><span class="fas fa-link"></span></a>';
				<?php
				woocommerce_template_loop_add_to_cart();
				if ( $should_print_compare_btn ) {
					Product_Grid::print_compare_button( $product->get_id(), 'icon' );
				}
				?>
            </div>
        </div>
        <h2 class="woocommerce-loop-product__title"><?php echo esc_html( $product->get_title() ); ?></h2>
		<?php
		if ( $settings['eael_product_grid_rating'] === 'yes' ) {
			echo wc_get_rating_html( $product->get_average_rating(), $product->get_rating_count() );
		}
		if ( $product->is_on_sale() ) {
			printf( '<span class="onsale">%s</span>', __( 'Sale!', 'essential-addons-for-elementor-lite' ) );
		}
		?>
        <span class="price"> <?php echo $product->get_price_html(); ?> </span>
    </li>
	<?php
} else if (($settings['eael_product_grid_style_preset'] == 'eael-product-preset-5') || ($settings['eael_product_grid_style_preset'] == 'eael-product-preset-6') || ($settings['eael_product_grid_style_preset'] == 'eael-product-preset-7')) {
	if ( true === wc_get_loop_product_visibility( $product->get_id() ) || $product->is_visible() ) {
		?>
		<li <?php post_class( 'product' ); ?>>
			<div class="eael-product-wrap">
				<div class="product-image-wrap">
					<div class="image-wrap">
						<?php
						echo ( ! $product->managing_stock() && ! $product->is_in_stock() ? '<span class="eael-onsale outofstock '.$settings['eael_product_sale_badge_preset'].' '.$settings['eael_product_sale_badge_alignment'].'">'.__('Stock ', 'essential-addons-for-elementor-lite'). '<br />' . __('Out', 'essential-addons-for-elementor-lite').'</span>' : ($product->is_on_sale() ? '<span class="eael-onsale '.$settings['eael_product_sale_badge_preset'].' '.$settings['eael_product_sale_badge_alignment'].'">' . __('Sale!', 'essential-addons-for-elementor-lite') . '</span>' : '') );
						echo $product->get_image($settings['eael_product_grid_image_size_size']);
						?>
					</div>
					<div class="image-hover-wrap">
						<?php if($settings['eael_product_grid_style_preset'] == 'eael-product-preset-5'){?>
							<ul class="icons-wrap block-style">
								<?php if( $settings['eael_product_grid_quick_view'] == true ){?>
									<li class="eael-product-quick-view">
										<a href="#eaproduct<?php echo $settings['eael_widget_id'].$product->get_id(); ?>"
										   class="open-popup-link">
											<i class="fas fa-eye"></i>
										</a>
									</li>
								<?php } ?>
								<li class="add-to-cart"><?php woocommerce_template_loop_add_to_cart();
									?></li>
								<li class="view-details"><?php echo '<a href="' . $product->get_permalink() . '"><i class="fas fa-link"></i></a>'; ?></li>
							</ul>
						<?php } elseif ($settings['eael_product_grid_style_preset'] == 'eael-product-preset-7') { ?>
							<ul class="icons-wrap block-box-style">
								<li class="add-to-cart"><?php
									woocommerce_template_loop_add_to_cart(); ?></li>
								<?php if( $settings['eael_product_grid_quick_view'] == true ){?>
									<li class="eael-product-quick-view">
										<a href="#eaproduct<?php echo $settings['eael_widget_id'].$product->get_id(); ?>"
										   class="open-popup-link">
											<i class="fas fa-eye"></i>
										</a>
									</li>
								<?php } ?>
								<li class="view-details"><?php echo '<a href="' . $product->get_permalink
										() . '"><i class="fas fa-link"></i></a>'; ?></li>
							</ul>
						<?php } else { ?>
							<ul class="icons-wrap box-style">
								<li class="add-to-cart"><?php
									woocommerce_template_loop_add_to_cart(); ?></li>
								<?php if( $settings['eael_product_grid_quick_view'] == true ){?>
									<li class="eael-product-quick-view">
										<a href="#eaproduct<?php echo $settings['eael_widget_id'].$product->get_id(); ?>"
										   class="open-popup-link">
											<i class="fas fa-eye"></i>
										</a>
									</li>
								<?php } ?>
								<li class="view-details" title="Details"><?php echo '<a href="' . $product->get_permalink() . '"><i class="fas fa-link"></i></a>'; ?></li>
							</ul>
						<?php }
						if( $settings['eael_product_grid_quick_view'] == true ){
							Helper::eael_product_quick_view( $product, $settings, $settings['eael_widget_id'] );
						}
						?>
					</div>
				</div>
				<div class="product-details-wrap">
					<?php
					if(($settings['eael_product_grid_style_preset'] == 'eael-product-preset-7') && ( $settings['eael_product_grid_price'] == true)){
						echo '<div class="eael-product-price">'.$product->get_price_html().'</div>';
					}
					echo ($settings['eael_product_grid_rating'] != 'yes' ? '' : wc_get_rating_html
					($product->get_average_rating(), $product->get_rating_count())); ?>
					<div class="eael-product-title"><h2><?php echo $product->get_title(); ?></h2></div>
					<?php if(($settings['eael_product_grid_style_preset'] != 'eael-product-preset-7') && ( $settings['eael_product_grid_price'] == true)){
						echo '<div class="eael-product-price">'.$product->get_price_html().'</div>';
					}?>
				</div>
			</div>
		</li>
		<?php
	}
} else if ($settings['eael_product_grid_style_preset'] == 'eael-product-preset-8') {
	if ( true === wc_get_loop_product_visibility( $product->get_id() ) || $product->is_visible() ) {
		?>
		<li <?php post_class( 'product' ); ?>>
			<div class="eael-product-wrap">
				<div class="product-image-wrap">
					<div class="image-wrap">
						<?php
						echo '<a href="' . $product->get_permalink() . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';
						echo ( ! $product->managing_stock() && ! $product->is_in_stock() ? '<span class="eael-onsale outofstock '.$settings['eael_product_sale_badge_preset'].' '.$settings['eael_product_sale_badge_alignment'].'">'.__('Stock ', 'essential-addons-for-elementor-lite'). '<br />' . __('Out', 'essential-addons-for-elementor-lite').'</span>' : ($product->is_on_sale() ? '<span class="eael-onsale '.$settings['eael_product_sale_badge_preset'].' '.$settings['eael_product_sale_badge_alignment'].'">' . __('Sale!', 'essential-addons-for-elementor-lite') . '</span>' : '') );
						echo $product->get_image($settings['eael_product_grid_image_size_size']);
						echo '</a>';
						?>
					</div>
					<div class="image-hover-wrap">
						<ul class="icons-wrap over-box-style">
							<li class="add-to-cart"><?php
								woocommerce_template_loop_add_to_cart(); ?></li>
							<?php if( $settings['eael_product_grid_quick_view'] == true ){?>
								<li class="eael-product-quick-view">
									<a href="#eaproduct<?php echo $settings['eael_widget_id'].$product->get_id(); ?>"
									   class="open-popup-link">
										<i class="fas fa-eye"></i>
									</a>
								</li>
							<?php } ?>
						</ul>
						<?php
						if( $settings['eael_product_grid_quick_view'] == true ){
							Helper::eael_product_quick_view( $product, $settings, $settings['eael_widget_id'] );
						}
						?>
					</div>
				</div>
				<div class="product-details-wrap">
					<?php
					if ( $settings['eael_product_grid_price'] == true) {
						echo '<div class="eael-product-price">'.$product->get_price_html().'</div>';
					}
					?>
					<div class="eael-product-title">
						<?php
						echo '<a href="' . $product->get_permalink() . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <h2>'. $product->get_title() .'</h2></a>';
						?>
					</div>
				</div>
			</div>
		</li>
		<?php
	}
} else if(($settings['eael_product_list_style_preset'] == 'eael-product-list-preset-1') ||
          ($settings['eael_product_list_style_preset'] == 'eael-product-list-preset-2') ||
          ($settings['eael_product_list_style_preset'] == 'eael-product-list-preset-3') ||
          ($settings['eael_product_list_style_preset'] == 'eael-product-list-preset-4')) {
	if ( true === wc_get_loop_product_visibility( $product->get_id() ) || $product->is_visible() ) {
		?>
		<li class="product <?php echo $settings['eael_product_list_style_preset'];?>">
			<div class="eael-product-wrap">
				<div class="product-image-wrap">
					<div class="image-wrap">
						<?php
						echo '<a href="' . $product->get_permalink() . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';
						echo ( ! $product->managing_stock() && ! $product->is_in_stock() ? '<span class="eael-onsale outofstock '.$settings['eael_product_sale_badge_preset'].' '.$settings['eael_product_sale_badge_alignment'].'">'.__('Stock ', 'essential-addons-for-elementor-lite'). '<br />' . __('Out', 'essential-addons-for-elementor-lite').'</span>' : ($product->is_on_sale() ? '<span class="eael-onsale '.$settings['eael_product_sale_badge_preset'].' '.$settings['eael_product_sale_badge_alignment'].'">' . __('Sale!', 'essential-addons-for-elementor-lite') . '</span>' : '') );
						echo $product->get_image($settings['eael_product_grid_image_size_size']);
						echo '</a>';
						?>
					</div>
				</div>
				<div class="product-details-wrap">
					<?php
					if ($settings['eael_product_list_style_preset'] == 'eael-product-list-preset-2') {
						echo '<div class="eael-product-title">
                                                <a href="' . $product->get_permalink() . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <h2>'. $product->get_title() .'</h2>
                                                </a>
                                              </div>';
						if ( ($settings['eael_product_grid_excerpt'] == true) && has_excerpt() ) {
							echo '<div class="eael-product-excerpt">';
							echo '<p>' . wp_trim_words(strip_shortcodes(get_the_excerpt() ? get_the_excerpt() :
									get_the_content()), $settings['eael_product_grid_excerpt_length'], $settings['eael_product_grid_excerpt_expanison_indicator']) . '</p>';
							echo '</div>';
						}
						if ( $settings['eael_product_grid_price'] == true) {
							echo '<div class="eael-product-price">'.$product->get_price_html().'</div>';
						}
						echo ($settings['eael_product_grid_rating'] != 'yes' ? '' : wc_get_rating_html
						($product->get_average_rating(), $product->get_rating_count()));
					} elseif ($settings['eael_product_list_style_preset'] == 'eael-product-list-preset-3') {
						echo '<div class="price-wrap">'.
						     ( $settings['eael_product_grid_price'] != 'yes' ? '' : '<div class="eael-product-price">'.$product->get_price_html().'</div>').

						     ($settings['eael_product_grid_rating'] != 'yes' ? '' : wc_get_rating_html
						     ($product->get_average_rating(), $product->get_rating_count())).
						     '</div>
                                              <div class="title-wrap">
                                                  <div class="eael-product-title">
                                                    <a href="' . $product->get_permalink() . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        <h2>'. $product->get_title() .'</h2>
                                                    </a>
                                                  </div>';
						if ( ($settings['eael_product_grid_excerpt'] == true) && has_excerpt() ) {
							echo '<div class="eael-product-excerpt">';
							echo '<p>' . wp_trim_words(strip_shortcodes(get_the_excerpt() ? get_the_excerpt() :
									get_the_content()), $settings['eael_product_grid_excerpt_length'], $settings['eael_product_grid_excerpt_expanison_indicator']) . '</p>';
							echo '</div>';
						};
						echo '</div>';
					} elseif ($settings['eael_product_list_style_preset'] == 'eael-product-list-preset-4') {
						echo ($settings['eael_product_grid_rating'] != 'yes' ? '' : wc_get_rating_html
							($product->get_average_rating(), $product->get_rating_count())).
						     '<div class="eael-product-title">
                                                <a href="' . $product->get_permalink() . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <h2>'. $product->get_title() .'</h2>
                                                </a>
                                              </div>';
						if ( ($settings['eael_product_grid_excerpt'] == true) && has_excerpt() ) {
							echo '<div class="eael-product-excerpt">';
							echo '<p>' . wp_trim_words(strip_shortcodes(get_the_excerpt() ? get_the_excerpt() :
									get_the_content()), $settings['eael_product_grid_excerpt_length'], $settings['eael_product_grid_excerpt_expanison_indicator']) . '</p>';
							echo '</div>';
						}
						if ( $settings['eael_product_grid_price'] == true) {
							echo '<div class="eael-product-price">'.$product->get_price_html().'</div>';
						}

					} else {
						echo '<div class="eael-product-title">
                                                <a href="' . $product->get_permalink() . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <h2>'. $product->get_title() .'</h2>
                                                </a>
                                              </div>
                                              <div class="eael-product-price">'.$product->get_price_html().'</div>'.
						     ($settings['eael_product_grid_rating'] != 'yes' ? '' : wc_get_rating_html
						     ($product->get_average_rating(), $product->get_rating_count()));
						if ( ($settings['eael_product_grid_excerpt'] == true) && has_excerpt() ) {
							echo '<div class="eael-product-excerpt">';
							echo '<p>' . wp_trim_words(strip_shortcodes(get_the_excerpt() ? get_the_excerpt() :
									get_the_content()), $settings['eael_product_grid_excerpt_length'], $settings['eael_product_grid_excerpt_expanison_indicator']) . '</p>';
							echo '</div>';
						};
					}
					?>

					<ul class="icons-wrap <?php echo $settings['eael_product_action_buttons_preset'] ;?>">
						<li class="add-to-cart"><?php
							woocommerce_template_loop_add_to_cart(); ?></li>
						<?php if( $settings['eael_product_grid_quick_view'] == true ){?>
							<li class="eael-product-quick-view">
								<a href="#eaproduct<?php echo $settings['eael_widget_id'].$product->get_id(); ?>"
								   class="open-popup-link">
									<i class="fas fa-eye"></i>
								</a>
							</li>
						<?php } ?>
					</ul>
					<?php
					if( $settings['eael_product_grid_quick_view'] == true ){
						Helper::eael_product_quick_view( $product, $settings, $settings['eael_widget_id'] );
					}
					?>
				</div>
			</div>
		</li>
		<?php
	}
}else {
    if ( $should_print_compare_btn ) {
        add_action( 'woocommerce_after_shop_loop_item', [
            '\Essential_Addons_Elementor\Elements\Product_Grid',
            'print_compare_button',
        ] );
    }
    wc_get_template_part( 'content', 'product' );

    if ( $should_print_compare_btn ) {
        remove_action( 'woocommerce_after_shop_loop_item', [
            '\Essential_Addons_Elementor\Elements\Product_Grid',
            'print_compare_button',
        ] );
    }
}
