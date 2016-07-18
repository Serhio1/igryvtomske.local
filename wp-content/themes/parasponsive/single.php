<?php



// Exit if accessed directly

if (!defined('ABSPATH')) exit;



/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        Parasponsive
 * @author         GoGetThemes
 * @copyright      2013 GoGetThemes
 * @license        license.txt
 * @version        Release: v1.0
 */

?>

<?php get_header(); ?>

<section id="blog">
    <?php if (have_posts()) : ?>

    <div class="container text_center">
        <h3><?php $category = get_the_category();
            echo $firstCategory = $category[0]->cat_name; ?></h3>

        <div class="lines sub_title"><?php echo $smof_data['blog_subtitle']; ?></div>
    </div>
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <?php while (have_posts()) : the_post(); ?>

                    <ul class="post_nav">
                        <li class="prev_post">
                            <?php previous_post_link('%link', ''); ?>
                        </li>
                        <li class="back_blog">
                            <a href="<?php echo get_category_link(get_cat_ID($firstCategory)); ?>"></a>
                        </li>
                        <li class="next_post">
                            <?php next_post_link('%link', ''); ?>
                        </li>
                    </ul>

                    <!-- ========== POST SECTION ========== -->

                    <div class="single_post">
                        <div class="single_date">
                            <span class="circ"><?php the_time('d'); ?></span><br/> <?php the_time('F Y'); ?>
                        </div>
                        <h2 class="text_center"><?php the_title(); ?></h2>

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

                        <?php the_tags(__('С меткой:', 'responsive') . ' ', ', ', '<br />'); ?>

                        <?php if ($smof_data['blog_share'] == 1) { ?>

                            <div id="share" class="row-fluid">
                                <div class="span2">Поделиться</div>
                                <div class="span10">
                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                        <a class="addthis_button_preferred_1"></a>
                                        <a class="addthis_button_preferred_2"></a>
                                        <a class="addthis_button_preferred_3"></a>
                                        <a class="addthis_button_preferred_4"></a>
                                        <a class="addthis_button_compact"></a>
                                        <a class="addthis_counter addthis_bubble_style"></a>
                                    </div>
                                    <script type="text/javascript"
                                            src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-516e76fe5514a72e"></script>
                                    <!-- AddThis Button END -->
                                </div>
                            </div>

                        <?php } ?>

                        <?php comments_template('', true); ?>
                    </div>

                <?php endwhile; ?>
            </div>



            <?php get_sidebar('blog'); ?>
        </div>

        <?php else : ?>



            <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'responsive'); ?></h1>

            <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'responsive'); ?></p>

            <h6><?php _e('You can return', 'responsive'); ?> <a href="<?php echo home_url(); ?>/"
                                                                title="<?php esc_attr_e('Home', 'responsive'); ?>"><?php _e('&larr; Home', 'responsive'); ?></a> <?php _e('or search for the page you were looking for', 'responsive'); ?>
            </h6>

            <?php get_search_form(); ?>



        <?php
        endif;
        ?>
    </div>
</section>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-61331890-1', 'auto');
ga('send', 'pageview');

</script>
<?php get_footer(); ?>
