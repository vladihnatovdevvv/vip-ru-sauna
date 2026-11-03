<?php
if (!defined('ABSPATH')) {
    exit;
}
$global = vipru_get_global_settings();
?>
<div class="site-header">
    <div class="container header-inner">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img loading="lazy" src="<?php echo esc_url($global['logo']); ?>" alt="<?php echo esc_attr($global['address_title']); ?>">
            </a>
        </div>
        <nav class="header-inner-about" aria-label="<?php esc_attr_e('Primary navigation', 'vipru-sauna'); ?>"></nav>
        <div class="header-inner-contact-container">
            <div class="header-phone"><?php echo esc_html($global['phone_display']); ?></div>
            <button class="menu-btn" aria-label="<?php esc_attr_e('menu', 'vipru-sauna'); ?>">
                <svg viewBox="0 0 40 21" xmlns="http://www.w3.org/2000/svg" width="40" height="21" fill="none"><rect width="40" height="3" rx="1.5" fill="#fff"/><rect y="9" width="40" height="3" rx="1.5" fill="#fff"/><rect y="18" width="40" height="3" rx="1.5" fill="#fff"/></svg>
            </button>
        </div>
    </div>
</div>

