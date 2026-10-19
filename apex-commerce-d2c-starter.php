<?php
/**
 * Plugin / Starter Kit Name: ApexCommerce D2C Starter Kit
 * Plugin URI:        https://github.com/harunsekmen/apex-commerce-d2c-starter
 * Description:       Ultra-fast, conversion-focused modern D2C e-commerce starter kit for WooCommerce. Native slide-out cart drawer, sticky checkout bar, and 95+ Core Web Vitals out of the box.
 * Version:           1.0.0
 * Author:            Harun Sekmen
 * Author URI:        https://github.com/harunsekmen
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       apex-commerce
 * Domain Path:       /languages
 * Requires at least: 6.2
 * Requires PHP:      8.1
 * WC requires at least: 8.0
 * WC tested up to:   9.4
 */

declare(strict_types=1);

namespace ApexCommerce;

defined('ABSPATH') || exit;

// Autoloader for internal classes
spl_autoload_register(static function (string $class): void {
    $prefix = 'ApexCommerce\\';
    $base_dir = __DIR__ . '/includes/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . 'class-' . strtolower(str_replace(['\\', '_'], ['/', '-'], $relative_class)) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

// Declare WooCommerce High-Performance Order Storage (HPOS) & Blocks compatibility
add_action('before_woocommerce_init', static function (): void {
    if (class_exists(\Automattic\WooCommerce\Utilities\FeaturesUtil::class)) {
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility(
            'custom_order_tables',
            __FILE__,
            true
        );
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility(
            'cart_checkout_blocks',
            __FILE__,
            true
        );
    }
});

// Bootstrap starter kit lifecycle
add_action('plugins_loaded', static function (): void {
    StarterKit::instance()->init();
});

