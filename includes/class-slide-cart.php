<?php
declare(strict_types=1);

namespace ApexCommerce;

defined('ABSPATH') || exit;

final class SlideCart {
    public function register(): void {
        add_action('wp_footer', [$this, 'render_cart_drawer_markup']);
        add_filter('woocommerce_add_to_cart_fragments', [$this, 'filter_cart_fragments']);
    }

    public function render_cart_drawer_markup(): void {
        if (is_cart() || is_checkout()) {
            return;
        }

        ?>
        <div id="apex-cart-drawer-overlay" class="apex-drawer-overlay" aria-hidden="true"></div>
        <aside id="apex-cart-drawer" class="apex-cart-drawer" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e('Your Cart', 'apex-commerce'); ?>">
            <div class="apex-drawer-header">
                <h3><?php esc_html_e('Your Shopping Bag', 'apex-commerce'); ?></h3>
                <button type="button" class="apex-drawer-close" aria-label="<?php esc_attr_e('Close bag', 'apex-commerce'); ?>">&times;</button>
            </div>
            
            <div class="apex-drawer-shipping-progress">
                <div class="apex-free-shipping-text">
                    <span>🎉 <strong><?php esc_html_e('Free Express Shipping unlocked!', 'apex-commerce'); ?></strong></span>
                </div>
                <div class="apex-progress-bar"><div class="apex-progress-fill" style="width: 100%;"></div></div>
            </div>

            <div class="apex-drawer-body">
                <div class="widget_shopping_cart_content">
                    <?php woocommerce_mini_cart(); ?>
                </div>
            </div>

            <div class="apex-drawer-footer">
                <div class="apex-drawer-guarantees">
                    <span>🔒 256-Bit SSL</span>
                    <span>⚡ 30-Day Money Back</span>
                    <span>📦 Free Returns</span>
                </div>
                <a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="button checkout wc-forward apex-checkout-button">
                    <?php esc_html_e('Instant Checkout', 'apex-commerce'); ?>
                </a>
            </div>
        </aside>
        <?php
    }

    public function filter_cart_fragments(array $fragments): array {
        ob_start();
        woocommerce_mini_cart();
        $mini_cart_html = ob_get_clean();

        $fragments['div.widget_shopping_cart_content'] = '<div class="widget_shopping_cart_content">' . $mini_cart_html . '</div>';
        $fragments['span.apex-cart-count-badge'] = '<span class="apex-cart-count-badge">' . (WC()->cart ? WC()->cart->get_cart_contents_count() : 0) . '</span>';

        return $fragments;
    }
}

