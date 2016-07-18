<?php



// Exit if accessed directly

if (!defined('ABSPATH')) exit;



/**
 * Error 404 Template
 *
 *
 * @file           404.php
 * @package        Parasponsive
 * @author         GoGetThemes
 * @copyright      2013 GoGetThemes
 * @license        license.txt
 * @version        Release: v1.0
 */

?>

<?php get_header(); ?>

<div class="id_page">
    <div id="content-full" class="container">
        <div id="post-0" class="error404">
            <div class="post-entry">
                <?php wp_nav_menu(array('theme_location' => '404_pages')); ?>

                <h1 class="title-404"><?php _e('404 &#8212; Ничего не найдено!', 'responsive'); ?></h1>

                <p><?php _e('Извините, но по вашему запросу нет результатов.', 'responsive'); ?></p>
                <h6><?php _e('Вы можете вернуться', 'responsive'); ?> <a href="<?php echo home_url(); ?>/"
                                                                    title="<?php esc_attr_e('На главную', 'responsive'); ?>"><?php _e('&larr; На главную', 'responsive'); ?></a> <?php _e('Или продолжить поиск', 'responsive'); ?>
                </h6>

                <?php get_search_form(); ?>
            </div>
            <!-- end of .post-entry -->
        </div>
        <!-- end of #post-0 -->
    </div>
    <!-- end of #content-full -->
</div>

<?php get_footer(); ?>

