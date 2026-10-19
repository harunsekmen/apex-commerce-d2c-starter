<?php
declare(strict_types=1);

namespace ApexCommerce;

defined('ABSPATH') || exit;

final class StarterKit {
    public const VERSION = '1.0.0';
    public const OPTION_KEY = 'apex_commerce_settings';

    private static ?self $instance = null;
    private SlideCart $cart;
    private StickyBar $sticky_bar;
    private QuickCheckout $checkout;
    private Admin $admin;

    public static function instance(): self {
        return self::$instance ??= new self();
    }

    private function __construct() {
        $this->cart       = new SlideCart();
        $this->sticky_bar = new StickyBar();
        $this->checkout   = new QuickCheckout();
        $this->admin      = new Admin();
    }

    public function init(): void {
        if (!class_exists('WooCommerce')) {
            add_action('admin_notices', [$this, 'render_woocommerce_missing_notice']);
            return;
        }

        $this->cart->register();
        $this->sticky_bar->register();
        $this->checkout->register();
        $this->admin->register();

        add_action('wp_enqueue_scripts', [$this, 'enqueue_core_assets']);
    }

    public function enqueue_core_assets(): void {
        $plugin_url = self::get_plugin_url();

        wp_enqueue_style(
            'apex-commerce-core',
            $plugin_url . 'assets/css/apex-commerce.css',
            [],
            self::VERSION
        );

        wp_enqueue_script(
            'apex-commerce-core',
            $plugin_url . 'assets/js/apex-commerce.js',
            ['jquery'],
            self::VERSION,
            true
        );

        wp_localize_script('apex-commerce-core', 'apexConfig', [
            'ajaxUrl'   => admin_url('admin-ajax.php'),
            'cartNonce' => wp_create_nonce('apex_cart_nonce'),
            'i18n'      => [
                'addedToCart' => __('Added to bag!', 'apex-commerce'),
                'checkoutNow' => __('Proceed to Fast Checkout', 'apex-commerce'),
            ]
        ]);
    }

    public function render_woocommerce_missing_notice(): void {
        ?>
        <div class="notice notice-error">
            <p><?php esc_html_e('ApexCommerce D2C Starter Kit requires WooCommerce to be installed and active.', 'apex-commerce'); ?></p>
        </div>
        <?php
    }

    public static function get_plugin_dir(): string {
        return plugin_dir_path(dirname(__FILE__));
    }

    public static function get_plugin_url(): string {
        return plugin_dir_url(dirname(__FILE__));
    }
}

