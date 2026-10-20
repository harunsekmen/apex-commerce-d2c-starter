<?php
declare(strict_types=1);

namespace ApexCommerce;

defined('ABSPATH') || exit;

final class StickyBar {
    public function register(): void {
        add_action('wp_footer', [$this, 'render_sticky_atc_bar']);
    }

    public function render_sticky_atc_bar(): void {
        if (!is_product()) {
            return;
        }

        global $product;
        if (!$product || !$product->is_purchasable() || !$product->is_in_stock()) {
            return;
        }

        ?>
        <div id="apex-sticky-atc-bar" class="apex-sticky-bar" aria-hidden="true">
            <div class="apex-sticky-container">
                <div class="apex-sticky-product-info">
                    <?php echo wp_kses_post($product->get_image('thumbnail', ['class' => 'apex-sticky-thumb'])); ?>
                    <div class="apex-sticky-meta">
                        <span class="apex-sticky-title"><?php echo esc_html($product->get_name()); ?></span>
                        <span class="apex-sticky-price"><?php echo wp_kses_post($product->get_price_html()); ?></span>
                    </div>
                </div>
                <div class="apex-sticky-action">
                    <button type="button" class="apex-sticky-submit-btn" data-product-id="<?php echo esc_attr((string) $product->get_id()); ?>">
                        <?php esc_html_e('Add to Bag — Instant Delivery', 'apex-commerce'); ?>
                    </button>
                </div>
            </div>
        </div>
        <?php
    }
}

