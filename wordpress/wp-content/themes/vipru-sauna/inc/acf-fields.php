<?php
if (!defined('ABSPATH')) {
    exit;
}

function vipru_register_acf_options_pages(): void
{
    if (!function_exists('acf_add_options_page')) {
        return;
    }

    acf_add_options_page([
        'page_title' => __('VIP-RU Theme Settings', 'vipru-sauna'),
        'menu_title' => __('VIP-RU Theme', 'vipru-sauna'),
        'menu_slug'  => 'vipru-theme-settings',
        'capability' => 'manage_options',
        'redirect'   => false,
    ]);
}
add_action('acf/init', 'vipru_register_acf_options_pages');

function vipru_group_field(string $key, string $label, string $name, array $sub_fields): array
{
    return [
        'key' => $key,
        'label' => $label,
        'name' => $name,
        'type' => 'group',
        'layout' => 'block',
        'sub_fields' => $sub_fields,
    ];
}

function vipru_repeater_field(string $key, string $label, string $name, array $sub_fields, string $button_label = 'Add Row'): array
{
    return [
        'key' => $key,
        'label' => $label,
        'name' => $name,
        'type' => 'repeater',
        'layout' => 'block',
        'button_label' => $button_label,
        'sub_fields' => $sub_fields,
    ];
}

function vipru_image_field(string $key, string $label, string $name): array
{
    return [
        'key' => $key,
        'label' => $label,
        'name' => $name,
        'type' => 'image',
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
    ];
}

function vipru_text_field(string $key, string $label, string $name): array
{
    return ['key' => $key, 'label' => $label, 'name' => $name, 'type' => 'text'];
}

function vipru_textarea_field(string $key, string $label, string $name, int $rows = 3): array
{
    return ['key' => $key, 'label' => $label, 'name' => $name, 'type' => 'textarea', 'rows' => $rows];
}

function vipru_pricing_textarea_field(string $key, string $label, string $name, string $default): array
{
    return [
        'key' => $key,
        'label' => $label,
        'name' => $name,
        'type' => 'textarea',
        'rows' => 3,
        'default_value' => $default,
    ];
}

function vipru_message_field(string $key, string $label, string $message): array
{
    return [
        'key' => $key,
        'label' => $label,
        'name' => '',
        'type' => 'message',
        'message' => $message,
        'new_lines' => 'wpautop',
        'esc_html' => 0,
    ];
}

