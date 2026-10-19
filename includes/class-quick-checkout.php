<?php
declare(strict_types=1);

namespace ApexCommerce;

defined('ABSPATH') || exit;

final class QuickCheckout {
    public function register(): void {
        add_filter('woocommerce_checkout_fields', [$this, 'streamline_checkout_fields']);
    }

    /**
     * Removes excessive friction fields to dramatically increase conversion rates
     */
    public function streamline_checkout_fields(array $fields): array {
        // Remove unnecessary second address line and company for D2C brands
        if (isset($fields['billing']['billing_company'])) {
            unset($fields['billing']['billing_company']);
        }
        if (isset($fields['shipping']['shipping_company'])) {
            unset($fields['shipping']['shipping_company']);
        }

        return $fields;
    }
}

