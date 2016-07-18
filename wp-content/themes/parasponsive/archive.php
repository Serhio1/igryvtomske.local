<?php



// Exit if accessed directly

if (!defined('ABSPATH')) exit;



/**
 * Archive Template
 *
 *
 * @file           archive.php
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

    $args = array(
        'cat' => get_query_var('cat'),
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'post_format',
                'field' => 'slug',
                'terms' => array('post-format-link', 'post-format-image', 'post-format-quote'),
                'operator' => 'NOT IN'
            ))
    );

    query_posts($args);

    if (have_posts()) : ?>

    <div class="container text_center">
        <h3><?php if (is_day()) : ?>

                <?php printf(__('Ежедневные Архивы: %s', 'GoGetThemes'), '<span>' . get_the_date() . '</span>'); ?>

            <?php elseif (is_month()) : ?>

                <?php printf(__('Ежемесячные Архивы: %s', 'GoGetThemes'), '<span>' . get_the_date('F Y') . '</span>'); ?>

            <?php elseif (is_year()) : ?>

                <?php printf(__('Ежегодные Архивы: %s', 'GoGetThemes'), '<span>' . get_the_date('Y') . '</span>'); ?>

            <?php else : ?>

                <?php _e('Блог', 'GoGetThemes'); ?>

            <?php endif; ?></h3>

        <div class="lines sub_title"><?php echo $smof_data['blog_subtitle']; ?></div>
    </div>
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <ul class="nostyle">
                    <?php while (have_posts()) : the_post(); ?>

                        <!-- ========== POST SECTION ========== -->

                        <li class="post">
                            <h2 class="text_center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            <?php if (has_post_thumbnail()) : ?>

                                <div class="post_thumb">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail('blog-thumb'); ?>
                                    </a>
                                </div>

                            <?php endif; ?>

                            <div class="entry">
                                <?php the_content(); ?>
                            </div>
                            <ul class="post_info">
                                <li class="blog_date">
                                    <span class="circ"><?php the_time('d'); ?></span> <?php the_time('F Y'); ?>
                                </li>
                                <li class="comments">
                                    <?php if ('open' == $post->comment_status) : ?>

                                        <!-- If comments are open, but there are no comments. -->



                                        <span
                                            class="circ"><?php comments_popup_link('0', '1', '%'); ?></span> <?php comments_popup_link('Комментарии'); ?>

                                    <?php else : // comments are closed ?>

                                        <!-- If comments are closed. -->

                                        <span class="circ">OFF</span> Comment.



                                    <?php endif; ?>
                                </li>
                                <li class="read_more">
                                    <a href="<?php the_permalink(); ?>"><span><i class="icon-chevron-right"></i></span>Подробнее</a>
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



            <h1 class="title-404"><?php _e('404 &#8212; Ничего не найдено!', 'GoGetThemes'); ?></h1>

            <p><?php _e('Извините, но по вашему запросу нет результатов.', 'GoGetThemes'); ?></p>

            <h6><?php _e('Вы можете вернуться', 'GoGetThemes'); ?> <a href="<?php echo home_url(); ?>/"
                                                                 title="<?php esc_attr_e('На главную', 'GoGetThemes'); ?>"><?php _e('&larr; На главную', 'GoGetThemes'); ?></a> <?php _e('Или продолжить поиск', 'GoGetThemes'); ?>
            </h6>

            <?php get_search_form(); ?>



        <?php

        endif;
        ?>
    </div>
</section>



<?php get_footer(); ?>

