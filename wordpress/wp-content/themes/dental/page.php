<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dental
 */

get_header();
?>

    <?php get_template_part('template-parts/breadcrumbs')?>

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
            </div>
            <?php get_template_part('template-parts/contact-form'); ?>
        </div>
    <?php endif; ?>

<?php
get_footer();
