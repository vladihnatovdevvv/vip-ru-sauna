<?php
if (!defined('ABSPATH')) {
    exit;
}

function vipru_theme_asset(string $path = ''): string
{
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

function vipru_get_icon_svg(string $icon): string
{
    $icons = [
        'telegram' => '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" aria-hidden="true"><rect width="32" height="32" fill="rgb(255,255,255)" fill-opacity="0"></rect><path d="M25.2332 26.1201L25.2332 26.1175L25.2572 26.0601L29.2558 5.90014L29.2558 5.83614C29.2558 5.33348 29.0692 4.89481 28.6665 4.63214C28.3132 4.40148 27.9065 4.38548 27.6212 4.40681C27.3556 4.43083 27.0935 4.4845 26.8398 4.56681C26.7316 4.60168 26.6249 4.64082 26.5198 4.68414L26.5025 4.69081L4.20915 13.4361L4.20249 13.4388C4.13471 13.462 4.06837 13.4891 4.00382 13.5201C3.84527 13.5914 3.69315 13.6761 3.54915 13.7735C3.26249 13.9708 2.71715 14.4348 2.80915 15.1708C2.88515 15.7815 3.30515 16.1681 3.58915 16.3695C3.75679 16.487 3.93702 16.5853 4.12649 16.6628L4.16915 16.6815L4.18249 16.6855L4.19182 16.6895L8.09315 18.0028C8.07982 18.2468 8.10382 18.4961 8.16915 18.7428L10.1225 26.1548C10.2292 26.5588 10.4598 26.9193 10.7819 27.1855C11.1039 27.4518 11.5013 27.6105 11.9182 27.6393C12.3351 27.6682 12.7505 27.5657 13.1062 27.3463C13.4618 27.1269 13.7398 26.8016 13.9012 26.4161L16.9518 23.1548L22.1905 27.1708L22.2652 27.2028C22.7412 27.4108 23.1852 27.4761 23.5918 27.4215C23.9985 27.3655 24.3212 27.1948 24.5638 27.0015C24.8445 26.7739 25.0682 26.484 25.2172 26.1548L25.2278 26.1321L25.2318 26.1241L25.2332 26.1201ZM10.1025 18.2335C10.0809 18.1512 10.086 18.0642 10.1172 17.9851C10.1483 17.906 10.2039 17.8389 10.2758 17.7935L23.5038 9.39347C23.5038 9.39347 24.2825 8.92014 24.2545 9.39347C24.2545 9.39347 24.3932 9.47614 23.9758 9.86414C23.5812 10.2335 14.5478 18.9548 13.6332 19.8375C13.5823 19.8869 13.5467 19.9498 13.5305 20.0188L12.0558 25.6455L10.1025 18.2321L10.1025 18.2335Z" fill="rgb(171,140,107)" fill-rule="evenodd"></path></svg>',
        'whatsapp' => '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" aria-hidden="true"><rect width="32" height="32" fill="rgb(255,255,255)" fill-opacity="0"></rect><path d="M16.0013 2.6665C23.3653 2.6665 29.3347 8.63584 29.3347 15.9998C29.3347 23.3638 23.3653 29.3332 16.0013 29.3332C13.645 29.337 11.3302 28.7134 9.29465 27.5265L2.67332 29.3332L4.47599 22.7092C3.28811 20.673 2.66405 18.3572 2.66799 15.9998C2.66799 8.63584 8.63732 2.6665 16.0013 2.6665ZM11.4573 9.73317L11.1907 9.74384C11.018 9.75435 10.8493 9.79971 10.6947 9.87717C10.55 9.95908 10.418 10.0615 10.3027 10.1812C10.1427 10.3318 10.052 10.4625 9.95465 10.5892C9.46148 11.2304 9.19595 12.0176 9.19999 12.8265C9.20265 13.4798 9.37332 14.1158 9.63999 14.7105C10.1853 15.9132 11.0827 17.1865 12.2667 18.3665C12.552 18.6505 12.832 18.9358 13.1333 19.2012C14.6045 20.4965 16.3577 21.4306 18.2533 21.9292L19.0107 22.0452C19.2573 22.0585 19.504 22.0398 19.752 22.0278C20.1403 22.0078 20.5195 21.9026 20.8627 21.7198C21.0373 21.6299 21.2077 21.532 21.3733 21.4265C21.3733 21.4265 21.4307 21.3892 21.54 21.3065C21.72 21.1732 21.8307 21.0785 21.98 20.9225C22.0907 20.8078 22.1867 20.6732 22.26 20.5198C22.364 20.3025 22.468 19.8878 22.5107 19.5425C22.5427 19.2785 22.5333 19.1345 22.5293 19.0452C22.524 18.9025 22.4053 18.7545 22.276 18.6918L21.5 18.3438C21.5 18.3438 20.34 17.8385 19.6307 17.5158C19.5564 17.4834 19.4769 17.4649 19.396 17.4612C19.3048 17.4518 19.2126 17.4621 19.1257 17.4913C19.0387 17.5205 18.959 17.568 18.892 17.6305C18.8853 17.6278 18.796 17.7038 17.832 18.8718C17.7767 18.9462 17.7004 19.0024 17.6131 19.0332C17.5257 19.0641 17.4311 19.0683 17.3413 19.0452C17.2545 19.0219 17.1694 18.9925 17.0867 18.9572C16.9213 18.8878 16.864 18.8612 16.7507 18.8132C15.9854 18.4792 15.2769 18.028 14.6507 17.4758C14.4827 17.3292 14.3267 17.1692 14.1667 17.0145C13.6421 16.5121 13.185 15.9438 12.8067 15.3238L12.728 15.1972C12.6715 15.1121 12.6258 15.0202 12.592 14.9238C12.5413 14.7278 12.6733 14.5705 12.6733 14.5705C12.6733 14.5705 12.9973 14.2158 13.148 14.0238C13.2947 13.8372 13.4187 13.6558 13.4987 13.5265C13.656 13.2732 13.7053 13.0132 13.6227 12.8118C13.2493 11.8998 12.8627 10.9918 12.4653 10.0905C12.3867 9.91184 12.1533 9.78384 11.9413 9.7585C11.8693 9.7505 11.7973 9.7425 11.7253 9.73717C11.5463 9.72828 11.3668 9.73006 11.188 9.7425L11.456 9.73184L11.4573 9.73317Z" fill="rgb(171,140,107)" fill-rule="nonzero"></path></svg>',
        'instagram' => '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" aria-hidden="true"><rect width="32" height="32"></rect><g><g><path d="M15.5368 2C11.8604 2 11.3994 2.0156 9.95556 2.08145C8.51473 2.14718 7.5307 2.37605 6.66964 2.71062C5.77948 3.05656 5.02457 3.51946 4.27203 4.27199C3.51946 5.02453 3.05656 5.77952 2.71066 6.66968C2.37601 7.5307 2.14722 8.51473 2.08141 9.95556C2.01556 11.3994 2 11.8604 2 15.5368C2 19.2131 2.01556 19.6741 2.08141 21.118C2.14722 22.5588 2.37601 23.5428 2.71066 24.4038C3.0566 25.294 3.5195 26.0489 4.27203 26.8015C5.02461 27.5541 5.77948 28.017 6.66964 28.3629C7.5307 28.6975 8.51473 28.9263 9.95556 28.9921C11.3994 29.0579 11.8604 29.0735 15.5368 29.0735C19.2131 29.0735 19.6741 29.0579 21.118 28.9921C22.5588 28.9263 23.5428 28.6975 24.4038 28.3629C25.294 28.017 26.0489 27.5541 26.8015 26.8015C27.5541 26.0489 28.017 25.294 28.3629 24.4038C28.6975 23.5428 28.9263 22.5588 28.9921 21.118C29.0579 19.6741 29.0735 19.2131 29.0735 15.5368C29.0735 11.8604 29.0579 11.3994 28.9921 9.95556C28.9263 8.51473 28.6975 7.5307 28.3629 6.66968C28.017 5.77952 27.5541 5.02453 26.8015 4.27199C26.0489 3.51946 25.294 3.05656 24.4038 2.71062C23.5428 2.37605 22.5588 2.14718 21.118 2.08145C19.6741 2.0156 19.2131 2 15.5368 2ZM15.5368 4.43904C19.1512 4.43904 19.5794 4.45286 21.0068 4.51799C22.3266 4.57816 23.0434 4.79868 23.5203 4.98406C24.1522 5.22966 24.6032 5.52296 25.0768 5.99666C25.5506 6.47035 25.8439 6.92132 26.0895 7.55315C26.2748 8.03015 26.4954 8.74694 26.5555 10.0667C26.6207 11.4942 26.6345 11.9223 26.6345 15.5368C26.6345 19.1512 26.6207 19.5794 26.5555 21.0068C26.4954 22.3266 26.2748 23.0434 26.0895 23.5203C25.8439 24.1522 25.5506 24.6032 25.0768 25.0768C24.6032 25.5506 24.1522 25.8439 23.5204 26.0895C23.0434 26.2748 22.3266 26.4954 21.0068 26.5555C19.5796 26.6207 19.1515 26.6345 15.5368 26.6345C11.922 26.6345 11.494 26.6207 10.0667 26.5555C8.7469 26.4954 8.03015 26.2748 7.55319 26.0895C6.92128 25.8439 6.47035 25.5506 5.9967 25.0768C5.52301 24.6032 5.22966 24.1522 4.98406 23.5204C4.79868 23.0434 4.5782 22.3266 4.51799 21.0068C4.45286 19.5794 4.43904 19.1512 4.43904 15.5368C4.43904 11.9223 4.45286 11.4942 4.51799 10.0667C4.5782 8.7469 4.79868 8.03015 4.98406 7.55319C5.22966 6.92128 5.523 6.47035 5.99666 5.9967C6.47035 5.52296 6.92132 5.22966 7.55315 4.98406C8.03015 4.79868 8.74694 4.57816 10.0667 4.51799C11.4942 4.45286 11.9223 4.43904 15.5368 4.43904L15.5368 4.43904Z" fill="rgb(171,140,107)" fill-rule="nonzero"></path><path d="M15.5373 20.0489C13.0452 20.0489 11.025 18.0287 11.025 15.5367C11.025 13.0446 13.0452 11.0244 15.5373 11.0244C18.0293 11.0244 20.0495 13.0446 20.0495 15.5367C20.0495 18.0287 18.0293 20.0489 15.5373 20.0489ZM15.5373 8.58537C11.6981 8.58537 8.58594 11.6975 8.58594 15.5367C8.58594 19.3758 11.6981 22.488 15.5373 22.488C19.3764 22.488 22.4885 19.3758 22.4885 15.5367C22.4885 11.6975 19.3764 8.58537 15.5373 8.58537ZM24.3876 8.31072C24.3876 9.20789 23.6603 9.93512 22.7632 9.93512C21.8661 9.93512 21.1388 9.20789 21.1388 8.31072C21.1388 7.41359 21.8661 6.68628 22.7632 6.68628C23.6603 6.68628 24.3876 7.41359 24.3876 8.31072Z" fill="rgb(171,140,107)" fill-rule="nonzero"></path></g></g></svg>',
        'tiktok' => '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" aria-hidden="true"><rect width="32" height="32" fill="rgb(255,255,255)" fill-opacity="0"></rect><path d="M18.185 4C18.4328 6.1045 19.6629 7.77379 21.776 8.41467C22.6107 8.66782 23.4932 8.73524 24.3577 8.61167V11.8351C22.7221 11.9947 21.0777 11.621 19.6766 10.7699V18.8986C19.6766 20.538 19.0253 22.1103 17.8662 23.2694C16.7071 24.4285 15.1348 25.0798 13.4954 25.0798C11.856 25.0798 10.2838 24.4285 9.12465 23.2694C7.96554 22.1103 7.31427 20.538 7.31427 18.8986C7.31427 17.2592 7.96554 15.687 9.12465 14.5278C10.2838 13.3687 11.856 12.7175 13.4954 12.7175C13.9255 12.7175 14.3538 12.7625 14.7738 12.8518V16.1381C14.3709 16.0067 13.9499 15.94 13.5261 15.9404C12.8119 15.9404 12.1269 16.2241 11.6218 16.7291C11.1168 17.2342 10.8331 17.9192 10.8331 18.6334C10.8331 19.3476 11.1168 20.0326 11.6218 20.5377C12.1269 21.0427 12.8119 21.3264 13.5261 21.3264C14.2403 21.3264 14.9254 21.0427 15.4304 20.5377C15.9354 20.0326 16.2191 19.3476 16.2191 18.6334V4H18.185Z" fill="rgb(171,140,107)"></path></svg>',
        'route' => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" aria-hidden="true"><rect width="24" height="24" fill="rgb(255,255,255)" fill-opacity="0"></rect><g><path d="M24 0L24 24L0 24L0 0L24 0ZM12.593 23.258L12.582 23.26L12.511 23.295L12.491 23.299L12.477 23.295L12.406 23.26C12.396 23.256 12.387 23.259 12.382 23.265L12.378 23.275L12.361 23.703L12.366 23.723L12.376 23.736L12.48 23.81L12.495 23.814L12.507 23.81L12.611 23.736L12.623 23.72L12.627 23.703L12.61 23.276C12.608 23.266 12.601 23.259 12.593 23.258ZM12.858 23.145L12.845 23.147L12.66 23.24L12.65 23.25L12.647 23.261L12.665 23.691L12.67 23.703L12.678 23.71L12.879 23.803C12.891 23.807 12.902 23.803 12.908 23.795L12.912 23.781L12.878 23.167C12.875 23.155 12.868 23.147 12.858 23.145ZM12.143 23.147C12.1385 23.1449 12.1334 23.1444 12.1285 23.1455C12.1236 23.1466 12.1192 23.1492 12.116 23.153L12.11 23.167L12.076 23.781C12.076 23.793 12.083 23.801 12.093 23.805L12.108 23.803L12.309 23.71L12.319 23.702L12.323 23.691L12.34 23.261L12.337 23.249L12.327 23.239L12.143 23.147Z" fill-rule="nonzero"></path><path d="M18.0146 16C18.8103 16 19.5734 16.3161 20.136 16.8787C20.6986 17.4413 21.0146 18.2044 21.0146 19C21.0146 19.7956 20.6986 20.5587 20.136 21.1213C19.5734 21.6839 18.8103 22 18.0146 22C17.219 22 16.4559 21.6839 15.8933 21.1213C15.3307 20.5587 15.0146 19.7956 15.0146 19C15.0146 18.2044 15.3307 17.4413 15.8933 16.8787C16.4559 16.3161 17.219 16 18.0146 16ZM15.5146 4C16.7081 4 17.8527 4.47411 18.6966 5.31802C19.5405 6.16193 20.0146 7.30653 20.0146 8.5C20.0146 9.69347 19.5405 10.8381 18.6966 11.682C17.8527 12.5259 16.7081 13 15.5146 13L8.51465 13C7.85161 13 7.21572 13.2634 6.74688 13.7322C6.27804 14.2011 6.01465 14.837 6.01465 15.5C6.01465 16.163 6.27804 16.7989 6.74688 17.2678C7.21572 17.7366 7.85161 18 8.51465 18L13.0146 18C13.2799 18 13.5342 18.1054 13.7218 18.2929C13.9093 18.4804 14.0146 18.7348 14.0146 19C14.0146 19.2652 13.9093 19.5196 13.7218 19.7071C13.5342 19.8946 13.2799 20 13.0146 20L8.51465 20C7.32117 20 6.17658 19.5259 5.33267 18.682C4.48875 17.8381 4.01465 16.6935 4.01465 15.5C4.01465 14.3065 4.48875 13.1619 5.33267 12.318C6.17658 11.4741 7.32117 11 8.51465 11L15.5146 11C16.1777 11 16.8136 10.7366 17.2824 10.2678C17.7513 9.79893 18.0146 9.16304 18.0146 8.5C18.0146 7.83696 17.7513 7.20107 17.2824 6.73223C16.8136 6.26339 16.1777 6 15.5146 6L11.0146 6C10.7494 6 10.4951 5.89464 10.3075 5.70711C10.12 5.51957 10.0146 5.26522 10.0146 5C10.0146 4.73478 10.12 4.48043 10.3075 4.29289C10.4951 4.10536 10.7494 4 11.0146 4L15.5146 4ZM6.01465 2C6.8103 2 7.57336 2.31607 8.13597 2.87868C8.69858 3.44129 9.01465 4.20435 9.01465 5C9.01465 5.79565 8.69858 6.55871 8.13597 7.12132C7.57336 7.68393 6.8103 8 6.01465 8C5.219 8 4.45594 7.68393 3.89333 7.12132C3.33072 6.55871 3.01465 5.79565 3.01465 5C3.01465 4.20435 3.33072 3.44129 3.89333 2.87868C4.45594 2.31607 5.219 2 6.01465 2Z" fill="rgb(171,140,107)" fill-rule="nonzero"></path></g></svg>',
        'phone' => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" aria-hidden="true"><rect width="24" height="24" fill="rgb(255,255,255)" fill-opacity="0"></rect><path d="M0 0L24 0L24 24L0 24L0 0Z" fill-rule="nonzero"></path><path d="M21 16.42L21 19.956C21.0001 20.2092 20.9042 20.453 20.7316 20.6382C20.559 20.8234 20.3226 20.9363 20.07 20.954C19.633 20.984 19.276 21 19 21C10.163 21 3 13.837 3 5C3 4.724 3.015 4.367 3.046 3.93C3.06372 3.67744 3.17658 3.44101 3.3618 3.26841C3.54703 3.09581 3.79082 2.99989 4.044 3L7.58 3C7.70404 2.99987 7.8237 3.04586 7.91573 3.12902C8.00776 3.21218 8.0656 3.32658 8.078 3.45C8.101 3.68 8.122 3.863 8.142 4.002C8.34073 5.38892 8.748 6.73783 9.35 8.003C9.445 8.203 9.383 8.442 9.203 8.57L7.045 10.112C8.36445 13.1865 10.8145 15.6365 13.889 16.956L15.429 14.802C15.4919 14.714 15.5838 14.6509 15.6885 14.6237C15.7932 14.5964 15.9042 14.6068 16.002 14.653C17.267 15.2539 18.6156 15.6601 20.002 15.858C20.141 15.878 20.324 15.9 20.552 15.922C20.6752 15.9346 20.7894 15.9926 20.8724 16.0846C20.9553 16.1766 21.0012 16.2961 21.001 16.42L21 16.42Z" fill="rgb(255,255,255)" fill-rule="nonzero"></path></svg>',
    ];

    return $icons[$icon] ?? '';
}

function vipru_split_button_label(string $text): array
{
    $parts = preg_split('/\s+/', trim($text), 2);
    return [
        'main' => $parts[0] ?? '',
        'sub' => $parts[1] ?? '',
    ];
}

function vipru_has_acf(): bool
{
    return function_exists('get_field');
}

function vipru_get_field_value(string $field_name, $post_id = null, $default = null)
{
    if (!vipru_has_acf()) {
        return $default;
    }

    $value = get_field($field_name, $post_id);

    if ($value === null || $value === '' || $value === []) {
        return $default;
    }

    return $value;
}

function vipru_collect_media_group(array $source, string $prefix, int $count): array
{
    $items = [];

    for ($index = 1; $index <= $count; $index++) {
        if (!empty($source[$prefix . '_' . $index])) {
            $items[] = $source[$prefix . '_' . $index];
        }
    }

    return $items;
}

function vipru_collect_text_items(array $source, string $prefix, int $count): array
{
    $items = [];

    for ($index = 1; $index <= $count; $index++) {
        $value = $source[$prefix . '_' . $index] ?? '';
        if ($value !== '') {
            $items[] = $value;
        }
    }

    return $items;
}

function vipru_get_home_about_cards(int $post_id, array $defaults): array
{
    $cards = vipru_get_field_value('home_about_cards', $post_id, []);

    if (is_array($cards) && !empty($cards)) {
        return array_map(function ($card) {
            return [
                'number' => $card['number'] ?? '',
                'title' => $card['title'] ?? '',
                'text' => $card['text_1'] ?? '',
                'text_2' => $card['text_2'] ?? '',
                'image' => vipru_get_media_url($card['image'] ?? ''),
                'button_text' => $card['button_text'] ?? '',
                'link_text' => $card['link_text'] ?? '',
                'link_url' => $card['link_url'] ?? '',
            ];
        }, $cards);
    }

    $cards = [];
    for ($index = 1; $index <= 3; $index++) {
        $group = vipru_get_field_value('home_about_card_' . $index, $post_id, []);
        if (!empty($group)) {
            $cards[] = [
                'number' => $group['number'] ?? '',
                'title' => $group['title'] ?? '',
                'text' => $group['text_1'] ?? '',
                'text_2' => $group['text_2'] ?? '',
                'image' => vipru_get_media_url($group['image'] ?? ''),
                'button_text' => $group['button_text'] ?? '',
                'link_text' => $group['link_text'] ?? '',
                'link_url' => $group['link_url'] ?? '',
            ];
        }
    }

    return !empty($cards) ? $cards : $defaults['about_cards'];
}

function vipru_get_home_location_gallery(int $post_id, array $defaults): array
{
    $gallery = vipru_get_field_value('home_location_gallery', $post_id, []);
    if (is_array($gallery) && !empty($gallery)) {
        return $gallery;
    }

    $fixed = [];
    for ($index = 1; $index <= 4; $index++) {
        $value = vipru_get_field_value('home_location_gallery_image_' . $index, $post_id, null);
        if ($value) {
            $fixed[] = $value;
        }
    }

    return !empty($fixed) ? $fixed : $defaults['location_gallery'];
}

function vipru_get_home_cta_items(int $post_id, array $defaults): array
{
    $items = vipru_get_field_value('home_cta_items', $post_id, []);
    if (is_array($items) && !empty($items)) {
        return array_values(array_filter(array_map(function ($item) {
            return is_array($item) ? ($item['text'] ?? '') : $item;
        }, $items)));
    }

    $fixed = [];
    for ($index = 1; $index <= 6; $index++) {
        $value = vipru_get_field_value('home_cta_item_' . $index, $post_id, '');
        if ($value !== '') {
            $fixed[] = $value;
        }
    }

    return !empty($fixed) ? $fixed : $defaults['cta_items'];
}

function vipru_get_option_value(string $field_name, $default = null)
{
    return vipru_get_field_value($field_name, 'option', $default);
}

function vipru_get_home_url_with_anchor(string $anchor = ''): string
{
    $url = home_url('/');
    if ($anchor !== '') {
        $url .= '#' . ltrim($anchor, '#');
    }
    return $url;
}

function vipru_get_current_page_slug(): string
{
    $post_id = get_queried_object_id();

    if ($post_id) {
        $slug = (string) get_post_field('post_name', $post_id);
        if ($slug !== '') {
            return sanitize_title($slug);
        }
    }

    return is_front_page() ? 'home' : 'page';
}

function vipru_get_gutschein_anchor_id($post_id = null): string
{
    $slug = '';

    if ($post_id) {
        $slug = (string) get_post_field('post_name', (int) $post_id);
    } else {
        $slug = vipru_get_current_page_slug();
    }

    $slug = sanitize_title($slug);
    if ($slug === '') {
        $slug = is_front_page() ? 'home' : 'page';
    }

    return 'gutschein-form-' . $slug;
}

function vipru_get_gutschein_anchor_url($post_id = null): string
{
    $anchor = vipru_get_gutschein_anchor_id($post_id);

    if ($post_id) {
        $url = get_permalink((int) $post_id);
        return $url ? $url . '#' . $anchor : '#' . $anchor;
    }

    $object_id = get_queried_object_id();
    if ($object_id) {
        $url = get_permalink($object_id);
        return $url ? $url . '#' . $anchor : '#' . $anchor;
    }

    return home_url('/#' . $anchor);
}

function vipru_get_service_slugs(): array
{
    return ['bathhousevip', 'fishbanua', 'luxbanua', 'banua1', 'hamam', 'sauna1'];
}

function vipru_get_page_link_by_slug(string $slug): string
{
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page) : home_url('/' . $slug . '/');
}

