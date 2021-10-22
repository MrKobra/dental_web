<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dental
 */

get_header();
?>

    <div class="single-page">
        <div class="single-page-content nothing-page">
            <div class="container">
                <div class="heading">
                    <h2>Страница не найдена</h2>
                </div>
                <p>
                    Вернуться <a href="<?php echo home_url(); ?>">на главную</a>
                </p>
            </div>
        </div>
        <?php get_template_part('template-parts/contact-form'); ?>
    </div>

<?php
get_footer();
