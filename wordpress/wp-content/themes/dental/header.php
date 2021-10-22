<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dental
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="top-header">
    <div class="top-header-siteName">
        <div class="container">
            <span><?php bloginfo('title'); ?></span>
            <div class="mobile-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="top-header-content">
        <div class="container">
            <div class="top-header-container">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="top-header-contact">
                    <?php if(get_field('address','options')): ?>
                    <div class="address top-header-contact-block">
                        <?php the_field('address','options'); ?>
                    </div>
                    <?php endif; ?>
                    <?php if(get_field('work_time','options')): ?>
                    <div class="work-time top-header-contact-block">
                        <?php the_field('work_time','options'); ?>
                    </div>
                    <?php endif; ?>
                    <?php if(get_field('phone','options')): ?>
                    <div class="telephone top-header-contact-block">
                        <?php the_field('phone','options'); ?>
                    </div>
                    <?php endif; ?>
                    <div class="request top-header-contact-block">
                        <a href="#" class="btnLight">Заказать звонок</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /*
<nav class="top-nav">
    <div class="container">
        <div class="top-nav-container">
            <ul>
                <li class="menu-item-has-child"><a href="#">Услуги</a></li>
                <li><a href="#">Цены</a></li>
                <li><a href="#">Наши врачи</a></li>
                <li><a href="#">Отзывы</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav> */ ?>