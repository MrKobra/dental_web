<?php
// Template Name: Контакты
get_header();
?>

    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <div class="contact-page">
        <div class="contact-page-content">
            <div class="container">
                <div class="heading">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="contact-page-info">
                    <?php the_content(); ?>
                </div>
                <div class="contact-page-container">
                    <div class="contact-page-data">
                        <?php if(get_field('address')): ?>
                        <div class="address">
                            <?php the_field('address') ?>
                        </div>
                        <?php endif; ?>
                        <?php if(get_field('phone')): ?>
                        <div class="phone">
                            <?php the_field('phone') ?>
                        </div>
                        <?php endif; ?>
                        <?php if(get_field('mail')): ?>
                        <div class="mail">
                            <?php the_field('mail') ?>
                        </div>
                        <?php endif; ?>
                        <?php if(get_field('work_time')): ?>
                        <div class="work-time">
                            <span>Режим работы</span>
                            <?php the_field('work_time') ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php if(get_field('map')): ?>
                    <div class="contact-page-map">
                        <div class="contact-page-map-container">
                            <?php the_field('map') ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/contact-form'); ?>
    </div>

<?php
get_footer();
