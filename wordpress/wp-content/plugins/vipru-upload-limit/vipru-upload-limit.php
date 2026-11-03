<?php
/**
 * Plugin Name: VIP-RU Upload Limit
 * Description: Raises WordPress and PHP upload limits for large media uploads.
 * Version: 1.0.0
 * Author: Codex
 */

if (!defined('ABSPATH')) {
    exit;
}

const VIPRU_UPLOAD_LIMIT_MB = 700;
const VIPRU_POST_LIMIT_MB = 750;
const VIPRU_MEMORY_LIMIT_MB = 1024;
const VIPRU_EXECUTION_TIME = 600;

function vipru_upload_limit_ini_contents(): string
{
    return implode("\n", [
        'upload_max_filesize = ' . VIPRU_UPLOAD_LIMIT_MB . 'M',
        'post_max_size = ' . VIPRU_POST_LIMIT_MB . 'M',
        'memory_limit = ' . VIPRU_MEMORY_LIMIT_MB . 'M',
        'max_execution_time = ' . VIPRU_EXECUTION_TIME,
        'max_input_time = ' . VIPRU_EXECUTION_TIME,
        '',
    ]);
}

function vipru_upload_limit_write_ini_files(): array
{
    $targets = [
        ABSPATH . '.user.ini',
        ABSPATH . 'php.ini',
    ];

    $results = [];
    $contents = vipru_upload_limit_ini_contents();

    foreach ($targets as $path) {
        $written = @file_put_contents($path, $contents);
        $results[$path] = $written !== false;
    }

    update_option('vipru_upload_limit_write_results', $results);

    return $results;
}

function vipru_upload_limit_bootstrap(): void
{
    @ini_set('memory_limit', VIPRU_MEMORY_LIMIT_MB . 'M');
    @ini_set('max_execution_time', (string) VIPRU_EXECUTION_TIME);
    @ini_set('max_input_time', (string) VIPRU_EXECUTION_TIME);
}
add_action('init', 'vipru_upload_limit_bootstrap');

function vipru_upload_limit_filter(int $size): int
{
    return VIPRU_UPLOAD_LIMIT_MB * 1024 * 1024;
}
add_filter('upload_size_limit', 'vipru_upload_limit_filter', 999);
add_filter('site_option_fileupload_maxk', static function (): int {
    return VIPRU_UPLOAD_LIMIT_MB * 1024;
}, 999);

function vipru_upload_limit_admin_notice(): void
{
    if (!current_user_can('manage_options')) {
        return;
    }

    $screen = function_exists('get_current_screen') ? get_current_screen() : null;
    if (!$screen || !in_array($screen->id, ['plugins', 'media', 'upload', 'media_page'], true)) {
        return;
    }

    $results = get_option('vipru_upload_limit_write_results', []);
    $all_ok = !empty($results) && !in_array(false, $results, true);
    $class = $all_ok ? 'notice notice-success' : 'notice notice-warning';
    $paths = array_map(static function ($path, $ok): string {
        return sprintf('%s: %s', $path, $ok ? 'ok' : 'failed');
    }, array_keys($results), array_values($results));

    echo '<div class="' . esc_attr($class) . '"><p>';
    echo esc_html('VIP-RU Upload Limit active. Target upload limit: ' . VIPRU_UPLOAD_LIMIT_MB . ' MB.');
    if (!empty($paths)) {
        echo ' ' . esc_html(implode(' | ', $paths));
    }
    echo '</p></div>';
}
add_action('admin_notices', 'vipru_upload_limit_admin_notice');

function vipru_upload_limit_activate(): void
{
    vipru_upload_limit_write_ini_files();
}
register_activation_hook(__FILE__, 'vipru_upload_limit_activate');
