<?php
if (!defined('ABSPATH')) {
    exit;
}
$global = $args['global'] ?? vipru_get_global_settings();
$gutschein_href = vipru_get_gutschein_anchor_url();
?>
<div class="side-menu">
    <div class="side-menu-header">
        <div class="side-menu-phone"><?php echo esc_html($global['phone_display']); ?></div>
        <button class="side-menu-close" aria-label="<?php esc_attr_e('close menu', 'vipru-sauna'); ?>">
            <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24.4471" r="23.5" stroke="#AB8C6B" stroke-opacity="0.2"/><path d="M22.7887 24.4471L19.1522 20.8106L20.3644 19.5984L24.0009 23.235L27.6375 19.5984L28.8496 20.8106L25.2131 24.4471L28.8496 28.0837L27.6375 29.2959L24.0009 25.6593L20.3644 29.2959L19.1522 28.0837L22.7887 24.4471Z" fill="#AB8C6B"/></svg>
        </button>
    </div>

    <nav class="side-menu-nav" aria-label="<?php esc_attr_e('Mobile navigation', 'vipru-sauna'); ?>"></nav>

    <div class="side-menu-footer">
        <div class="side-menu-social">
            <span><?php esc_html_e('Direkter Kontakt', 'vipru-sauna'); ?></span>
            <div class="social-links">
                <a target="_blank" rel="noopener" href="<?php echo esc_url($global['telegram_url']); ?>" aria-label="Telegram"><?php echo vipru_get_icon_svg('telegram'); ?></a>
                <a target="_blank" rel="noopener" href="<?php echo esc_url('https://wa.me/' . preg_replace('/\D+/', '', $global['whatsapp_number'])); ?>" aria-label="WhatsApp"><?php echo vipru_get_icon_svg('whatsapp'); ?></a>
                <a target="_blank" rel="noopener" href="<?php echo esc_url($global['instagram_url']); ?>" aria-label="Instagram"><?php echo vipru_get_icon_svg('instagram'); ?></a>
                <a target="_blank" rel="noopener" href="<?php echo esc_url($global['tiktok_url']); ?>" aria-label="TikTok"><?php echo vipru_get_icon_svg('tiktok'); ?></a>
            </div>
        </div>
        <div class="side-menu-actions">
            <a class="btn side-menu-gutschein-btn" href="<?php echo esc_url($gutschein_href); ?>"><?php esc_html_e('Gutschein kaufen', 'vipru-sauna'); ?></a>
            <button class="btn ghost call-back-btn" type="button"><?php esc_html_e('Anfrage Senden', 'vipru-sauna'); ?></button>
        </div>
    </div>
</div>
