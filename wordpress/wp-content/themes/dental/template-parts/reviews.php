<?php $reviews = get_field('reviews_cat', 'options');
$posts = get_posts( array(
    'numberposts' => $args['count'],
    'category'    => $reviews,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'post',
    'suppress_filters' => true,
) );
if($posts):
    ?>
    <div class="reviews">
        <div class="container">
            <?php if(get_field('description', 'category_'.$reviews)): ?>
                <div class="heading">
                    <?php the_field('description', 'category_'.$reviews); ?>
                </div>
            <?php endif; ?>
            <div class="reviews-container">
                <?php
                foreach( $posts as $post ):
                    setup_postdata($post);
                    ?>
                    <div class="reviews-card">
                        <div class="reviews-card-text">
                            <div class="reviews-card-text-container">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php $img = get_the_post_thumbnail_url();
                        if($img): ?>
                            <div class="reviews-card-img" style="background: url(<?php echo $img; ?>) no-repeat center center"></div>
                        <?php endif; ?>
                        <?php if(get_field('author')): ?>
                            <div class="reviews-card-author">
                                <?php the_field('author'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif;
wp_reset_postdata(); ?>