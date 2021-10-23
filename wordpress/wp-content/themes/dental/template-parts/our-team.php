<?php if(get_field('our_team', get_field('our_team_page', 'options'))): ?>
    <div class="our-team">
        <div class="container">
            <?php if($args['heading'] == true && get_field('our_team_heading', get_field('our_team_page', 'options'))): ?>
                <div class="heading">
                    <?php the_field('our_team_heading', get_field('our_team_page', 'options')); ?>
                </div>
            <?php endif; ?>
            <div class="our-team-container">
                <?php while(has_sub_field('our_team', get_field('our_team_page', 'options'))): ?>
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