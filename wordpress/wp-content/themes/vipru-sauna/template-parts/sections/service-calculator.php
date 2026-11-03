<?php
if (!defined('ABSPATH')) {
    exit;
}
$service = $args['service'];
$is_massage = $service['calculator_key'] === 'massage';
$calculator_settings = vipru_get_calculator_settings();
$pricing_table = $calculator_settings['pricingTable'] ?? [];
$extra_prices = $calculator_settings['extraPrices'] ?? [];
$service_pricing = $pricing_table[$service['calculator_key']] ?? ['weekday' => [0]];
$default_hourly_price = (float) ($service_pricing['weekday'][0] ?? 0);
$default_hours = 2;
$default_base_price = $default_hourly_price * $default_hours;
$massage_minute_price = (float) ($extra_prices['massageMinute'] ?? 1);
$default_minutes = 60;
$default_massage_price = $default_minutes * $massage_minute_price;
$banshchik_price = (float) ($extra_prices['banshchik'] ?? 12.5);
$birch_price = (float) ($extra_prices['birchVeniki'] ?? 9);
$oak_price = (float) ($extra_prices['oakVeniki'] ?? 10);
$combo_offer_map = [
    'drovami' => [
        'label' => __('Holzsauna + Hamam (30%)', 'vipru-sauna'),
        'hint' => __('Zusammen mieten und den Kombi-Preis auswaehlen.', 'vipru-sauna'),
    ],
    'hamam' => [
        'label' => __('Hamam + Holzsauna (30%)', 'vipru-sauna'),
        'hint' => __('Zusammen mieten und den Kombi-Preis auswaehlen.', 'vipru-sauna'),
    ],
];
$combo_offer = $combo_offer_map[$service['calculator_key']] ?? null;
?>
<section id="calculator" class="calculator-section">
    <div class="container">
        <h2><?php echo esc_html($service['calculator_title']); ?></h2>
        <p class="calculator-subtitle"><?php echo esc_html($service['calculator_subtitle']); ?></p>

        <div class="calculator-wrapper">
            <form class="calculator-form" id="saunaCalculator">
                <input type="hidden" name="serviceType" value="<?php echo esc_attr($service['calculator_key']); ?>">

                <?php if ($is_massage) : ?>
                    <div class="form-group">
                        <label><?php esc_html_e('Dauer in Minuten:', 'vipru-sauna'); ?></label>
                        <div class="guest-input">
                            <label for="minutes"><?php esc_html_e('Minuten', 'vipru-sauna'); ?></label>
                            <div class="counter-input">
                                <button type="button" class="counter-btn counter-minus" data-for="minutes">−</button>
                                <input type="number" id="minutes" name="minutes" min="45" value="60" class="counter-value">
                                <button type="button" class="counter-btn counter-plus" data-for="minutes">+</button>
                            </div>
                        </div>
                        <p class="guest-hint" style="margin-top: 15px; font-size: 14px; color: #666;"><?php echo esc_html(sprintf(__('Preis: %s pro Minute', 'vipru-sauna'), number_format($massage_minute_price, 2, '.', '') . '€')); ?></p>
                    </div>
                <?php else : ?>
                    <div class="form-group">
                        <label><?php esc_html_e('Aufenthaltsdauer:', 'vipru-sauna'); ?></label>
                        <div class="guest-input">
                            <label for="hours"><?php esc_html_e('Stunden', 'vipru-sauna'); ?></label>
                            <div class="counter-input">
                                <button type="button" class="counter-btn counter-minus" data-for="hours">−</button>
                                <input type="number" id="hours" name="hours" min="2" value="2" class="counter-value">
                                <button type="button" class="counter-btn counter-plus" data-for="hours">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label><?php esc_html_e('Zeitraum:', 'vipru-sauna'); ?></label>
                        <div class="radio-group">
                            <label class="radio-option"><input type="radio" name="period" value="weekday" checked><span><?php esc_html_e('Werktag (Do ganztags, Fr bis 16:00)', 'vipru-sauna'); ?></span></label>
                            <label class="radio-option"><input type="radio" name="period" value="weekend"><span><?php esc_html_e('Wochenende (Fr ab 16:00, Sa-So)', 'vipru-sauna'); ?></span></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label><?php esc_html_e('Anzahl Personen:', 'vipru-sauna'); ?></label>
                        <div class="guests-grid">
                            <div class="guest-input">
                                <label for="adultsCount"><?php esc_html_e('Erwachsene (12+)', 'vipru-sauna'); ?></label>
                                <div class="counter-input">
                                    <button type="button" class="counter-btn counter-minus" data-for="adultsCount">−</button>
                                    <input type="number" id="adultsCount" name="adultsCount" min="0" value="2" class="counter-value">
                                    <button type="button" class="counter-btn counter-plus" data-for="adultsCount">+</button>
                                </div>
                            </div>
                        </div>
                        <p class="guest-hint" style="margin-top: 15px; font-size: 14px; color: #666;"><?php esc_html_e('Kinder erhalten Rabatt. Details teilen wir direkt im Chat mit.', 'vipru-sauna'); ?></p>
                    </div>

                    <div class="form-group">
                        <label><?php esc_html_e('Zusatzleistungen:', 'vipru-sauna'); ?></label>
                        <div class="services-grid">
                            <div class="service-input">
                                <label for="banshchikCount"><?php esc_html_e('Banja-Meister (Gaenge)', 'vipru-sauna'); ?></label>
                                <div class="counter-input">
                                    <button type="button" class="counter-btn counter-minus" data-for="banshchikCount">−</button>
                                    <input type="number" id="banshchikCount" name="banshchikCount" min="0" value="0" class="counter-value">
                                    <button type="button" class="counter-btn counter-plus" data-for="banshchikCount">+</button>
                                </div>
                                <p class="service-hint"><?php echo esc_html(number_format($banshchik_price, 2, '.', '') . '€ ' . __('pro Gang', 'vipru-sauna')); ?></p>
                            </div>
                            <div class="service-input">
                                <label for="birchVeniki"><?php esc_html_e('Birkenquast', 'vipru-sauna'); ?></label>
                                <div class="counter-input">
                                    <button type="button" class="counter-btn counter-minus" data-for="birchVeniki">−</button>
                                    <input type="number" id="birchVeniki" name="birchVeniki" min="0" value="0" class="counter-value">
                                    <button type="button" class="counter-btn counter-plus" data-for="birchVeniki">+</button>
                                </div>
                                <p class="service-hint"><?php echo esc_html(number_format($birch_price, 2, '.', '') . '€ ' . __('pro Stueck', 'vipru-sauna')); ?></p>
                            </div>
                            <div class="service-input">
                                <label for="oakVeniki"><?php esc_html_e('Eichenquast', 'vipru-sauna'); ?></label>
                                <div class="counter-input">
                                    <button type="button" class="counter-btn counter-minus" data-for="oakVeniki">−</button>
                                    <input type="number" id="oakVeniki" name="oakVeniki" min="0" value="0" class="counter-value">
                                    <button type="button" class="counter-btn counter-plus" data-for="oakVeniki">+</button>
                                </div>
                                <p class="service-hint"><?php echo esc_html(number_format($oak_price, 2, '.', '') . '€ ' . __('pro Stueck', 'vipru-sauna')); ?></p>
                            </div>
                        </div>
                    </div>

                    <?php if ($combo_offer) : ?>
                        <div class="form-group">
                            <label><?php esc_html_e('Kombi-Angebot:', 'vipru-sauna'); ?></label>
                            <div class="radio-group">
                                <label class="radio-option">
                                    <input type="checkbox" id="comboPackage" name="comboPackage" value="mix" data-combo-service="mix">
                                    <span><?php echo esc_html($combo_offer['label']); ?></span>
                                </label>
                            </div>
                            <p class="guest-hint" style="margin-top: 15px; font-size: 14px; color: #666;"><?php echo esc_html($combo_offer['hint']); ?></p>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <button type="button" class="btn" id="bookButton"><?php esc_html_e('Anfrage Senden', 'vipru-sauna'); ?></button>
            </form>

            <div class="calculator-price-column">
                <div class="price-column-inner">
                    <h3><?php esc_html_e('Preisuebersicht', 'vipru-sauna'); ?></h3>
                    <div class="price-breakdown">
                        <div class="price-row">
                            <span><?php echo $is_massage ? esc_html__('Massagepreis:', 'vipru-sauna') : esc_html__('Grundpreis:', 'vipru-sauna'); ?></span>
                            <span id="basePrice"><?php echo esc_html($is_massage ? number_format($default_massage_price, 2, '.', '') . ' € (' . $default_minutes . ' Min.)' : number_format($default_base_price, 2, '.', '') . ' € (' . $default_hours . ' Std.)'); ?></span>
                        </div>
                        <?php if (!$is_massage) : ?>
                            <div class="price-row" id="extraAdultsRow" style="display: none;"><span><?php esc_html_e('Weitere Erwachsene:', 'vipru-sauna'); ?></span><span id="extraAdultsPrice">0.00 €</span></div>
                            <div class="price-row" id="childrenRow" style="display: none;"><span><?php esc_html_e('Kinder:', 'vipru-sauna'); ?></span><span id="childrenPrice">0.00 €</span></div>
                            <div class="price-row" id="banshchikRow" style="display: none;"><span><?php esc_html_e('Banja-Meister:', 'vipru-sauna'); ?></span><span id="banshchikPrice">0.00 €</span></div>
                            <div class="price-row" id="birchVenikiRow" style="display: none;"><span><?php esc_html_e('Birkenquast:', 'vipru-sauna'); ?></span><span id="birchVenikiPrice">0.00 €</span></div>
                            <div class="price-row" id="oakVenikiRow" style="display: none;"><span><?php esc_html_e('Eichenquast:', 'vipru-sauna'); ?></span><span id="oakVenikiPrice">0.00 €</span></div>
                        <?php endif; ?>
                        <div class="price-row total"><span><?php esc_html_e('Gesamt:', 'vipru-sauna'); ?></span><span id="totalPrice"><?php echo esc_html($is_massage ? number_format($default_massage_price, 2, '.', '') . ' €' : number_format($default_base_price, 2, '.', '') . ' €'); ?></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
