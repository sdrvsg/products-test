<?php

return [
    'admin_role' => env('PRODUCTS_ADMIN_ROLE', 'admin'), // название роли администратора
    'role' => env('PRODUCTS_ROLE', 'user'),
    'email' => env('PRODUCTS_EMAIL', 'user@example.com'),
    'webhook' => env('PRODUCTS_WEBHOOK', 'https://webhook.site'),
];
