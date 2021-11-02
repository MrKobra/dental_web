<?php
// Template Name: Главная
get_header();
?>

    <?php if(get_field('stocks_slider')): ?>
    <div class="stocks-banner">
        <div class="container">
            <div class="stocks-banner-slider">
                <?php while(has_sub_field('main_screen_slider')): ?>
                    <div class="stocks-banner-slide">
                        <div class="stocks-banner-container">
                            <?php if(get_sub_field('main_screen_text')): ?>
                                <div class="stocks-banner-text">
                                    <div class="stocks-banner-text_info">
                                        <?php the_sub_field('main_screen_text'); ?>
                                    </div>
                                    <div class="stocks-banner_text_button">
                                        <?php get_template_part('template-parts/sign', 'btn', ['name' => 'Записаться на прием', 'stocks' => get_sub_field('main_screen_title')]); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php $img = get_sub_field('main_screen_img');
                            if($img): ?>
                                <div class="stocks-banner-img">
                                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
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

    <?php get_template_part('template-parts/services', '', ['count' => 7, 'info' => true]); ?>

    <?php get_template_part('template-parts/about-us'); ?>

    <?php get_template_part('template-parts/stocks-form'); ?>

    <?php get_template_part('template-parts/our', 'team', ['heading' => true]); ?>

    <?php get_template_part('template-parts/reviews', '', ['count' => 3]); ?>

    <?php get_template_part('template-parts/contact-form'); ?>

<?php
get_footer();