function vipru_register_acf_fields(): void
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key' => 'group_vipru_global_settings',
        'title' => 'VIP-RU Global Settings',
        'fields' => [
            vipru_text_field('field_phone_display', 'Phone Display', 'phone_display'),
            vipru_text_field('field_phone_link', 'Phone Link', 'phone_link'),
            ['key' => 'field_email', 'label' => 'Email', 'name' => 'email', 'type' => 'email'],
            vipru_text_field('field_whatsapp_number', 'WhatsApp Number', 'whatsapp_number'),
            ['key' => 'field_telegram_url', 'label' => 'Telegram URL', 'name' => 'telegram_url', 'type' => 'url'],
            ['key' => 'field_instagram_url', 'label' => 'Instagram URL', 'name' => 'instagram_url', 'type' => 'url'],
            ['key' => 'field_tiktok_url', 'label' => 'TikTok URL', 'name' => 'tiktok_url', 'type' => 'url'],
            vipru_text_field('field_address_title', 'Address Title', 'address_title'),
            vipru_textarea_field('field_address_lines', 'Address Lines', 'address_lines'),
            ['key' => 'field_map_url', 'label' => 'Map URL', 'name' => 'map_url', 'type' => 'url'],
            vipru_text_field('field_map_lat', 'Map Latitude', 'map_lat'),
            vipru_text_field('field_map_lng', 'Map Longitude', 'map_lng'),
            ['key' => 'field_paypal_business_email', 'label' => 'PayPal Business Email', 'name' => 'paypal_business_email', 'type' => 'email'],
            vipru_textarea_field('field_callback_title', 'Callback Title', 'callback_title', 2),
            vipru_textarea_field('field_callback_subtitle', 'Callback Subtitle', 'callback_subtitle', 2),
            vipru_textarea_field('field_callback_notice', 'Callback Notice', 'callback_notice', 2),
            vipru_text_field('field_floating_cta_text', 'Floating CTA Text', 'floating_cta_text'),
            vipru_text_field('field_route_button_text', 'Route Button Text', 'route_button_text'),
            vipru_text_field('field_whatsapp_button_text', 'WhatsApp Button Text', 'whatsapp_button_text'),
        ],
        'location' => [[['param' => 'options_page', 'operator' => '==', 'value' => 'vipru-theme-settings']]],
    ]);

    acf_add_local_field_group([
        'key' => 'group_vipru_calculator_settings',
        'title' => 'VIP-RU Calculator Settings',
        'fields' => [
            vipru_group_field('field_calculator_pricing', 'Pricing Table', 'calculator_pricing', [
                vipru_message_field(
                    'field_calculator_pricing_help',
                    'How To Fill Prices',
                    'Enter prices as comma-separated values in the order: <strong>2, 3, 4, 5, 6, 7, 8, 9, 10 Personen</strong>. Use a dot or comma for decimals. Example: <code>25, 33, 36, 40, 45, 49, 52, 54, 60</code>.'
                ),
                vipru_pricing_textarea_field('field_vip_weekday', 'VIP Sauna weekday prices', 'vip_weekday', '25, 33, 36, 40, 45, 49, 52, 54, 60'),
                vipru_pricing_textarea_field('field_vip_weekend', 'VIP Sauna weekend prices', 'vip_weekend', '30, 36, 44, 50, 54, 60, 64, 68, 70'),
                vipru_pricing_textarea_field('field_mix_weekday', 'Russische Sauna + Hamam weekday prices', 'mix_weekday', '55, 63, 68, 75, 83, 88, 92, 96, 100'),
                vipru_pricing_textarea_field('field_mix_weekend', 'Russische Sauna + Hamam weekend prices', 'mix_weekend', '55, 63, 68, 75, 83, 88, 92, 96, 100'),
                vipru_pricing_textarea_field('field_fish_weekday', 'Fischer Sauna weekday prices', 'fishbanua_weekday', '25, 33, 36, 40, 45, 49, 52, 54, 60'),
                vipru_pricing_textarea_field('field_fish_weekend', 'Fischer Sauna weekend prices', 'fishbanua_weekend', '30, 36, 44, 50, 54, 60, 64, 68, 70'),
                vipru_pricing_textarea_field('field_lux_weekday', 'Lux Sauna prices', 'lux_weekday', '40, 45, 50, 55, 60, 63, 68, 72, 75'),
                vipru_pricing_textarea_field('field_lux_weekend', 'Lux Sauna prices (weekend)', 'lux_weekend', '40, 45, 50, 55, 60, 63, 68, 72, 75'),
                vipru_pricing_textarea_field('field_holz_weekday', 'Holzsauna prices', 'drovami_weekday', '42, 51, 54, 60, 66, 70, 72, 76, 80'),
                vipru_pricing_textarea_field('field_holz_weekend', 'Holzsauna prices (weekend)', 'drovami_weekend', '42, 51, 54, 60, 66, 70, 72, 76, 80'),
                vipru_pricing_textarea_field('field_hamam_weekday', 'Hamam prices', 'hamam_weekday', '42, 51, 54, 60, 66, 70, 72, 76, 80'),
                vipru_pricing_textarea_field('field_hamam_weekend', 'Hamam prices (weekend)', 'hamam_weekend', '42, 51, 54, 60, 66, 70, 72, 76, 80'),
                vipru_pricing_textarea_field('field_massage_weekday', 'Massage weekday prices', 'massage_weekday', '30, 36, 44, 50, 54, 60, 64, 68, 70'),
                vipru_pricing_textarea_field('field_massage_weekend', 'Massage weekend prices', 'massage_weekend', '40, 45, 50, 55, 60, 63, 68, 72, 75'),
            ]),
            vipru_group_field('field_calculator_extras', 'Extra Prices', 'calculator_extras', [
                ['key' => 'field_extra_adult', 'label' => 'Extra Adult', 'name' => 'extraAdult', 'type' => 'number', 'step' => '0.01'],
                ['key' => 'field_child_discount', 'label' => 'Child 6-12', 'name' => 'child6to12', 'type' => 'number', 'step' => '0.01'],
                ['key' => 'field_banshchik', 'label' => 'Banja Meister', 'name' => 'banshchik', 'type' => 'number', 'step' => '0.01'],
                ['key' => 'field_birch', 'label' => 'Birch Veniki', 'name' => 'birchVeniki', 'type' => 'number', 'step' => '0.01'],
                ['key' => 'field_oak', 'label' => 'Oak Veniki', 'name' => 'oakVeniki', 'type' => 'number', 'step' => '0.01'],
                ['key' => 'field_massage_minute', 'label' => 'Massage Price Per Minute', 'name' => 'massageMinute', 'type' => 'number', 'step' => '0.01'],
            ]),
        ],
        'location' => [[['param' => 'options_page', 'operator' => '==', 'value' => 'vipru-theme-settings']]],
    ]);

    acf_add_local_field_group([
        'key' => 'group_vipru_homepage',
        'title' => 'Homepage Content',
        'fields' => [
            vipru_text_field('field_home_hero_title', 'Hero Title', 'home_hero_title'),
            vipru_textarea_field('field_home_hero_lead', 'Hero Lead', 'home_hero_lead', 2),
            vipru_text_field('field_home_about_title', 'About Title', 'home_about_title'),
            vipru_group_field('field_home_about_card_1', 'About Card 1', 'home_about_card_1', [
                vipru_text_field('field_home_about_card_1_number', 'Number', 'number'),
                vipru_text_field('field_home_about_card_1_title', 'Title', 'title'),
                vipru_textarea_field('field_home_about_card_1_text_1', 'Text 1', 'text_1'),
                vipru_textarea_field('field_home_about_card_1_text_2', 'Text 2', 'text_2'),
                vipru_image_field('field_home_about_card_1_image', 'Image', 'image'),
                vipru_text_field('field_home_about_card_1_button_text', 'Button Text', 'button_text'),
                vipru_text_field('field_home_about_card_1_link_text', 'Link Text', 'link_text'),
                ['key' => 'field_home_about_card_1_link_url', 'label' => 'Link URL', 'name' => 'link_url', 'type' => 'url'],
            ]),
            vipru_group_field('field_home_about_card_2', 'About Card 2', 'home_about_card_2', [
                vipru_text_field('field_home_about_card_2_number', 'Number', 'number'),
                vipru_text_field('field_home_about_card_2_title', 'Title', 'title'),
                vipru_textarea_field('field_home_about_card_2_text_1', 'Text 1', 'text_1'),
                vipru_textarea_field('field_home_about_card_2_text_2', 'Text 2', 'text_2'),
                vipru_image_field('field_home_about_card_2_image', 'Image', 'image'),
                vipru_text_field('field_home_about_card_2_button_text', 'Button Text', 'button_text'),
                vipru_text_field('field_home_about_card_2_link_text', 'Link Text', 'link_text'),
                ['key' => 'field_home_about_card_2_link_url', 'label' => 'Link URL', 'name' => 'link_url', 'type' => 'url'],
            ]),
            vipru_group_field('field_home_about_card_3', 'About Card 3', 'home_about_card_3', [
                vipru_text_field('field_home_about_card_3_number', 'Number', 'number'),
                vipru_text_field('field_home_about_card_3_title', 'Title', 'title'),
                vipru_textarea_field('field_home_about_card_3_text_1', 'Text 1', 'text_1'),
                vipru_textarea_field('field_home_about_card_3_text_2', 'Text 2', 'text_2'),
                vipru_image_field('field_home_about_card_3_image', 'Image', 'image'),
                vipru_text_field('field_home_about_card_3_button_text', 'Button Text', 'button_text'),
                vipru_text_field('field_home_about_card_3_link_text', 'Link Text', 'link_text'),
                ['key' => 'field_home_about_card_3_link_url', 'label' => 'Link URL', 'name' => 'link_url', 'type' => 'url'],
            ]),
            vipru_text_field('field_home_location_badge', 'Location Badge', 'home_location_badge'),
            vipru_text_field('field_home_location_title', 'Location Title', 'home_location_title'),
            vipru_textarea_field('field_home_location_subtitle', 'Location Subtitle', 'home_location_subtitle'),
            vipru_image_field('field_home_location_gallery_image_1', 'Location Gallery Image 1', 'home_location_gallery_image_1'),
            vipru_image_field('field_home_location_gallery_image_2', 'Location Gallery Image 2', 'home_location_gallery_image_2'),
            vipru_image_field('field_home_location_gallery_image_3', 'Location Gallery Image 3', 'home_location_gallery_image_3'),
            vipru_image_field('field_home_location_gallery_image_4', 'Location Gallery Image 4', 'home_location_gallery_image_4'),
            vipru_text_field('field_home_location_about_title', 'Location About Title', 'home_location_about_title'),
            vipru_textarea_field('field_home_location_about_description', 'Location About Description', 'home_location_about_description'),
            vipru_textarea_field('field_home_hours_text', 'Opening Hours', 'home_hours_text'),
            vipru_text_field('field_home_location_button_text', 'Location Button Text', 'home_location_button_text'),
            vipru_text_field('field_home_cta_bg', 'CTA Background Text', 'home_cta_bg'),
            vipru_textarea_field('field_home_cta_note', 'CTA Note', 'home_cta_note'),
            vipru_text_field('field_home_cta_item_1', 'CTA Item 1', 'home_cta_item_1'),
            vipru_text_field('field_home_cta_item_2', 'CTA Item 2', 'home_cta_item_2'),
            vipru_text_field('field_home_cta_item_3', 'CTA Item 3', 'home_cta_item_3'),
            vipru_text_field('field_home_cta_item_4', 'CTA Item 4', 'home_cta_item_4'),
            vipru_text_field('field_home_cta_item_5', 'CTA Item 5', 'home_cta_item_5'),
            vipru_text_field('field_home_cta_item_6', 'CTA Item 6', 'home_cta_item_6'),
        ],
        'location' => [[['param' => 'page_type', 'operator' => '==', 'value' => 'front_page']]],
    ]);

    acf_add_local_field_group([
        'key' => 'group_vipru_service_template',
        'title' => 'Service Page Content',
        'fields' => [
            vipru_group_field('field_service_hero', 'Hero Section', 'hero_section', [
                vipru_text_field('field_service_browser_title', 'Browser Title', 'browser_title'),
                vipru_text_field('field_service_name', 'Service Name', 'service_name'),
                vipru_text_field('field_service_hero_class', 'Hero CSS Class', 'hero_css_class'),
                vipru_image_field('field_service_hero_background_image', 'Hero Background Image', 'background_image'),
                vipru_text_field('field_service_hero_title', 'Hero Title', 'title'),
                vipru_textarea_field('field_service_hero_lead', 'Hero Lead', 'lead'),
                vipru_text_field('field_service_buy_button_text', 'Buy Button Text', 'buy_button_text'),
            ]),
            vipru_group_field('field_service_feature', 'Feature Section', 'feature_section', [
                vipru_text_field('field_service_feature_label', 'Label', 'label'),
                vipru_text_field('field_service_feature_title', 'Title', 'title'),
                vipru_textarea_field('field_service_feature_text_1', 'Text 1', 'text_1'),
                vipru_textarea_field('field_service_feature_text_2', 'Text 2', 'text_2'),
                vipru_text_field('field_service_feature_button_text', 'Button Text', 'button_text'),
                vipru_image_field('field_service_feature_image_1', 'Slider Image 1', 'image_1'),
                vipru_image_field('field_service_feature_image_2', 'Slider Image 2', 'image_2'),
                vipru_image_field('field_service_feature_image_3', 'Slider Image 3', 'image_3'),
                vipru_image_field('field_service_feature_image_4', 'Slider Image 4', 'image_4'),
            ]),
            vipru_group_field('field_service_gallery', 'Gallery Section', 'gallery_section', [
                vipru_text_field('field_service_gallery_title', 'Gallery Title', 'title'),
                vipru_text_field('field_service_gallery_lead', 'Gallery Lead', 'lead'),
                vipru_image_field('field_service_gallery_image_1', 'Gallery Image 1', 'image_1'),
                vipru_image_field('field_service_gallery_image_2', 'Gallery Image 2', 'image_2'),
                vipru_image_field('field_service_gallery_image_3', 'Gallery Image 3', 'image_3'),
                vipru_image_field('field_service_gallery_image_4', 'Gallery Image 4', 'image_4'),
                vipru_image_field('field_service_gallery_image_5', 'Gallery Image 5', 'image_5'),
                vipru_image_field('field_service_gallery_image_6', 'Gallery Image 6', 'image_6'),
                vipru_text_field('field_service_video_title', 'Video Title', 'video_title'),
                ['key' => 'field_service_video_file', 'label' => 'Video File', 'name' => 'video_file', 'type' => 'file', 'return_format' => 'array'],
                vipru_image_field('field_service_video_poster', 'Video Poster', 'video_poster'),
            ]),
            vipru_group_field('field_service_calculator', 'Calculator Section', 'calculator_section', [
                [
                    'key' => 'field_service_calculator_key',
                    'label' => 'Service Key',
                    'name' => 'service_key',
                    'type' => 'select',
                    'choices' => [
                        'vip' => 'VIP',
                        'mix' => 'Russische Sauna + Hamam (30%)',
                        'fishbanua' => 'Fischer',
                        'lux' => 'Lux',
                        'drovami' => 'Holzsauna',
                        'hamam' => 'Hamam',
                        'massage' => 'Massage',
                    ],
                ],
                vipru_text_field('field_service_calculator_title', 'Calculator Title', 'title'),
                vipru_text_field('field_service_calculator_subtitle', 'Calculator Subtitle', 'subtitle'),
            ]),
            vipru_group_field('field_service_gutschein', 'Gutschein Form', 'gutschein_section', [
                vipru_text_field('field_service_gutschein_eyebrow', 'Eyebrow', 'eyebrow'),
                vipru_text_field('field_service_gutschein_title', 'Title', 'title'),
                vipru_textarea_field('field_service_gutschein_description', 'Description', 'description'),
                vipru_text_field('field_service_gutschein_paypal', 'PayPal Button Text', 'paypal_text'),
                vipru_text_field('field_service_gutschein_whatsapp', 'WhatsApp Button Text', 'whatsapp_text'),
                vipru_textarea_field('field_service_gutschein_note', 'Note', 'note'),
            ]),
        ],
        'location' => [[['param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/service-template.php']]],
    ]);

    acf_add_local_field_group([
        'key' => 'group_vipru_food_template',
        'title' => 'Food Menu Content',
        'fields' => [
            vipru_text_field('field_food_title', 'Page Title', 'food_title'),
            vipru_text_field('field_food_subtitle', 'Subtitle', 'food_subtitle'),
            vipru_repeater_field('field_food_categories', 'Menu Categories', 'food_categories', [
                vipru_text_field('field_food_category_title', 'Category Title', 'title'),
                vipru_repeater_field('field_food_category_items', 'Dishes', 'items', [
                    vipru_text_field('field_food_item_name', 'Dish Name', 'name'),
                    vipru_textarea_field('field_food_item_description', 'Dish Description', 'description', 2),
                    vipru_text_field('field_food_item_price', 'Price', 'price'),
                    vipru_image_field('field_food_item_image', 'Dish Photo', 'image'),
                ], 'Add Dish'),
            ], 'Add Category'),
            vipru_textarea_field('field_food_note', 'Info Note', 'food_note'),
            vipru_text_field('field_food_cta_text', 'CTA Text', 'food_cta_text'),
        ],
        'location' => [[['param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/food-template.php']]],
    ]);
}
add_action('acf/init', 'vipru_register_acf_fields');
