<?php
/*
Template Name: Service Page
*/
get_header();

$service = vipru_get_service_data(get_the_ID());
$gutschein_anchor = vipru_get_gutschein_anchor_id(get_the_ID());
$gutschein_href = '#' . $gutschein_anchor;
$hero_style = '';

if (!empty($service['hero_background_image'])) {
    $hero_style = sprintf(
        "background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.18), rgba(0, 0, 0, 0.38)), url('%s');",
        esc_url($service['hero_background_image'])
    );
}
?>
<section class="<?php echo esc_attr($service['hero_class']); ?>"<?php echo $hero_style ? ' style="' . esc_attr($hero_style) . '"' : ''; ?>>
    <?php get_template_part('template-parts/global/site-header'); ?>
    <div class="hero-inner container">
        <h1><?php echo esc_html($service['hero_title']); ?></h1>
        <p class="lead"><?php echo esc_html($service['hero_lead']); ?></p>
        <div class="hero-cta-group">
            <button class="hero-book-link call-back-btn" type="button"><?php esc_html_e('Anfrage Senden', 'vipru-sauna'); ?></button>
            <a class="hero-buy-link" href="<?php echo esc_attr($gutschein_href); ?>"><?php esc_html_e('Gutschein kaufen', 'vipru-sauna'); ?></a>
        </div>
    </div>
    <?php get_template_part('template-parts/global/floating-cta'); ?>
</section>

<main>
    <?php get_template_part('template-parts/sections/service-feature', null, ['service' => $service]); ?>
    <?php get_template_part('template-parts/sections/service-gallery', null, ['service' => $service]); ?>
    <?php get_template_part('template-parts/sections/service-calculator', null, ['service' => $service]); ?>
    <?php get_template_part('template-parts/sections/gutschein-form', null, ['service' => $service, 'anchor_id' => $gutschein_anchor]); ?>
</main>

<?php get_footer(); ?>
