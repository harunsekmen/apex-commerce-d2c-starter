<?php
require_once __DIR__ . '/bootstrap.php';
require_once dirname(__DIR__) . '/includes/class-quick-checkout.php';

echo "Testing ApexCommerce QuickCheckout Field Streamliner...
";

$cleaner = new \ApexCommerce\QuickCheckout();
$fields = [
    'billing' => [
        'billing_company' => ['label' => 'Company'],
        'billing_first_name' => ['label' => 'First'],
        'billing_email' => ['label' => 'Email']
    ]
];
$sanitized = $cleaner->streamline_checkout_fields($fields);
assert(!isset($sanitized['billing']['billing_company']), "Company field must be stripped");
assert(isset($sanitized['billing']['billing_email']), "Email must be preserved");

echo "PASS: apex-commerce-d2c-starter verified.
";
