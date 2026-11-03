<?php
if (!defined('ABSPATH')) {
    exit;
}
$global = vipru_get_global_settings();
$gutschein_href = vipru_get_gutschein_anchor_url();
$address_lines = array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $global['address_lines'])));
$route_label = vipru_split_button_label((string) $global['route_button_text']);
$whatsapp_label = vipru_split_button_label((string) $global['whatsapp_button_text']);
$public_email = 'viprusauna@gmail.com';
?>
<footer class="site-footer">
    <div class="container footer-map-block">
        <div class="footer-map-wrapper">
            <div id="Vip-ru-map" style="width: 100%; height: 100%;"></div>
        </div>
        <div class="footer-map-info">
            <div id="contact" class="footer-map-info-main">
                <div style="padding-left: 40px;">
                    <div class="footer-map-title"><?php echo esc_html($global['address_title']); ?></div>
                    <div class="footer-map-address"><?php echo nl2br(esc_html($global['address_lines'])); ?></div>
                    <div class="footer-map-phone"><?php echo esc_html($global['phone_display'] . ' & ' . $public_email); ?></div>
                </div>
            </div>
            <a href="<?php echo esc_url($global['map_url']); ?>" target="_blank" rel="noopener" class="footer-map-btn ghost">
                <?php echo vipru_get_icon_svg('route'); ?>
                <p><?php echo esc_html($route_label['main']); ?><br><span><?php echo esc_html($route_label['sub']); ?></span></p>
            </a>
            <a href="<?php echo esc_url($gutschein_href); ?>" class="footer-map-btn footer-map-btn-secondary">
                <?php echo vipru_get_icon_svg('route'); ?>
                <p><?php esc_html_e('Gutschein', 'vipru-sauna'); ?><br><span><?php esc_html_e('kaufen', 'vipru-sauna'); ?></span></p>
            </a>
            <a href="<?php echo esc_url('https://wa.me/' . preg_replace('/\D+/', '', $global['whatsapp_number'])); ?>" target="_blank" rel="noopener" class="footer-map-btn">
                <?php echo vipru_get_icon_svg('phone'); ?>
                <p><?php echo esc_html($whatsapp_label['main']); ?><br><span><?php echo esc_html($whatsapp_label['sub']); ?></span></p>
            </a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
