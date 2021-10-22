<?php
// Template Name: Главная
get_header();
?>

    <?php if(get_field('main_screen_text') || get_field('main_screen_img')): ?>
    <div class="stocks-banner">
        <div class="container">
            <div class="stocks-banner-container">
                <?php if(get_field('main_screen_text')): ?>
                <div class="stocks-banner-text">
                    <?php the_field('main_screen_text'); ?>
                    <?php get_template_part('template-parts/sign', 'btn', ['name' => 'Записаться на прием']); ?>
                </div>
                <?php endif; ?>
                <?php $img = get_field('main_screen_img');
                if($img): ?>
                <div class="stocks-banner-img">
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if(get_field('advantages')): ?>
        <div class="advantages">
            <div class="container">
                <div class="advantages-container">
                    <?php while(has_sub_field('advantages')): ?>
                    <div class="advantages-card">
                        <?php $img = get_sub_field('img');
                        if($img): ?>
                        <div class="advantages-card-img">
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        </div>
                        <?php endif; ?>
                        <?php if(get_sub_field('text')): ?>
                        <div class="advantages-card-text">
                            <span><?php the_sub_field('text'); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <?php $services = get_field('service_cat', 'options');
    $categories = get_categories( [
        'taxonomy'     => 'category',
        'type'         => 'post',
        'parent'       => $services,
        'orderby'      => 'date',
        'order'        => 'DESC',
        'hide_empty'   => 0,
        'number'       => 0,
        'pad_counts'   => false,
    ] );

    if( $categories ):
    ?>
    <div class="service">
        <div class="container">
            <div class="heading">
                <h2>Услуги</h2>
            </div>
            <div class="service-container">
                <?php
                foreach( $categories as $cat ):
                    $img = get_field('cat_img', 'category_'.$cat->term_id);
                ?>
                <div class="service-card" style="background: rgba(103, 205, 253, 0.05) url(<?php echo $img['url']; ?>) no-repeat right bottom">
                    <div class="service-card-text">
                        <div class="service-card-info">
                            <h3><?php echo $cat->name; ?></h3>
                            <?php if(get_field('description', 'category_'.$cat->term_id)) { the_field('description', 'category_'.$cat->term_id); } ?>
                        </div>
                        <div class="service-card-link">
                            <a href="<?php echo get_page_link(get_field('price_page', 'options')); ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php if(get_field('description', 'category_'.$services)): ?>
                <div class="service-slogan">
                    <?php the_field('description', 'category_'.$services); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif;
    wp_reset_postdata(); ?>

    <?php if(get_field('about_us_heading') || get_field('about_us_info') || get_field('about_us_slider')): ?>
    <div class="about-us">
        <div class="container">
            <?php if(get_field('about_us_heading')): ?>
            <div class="heading">
                <?php the_field('about_us_heading'); ?>
            </div>
            <?php endif; ?>
            <div class="about-us-container">
                <div class="about-us-text">
                    <?php if(get_field('about_us_info')) {
                        the_field('about_us_info');
                    } ?>
                    <div class="about-us-chief">
                        <?php
                        $img = get_field('about_us_img');
                        if($img):
                        ?>
                        <div class="about-us-chief-img">
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        </div>
                        <?php endif; ?>
                        <?php if(get_field('about_us_chief')): ?>
                        <div class="about-us-chief-info">
                            <?php the_field('about_us_chief'); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(get_field('about_us_slider')): ?>
                <div class="about-us-slider">
                    <?php while(has_sub_field('about_us_slider')): ?>
                    <div class="about-us-slide">
                        <?php $img = get_sub_field('img'); ?>
                        <div class="about-us-slide-img" style="background: url(<?php echo $img['url']; ?>) no-repeat center center">
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php get_template_part('template-parts/stocks-form'); ?>

    <?php if(get_field('our_team')): ?>
    <div class="our-team">
        <div class="container">
            <?php if(get_field('our_team_heading')): ?>
            <div class="heading">
                <?php the_field('our_team_heading'); ?>
            </div>
            <?php endif; ?>
            <div class="our-team-container">
                <?php while(has_sub_field('our_team')): ?>
                <div class="our-team-card">
                    <div class="our-team-card-container">
                        <div class="our-team-info">
                            <?php $img = get_sub_field('img');
                            if($img): ?>
                            <div class="our-team-img">
                                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                            </div>
                            <?php endif; ?>
                            <?php if(get_sub_field('name')): ?>
                            <h3><?php the_sub_field('name'); ?></h3>
                            <?php endif; ?>
                            <?php if(get_sub_field('position_kind') == 'doctor') {
                                $pos = 'specialize';
                            } else {
                                $pos = 'employee';
                            } ?>
                            <?php if(get_sub_field('position')): ?>
                            <div class="<?php echo $pos; ?>">
                                <?php the_sub_field('position'); ?>
                            </div>
                            <?php endif; ?>
                            <?php if(get_sub_field('biography')) {
                                the_sub_field('biography');
                            } ?>
                        </div>
                        <div class="request">
                            <?php get_template_part('template-parts/sign', 'btn', ['name' => 'Записаться на прием'])?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php get_template_part('template-parts/reviews'); ?>

    <?php get_template_part('template-parts/contact-form'); ?>

<?php
get_footer();

