<?php if(get_field('stocks_text') || get_field('stocks_img')): ?>
<div class="stocks-form form-block">
    <div class="container">
        <?php $img = get_field('stocks_img'); ?>
        <div class="form-block-container">
            <div class="form-block-img">
                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
            </div>
            <div class="form-block-text">
                <?php the_field('stocks_text'); ?>
                <?php echo do_shortcode('[contact-form-7 id="103" title="Акционная форма"]'); ?>
                <span>Записываясь на услугу вы даёте согласие на <a href="<?php echo get_page_link(3);?>">обработку своих персональных данных</a></span>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>