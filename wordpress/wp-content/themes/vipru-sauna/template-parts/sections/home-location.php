<?php
if (!defined('ABSPATH')) {
    exit;
}
$defaults = $args['defaults'] ?? vipru_get_home_defaults();
$global = $args['global'] ?? vipru_get_global_settings();
$gallery = vipru_get_home_location_gallery(get_the_ID(), $defaults);
$public_email = 'viprusauna@gmail.com';
?>
<section id="dortmund" class="dortmund-section">
    <div class="container">
        <div class="dortmund-header">
            <div class="dortmund-badge"><?php echo esc_html(vipru_get_field_value('home_location_badge', get_the_ID(), $defaults['location_badge'])); ?></div>
            <h2><?php echo esc_html(vipru_get_field_value('home_location_title', get_the_ID(), $defaults['location_title'])); ?></h2>
            <p class="dortmund-subtitle"><?php echo esc_html(vipru_get_field_value('home_location_subtitle', get_the_ID(), $defaults['location_subtitle'])); ?></p>
        </div>

        <div class="dortmund-gallery">
            <?php foreach ($gallery as $image) : ?>
                <?php $url = is_array($image) ? ($image['url'] ?? '') : $image; ?>
                <?php $alt = is_array($image) ? ($image['alt'] ?? 'VIP-RU Sauna') : 'VIP-RU Sauna'; ?>
                <img loading="lazy" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" class="dortmund-gallery-image">
            <?php endforeach; ?>
        </div>

        <div class="vipru-about__container">
            <h2 id="aboutus" class="vipru-about__title"><?php echo esc_html(vipru_get_field_value('home_location_about_title', get_the_ID(), $defaults['location_about_title'])); ?></h2>
            <p class="vipru-about__description"><?php echo esc_html(vipru_get_field_value('home_location_about_description', get_the_ID(), $defaults['location_about_description'])); ?></p>
            <div class="vipru-about__grid">
                <div class="vipru-about__card">
                    <p class="vipru-about__label"><?php esc_html_e('Adresse', 'vipru-sauna'); ?></p>
                    <p class="vipru-about__text"><?php echo nl2br(esc_html($global['address_lines'])); ?></p>
                </div>
                <div class="vipru-about__card">
                    <p class="vipru-about__label"><?php esc_html_e('Kontakt', 'vipru-sauna'); ?></p>
                    <a href="<?php echo esc_url('tel:' . preg_replace('/\D+/', '', $global['phone_link'] ?: $global['phone_display'])); ?>" class="vipru-about__link"><?php echo esc_html($global['phone_display']); ?></a>
                    <a href="<?php echo esc_url('mailto:' . $public_email); ?>" class="vipru-about__link"><?php echo esc_html($public_email); ?></a>
                    <a href="<?php echo esc_url($global['telegram_url']); ?>" class="vipru-about__link" target="_blank" rel="noopener">Telegram</a>
                    <a href="<?php echo esc_url($global['instagram_url']); ?>" class="vipru-about__link" target="_blank" rel="noopener">Instagram</a>
                    <a href="<?php echo esc_url('https://wa.me/' . preg_replace('/\D+/', '', $global['whatsapp_number'])); ?>" class="vipru-about__link" target="_blank" rel="noopener">WhatsApp</a>
                </div>
                <div class="vipru-about__card">
                    <p class="vipru-about__label"><?php esc_html_e('Oeffnungszeiten', 'vipru-sauna'); ?></p>
                    <p class="vipru-about__text"><?php echo nl2br(esc_html(vipru_get_field_value('home_hours_text', get_the_ID(), $defaults['hours_text']))); ?></p>
                </div>
            </div>
            <button class="vipru-about__button call-back-btn"><?php echo esc_html(vipru_get_field_value('home_location_button_text', get_the_ID(), $defaults['location_button_text'])); ?></button>
        </div>
    </div>
</section>