function vipru_get_service_links(): array
{
    return [
        'bathhousevip' => vipru_get_page_link_by_slug('bathhousevip'),
        'fishbanua'    => vipru_get_page_link_by_slug('fishbanua'),
        'luxbanua'     => vipru_get_page_link_by_slug('luxbanua'),
        'banua1'       => vipru_get_page_link_by_slug('banua1'),
        'hamam'        => vipru_get_page_link_by_slug('hamam'),
        'sauna1'       => vipru_get_page_link_by_slug('sauna1'),
        'food'         => vipru_get_page_link_by_slug('food'),
        'gutschein'    => vipru_get_gutschein_anchor_url(),
    ];
}

function vipru_get_global_defaults(): array
{
    return [
        'phone_display'      => '+49 170 80 98 695',
        'phone_link'         => '+491708098695',
        'email'              => 'viprusauna@gmail.com',
        'whatsapp_number'    => '491708098695',
        'telegram_url'       => 'https://t.me/viprusauna',
        'instagram_url'      => 'https://www.instagram.com/viprusauna/',
        'tiktok_url'         => 'https://www.tiktok.com/@viprusauna?_r=1&_t=ZG-94sUpkHqxJh',
        'address_title'      => 'VIP-RU Sauna Dortmund',
        'address_lines'      => "Westricherstr 62\n44388 Dortmund\nLütgendortmund",
        'map_url'            => 'https://maps.google.com/?q=Westricherstr+62,44388+Dortmund,Deutschland',
        'map_lat'            => '51.5447',
        'map_lng'            => '7.5481',
        'paypal_business_email' => 'https://paypal.me/viprusauna',
        'callback_title'     => "Senden Sie\nIhre Anfrage",
        'callback_subtitle'  => 'Einfach Datum, Uhrzeit, Dauer und Personenzahl senden. Wir antworten direkt per WhatsApp.',
        'callback_notice'    => 'Mit dem Absenden wird WhatsApp mit Ihrer Anfrage geoeffnet.',
        'floating_cta_text'  => 'Anfrage Senden',
        'route_button_text'  => 'Route planen',
        'whatsapp_button_text' => 'WhatsApp oeffnen',
    ];
}

