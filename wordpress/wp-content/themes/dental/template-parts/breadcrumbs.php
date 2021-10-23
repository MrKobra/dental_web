<div class="breadcrumbs">
    <div class="container">
        <ul>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home.png" alt=""><a href="<?php echo home_url(); ?>">На главную</a></li>
            <?php if(is_page()) { ?>
                <li><?php the_title(); ?></li>
            <?php } elseif(is_archive()) { ?>
                <li><?php the_archive_title(); ?></li>
                <?php
            } ?>
        </ul>
    </div>
</div>