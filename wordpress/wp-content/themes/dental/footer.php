<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dental
 */

?>

<footer class="main-footer">
    <div class="main-footer-top">
        <div class="container">
            <div class="main-footer-info">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
                <p>Для записи на прием и получения более подробной информации звоните по телефону клиники или непосредственно Главврачу</p>
                <ul class="main-footer-social">
                    <?php if(get_field('instagram', 'options')): ?>
                    <li><a target="_blank" href="<?php the_field('instagram', 'options'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="Инстаграм"></a></li>
                    <?php endif; ?>
                    <?php if(get_field('twitter','options')): ?>
                    <li><a target="_blank" href="<?php the_field('twitter', 'options'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="Твитер"></a></li>
                    <?php endif; ?>
                    <?php if(get_field('youtube', 'options')): ?>
                    <li><a target="_blank" href="<?php the_field('youtube', 'options'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.png" alt="Ютуб"></a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="main-footer-menu">
                <div class="main-footer-heading">
                    <span>Меню</span>
                </div>
                <?php
                wp_nav_menu( [
                    'theme_location'  => 'footer_menu',
                    'container'       => '',
                    'items_wrap'      => '<ul>%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
                ?>
            </div>
            <div class="main-footer-contact">
                <div class="main-footer-heading">
                    <span>Контакты</span>
                </div>
                <?php if(get_field('mail', 'options')): ?>
                <div class="main-footer-mail">
                    <?php the_field('mail', 'options'); ?>
                </div>
                <?php endif; ?>
                <?php if(get_field('phone', 'options')): ?>
                <div class="main-footer-phone">
                    <?php the_field('phone', 'options'); ?>
                </div>
                <?php endif; ?>
                <?php if(get_field('address','options')): ?>
                <div class="main-footer-map">
                    <?php the_field('address','options'); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="main-footer-bottom">
        <div class="container">
            <div class="copy">
                <p>© 2021 kolomeycev-dent.ru. All rights reserved</p>
            </div>
            <ul>
                <li><a href="#">Политика конфиденциальности</a></li>
                <li><a href="#">Документация</a></li>
                <li><a href="#">Карта сайта</a></li>
            </ul>
        </div>
    </div>
</footer>

<div class="popup-window" id="request-popup">
    <div class="popup-window-container">
        <?php echo do_shortcode('[contact-form-7 id="209" title="Модальное окно"]'); ?>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
