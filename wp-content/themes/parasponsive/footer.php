<?php



// Exit if accessed directly

if (!defined('ABSPATH')) exit;



/**
 * Footer Template
 *
 * @file           footer.php
 * @package        Parasponsive
 * @author         GoGetThemes
 * @copyright      2013 GoGetThemes
 * @license        license.txt
 * @version        Release: v1.0
 */

?>

<!-- ==========================FOOTER======================= -->
<footer>
<div class="container">
<section class="footer_intro">
    <?php global $smof_data; ?>
    <?php if ($smof_data['footer_intro_h1']) { ?>
        <h1><?php echo $smof_data['footer_intro_h1']; ?></h1>
    <?php } ?>
    <?php if ($smof_data['footer_intro_h2']) { ?>
        <h2><?php echo $smof_data['footer_intro_h2']; ?></h2>
    <?php } ?>



    <?php if ($smof_data['footer_social'] == 1) { ?>

        <ul class="social_line">
            <?php if ($smof_data['footer_soc_skype']) { ?>

                <li><a href="tel:<?php echo $smof_data['footer_soc_skype']; ?>" title="Skype" class="fsoc">S</a></li>

            <?php
            }
            if ($smof_data['footer_soc_tumblr']) {
                ?>

                <li><a href="<?php echo $smof_data['footer_soc_tumblr']; ?>" title="Tumblr" class="fsoc">t</a></li>

            <?php
            }
            if ($smof_data['footer_soc_digg']) {
                ?>

                <li><a href="<?php echo $smof_data['footer_soc_digg']; ?>" title="Digg" class="fsoc">></a></li>

            <?php
            }
            if ($smof_data['footer_soc_linkedin']) {
                ?>

                <li><a href="<?php echo $smof_data['footer_soc_linkedin']; ?>" title="LinkedIn" class="fsoc">L</a></li>

            <?php
            }
            if ($smof_data['footer_soc_facebook']) {
                ?>

                <li><a href="<?php echo $smof_data['footer_soc_facebook']; ?>" title="Facebook" class="fsoc">f</a></li>

            <?php
            }
            if ($smof_data['footer_soc_twitter']) {
                ?>

                <li><a href="<?php echo $smof_data['footer_soc_twitter']; ?>" title="Twitter" class="fsoc">T</a></li>

            <?php
            }
            if ($smof_data['footer_soc_youtube']) {
                ?>

                <li><a href="<?php echo $smof_data['footer_soc_youtube']; ?>" title="YouTube" class="fsoc">U</a></li>

            <?php
            }
            if ($smof_data['footer_soc_vimeo']) {
                ?>

                <li><a href="<?php echo $smof_data['footer_soc_vimeo']; ?>" title="Vimeo" class="fsoc">V</a></li>

            <?php
            }
            if ($smof_data['footer_soc_rss']) {
                ?>

                <li><a href="<?php echo $smof_data['footer_soc_rss']; ?>" title="RSS" class="fsoc">R</a></li>

            <?php
            }
            if ($smof_data['footer_soc_google']) {
                ?>

                <li><a href="<?php echo $smof_data['footer_soc_google']; ?>" title="Google Plus" class="fsoc">+</a></li>

            <?php
            }
            if ($smof_data['footer_soc_flickr']) {
                ?>

                <li><a href="<?php echo $smof_data['footer_soc_flickr']; ?>" title="Flickr" class="fsoc">F</a></li>

            <?php } ?>
        </ul>

    <?php } ?>
</section>
<section class="footer_widgets">
    <div class="row-fluid">
        <?php if ($smof_data['footer_widget'] == 1) { ?>

            <div class="span4 tweet">
                <h4 class="bold">TWITTER</h4>

                <div class="latest_tweet"></div>
                <script>
                    //<![CDATA[
                    jQuery(window).load(function ($) {
                        jQuery('.latest_tweet').tweet({

                            join_text: "auto",
                            username: ["<?php echo $smof_data['footer_widget_twitter'];?>"],
                            count: <?php echo $smof_data['footer_widget_twitter_num'];?>,
                            auto_join_text_url: "",
                            loading_text: "loading tweets...",
                            ul_class: "sidebar_tweet",
                            template: "{text}{time}"

                        });
                    });
                    //]]>
                </script>
            </div>

            <div class="span4 blog_feed">
                <h4 class="bold">НОВЫЕ ЗАПИСИ</h4>

                <div class="latest_posts">
                    <?php

                    $category_id = get_cat_ID($smof_data['footer_widget_cat']);

                    $post_args = array(
                        'post_type' => 'post',
                        'cat' => $category_id,
                        'showposts' => $smof_data['footer_widget_post_num']
                    );


                    $the_query = new WP_Query($post_args);

                    while ($the_query->have_posts()) :

                        $the_query->the_post();?>

                        <div class="fpost">
                            <span class="date"><?php the_time($smof_data['footer_widget_date_format']); ?></span>
                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>

            <div class="span4 flickr_feed">
                <h4 class="bold">ФОТО FLICKR</h4>

                <div class="latest_photos">
                    <!-- Start of Flickr Badge -->
                    <div id="flickr_badge_uber_wrapper">
                        <div id="flickr_badge_wrapper">
                            <script type="text/javascript"
                                    src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $smof_data['footer_widget_flickr_num']; ?>&amp;display=latest&amp;size=s&amp;layout=v&amp;source=user&amp;user=<?php echo urlencode($smof_data['footer_widget_flickr']); ?>"></script>
                        </div>
                    </div>
                    <!-- End of Flickr Badge -->
                </div>
            </div>

        <?php
        } else {
            dynamic_sidebar('footer_type_1');
            dynamic_sidebar('footer_type_2');
            dynamic_sidebar('footer_type_3');
        }?>
    </div>
