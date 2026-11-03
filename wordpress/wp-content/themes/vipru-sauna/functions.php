<?php
if (!defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/acf-fields.php';

function vipru_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 120,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'vipru-sauna'),
        'footer'  => __('Footer Menu', 'vipru-sauna'),
    ]);
}
add_action('after_setup_theme', 'vipru_theme_setup');

function vipru_enqueue_assets(): void
{
    $theme_version = wp_get_theme()->get('Version');
    $assets_uri = get_template_directory_uri() . '/assets';
    $assets_dir = get_template_directory() . '/assets';
    $asset_version = static function (string $relative_path) use ($assets_dir, $theme_version): string {
        $file = $assets_dir . $relative_path;
        if (file_exists($file)) {
            return (string) filemtime($file);
        }

        return $theme_version;
    };

    wp_enqueue_style(
        'vipru-google-fonts',
        'https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap',
        [],
        null
    );
    wp_enqueue_style('vipru-leaflet', $assets_uri . '/css/leaflet.css', [], $asset_version('/css/leaflet.css'));
    wp_enqueue_style('vipru-swiper', $assets_uri . '/css/swiper-bundle.min.css', [], $asset_version('/css/swiper-bundle.min.css'));
    wp_enqueue_style('vipru-main', $assets_uri . '/css/styles.css', ['vipru-google-fonts', 'vipru-leaflet', 'vipru-swiper'], $asset_version('/css/styles.css'));

    wp_enqueue_script('vipru-swiper', $assets_uri . '/js/swiper-bundle.min.js', [], $asset_version('/js/swiper-bundle.min.js'), true);
    wp_enqueue_script('vipru-leaflet', $assets_uri . '/js/leaflet.js', [], $asset_version('/js/leaflet.js'), true);
    wp_enqueue_script('vipru-theme-script', $assets_uri . '/js/script.js', ['vipru-swiper', 'vipru-leaflet'], $asset_version('/js/script.js'), true);
    wp_enqueue_script('vipru-calculator', $assets_uri . '/js/calculator.js', ['vipru-theme-script'], $asset_version('/js/calculator.js'), true);

    wp_localize_script('vipru-theme-script', 'vipruThemeData', vipru_get_theme_script_data());
    wp_localize_script('vipru-calculator', 'vipruCalculatorData', vipru_get_calculator_settings());
}
add_action('wp_enqueue_scripts', 'vipru_enqueue_assets');

function vipru_register_page_templates(array $templates): array
{
    $templates['page-templates/service-template.php'] = __('Service Page', 'vipru-sauna');
    $templates['page-templates/food-template.php'] = __('Food Menu Page', 'vipru-sauna');

    return $templates;
}
add_filter('theme_page_templates', 'vipru_register_page_templates');

function vipru_redirect_legacy_gutschein_page(): void
{
    if (is_admin()) {
        return;
    }

    if (is_page('gutschein-kaufen')) {
        wp_safe_redirect(home_url('/'), 301);
        exit;
    }
}
add_action('template_redirect', 'vipru_redirect_legacy_gutschein_page');
