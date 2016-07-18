<?php



// Exit if accessed directly

if (!defined('ABSPATH')) exit;



/**
 * Pages Template
 *
 *
 * @file           page.php
 * @package        Parasponsive
 * @author         GoGetThemes
 * @copyright      2013 GoGetThemes
 * @license        license.txt
 * @version        Release: v1.0
 */

?>

<?php get_header(); ?>

<div class="id_page">
    <div class="container">
        <?php if (have_posts()) : ?>



            <?php while (have_posts()) : the_post(); ?>



                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="post-title text_center page_tit"><?php the_title(); ?></h1>

                    <div class="post-entry">
                        <?php the_content(__('Read more &#8250;', 'responsive')); ?>

                        <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                    </div>
                    <!-- end of .post-entry -->
                </div><!-- end of #post-<?php the_ID(); ?> -->





            <?php endwhile; ?>





        <?php else : ?>



            <h1 class="title-404"><?php _e('404 &#8212; Ничего не найдено!', 'responsive'); ?></h1>

            <p><?php _e('Извините, но по вашему запросу нет результатов.', 'responsive'); ?></p>

            <h6><?php _e('Извините, но по вашему запросу нет результатов.', 'responsive'); ?> <a href="<?php echo home_url(); ?>/"
                                                                title="<?php esc_attr_e('На главную', 'responsive'); ?>"><?php _e('&larr; На главную', 'responsive'); ?></a> <?php _e('Или продолжить поиск', 'responsive'); ?>
            </h6>

            <?php get_search_form(); ?>



        <?php endif; ?>
    </div>
    <!-- end of #content -->
</div>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-61331890-1', 'auto');
ga('send', 'pageview');

</script>
<?php get_footer(); ?>

