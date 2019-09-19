<?php

// Show inactive clients (false by default)
$config['show_inactive_clients'] = true;

// Hide empty pools (displayed by default)
$config['hide_empty_pools'] = false;

// Custom datetime format (by default: Y-m-d H:i:s)
// Examples 
// $config['datetime_format'] = 'd/m/Y H:i:s';
// $config['datetime_format'] = 'm-d-Y H:i:s';

// Security
$config['enable_users_auth'] = false;

// Debug mode 
$config['debug'] = false;

// Translations
$config['language'] = (!empty(getenv('BW_LANGUAGE'))) ? getenv('BW_LANGUAGE') : 'en_US';

// en_US -> English 
// be_BY -> Belarusian
// ca_ES -> Catalan
// pl_PL -> Polish
// ru_RU -> Russian
// zh_CN -> Chinese
// no_NO -> Norwegian
// ja_JP -> Japanese
// sv_SE -> Swedish
// es_ES -> Spanish
// de_DE -> German
// it_IT -> Italian
// fr_FR -> French
// pt_BR -> Portuguese Brazil
// nl_NL -> Dutch

// Database connection parameters
// Copy/paste and adjust parameters according to your configuration

// For Unix socket connection, use parameters decribed below
// MySQL: use localhost for $config[0]['host']
// postgreSQL: do not define $config[0]['host']

$config[0]['label'] = (!empty(getenv('BW_LABEL'))) ? getenv('BW_LABEL') : 'Backup Server';
$config[0]['host'] = (!empty(getenv('BW_HOST'))) ? getenv('BW_HOST') : 'localhost';
$config[0]['login'] = (!empty(getenv('BW_LOGIN'))) ? getenv('BW_LOGIN') : 'bacula';
$config[0]['password'] = (!empty(getenv('BW_PASSWORD'))) ? getenv('BW_PASSWORD') : 'verystrongpassword';
$config[0]['db_name'] = (!empty(getenv('BW_DB_NAME'))) ? getenv('BW_DB_NAME') : 'bacula';
$config[0]['db_type'] = (!empty(getenv('BW_DB_TYPE'))) ? getenv('BW_DB_TYPE') : 'mysql';
$config[0]['db_port'] = (!empty(getenv('BW_DB_PORT'))) ? getenv('BW_DB_PORT') : '3306';