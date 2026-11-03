<?php
if (!defined('ABSPATH')) {
    exit;
}
$defaults = $args['defaults'] ?? vipru_get_home_defaults();
$items = vipru_get_home_cta_items(get_the_ID(), $defaults);
?>
<section class="cta-what-else">
    <div class="container cta-what-else-overflow">
        <div class="cta-what-else-bg-text"><?php echo esc_html(vipru_get_field_value('home_cta_bg', get_the_ID(), $defaults['cta_bg'])); ?></div>
        <div class="cta-what-else-content">
            <div class="cta-what-else-note"><?php echo esc_html(vipru_get_field_value('home_cta_note', get_the_ID(), $defaults['cta_note'])); ?></div>
            <div class="cta-what-else-list-wrapper">
                <?php foreach (array_chunk($items, 3) as $chunk) : ?>
                    <div class="cta-what-else-list">
                        <ul>
                            <?php foreach ($chunk as $item) : ?>
                                <li><span class="cta-what-else-icon"></span><p><?php echo esc_html($item); ?></p></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