function vipru_get_global_settings(): array
{
    $defaults = vipru_get_global_defaults();
    $settings = [];

    foreach (array_keys($defaults) as $key) {
        $settings[$key] = vipru_get_option_value($key, $defaults[$key]);
    }

    // Keep the public contact email consistent even if a stale ACF option remains in the database.
    $settings['email'] = 'viprusauna@gmail.com';

    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = $custom_logo_id ? wp_get_attachment_image_url($custom_logo_id, 'full') : '';
    if (!$logo) {
        $logo = vipru_theme_asset('images/VIP-RU-Sauna2-02-1-1.png');
    }
    $settings['logo'] = $logo;

    return $settings;
}

function vipru_get_home_defaults(): array
{
    $links = vipru_get_service_links();

    return [
        'hero_background_class' => 'hero',
        'hero_title'            => 'Private Sauna, Hamam und Massage in Dortmund',
        'hero_lead'             => 'Entdecken Sie 4 Saunen, 1 Hamam, Massage und Speisen an einem Ort.',
        'about_title'           => 'Unsere Sauna- und Wellnessbereiche',
        'about_cards'           => [
            [
                'number' => '01',
                'title'  => 'Vier private Saunen',
                'text'   => 'Vier unterschiedliche private Saunen verbinden natuerliche Materialien, angenehme Waerme und ruhige Erholungszonen fuer Paare, Freunde und kleine Gruppen.',
                'text_2' => 'Jeder Bereich ist so gestaltet, dass Sie abschalten, durchatmen und neue Energie sammeln koennen.',
                'image'  => vipru_theme_asset('images/2026-02-06 15.29.18.jpg'),
                'button_text' => 'Anfrage Senden',
                'link_text'   => 'Mehr erfahren',
                'link_url'    => $links['banua1'],
            ],
            [
                'number' => '02',
                'title'  => 'Privater Hamam',
                'text'   => 'Unser Hamam bietet sanften Dampf, tiefe Entspannung und ein ruhiges Ambiente fuer langsame, wohltuende Wellnessrituale.',
                'text_2' => 'Warme Steinoberflaechen, feuchte Luft und eine entschleunigte Atmosphaere helfen Ihnen, vollkommen loszulassen.',
                'image'  => vipru_theme_asset('images/2026-02-06 15.34.14.jpg'),
                'button_text' => 'Anfrage Senden',
                'link_text'   => 'Mehr erfahren',
                'link_url'    => $links['hamam'],
            ],
            [
                'number' => '03',
                'title'  => 'Stilvolles Ambiente',
                'text'   => 'Natuerliche Oberflaechen, warmes Licht und durchdachte Details schaffen einen privaten Ort mit klarer, hochwertiger Atmosphaere.',
                'text_2' => 'So entsteht ein Aufenthalt, der sich ruhig, gepflegt und rundum besonders anfuehlt.',
                'image'  => vipru_theme_asset('images/2026-02-06 15.45.19.jpg'),
                'button_text' => 'Anfrage Senden',
                'link_text'   => 'Mehr erfahren',
                'link_url'    => $links['bathhousevip'],
            ],
        ],
        'location_badge'        => 'Standort',
        'location_title'        => 'VIP-RU Sauna in Dortmund',
        'location_subtitle'     => 'Privater Spa-Bereich mit Sauna, Pool, Jacuzzi und Ruhezone im Herzen von Dortmund.',
        'location_gallery'      => [
            vipru_theme_asset('images/saunavip1.jpg'),
            vipru_theme_asset('images/saunavip2.jpg'),
            vipru_theme_asset('images/saunavip3.jpg'),
            vipru_theme_asset('images/saunavip4.jpg'),
        ],
        'location_about_title'  => 'VIP-RU Sauna',
        'location_about_description' => 'Premium-Wellness fuer Erholung und Regeneration in Dortmund. Private Sauna, Kontrastbecken, Jacuzzi und ein entspannter Lounge-Bereich an einem Ort.',
        'hours_text'            => "Mo-Fr: 10:00-23:00\nSa-So: 09:00-23:00",
        'location_button_text'  => 'Jetzt anfragen',
        'cta_bg'                => 'MEHR ERLEBEN',
        'cta_note'              => 'Mehr als nur Sauna: Genuss, Ruhe und private Zeit.',
        'cta_items'             => [
            'Kraeutertee und kleine Auszeiten auf der Terrasse geniessen',
            'Nach dem Saunagang in den Pool oder ins Jacuzzi wechseln',
            'Frische Snacks und Getraenke direkt in den Bereich bestellen',
            'Mit Freunden entspannt Zeit in der Lounge verbringen',
            'Massage- und Hamam-Rituale als Ergaenzung buchen',
            'Private Wellnessmomente fuer Geburtstage oder besondere Abende planen',
        ],
    ];
}

