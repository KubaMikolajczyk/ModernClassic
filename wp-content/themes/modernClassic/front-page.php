<?php get_header();?>

<section class="header_section">
    <?php  get_template_part('widgets/slider'); ?>
</section>

<section class="producers_section">
    <?php get_template_part('widgets/producers'); ?>
</section>

<section class="about-section">
    <?php get_template_part('widgets/about_us')?>
</section>

<section class="implementations-section">
    <?php get_template_part('widgets/implementations')?>
</section>

<section class="news-section">
    <?php get_template_part('widgets/news')?>
</section>

<section class="partners-section">
    <?php get_template_part('widgets/partners')?>
</section>

<section class="contact-form">
    <?php get_template_part('widgets/contact')?>
</section>

<section class="map-section">
    <?php get_template_part('widgets/map')?>
</section>

<?php get_footer();?>
