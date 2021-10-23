<?php
// Template Name: Наши врачи
get_header();
?>

<?php get_template_part('template-parts/breadcrumbs')?>

<?php if(have_posts()):
    the_post(); ?>
    <div class="single-page">
        <div class="single-page-content">
            <div class="container">
                <?php if(get_field('our_team_heading')): ?>
                <div class="heading">
                    <?php the_field('our_team_heading'); ?>
                </div>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
            <?php get_template_part('template-parts/our', 'team', ['heading' => false]); ?>
        </div>
        <?php get_template_part('template-parts/contact-form'); ?>
    </div>
<?php endif; ?>

<?php
get_footer();
