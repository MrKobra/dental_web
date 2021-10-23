<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dental
 */

get_header();
?>

    <div class="services-page">
        <?php if(have_posts()):
        the_post(); ?>
        <div class="services-main-screen">
            <div class="container">
                <div class="services-main-screen-text">
                    <h1><?php the_title(); ?></h1>
                    <?php the_excerpt(); ?>
                    <div class="services-main-screen-btn">
                        <?php get_template_part('template-parts/sign', 'btn', ['name'=>'Записаться на прием']); ?>
                        <a href="<?php echo get_page_link(get_field('price_page', 'options')); ?>" class="btnDark">Помотреть цены</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-page-content">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </div>
            <div class="dropdown-container">
                <div class="container">
                    <?php if(get_field('dropdown_heading')): ?>
                        <div class="heading">
                            <?php the_field('dropdown_heading'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field('dropdown_menu')):
                        $i = 0;
                        while(has_sub_field('dropdown_menu')):
                            $i++; ?>
                            <div class="dropdown-block <?php if($i == 1) { echo 'active'; } ?>">
                                <a href="#" class="dropdown-header">
                                    <h3><?php the_sub_field('dropdown_heading'); ?></h3>
                                    <div class="dropdown-arrow"></div>
                                </a>
                                <?php if(get_sub_field('dropdown_row')): ?>
                                    <div class="dropdown-body">
                                        <?php while(has_sub_field('dropdown_row')): ?>
                                            <div class="dropdown-row">
                                                <?php the_sub_field('dropdown_list'); ?>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php get_template_part('template-parts/stocks-form'); ?>

        <?php get_template_part('template-parts/reviews'); ?>
    </div>

<?php
get_footer();
