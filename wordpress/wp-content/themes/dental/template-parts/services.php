<?php $services = get_field('service_cat', 'options');
// параметры по умолчанию
$posts = get_posts( array(
    'numberposts' => $args['count'],
    'category'    => $services,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'post',
    'suppress_filters' => true,
) );

if( $posts ):
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
                    $img = get_the_post_thumbnail_url();
                    ?>
                    <div class="service-card" style="background: rgba(103, 205, 253, 0.05) url(<?php echo $img; ?>) no-repeat right bottom">
                        <div class="service-card-text">
                            <div class="service-card-info">
                                <h3><?php the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="service-card-link">
                                <a href="<?php echo get_page_link(); ?>">Подробнее</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php if($args['info'] && get_field('description', 'category_'.$services)): ?>
                    <div class="service-slogan">
                        <?php the_field('description', 'category_'.$services); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif;
wp_reset_postdata(); ?>