<?php



// Exit if accessed directly

if (!defined('ABSPATH')) exit;



/**
 * Search Template
 *
 *
 * @file           search.php
 * @package        Parasponsive
 * @author         GoGetThemes
 * @copyright      2013 GoGetThemes
 * @license        license.txt
 * @version        Release: v1.0
 */

?>

<?php get_header(); ?>

<!-- =========================POSTS============================= -->
<section id="blog">
    <?php

    if (have_posts()) : ?>

    <div class="container text_center">
        <h3>Результат поиска для:</h3>

        <div class="lines sub_title"><?php printf(__('%s', 'responsive'), '' . get_search_query() . ''); ?></div>
    </div>
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <ul class="nostyle">
                    <?php while (have_posts()) : the_post(); ?>

                        <!-- ========== POST SECTION ========== -->

                        <li class="post">
                            <h2 class="text_center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            <div class="entry">
                                <?php the_content(); ?>
                            </div>
                            <ul class="post_info">
                                <li class="blog_date">
                                    <span class="circ"><?php the_time('d'); ?></span> <?php the_time('F Y'); ?>
                                </li>
                                <li class="comments">
                                    <span class="circ"><?php comments_popup_link('0', '1', '%'); ?></span> Комментарии
                                </li>
                                <li class="read_more">
                                    <a href="<?php the_permalink(); ?>">Подробнее</a>
                                </li>
                            </ul>
                        </li>

                    <?php endwhile; ?>
                </ul>

                <?php if (function_exists('wp_paginate')) {
                    wp_paginate();
                } ?>
            </div>

            <?php get_sidebar('blog'); ?>
        </div>

        <?php else : ?>



            <h1 class="title-404"><?php _e('404 &#8212; Ничего не найдено!', 'responsive'); ?></h1>

            <p><?php _e('Извините, но по вашему запросу нет результатов.', 'responsive'); ?></p>

            <h6><?php _e('Вы можете вернуться', 'responsive'); ?> <a href="<?php echo home_url(); ?>/"
                                                                title="<?php esc_attr_e('На главную', 'responsive'); ?>"><?php _e('&larr;На главную', 'responsive'); ?></a> <?php _e('Или продолжить поиск', 'responsive'); ?>
            </h6>

            <?php get_search_form(); ?>



        <?php
        endif;
        ?>
    </div>
</section>



<?php get_footer(); ?>

