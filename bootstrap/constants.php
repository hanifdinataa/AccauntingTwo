<?php

if (!defined('AKAUNTING_VERSION')) {
    define('AKAUNTING_VERSION', '3.1.19');
}

if (!defined('AKAUNTING_PHP')) {
    define('AKAUNTING_PHP', PHP_VERSION);
}

if (!defined('AKAUNTING_LARAVEL')) {
    define('AKAUNTING_LARAVEL', '10.x');
}

if (!defined('AKAUNTING_DB')) {
    define('AKAUNTING_DB', getenv('DB_CONNECTION') ?: 'mysql');
}

if (!defined('AKAUNTING_PATH')) {
    define('AKAUNTING_PATH', __DIR__ . '/..');
}

if (!defined('AKAUNTING_URL')) {
    define('AKAUNTING_URL', getenv('APP_URL') ?: '');
}
