<div class="contact-form form-block">
    <div class="container">
        <div class="form-block-container">
            <div class="form-block-text">
                <h2>Запишись на бесплатную консультацию стоматолога</h2>
                <p>Укажите свой номер телефона, мы перезвоним и <br>
                    подберем для вас удобное время для консультации.<br>
                    Или позвоните нам сами — <a href="tel:<?php the_field('sign_phone', 'options'); ?>"><?php the_field('sign_phone', 'options'); ?></a></p>
                <?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма"]'); ?>
                <span>Записываясь на услугу вы даёте согласие на <a href="<?php echo get_page_link(3);?>">обработку своих персональных данных</a></span>
            </div>
        </div>
    </div>
</div>