function vipru_get_service_defaults(string $slug): array
{
    $video = vipru_theme_asset('images/2169880-uhd_3840_2160_30fps.mp4');

    $defaults = [
        'bathhousevip' => [
            'service_name' => 'VIP Sauna',
            'page_title'   => 'VIP Sauna | VIP-RU Sauna Dortmund',
            'hero_class'   => 'hero hero-img-3',
            'hero_title'   => 'VIP Sauna fuer private Wellnessmomente',
            'hero_lead'    => 'Grosszuegiger privater Saunabereich fuer Paare, Freunde und kleine Gruppen.',
            'feature_label'=> 'Bereich',
            'feature_title'=> 'VIP Sauna',
            'feature_text_1' => 'Die VIP Sauna ist Ihr privater Rueckzugsort fuer Waerme, Ruhe und hochwertige Wellnessmomente.',
            'feature_text_2' => 'Grosszuegiger Platz, angenehme Hitze und ein entspannter Ablauf sorgen dafuer, dass Sie vollkommen abschalten und neue Energie sammeln koennen.',
            'feature_images' => [
                vipru_theme_asset('images/saunavip1.jpg'),
                vipru_theme_asset('images/saunavip3.jpg'),
                vipru_theme_asset('images/saunavip4.jpg'),
                vipru_theme_asset('images/saunavip2.jpg'),
            ],
            'gallery_title' => 'Galerie',
            'gallery_lead'  => 'Einblicke in die VIP Sauna',
            'gallery_images'=> [
                vipru_theme_asset('images/saunavip1.jpg'),
                vipru_theme_asset('images/saunavip2.jpg'),
                vipru_theme_asset('images/saunavip3.jpg'),
            ],
            'video_title'   => 'Raumvorschau',
            'video_file'    => $video,
            'video_poster'  => vipru_theme_asset('images/saunavip1.jpg'),
            'calculator_key'=> 'mix',
            'calculator_title' => 'VIP Sauna Rechner',
            'calculator_subtitle' => 'Preis fuer Ihren Besuch berechnen',
        ],
        'fishbanua' => [
            'service_name' => 'Fischer Sauna',
            'page_title'   => 'Fischer Sauna | VIP-RU Sauna Dortmund',
            'hero_class'   => 'hero hero-img-1',
            'hero_title'   => 'Fischer Sauna mit entspannter Atmosphaere',
            'hero_lead'    => 'Die rustikale Sauna fuer ruhige Erholung, Geselligkeit und eine warme Auszeit.',
            'feature_label'=> 'Bereich',
            'feature_title'=> 'Fischer Sauna',
            'feature_text_1' => 'Die Fischer Sauna verbindet warmes Holz, ruhige Stimmung und den Charakter eines gemuetlichen Rueckzugsorts.',
            'feature_text_2' => 'Nach dem Saunagang entspannen Sie in einer lockeren Atmosphaere, die sich ideal fuer Gespraeche, Erholung und private Zeit anfuehlt.',
            'feature_images' => [
                vipru_theme_asset('images/2026-02-06 15.29.18.jpg'),
                vipru_theme_asset('images/2026-02-06 15.45.19.jpg'),
                vipru_theme_asset('images/2026-02-06 15.40.29.jpg'),
                vipru_theme_asset('images/banuabeathroom.jpg'),
            ],
            'gallery_title' => 'Galerie',
            'gallery_lead'  => 'Einblicke in die Fischer Sauna',
            'gallery_images'=> [
                vipru_theme_asset('images/banuabeathroom.jpg'),
                vipru_theme_asset('images/2026-02-06 15.29.18.jpg'),
                vipru_theme_asset('images/2026-02-06 15.40.29.jpg'),
            ],
            'video_title'   => 'Raumvorschau',
            'video_file'    => $video,
            'video_poster'  => vipru_theme_asset('images/banuabeathroom.jpg'),
            'calculator_key'=> 'fishbanua',
            'calculator_title' => 'Fischer Sauna Rechner',
            'calculator_subtitle' => 'Preis fuer Ihren Besuch berechnen',
        ],
        'luxbanua' => [
            'service_name' => 'Lux Sauna',
            'page_title'   => 'Lux Sauna | VIP-RU Sauna Dortmund',
            'hero_class'   => 'hero hero-img-2',
            'hero_title'   => 'Lux Sauna mit stilvollem Ambiente',
            'hero_lead'    => 'Eleganter Saunabereich mit Komfort, Ruhe und einem klaren Premium-Erlebnis.',
            'feature_label'=> 'Bereich',
            'feature_title'=> 'Lux Sauna',
            'feature_text_1' => 'Die Lux Sauna steht fuer stilvolle Erholung mit klarer Gestaltung, angenehmer Waerme und ruhigem Premium-Ambiente.',
            'feature_text_2' => 'Hier geniessen Sie private Wellness in einem eleganten Rahmen, der Komfort, Entspannung und hochwertige Details verbindet.',
            'feature_images' => [
                vipru_theme_asset('images/2026-02-06 15.29.18.jpg'),
                vipru_theme_asset('images/2026-02-06 15.45.19.jpg'),
                vipru_theme_asset('images/2026-02-06 15.40.29.jpg'),
                vipru_theme_asset('images/banuabeathroom.jpg'),
            ],
            'gallery_title' => 'Galerie',
            'gallery_lead'  => 'Einblicke in die Lux Sauna',
            'gallery_images'=> [
                vipru_theme_asset('images/banuabeathroom.jpg'),
                vipru_theme_asset('images/2026-02-06 15.29.18.jpg'),
                vipru_theme_asset('images/2026-02-06 15.40.29.jpg'),
            ],
            'video_title'   => 'Raumvorschau',
            'video_file'    => $video,
            'video_poster'  => vipru_theme_asset('images/banuabeathroom.jpg'),
            'calculator_key'=> 'lux',
            'calculator_title' => 'Lux Sauna Rechner',
            'calculator_subtitle' => 'Preis fuer Ihren Besuch berechnen',
        ],
        'banua1' => [
            'service_name' => 'Holzsauna',
            'page_title'   => 'Holzsauna | VIP-RU Sauna Dortmund',
            'hero_class'   => 'hero hero-img-4',
            'hero_title'   => 'Holzsauna fuer klassisches Saunagefuehl',
            'hero_lead'    => 'Traditionelle Waerme, entspannte Ruhe und private Erholung fuer kleine Gruppen.',
            'feature_label'=> 'Bereich',
            'feature_title'=> 'Holzsauna',
            'feature_text_1' => 'Die Holzsauna bringt klassisches Saunagefuehl, natuerliche Materialien und eine besonders ruhige Atmosphaere zusammen.',
            'feature_text_2' => 'Sie ist ideal fuer alle, die authentische Waerme, private Entspannung und ein traditionelles Saunaerlebnis geniessen moechten.',
            'feature_images' => [
                vipru_theme_asset('images/2026-02-06 15.29.18.jpg'),
                vipru_theme_asset('images/2026-02-06 15.45.19.jpg'),
                vipru_theme_asset('images/2026-02-06 15.40.29.jpg'),
                vipru_theme_asset('images/banuabeathroom.jpg'),
            ],
            'gallery_title' => 'Galerie',
            'gallery_lead'  => 'Einblicke in die Holzsauna',
            'gallery_images'=> [
                vipru_theme_asset('images/banuabeathroom.jpg'),
                vipru_theme_asset('images/2026-02-06 15.29.18.jpg'),
                vipru_theme_asset('images/2026-02-06 15.40.29.jpg'),
            ],
            'video_title'   => 'Raumvorschau',
            'video_file'    => $video,
            'video_poster'  => vipru_theme_asset('images/banuabeathroom.jpg'),
            'calculator_key'=> 'drovami',
            'calculator_title' => 'Holzsauna Rechner',
            'calculator_subtitle' => 'Preis fuer Ihren Besuch berechnen',
        ],
        'hamam' => [
            'service_name' => 'Hamam',
            'page_title'   => 'Hamam | VIP-RU Sauna Dortmund',
            'hero_class'   => 'hero hero-img-1',
            'hero_title'   => 'Hamam fuer sanfte Waerme und tiefe Entspannung',
            'hero_lead'    => 'Feuchter Dampf, ruhige Atmosphaere und wohltuende Regeneration in privatem Rahmen.',
            'feature_label'=> 'Bereich',
            'feature_title'=> 'Hamam',
            'feature_text_1' => 'Der Hamam schenkt sanfte Waerme, feuchten Dampf und ein ruhiges Umfeld fuer tiefe Entspannung.',
            'feature_text_2' => 'Warme Oberflaechen, weiche Luft und langsame Rituale helfen dabei, den Kopf freizubekommen und den Koerper wohltuend zu regenerieren.',
            'feature_images' => [
                vipru_theme_asset('images/2026-02-06 15.34.14.jpg'),
                vipru_theme_asset('images/hamam1.jpg'),
                vipru_theme_asset('images/hamam2.jpg'),
                vipru_theme_asset('images/hamam2.jpg'),
            ],
            'gallery_title' => 'Galerie',
            'gallery_lead'  => 'Einblicke in den Hamam',
            'gallery_images'=> [
                vipru_theme_asset('images/hamam1.jpg'),
                vipru_theme_asset('images/hamam2.jpg'),
                vipru_theme_asset('images/2026-02-06 15.34.14.jpg'),
            ],
            'video_title'   => 'Raumvorschau',
            'video_file'    => $video,
            'video_poster'  => vipru_theme_asset('images/hamam1.jpg'),
            'calculator_key'=> 'hamam',
            'calculator_title' => 'Hamam Rechner',
            'calculator_subtitle' => 'Preis fuer Ihren Besuch berechnen',
        ],
        'sauna1' => [
            'service_name' => 'Massage',
            'page_title'   => 'Massage | VIP-RU Sauna Dortmund',
            'hero_class'   => 'hero hero-img-5',
            'hero_title'   => 'Massage als perfekte Ergaenzung zu Sauna und Hamam',
            'hero_lead'    => 'Entspannende Anwendungen fuer Regeneration, Lockerung und ein rundes Wellnessgefuehl.',
            'feature_label'=> 'Bereich',
            'feature_title'=> 'Massage',
            'feature_text_1' => 'Massage ist die ideale Ergaenzung nach Sauna oder Hamam und hilft dabei, Verspannungen gezielt zu loesen.',
            'feature_text_2' => 'Ruhige, wohltuende Anwendungen unterstuetzen Regeneration, Lockerung und ein rundes Wellnessgefuehl.',
            'feature_images' => [
                vipru_theme_asset('images/banua-r-1.jpg'),
                vipru_theme_asset('images/banua-r-2.jpg'),
                vipru_theme_asset('images/banua-r-3.jpg'),
                vipru_theme_asset('images/banua1.jpg'),
            ],
            'gallery_title' => 'Galerie',
            'gallery_lead'  => 'Einblicke in den Massagebereich',
            'gallery_images'=> [
                vipru_theme_asset('images/banua-r-1.jpg'),
                vipru_theme_asset('images/banua1.jpg'),
                vipru_theme_asset('images/banua2.jpg'),
            ],
            'video_title'   => 'Raumvorschau',
            'video_file'    => $video,
            'video_poster'  => vipru_theme_asset('images/banua-r-1.jpg'),
            'calculator_key'=> 'massage',
            'calculator_title' => 'Massage Rechner',
            'calculator_subtitle' => 'Preis fuer Ihre Anwendung berechnen',
        ],
    ];

    return $defaults[$slug] ?? $defaults['bathhousevip'];
}

