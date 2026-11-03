<?php
if (!defined('ABSPATH')) {
    exit;
}
$service = $args['service'];
?>
<section class="gallery-section">
    <div class="container">
        <h2><?php echo esc_html($service['gallery_title']); ?></h2>
        <p><?php echo esc_html($service['gallery_lead']); ?></p>
        <div class="gallery-wrapper">
            <div class="gallery-grid">
                <?php foreach ($service['gallery_images'] as $image) : ?>
                    <?php $url = is_array($image) ? ($image['url'] ?? '') : $image; ?>
                    <?php $alt = is_array($image) ? ($image['alt'] ?? $service['service_name']) : $service['service_name']; ?>
                    <div class="gallery-item">
                        <img loading="lazy" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="gallery-video">
                <h3><?php echo esc_html($service['video_title']); ?></h3>
                <video class="gallery-video__player" controls playsinline preload="metadata" poster="<?php echo esc_url($service['video_poster']); ?>">
                    <source src="<?php echo esc_url($service['video_file']); ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>

