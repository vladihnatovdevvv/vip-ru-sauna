<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<main class="container" style="padding: 120px 20px;">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
</main>
<?php get_footer(); ?>