function vipru_get_service_data(int $post_id): array
{
    $slug = get_post_field('post_name', $post_id) ?: 'bathhousevip';
    $defaults = vipru_get_service_defaults($slug);

    $hero = vipru_get_field_value('hero_section', $post_id, []);
    $feature = vipru_get_field_value('feature_section', $post_id, []);
    $gallery = vipru_get_field_value('gallery_section', $post_id, []);
    $calculator = vipru_get_field_value('calculator_section', $post_id, []);
    $gutschein = vipru_get_field_value('gutschein_section', $post_id, []);

    $feature_images = [];
    if (!empty($feature['slider_images']) && is_array($feature['slider_images'])) {
        $feature_images = $feature['slider_images'];
    } else {
        $feature_images = vipru_collect_media_group($feature, 'image', 4);
    }

    $gallery_images = [];
    if (!empty($gallery['images']) && is_array($gallery['images'])) {
        $gallery_images = $gallery['images'];
    } else {
        $gallery_images = vipru_collect_media_group($gallery, 'image', 6);
    }

    return array_merge($defaults, [
        'page_title'   => $hero['browser_title'] ?? $defaults['page_title'],
        'service_name' => $hero['service_name'] ?? $defaults['service_name'],
        'hero_class'   => $hero['hero_css_class'] ?? $defaults['hero_class'],
        'hero_background_image' => vipru_get_media_url($hero['background_image'] ?? '', ''),
        'hero_title'   => $hero['title'] ?? $defaults['hero_title'],
        'hero_lead'    => $hero['lead'] ?? $defaults['hero_lead'],
        'hero_buy_text'=> $hero['buy_button_text'] ?? 'Jetzt kaufen',
        'feature_label'=> $feature['label'] ?? $defaults['feature_label'],
        'feature_title'=> $feature['title'] ?? $defaults['feature_title'],
        'feature_text_1' => $feature['text_1'] ?? $defaults['feature_text_1'],
        'feature_text_2' => $feature['text_2'] ?? $defaults['feature_text_2'],
        'feature_button_text' => $feature['button_text'] ?? 'Anfrage Senden',
        'feature_images' => !empty($feature_images) ? $feature_images : $defaults['feature_images'],
        'gallery_title' => $gallery['title'] ?? $defaults['gallery_title'],
        'gallery_lead'  => $gallery['lead'] ?? $defaults['gallery_lead'],
        'gallery_images'=> !empty($gallery_images) ? $gallery_images : $defaults['gallery_images'],
        'video_title'   => $gallery['video_title'] ?? $defaults['video_title'],
        'video_file'    => vipru_get_media_url($gallery['video_file'] ?? '', $defaults['video_file']),
        'video_poster'  => vipru_get_media_url($gallery['video_poster'] ?? '', $defaults['video_poster']),
        'calculator_key'=> $calculator['service_key'] ?? $defaults['calculator_key'],
        'calculator_title' => $calculator['title'] ?? $defaults['calculator_title'],
        'calculator_subtitle' => $calculator['subtitle'] ?? $defaults['calculator_subtitle'],
        'gutschein' => [
            'eyebrow' => $gutschein['eyebrow'] ?? 'Gutschein kaufen',
            'title'   => $gutschein['title'] ?? 'Gutschein fuer Ihren Besuch',
            'description' => $gutschein['description'] ?? 'Tragen Sie nur E-Mail, optional Telefon und den gewuenschten Betrag ein. Danach koennen Sie direkt per PayPal zahlen oder eine WhatsApp Anfrage senden.',
            'paypal_text' => $gutschein['paypal_text'] ?? 'Mit PayPal bezahlen',
            'whatsapp_text' => $gutschein['whatsapp_text'] ?? 'WhatsApp Anfrage',
            'note' => $gutschein['note'] ?? 'Die PayPal-Zahlung uebergibt den eingetragenen Betrag. WhatsApp uebernimmt E-Mail, Telefon und Betrag automatisch.',
        ],
    ]);
}

