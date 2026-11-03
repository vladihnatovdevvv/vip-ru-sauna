<?php
if (!defined('ABSPATH')) {
    exit;
}
$global = vipru_get_global_settings();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part('template-parts/global/side-menu', null, ['global' => $global]); ?>

<div class="menu-backdrop"></div>

<?php get_template_part('template-parts/global/callback-form'); ?>

