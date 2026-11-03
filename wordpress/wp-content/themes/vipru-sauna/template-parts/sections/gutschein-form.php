<?php
if (!defined('ABSPATH')) {
    exit;
}
$service = $args['service'];
$g = $service['gutschein'];
$anchor_id = $args['anchor_id'] ?? vipru_get_gutschein_anchor_id(get_the_ID());
?>
<section id="<?php echo esc_attr($anchor_id); ?>" class="gutschein-section">
    <div class="container">
        <div class="gutschein-card">
            <div class="gutschein-card__copy">
                <span class="gutschein-card__eyebrow"><?php echo esc_html($g['eyebrow']); ?></span>
                <h2><?php echo esc_html($g['title']); ?></h2>
                <p><?php echo esc_html($g['description']); ?></p>
            </div>
            <form class="gutschein-form" data-gutschein-form="true">
                <input type="hidden" name="requestKind" value="Gutschein kaufen">
                <input type="hidden" name="serviceName" value="<?php echo esc_attr($service['service_name']); ?>">
                <div class="gutschein-form__grid">
                    <div class="gutschein-form__field">
                        <label for="gift-email-<?php echo esc_attr(get_post_field('post_name', get_the_ID())); ?>">E-Mail</label>
                        <input id="gift-email-<?php echo esc_attr(get_post_field('post_name', get_the_ID())); ?>" name="email" type="email" required>
                    </div>
                    <div class="gutschein-form__field">
                        <label for="gift-phone-<?php echo esc_attr(get_post_field('post_name', get_the_ID())); ?>">Telefon</label>
                        <input id="gift-phone-<?php echo esc_attr(get_post_field('post_name', get_the_ID())); ?>" name="phone" type="tel">
                    </div>
                    <div class="gutschein-form__field gutschein-form__field--full">
                        <label for="gift-amount-<?php echo esc_attr(get_post_field('post_name', get_the_ID())); ?>">Betrag (€)</label>
                        <input id="gift-amount-<?php echo esc_attr(get_post_field('post_name', get_the_ID())); ?>" name="amount" type="number" min="1" step="0.01" placeholder="50" required>
                    </div>
                </div>
                <div class="gutschein-form__actions">
                    <a class="gutschein-form__paypal" data-paypal-button href="#" target="_blank" rel="noopener"><?php echo esc_html($g['paypal_text']); ?></a>
                    <button class="btn ghost gutschein-form__whatsapp" type="submit"><?php echo esc_html($g['whatsapp_text']); ?></button>
                </div>
                <p class="gutschein-form__note"><?php echo esc_html($g['note']); ?></p>
            </form>
        </div>
    </div>
</section>