</section>
<section class="footer_bottom">
    <div class="row-fluid">
        <div class="span4 flogo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo $smof_data['flogo']; ?>" alt=""/></a>
        </div>
        <div class="span4 copyright">
            <?php echo $smof_data['footer_copyright']; ?>

<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=29377930&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/29377930/3_0_E0E0E0FF_C0C0C0FF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:29377930,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter29377930 = new Ya.Metrika({id:29377930,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29377930" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

        </div>
        <div class="span4 powered">
            Создание сайта: &nbsp<a href="http://good-tlt.ru">Good Design</a> Группа: <a href="http://vk.com/good_tlt">ВКонтакте</a>
        </div>
    </div>
</section>
</div>
</footer>

<?php if ($smof_data['nicescroll_switch'] == 1) {
    wp_enqueue_script('nicescroll'); ?>

    <script>
        //<![CDATA[
        jQuery(document).ready(function ($) {
            function niceScrollInit() {
                $("html").niceScroll({

                    background: '#000',
                    scrollspeed: 60,
                    mousescrollstep: 35,
                    cursorwidth: 15,
                    cursorborder: 0,
                    cursorcolor: '#FFF',
                    cursorborderradius: 6,
                    autohidemode: false

                });
                $('body, body header').css('padding-right', '15px');
            }

            var $smoothActive = $('body').attr('data-smooth-scrolling');
            if ($smoothActive == 1 && $(window).width() > 1024) {
                niceScrollInit();
            }
        });
        jQuery(window).ready(function ($) {
            if ($(window).width() > 1024) var w = $(window).width() - 15;
            else var w = $(window).width();
            $('.top_box').css('border-left-width', w);
            $('.bot_box').css('border-right-width', w);
            $(window).on('smartresize', function () {
                var w = $(window).width();
                if (w < 768)

                    var ipadw = w
                if (w > 768)

                    var ipadw = w - 15
                $('.top_box').css('border-left-width', w);
                $('.bot_box').css('border-right-width', w);
            });
        });
        //]]>
    </script>

    <style>
        .ls-container {

            float: left;

        }
    </style>

<?php } else { ?>

    <script>
        //<![CDATA[
        $(document).ready(function () {
            var w = $(window).width();
            $('.top_box').css('border-left-width', w);
            $('.bot_box').css('border-right-width', w);
            $(window).on('smartresize', function () {
                var w = $(window).width();
                $('.top_box').css('border-left-width', w);
                $('.bot_box').css('border-right-width', w);
            });
        });
        //]]>
    </script>

<?php } ?>

<script>
    //<![CDATA[
    jQuery(document).ready(function ($) {
        var retina = window.devicePixelRatio > 1 ? true : false;
        <?php if($smof_data['logo_retina'] && $smof_data['logo_retina_w'] && $smof_data['logo_retina_h']): ?>
        if (retina) {
            jQuery('#header .logo img').attr('src', '<?php echo $smof_data["logo_retina"]; ?>');
            jQuery('#header .logo img').attr('width', '<?php echo $smof_data["logo_retina_w"]; ?>');
            jQuery('#header .logo img').attr('height', '<?php echo $smof_data["logo_retina_w"]; ?>');
        }
        <?php endif; ?>

        <?php if($smof_data['serv_excerpt_cut'] == 1) {?>
        $('.serv_entry').filter(function () {
            return $(this).text().length >
            <?php echo $smof_data['serv_excerpt_cut_num'];?>
        }).each(function () {
                $(this).text(jQuery(this).text().substring(0, <?php echo $smof_data['serv_excerpt_cut_num'];?>) + '<?php echo $smof_data['serv_excerpt_cut_text'];?>')
            });
        <?php } ?>
    });
    //]]>
</script>

<?php wp_footer(); ?>

</body>
</html>