function vipru_get_media_url($value, string $fallback = ''): string
{
    if (is_array($value) && !empty($value['url'])) {
        return $value['url'];
    }
    if (is_numeric($value)) {
        $url = wp_get_attachment_url((int) $value);
        return $url ?: $fallback;
    }
    if (is_string($value) && $value !== '') {
        return $value;
    }
    return $fallback;
}

function vipru_filter_non_empty(array $values): array
{
    $filtered = array_filter($values, function ($value) {
        return $value !== null && $value !== '';
    });

    return array_values($filtered);
}

function vipru_get_theme_script_data(): array
{
    $global = vipru_get_global_settings();
    $links = vipru_get_service_links();
    $slug = vipru_get_current_page_slug();

    $pages = [
        'home' => [
            'title' => 'VIP-RU Sauna Dortmund | Private Sauna, Hamam und Massage',
            'serviceName' => 'VIP-RU Sauna Dortmund',
            'heroTitle' => vipru_get_home_defaults()['hero_title'],
            'heroLead' => vipru_get_home_defaults()['hero_lead'],
        ],
    ];

    if (is_page_template('page-templates/service-template.php')) {
        $service = vipru_get_service_data(get_the_ID());
        $pages[$slug] = [
            'title'       => $service['page_title'],
            'serviceName' => $service['service_name'],
            'heroTitle'   => $service['hero_title'],
            'heroLead'    => $service['hero_lead'],
        ];
    } elseif (is_page_template('page-templates/food-template.php')) {
        $pages['food'] = [
            'title'       => get_the_title(),
            'serviceName' => get_the_title(),
            'heroTitle'   => get_the_title(),
            'heroLead'    => '',
        ];
    }

    return [
        'assetsUrl' => vipru_theme_asset(),
        'faviconUrl' => $global['logo'],
        'mapMarkerUrl' => vipru_theme_asset('images/marker-icon.png'),
        'homeAboutUrl' => vipru_get_home_url_with_anchor('about'),
        'homeLocationUrl' => vipru_get_home_url_with_anchor('dortmund'),
        'disableTextOverrides' => true,
        'siteConfig' => [
            'phoneNumber' => $global['phone_display'],
            'paypalBusinessEmail' => $global['paypal_business_email'],
            'socials' => [
                'whatsapp' => 'https://wa.me/' . preg_replace('/\D+/', '', $global['whatsapp_number']),
                'telegram' => $global['telegram_url'],
                'instagram' => $global['instagram_url'],
                'tiktok' => $global['tiktok_url'],
            ],
            'pages' => $pages,
            'navItems' => [
                ['href' => $links['bathhousevip'], 'key' => 'bathhousevip', 'label' => 'VIP Sauna'],
                ['href' => $links['fishbanua'], 'key' => 'fishbanua', 'label' => 'Fischer Sauna'],
                ['href' => $links['luxbanua'], 'key' => 'luxbanua', 'label' => 'Lux Sauna'],
                ['href' => $links['banua1'], 'key' => 'banua1', 'label' => 'Holzsauna'],
                ['href' => $links['hamam'], 'key' => 'hamam', 'label' => 'Hamam'],
                ['href' => $links['sauna1'], 'key' => 'sauna1', 'label' => 'Massage'],
                ['href' => $links['food'], 'key' => 'food', 'label' => 'Speisen'],
                ['href' => $links['gutschein'], 'key' => 'gutschein', 'label' => 'Gutschein'],
            ],
        ],
        'pageCopy' => [],
    ];
}

