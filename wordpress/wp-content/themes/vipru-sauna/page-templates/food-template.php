<?php
/*
Template Name: Food Menu Page
*/
get_header();

$gutschein_anchor = vipru_get_gutschein_anchor_id(get_the_ID());
$gutschein_href = '#' . $gutschein_anchor;
$food_placeholder = get_template_directory_uri() . '/assets/images/food-placeholder-apple.svg';
$gutschein_service = [
    'service_name' => get_the_title() ?: 'Speisen',
    'gutschein' => [
        'eyebrow' => 'Gutschein kaufen',
        'title' => 'Gutschein direkt auf dieser Seite kaufen',
        'description' => 'Der Gutschein ist auch hier direkt verfuegbar. Ohne separate Seite, ohne Umweg und sofort bereit fuer PayPal oder WhatsApp.',
        'paypal_text' => 'Mit PayPal bezahlen',
        'whatsapp_text' => 'WhatsApp Anfrage',
        'note' => 'Direkter Kauf per PayPal oder kurze Rueckfrage per WhatsApp.',
    ],
];
?>
<style>
    main { max-width: 1100px; margin: 0 auto; padding: 50px 20px; }
    h1 { text-align: center; margin-bottom: 10px; font-size: 42px; font-family: 'Gilroy', sans-serif; font-weight: 700; }
    .subtitle { text-align: center; color: #666; margin-bottom: 50px; font-size: 18px; font-family: 'Montserrat', sans-serif; }
    .food-page-actions { display: flex; justify-content: center; margin: -10px 0 44px; }
    .food-page-actions .hero-buy-link { margin-top: 0; }
    .category { margin-bottom: 60px; }
    .category h2 { font-size: 28px; margin-bottom: 30px; border-bottom: 3px solid #AB8C6B; padding-bottom: 15px; font-family: 'Gilroy', sans-serif; font-weight: 700; }
    .food-item { display: flex; justify-content: space-between; align-items: flex-start; padding: 20px 0; border-bottom: 1px solid #eee; gap: 20px; font-family: 'Montserrat', sans-serif; }
    .food-item.with-image { align-items: center; }
    .food-item img { width: 168px; height: 168px; object-fit: cover; object-position: center; border-radius: 16px; flex-shrink: 0; box-shadow: 0 18px 40px rgba(34, 24, 16, 0.08); }
    .food-content { flex: 1; }
    .food-item h3 { margin: 0; font-size: 20px; font-family: 'Gilroy', sans-serif; font-weight: 600; }
    .food-item p { margin: 8px 0 0; color: #666; font-size: 15px; font-family: 'Montserrat', sans-serif; }
    .food-item .price { font-weight: bold; color: #AB8C6B; font-size: 24px; min-width: 96px; text-align: right; font-family: 'Gilroy', sans-serif; align-self: center; }
    .note { background: #f5f5f5; padding: 25px; border-radius: 8px; margin: 50px 0; font-size: 16px; text-align: center; font-family: 'Montserrat', sans-serif; }
    .cta { text-align: center; margin: 50px 0; }
    .cta a { display: inline-block; background: #AB8C6B; color: white; padding: 16px 40px; text-decoration: none; border-radius: 8px; font-size: 18px; font-weight: 600; font-family: 'Gilroy', sans-serif; }
    .cta a:hover { background: #8a6f54; }
    @media (max-width: 768px) { main { padding: 36px 16px; } h1 { font-size: 34px; line-height: 1.02; } .subtitle { margin-bottom: 24px; font-size: 16px; } .food-page-actions { margin: 0 0 32px; } .food-page-actions .hero-buy-link { width: 100%; max-width: none; } .category { margin-bottom: 40px; } .category h2 { font-size: 24px; margin-bottom: 20px; padding-bottom: 12px; } .food-item { flex-direction: column; gap: 12px; padding: 16px 0; } .food-item.with-image { align-items: stretch; } .food-item img { width: 100%; height: auto; aspect-ratio: 4/3; border-radius: 14px; } .food-item .price { min-width: 0; width: 100%; text-align: left; font-size: 20px; } .note { margin: 36px 0; padding: 20px; font-size: 15px; } .cta { margin: 36px 0; } .cta a { width: 100%; padding: 16px 24px; font-size: 17px; } }
    @media (max-width: 420px) { main { padding: 28px 12px; } h1 { font-size: 28px; } .subtitle { font-size: 15px; } .food-page-actions .hero-buy-link { min-height: 52px; font-size: 16px; } .category h2 { font-size: 22px; } .food-item h3 { font-size: 18px; } .food-item p { font-size: 14px; } .cta a { font-size: 16px; } }
</style>

<?php get_template_part('template-parts/global/site-header'); ?>

<main>
    <h1><?php echo esc_html(vipru_get_field_value('food_title', get_the_ID(), get_the_title())); ?></h1>
    <p class="subtitle"><?php echo esc_html(vipru_get_field_value('food_subtitle', get_the_ID(), 'Premium-Menue von unseren Kuechenchefs')); ?></p>
    <div class="food-page-actions">
        <a class="hero-buy-link" href="<?php echo esc_attr($gutschein_href); ?>"><?php esc_html_e('Gutschein kaufen', 'vipru-sauna'); ?></a>
    </div>

    <?php if (vipru_has_acf() && have_rows('food_categories')) : ?>
        <?php while (have_rows('food_categories')) : the_row(); ?>
            <div class="category">
                <h2><?php echo esc_html((string) get_sub_field('title')); ?></h2>
                <?php if (have_rows('items')) : ?>
                    <?php while (have_rows('items')) : the_row(); ?>
                        <?php $image = get_sub_field('image'); ?>
                        <div class="food-item with-image">
                            <img
                                loading="lazy"
                                src="<?php echo esc_url($image['url'] ?? $food_placeholder); ?>"
                                alt="<?php echo esc_attr(($image['alt'] ?? '') ?: get_sub_field('name')); ?>"
                            >
                            <div class="food-content">
                                <h3><?php echo esc_html((string) get_sub_field('name')); ?></h3>
                                <p><?php echo esc_html((string) get_sub_field('description')); ?></p>
                            </div>
                            <div class="price"><?php echo esc_html((string) get_sub_field('price')); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part('template-parts/sections/food-fallback'); ?>
    <?php endif; ?>

    <div class="note">
        <?php echo wp_kses_post(nl2br(esc_html(vipru_get_field_value('food_note', get_the_ID(), 'Bestellungen und Sonderwuensche nehmen wir direkt per WhatsApp entgegen.')))); ?>
    </div>

    <div class="cta">
        <a href="<?php echo esc_url('https://wa.me/' . preg_replace('/\D+/', '', vipru_get_global_settings()['whatsapp_number'])); ?>" target="_blank" rel="noopener">
            <?php echo esc_html(vipru_get_field_value('food_cta_text', get_the_ID(), 'Per WhatsApp bestellen')); ?>
        </a>
    </div>

    <?php get_template_part('template-parts/sections/gutschein-form', null, ['service' => $gutschein_service, 'anchor_id' => $gutschein_anchor]); ?>
</main>

<?php get_footer(); ?>
