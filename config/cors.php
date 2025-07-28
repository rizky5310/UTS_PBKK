<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Options
    |--------------------------------------------------------------------------
    |
    | The settings below determine the behavior of cross-origin requests in your
    | application. You can modify these settings as needed to allow or restrict
    | which domains are permitted to access your application via AJAX requests.
    |
    */

    'paths' => ['api/*'], // Mengatur agar hanya API yang diizinkan

    'allowed_methods' => ['*'], // Mengizinkan semua metode HTTP (GET, POST, PUT, DELETE, dll)

    'allowed_origins' => [
        'http://localhost:3000', // Gantilah dengan URL aplikasi Next.js Anda
        // 'https://domain-lain.com', // Anda bisa menambahkan domain lain jika perlu
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Mengizinkan semua header

    'exposed_headers' => [],

    'max_age' => 0, // Durasi cache CORS dalam detik

    'supports_credentials' => true, // Jika Anda tidak membutuhkan cookie atau otentikasi berbasis kredensial
];
