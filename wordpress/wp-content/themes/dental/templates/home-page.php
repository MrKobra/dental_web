<?php
// Template Name: Главная
get_header();
?>

    <?php $services = get_field('service_cat', 'options');
    $posts = get_posts( array(
        'numberposts' => 7,
        'category'    => $services,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
        'suppress_filters' => true,
    ) );
    if($posts):
    ?>
    <div class="service">
        <div class="container">
            <div class="heading">
                <h2>Услуги</h2>
            </div>
            <div class="service-container">
                <?php
                foreach( $posts as $post ):
                    setup_postdata($post);
                ?>
                <div class="service-card" style="background: rgba(103, 205, 253, 0.05) url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat right bottom">
                    <div class="service-card-text">
                        <div class="service-card-info">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
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

<?php
get_footer();

