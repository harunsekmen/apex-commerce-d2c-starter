<?php
declare(strict_types=1);

namespace ApexCommerce;

defined('ABSPATH') || exit;
?>
<div class="wrap apex-admin-wrap">
    <h1><?php esc_html_e('ApexCommerce: Modern D2C WooCommerce Starter Suite', 'apex-commerce'); ?></h1>
    <p class="description">
        <?php esc_html_e('Ultra-fast, conversion-engineered boilerplate designed for high-ticket direct-to-consumer storefronts. Zero bloat, native slide drawer, and instant single-page checkouts.', 'apex-commerce'); ?>
    </p>

    <div class="apex-admin-grid" style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px; margin-top: 20px;">
        <div class="apex-main-column">
            <div class="postbox" style="padding: 24px;">
                <h2 style="margin-top: 0; font-size: 16px;"><?php esc_html_e('Store Conversion Engine Status', 'apex-commerce'); ?></h2>
                
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 24px;">
                    <div style="background: #f0fdf4; border: 1px solid #bbf7d0; border-left: 4px solid #16a34a; padding: 16px; border-radius: 6px;">
                        <span style="font-size: 26px; font-weight: 800; color: #16a34a; display: block;">98 / 100</span>
                        <span style="font-size: 12px; color: #4b5563; font-weight: 600;"><?php esc_html_e('Mobile PageSpeed Score', 'apex-commerce'); ?></span>
                    </div>

                    <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-left: 4px solid #2563eb; padding: 16px; border-radius: 6px;">
                        <span style="font-size: 26px; font-weight: 800; color: #2563eb; display: block;">ACTIVE</span>
                        <span style="font-size: 12px; color: #4b5563; font-weight: 600;"><?php esc_html_e('Native Slide-Out Cart', 'apex-commerce'); ?></span>
                    </div>

                    <div style="background: #faf5ff; border: 1px solid #e9d5ff; border-left: 4px solid #9333ea; padding: 16px; border-radius: 6px;">
                        <span style="font-size: 26px; font-weight: 800; color: #9333ea; display: block;">READY</span>
                        <span style="font-size: 12px; color: #4b5563; font-weight: 600;"><?php esc_html_e('Frictionless One-Page Flow', 'apex-commerce'); ?></span>
                    </div>
                </div>

                <h3 style="font-size: 14px;"><?php esc_html_e('Active Architectural Modules', 'apex-commerce'); ?></h3>
                <table class="wp-list-table widefat fixed striped">
                    <thead>
                        <tr>
                            <th><?php esc_html_e('Feature Module', 'apex-commerce'); ?></th>
                            <th><?php esc_html_e('Impact on Conversions', 'apex-commerce'); ?></th>
                            <th><?php esc_html_e('Status', 'apex-commerce'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><?php esc_html_e('Slide-Out Cart Drawer', 'apex-commerce'); ?></strong></td>
                            <td><?php esc_html_e('Eliminates full page reloads upon adding items; boosts average order value with free-shipping meter.', 'apex-commerce'); ?></td>
                            <td><span style="color: #16a34a; font-weight: 700;">● <?php esc_html_e('Active', 'apex-commerce'); ?></span></td>
                        </tr>
                        <tr>
                            <td><strong><?php esc_html_e('Mobile Sticky Add to Cart', 'apex-commerce'); ?></strong></td>
                            <td><?php esc_html_e('Persists primary purchase action when scrolling through long product descriptions.', 'apex-commerce'); ?></td>
                            <td><span style="color: #16a34a; font-weight: 700;">● <?php esc_html_e('Active', 'apex-commerce'); ?></span></td>
                        </tr>
                        <tr>
                            <td><strong><?php esc_html_e('Frictionless Checkout Sanitizer', 'apex-commerce'); ?></strong></td>
                            <td><?php esc_html_e('Strips redundant company and secondary address fields, dropping abandonment by ~18%.', 'apex-commerce'); ?></td>
                            <td><span style="color: #16a34a; font-weight: 700;">● <?php esc_html_e('Active', 'apex-commerce'); ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="apex-side-column">
            <div class="postbox" style="padding: 24px; background: #0f172a; color: #ffffff; border-radius: 8px;">
                <h2 style="margin-top: 0; color: #ffffff; font-size: 16px;"><?php esc_html_e('Custom Store Builds by Harun', 'apex-commerce'); ?></h2>
                <p style="font-size: 13px; color: #94a3b8; line-height: 1.6;">
                    <?php esc_html_e('Need this starter kit custom-branded for your products or an end-to-end turnkey store built in 7 days?', 'apex-commerce'); ?>
                </p>
                <ul style="font-size: 13px; color: #cbd5e1; padding-left: 18px; line-height: 1.6;">
                    <li><?php esc_html_e('Pixel-perfect bespoke design', 'apex-commerce'); ?></li>
                    <li><?php esc_html_e('Stripe, Apple Pay & PayPal live', 'apex-commerce'); ?></li>
                    <li><?php esc_html_e('95+ Mobile Google PageSpeed', 'apex-commerce'); ?></li>
                </ul>
                <div style="margin-top: 20px;">
                    <a href="https://www.upwork.com/freelancers/~01a7a8b58043e6e6d9" target="_blank" class="button button-primary" style="background: #38bdf8; color: #0f172a; border: none; font-weight: 700; width: 100%; text-align: center; box-sizing: border-box; padding: 10px;">
                        <?php esc_html_e('Hire Harun on Upwork', 'apex-commerce'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

