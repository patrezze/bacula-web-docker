<?php

// Helper to get environment variable with default value
function env($key, $default = null, $castBool = false) {
    $value = getenv($key);
    if ($value === false || $value === '') {
        return $default;
    }
    if ($castBool) {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ?? $default;
    }
    return $value;
}

// General settings
$config['show_inactive_clients'] = env('BW_SHOW_INACTIVE_CLIENTS', true, true);
$config['hide_empty_pools']      = env('BW_HIDE_EMPTY_POOLS', true, true);
$config['datetime_format']       = env('BW_DATETIME_FORMAT', 'Y-m-d H:i:s');
$config['enable_users_auth']     = env('BW_ENABLE_USERS_AUTH', true, true);
$config['debug']                 = env('BW_DEBUG', false, true);
$config['language']              = env('BW_LANGUAGE', 'en_US');
$config['rows_per_page']         = (int) env('BW_ROWS_PER_PAGE', 25);

// Database connection
$config[0] = [
    'label'    => env('BW_LABEL', 'Backup Server'),
    'host'     => env('BW_HOST', 'localhost'),
    'login'    => env('BW_LOGIN', 'bacula'),
    'password' => env('BW_PASSWORD', 'verystrongpassword'),
    'db_name'  => env('BW_DB_NAME', 'bacula'),
    'db_type'  => env('BW_DB_TYPE', 'mysql'),
    'db_port'  => env('BW_DB_PORT', '3306'),
];
