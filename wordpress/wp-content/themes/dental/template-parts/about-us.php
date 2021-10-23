<?php if(get_field('about_us_heading', get_field('about_us_page', 'options')) || get_field('about_us_info', get_field('about_us_page', 'options')) || get_field('about_us_slider', get_field('about_us_page', 'options'))): ?>
    <div class="about-us">
        <div class="container">
            <?php if(get_field('about_us_heading', get_field('about_us_page', 'options'))): ?>
                <div class="heading">
                    <?php the_field('about_us_heading', get_field('about_us_page', 'options')); ?>
                </div>
            <?php endif; ?>
            <div class="about-us-container">
                <div class="about-us-text">
                    <?php if(get_field('about_us_info', get_field('about_us_page', 'options'))) {
                        the_field('about_us_info', get_field('about_us_page', 'options'));
                    } ?>
                    <div class="about-us-chief">
                        <?php
                        $img = get_field('about_us_img', get_field('about_us_page', 'options'));
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
                <?php if(get_field('about_us_slider', get_field('about_us_page', 'options'))): ?>
                    <div class="about-us-slider">
                        <?php while(has_sub_field('about_us_slider', get_field('about_us_page', 'options'))): ?>
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