<?php
// Template Name: Цены
get_header();
?>

<?php get_template_part('template-parts/breadcrumbs'); ?>
    <?php if(have_posts()):
        the_post(); ?>
    <div class="price-page">
        <div class="dropdown-container">
            <div class="container">
                <?php if(get_field('heading')): ?>
                <div class="heading">
                    <?php the_field('heading'); ?>
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
        <div class="price-page-content">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </div>
        <?php get_template_part('template-parts/reviews'); ?>
        <?php get_template_part('template-parts/stocks-form'); ?>
    </div>
    <?php endif; ?>

<?php
get_footer();
