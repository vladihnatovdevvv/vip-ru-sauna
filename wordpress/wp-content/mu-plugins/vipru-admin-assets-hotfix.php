<?php
/**
 * Plugin Name: VIPRU Admin Assets Hotfix
 * Description: Avoids wp-admin load-styles.php/load-scripts.php concatenation when hosting rewrites break those endpoints.
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('CONCATENATE_SCRIPTS')) {
    define('CONCATENATE_SCRIPTS', false);
}

if (!defined('COMPRESS_SCRIPTS')) {
    define('COMPRESS_SCRIPTS', false);
}

if (!defined('COMPRESS_CSS')) {
    define('COMPRESS_CSS', false);
}