function vipru_parse_series(string $value, array $fallback): array
{
    $parts = array_map('trim', explode(',', $value));
    $series = array_values(array_filter(array_map(static function ($item) {
        return $item === '' ? null : (float) str_replace(',', '.', $item);
    }, $parts), static function ($value) {
        return $value !== null;
    }));

    return count($series) ? $series : $fallback;
}

function vipru_get_calculator_defaults(): array
{
    return [
        'pricingTable' => [
            'lux' => ['weekday' => [40.0, 45.0, 50.0, 55.0, 60.0, 63.0, 68.0, 72.0, 75.0], 'weekend' => [40.0, 45.0, 50.0, 55.0, 60.0, 63.0, 68.0, 72.0, 75.0]],
            'drovami' => ['weekday' => [42.0, 51.0, 54.0, 60.0, 66.0, 70.0, 72.0, 76.0, 80.0], 'weekend' => [42.0, 51.0, 54.0, 60.0, 66.0, 70.0, 72.0, 76.0, 80.0]],
            'mix' => ['weekday' => [55.0, 63.0, 68.0, 75.0, 83.0, 88.0, 92.0, 96.0, 100.0], 'weekend' => [55.0, 63.0, 68.0, 75.0, 83.0, 88.0, 92.0, 96.0, 100.0]],
            'fishbanua' => ['weekday' => [25.0, 33.0, 36.0, 40.0, 45.0, 49.0, 52.0, 54.0, 60.0], 'weekend' => [30.0, 36.0, 44.0, 50.0, 54.0, 60.0, 64.0, 68.0, 70.0]],
            'hamam' => ['weekday' => [42.0, 51.0, 54.0, 60.0, 66.0, 70.0, 72.0, 76.0, 80.0], 'weekend' => [42.0, 51.0, 54.0, 60.0, 66.0, 70.0, 72.0, 76.0, 80.0]],
            'massage' => ['weekday' => [30.0, 36.0, 44.0, 50.0, 54.0, 60.0, 64.0, 68.0, 70.0], 'weekend' => [40.0, 45.0, 50.0, 55.0, 60.0, 63.0, 68.0, 72.0, 75.0]],
            'vip' => ['weekday' => [25.0, 33.0, 36.0, 40.0, 45.0, 49.0, 52.0, 54.0, 60.0], 'weekend' => [30.0, 36.0, 44.0, 50.0, 54.0, 60.0, 64.0, 68.0, 70.0]],
        ],
        'extraPrices' => [
            'extraAdult' => 12.5,
            'child6to12' => 6.25,
            'banshchik' => 12.5,
            'birchVeniki' => 9.0,
            'oakVeniki' => 10.0,
            'massageMinute' => 1.0,
        ],
    ];
}

function vipru_get_calculator_settings(): array
{
    $defaults = vipru_get_calculator_defaults();

    if (!vipru_has_acf()) {
        return $defaults;
    }

    $pricing = vipru_get_field_value('calculator_pricing', 'option', []);
    $extras = vipru_get_field_value('calculator_extras', 'option', []);

    foreach ($defaults['pricingTable'] as $serviceKey => $servicePricing) {
        if (!empty($pricing[$serviceKey . '_weekday'])) {
            $defaults['pricingTable'][$serviceKey]['weekday'] = vipru_parse_series($pricing[$serviceKey . '_weekday'], $servicePricing['weekday']);
        }
        if (!empty($pricing[$serviceKey . '_weekend'])) {
            $defaults['pricingTable'][$serviceKey]['weekend'] = vipru_parse_series($pricing[$serviceKey . '_weekend'], $servicePricing['weekend']);
        }
    }

    foreach ($defaults['extraPrices'] as $key => $value) {
        if (isset($extras[$key]) && $extras[$key] !== '') {
            $defaults['extraPrices'][$key] = (float) $extras[$key];
        }
    }

    return $defaults;
}
