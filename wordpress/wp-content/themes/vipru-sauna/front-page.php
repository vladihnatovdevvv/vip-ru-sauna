<?php
get_header();

$home = vipru_get_home_defaults();
$global = vipru_get_global_settings();
$gutschein_anchor = vipru_get_gutschein_anchor_id(get_the_ID());
$gutschein_href = '#' . $gutschein_anchor;
$gutschein_service = [
    'service_name' => 'Startseite',
    'gutschein' => [
        'eyebrow' => 'Gutschein kaufen',
        'title' => 'Wellness-Gutschein online kaufen',
        'description' => 'Kaufen Sie Ihren Gutschein direkt auf der Seite. Schnell, klar und ohne Umweg ueber eine separate Unterseite.',
        'paypal_text' => 'Mit PayPal bezahlen',
        'whatsapp_text' => 'WhatsApp Anfrage',
        'note' => 'PayPal startet den direkten Kauf. WhatsApp bleibt fuer individuelle Rueckfragen verfuegbar.',
    ],
];
?>
<section class="<?php echo esc_attr($home['hero_background_class']); ?>">
    <?php get_template_part('template-parts/global/site-header'); ?>
    <div class="hero-inner container">
        <h1><?php echo esc_html(vipru_get_field_value('home_hero_title', get_the_ID(), $home['hero_title'])); ?></h1>
        <p class="lead"><?php echo esc_html(vipru_get_field_value('home_hero_lead', get_the_ID(), $home['hero_lead'])); ?></p>
        <div class="hero-cta-group">
            <button class="hero-book-link call-back-btn" type="button"><?php esc_html_e('Anfrage Senden', 'vipru-sauna'); ?></button>
            <a class="hero-buy-link" href="<?php echo esc_attr($gutschein_href); ?>"><?php esc_html_e('Gutschein kaufen', 'vipru-sauna'); ?></a>
        </div>
    </div>
    <?php get_template_part('template-parts/global/floating-cta'); ?>
</section>

<main>
    <?php get_template_part('template-parts/sections/home-about', null, ['defaults' => $home]); ?>
    <?php get_template_part('template-parts/sections/home-location', null, ['defaults' => $home, 'global' => $global]); ?>
    <?php get_template_part('template-parts/sections/home-cta', null, ['defaults' => $home]); ?>
    <?php get_template_part('template-parts/sections/gutschein-form', null, ['service' => $gutschein_service, 'anchor_id' => $gutschein_anchor]); ?>
</main>

<?php
get_footer();
