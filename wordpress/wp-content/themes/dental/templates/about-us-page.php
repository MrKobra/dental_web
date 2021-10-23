<?php
// Template Name: О нас
get_header();

    get_template_part('template-parts/breadcrumbs') ?>

    <?php if(have_posts()):
        the_post(); ?>
        <div class="single-page">
            <div class="single-page-content">
                <div class="container">
                    <div class="heading">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <?php the_content(); ?>
                </div>
                <?php get_template_part('template-parts/about-us'); ?>
            </div>
            <?php get_template_part('template-parts/contact-form'); ?>
        </div>
    <?php endif;
get_footer();
