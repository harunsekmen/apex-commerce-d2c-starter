<?php
declare(strict_types=1);

namespace ApexCommerce;

defined('ABSPATH') || exit;

final class Admin {
    public function register(): void {
        add_action('admin_menu', [$this, 'add_menu_page']);
    }

    public function add_menu_page(): void {
        add_submenu_page(
            'woocommerce',
            __('ApexCommerce D2C Suite', 'apex-commerce'),
            __('Apex D2C Kit', 'apex-commerce'),
            'manage_woocommerce',
            'apex-commerce-dashboard',
            [$this, 'render_dashboard']
        );
    }

    public function render_dashboard(): void {
        if (!current_user_can('manage_woocommerce')) {
            return;
        }

        require_once StarterKit::get_plugin_dir() . 'templates/admin-dashboard.php';
    }
}

