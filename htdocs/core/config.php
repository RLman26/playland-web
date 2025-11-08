<?php

return [
  'mysql' => [
    'host' => 'sql100.infinityfree.com',
    'port' => '3306',
    'username' => 'if0_40282779',
    'password' => 'Stritez26',
    'db' => 'if0_40282779_web',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'initialise_charset' => true,
    'initialise_collation' => true,
  ],
  'remember' => [
    'cookie_name' => 'nl2',
    'cookie_expiry' => 604800,
  ],
  'session' => [
    'session_name' => '2user',
    'admin_name' => '2admin',
    'token_name' => '2token',
  ],
  'core' => [
    'hostname' => 'mcplayland.eu',
    'path' => '',
    'friendly' => true,
    'force_https' => false,
    'force_www' => false,
    'captcha' => false,
    'date_format' => 'd M Y, H:i',
    'trustedProxies' => NULL,
    'installed' => true,
  ],
];