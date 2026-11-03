<?php
if (!defined('ABSPATH')) {
    exit;
}
$service = $args['service'];
?>
<section class="feature-hamam container">
    <div class="container">
        <div class="feature-inner">
            <div class="feature-left">
                <div class="feature-hamam-label"><?php echo esc_html($service['feature_label']); ?></div>
                <h2><?php echo esc_html($service['feature_title']); ?></h2>
                <p><?php echo esc_html($service['feature_text_1']); ?></p>
                <p><?php echo esc_html($service['feature_text_2']); ?></p>
                <div class="about-item">
                    <button class="btn call-back-btn"><?php echo esc_html($service['feature_button_text']); ?></button>
                </div>
                <div class="feature-hamam-pagination">
                    <span class="feature-hamam-current">1</span> / <span class="feature-hamam-total"><?php echo esc_html((string) count($service['feature_images'])); ?></span>
                </div>
            </div>
            <div class="feature-right">
                <div class="swiper feature-hamam-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($service['feature_images'] as $image) : ?>
                            <?php $url = is_array($image) ? ($image['url'] ?? '') : $image; ?>
                            <?php $alt = is_array($image) ? ($image['alt'] ?? $service['feature_title']) : $service['feature_title']; ?>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

