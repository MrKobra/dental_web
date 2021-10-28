<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dental
 */

get_header();

    $id = get_queried_object_id();
    if($id == get_field('reviews_cat', 'options')){
        get_template_part('template-parts/breadcrumbs');
        if(have_posts()): ?>
            <div class="single-page">
                <div class="single-page-content">
                    <?php get_template_part('template-parts/reviews', ['count' => 12]); ?>
                </div>
                <?php get_template_part('template-parts/contact-form'); ?>
            </div>
        <?php endif;
    } else if($id == get_field('service_cat', 'options')) {
        get_template_part('template-parts/breadcrumbs');
        if(have_posts()): ?>
            <div class="single-page">
                <div class="single-page-content">
                    <?php get_template_part('template-parts/services', '', ['count' => -1, 'info' => false]); ?>
                </div>
                <?php get_template_part('template-parts/contact-form'); ?>
            </div>
        <?php endif;
    }

get_footer();
