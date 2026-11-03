<?php
if (!defined('ABSPATH')) {
    exit;
}
$defaults = $args['defaults'] ?? vipru_get_home_defaults();
$cards = vipru_get_home_about_cards(get_the_ID(), $defaults);
?>
<section id="about" class="about-section">
    <div class="container">
        <h2><?php echo esc_html(vipru_get_field_value('home_about_title', get_the_ID(), $defaults['about_title'])); ?></h2>
        <div class="about-list">
            <?php foreach ($cards as $card) : ?>
                <article class="about-item">
                    <div class="thumb">
                        <img loading="lazy" src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>">
                    </div>
                    <div class="about-content">
                        <div class="about-number"><?php echo esc_html($card['number']); ?></div>
                        <h3><?php echo esc_html($card['title']); ?></h3>
                        <div class="about-text">
                            <p><?php echo esc_html($card['text']); ?></p>
                            <?php if (!empty($card['text_2'])) : ?>
                                <br><p><?php echo esc_html($card['text_2']); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="about-content-btn-link">
                            <button class="btn call-back-btn"><?php echo esc_html($card['button_text']); ?></button>
                            <a href="<?php echo esc_url($card['link_url']); ?>" class="btn call-back-btn call-back-btn-modification-a"><?php echo esc_html($card['link_text']); ?></a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
