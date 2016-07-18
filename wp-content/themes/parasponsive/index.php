<?php
// Exit if accessed directly

if (!defined('ABSPATH')) exit;



/**
 * Index Template
 *
 *
 * @file           index.php
 * @package        Parasponsive
 * @author         GoGetThemes
 * @copyright      2013 GoGetThemes
 * @license        license.txt
 * @version        Release: v1.0
 */

?>

<?php get_header(); ?>

<script>
    //<![CDATA[
    jQuery(document).ready(function ($) {
        var winW = $(window).width();
        if (winW < 769)

            var col = 2;
        if (winW < 1025 && winW > 769)

            var col = 3;
        if (winW > 1025)

            var col = 4;
        slider = $('.mycarousel').bxSlider({

            nextText: '<i class="icon-chevron-right"></i>',
            prevText: '<i class="icon-chevron-left"></i>',
            slideWidth: 270,
            minSlides: 1,
            moveSlides: 1,
            maxSlides: col,
            slideMargin: 10

        });
        slider2 = $('.mycarousel2').bxSlider({

            nextText: '<i class="icon-chevron-right"></i>',
            prevText: '<i class="icon-chevron-left"></i>',
            slideWidth: 270,
            minSlides: 1,
            moveSlides: 1,
            maxSlides: col,
            slideMargin: 10

        });
    });
    jQuery(function ($) {
        var $container = $('#container');
        $container.imagesLoaded(function () {
            $container.isotope({

                itemSelector: '.portfolio',
                masonry: {

                    columnWidth: $container.width() / 12



                }

            });
        });
        $(window).on('smartresize', function () {
            $container.isotope({

                masonry: {

                    columnWidth: $container.width() / 12

                }

            });
        });
        window.addEventListener("orientationchange", function () {
            $container.isotope({

                masonry: {

                    columnWidth: $container.width() / 12

                }

            });
        }, false);
        var $optionSets = $('#options .option-set'), $optionLinks = $optionSets.find('a');
        $optionLinks.click(function () {
            var $this = $(this);
            // don't proceed if already selected
            if ($this.hasClass('selected')) {
                return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[ key ] = value;
            $container.isotope(options);
            return false;
        });
        function reloy() {
            var $container = $('#container');
            $container.isotope('reLayout');
        }

        $('.load_more').click(function () {
            var offset_post = $('#container>div').length;
            $.ajax({

                url: $(this).attr('href'),
                data: 'offset=' + offset_post,
                method: 'GET',
                cache: false

            }).done(function (more) {
                    if ($(more).length == '') {
                        $('.load_more').hide();
                    }
                    var $newEls = $(more);
                    $container.isotope('insert', $newEls, reloy);
                    var iso_h = $('.isotope-item').height() - 60;
                    $('.over_box_inner').height(iso_h);
                    $('.portfolio_pop').magnificPopup({

                        type: 'ajax'

                    });
                });
            return false;
        });
    });
    //]]>
</script>
<!-- =========================PAGES============================= -->
<section id="pages">
<ul class="nostyle">
<!-- ========== HOME SECTION ========== -->
<li id="home">
    <section class="slider">
        <?php if ($smof_data['slider_switch'] == 1 && !empty($smof_data['slider_sc'])) {
            echo do_shortcode('[layerslider id="' . $smof_data['slider_sc'] . '"]');
        } ?>
    </section>
</li>

<?php $smof_data['homepage_blocks'];

$i = 0;

foreach ($smof_data['homepage_blocks']['enabled'] as $block) {
    $i++;
    switch ($block) {
        case 'Service' :
            ?>

            <!-- ========== SERVICES SECTION ========== -->

            <li id="services" class="section<?php echo $i; ?>">
                <?php if ($smof_data['serv_switch'] == 1) { ?>

                    <section class="serv_intro intro"

                        <?php if ($smof_data['serv_intro_img']) { ?>

                            style="background-image: url(<?php echo $smof_data['serv_intro_img']; ?>);"

                        <?php } ?>>
                        <div class="black_over">
                            <div class="container text_center">
                                <div class="intro_pad">
                                    <?php if ($smof_data['serv_intro_h1']) { ?>
                                        <h1><?php echo $smof_data['serv_intro_h1']; ?></h1>
                                    <?php } ?>
                                    <?php if ($smof_data['serv_intro_h2']) { ?>
                                        <h2><?php echo $smof_data['serv_intro_h2']; ?></h2>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>

                <?php } ?>

                <section class="service_box man_box">
                    <div class="serv_top top_box"></div>
                    <div class="serv_mid">
                        <div class="container">
                            <?php if ($smof_data['serv_title']) { ?>
                                <h3 class="text_center"><?php echo $smof_data['serv_title']; ?></h3>
                            <?php } ?>
                            <?php if ($smof_data['serv_subtitle']) { ?>
                                <div
                                    class="lines sub_title text_center"><?php echo $smof_data['serv_subtitle']; ?></div>
                            <?php } ?>

                            <div class="section_exc"><?php echo $smof_data['serv_excerpt']; ?></div>
                            <div class="serv_corusel">
                                <div class="mycont">
                                    <!-- Carousel items -->
                                    <ul class="mycarousel">
                                        <?php $service_args = array(
                                            'post_type' => 'post',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'post_format',
                                                    'field' => 'slug',
                                                    'terms' => array('post-format-link')
                                                )
                                            ),
                                            'showposts' => $smof_data['serv_posts_num']
                                        );


                                        $the_query = new WP_Query($service_args);

                                        while ($the_query->have_posts()) :

                                            $the_query->the_post();?>

                                            <li class="item">
                                                <h4><?php the_title(); ?></h4>

                                                <?php $icon_url = get_field('icon_url');

                                                if (!empty($icon_url)) {
                                                    echo '<a href="' . $icon_url . '" class="serv_link">';
                                                }

                                                $icon = get_field('icon_class');

                                                $icon_image = get_field('icon_image');

                                                if (!empty($icon)) {
                                                    ?>

                                                    <i class="<?php echo $icon; ?>"></i>

                                                <?php } else { ?>

                                                    <img src="<?php echo $icon_image; ?>" alt=""/>

                                                <?php } ?>

                                                <?php if (!empty($icon_url)) {
                                                    echo '</a>';
                                                } ?>

                                                <div class="serv_entry text_center">
                                                    <?php the_content(); ?>
                                                </div>
                                            </li>

                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="serv_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a>
                    </div>
                </section>
            </li>

            <?php break;
        case 'Portfolio' :
            ?>

            <!-- ========== PORTFOLIO SECTION ========== -->

            <li id="portfolio" class="section<?php echo $i; ?>">
                <?php if ($smof_data['port_switch'] == 1) { ?>

                    <section class="portfolio_intro intro"

                        <?php if ($smof_data['port_intro_img']) { ?>

                            style="background-image: url(<?php echo $smof_data['port_intro_img']; ?>);"

                        <?php } ?>>
                        <div class="black_over">
                            <div class="container text_center">
                                <div class="intro_pad">
                                    <?php if ($smof_data['port_intro_h1']) { ?>
                                        <h1><?php echo $smof_data['port_intro_h1']; ?></h1>
                                    <?php } ?>
                                    <?php if ($smof_data['port_intro_h2']) { ?>
                                        <h2><?php echo $smof_data['port_intro_h2']; ?></h2>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>

                <?php } ?>

                <section class="portfolio_main man_box">
                    <div class="portfolio_top top_box"></div>
                    <div class="portfolio_mid">
                        <div class="container">
                            <?php if ($smof_data['port_title']) { ?>
                                <h3 class="text_center"><?php echo $smof_data['port_title']; ?></h3>
                            <?php } ?>
                            <?php if ($smof_data['port_subtitle']) { ?>
                                <div
                                    class="lines sub_title text_center"><?php echo $smof_data['port_subtitle']; ?></div>
                            <?php } ?>

                            <div class="section_exc"><?php echo $smof_data['port_excerpt']; ?></div>
                            <section id="options" class="clearfix">
                                <ul id="filters" class="option-set clearfix" data-option-key="filter">
                                    <li><a href="#filter" data-option-value="*" class="selected">все</a></li>

                                    <?php
                                    $taxonomies = get_terms('project-type', 'orderby=count&hide_empty=0');
                                    foreach ($taxonomies as $tax) {
                                        echo '<li><a href="#filter" data-option-value=".' . $tax->slug . '">' . $tax->name . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </section>
                            <div id="container">
                                <?php $port_args = array(
                                    'post_type' => 'portfolio',
                                    'showposts' => $smof_data['port_posts_num']
                                );
                                $the_query = new WP_Query($port_args);
                                while ($the_query->have_posts()) :

                                    $the_query->the_post();?>

                                    <div <?php post_class(); ?>>
                                        <div class="iso_inner">
                                            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

                                            $url = $thumb['0']; ?>

                                            <img src="<?php echo $url; ?>" alt="" width="280" height="280"/>

                                            <div class="over_box">
                                                <div class="over_box_pad">
                                                    <div class="over_box_inner">
                                                        <?php if ($smof_data['port_item_title_mod'] == 1) { ?>

                                                            <span class="portfolio_name"><?php the_title(); ?></span>

                                                        <?php } ?>

                                                        <?php if ($smof_data['port_item_desc_mod'] == 1) { ?>

                                                            <span
                                                                class="portfolio_desc"><?php the_time('F d, Y'); ?></span>

                                                        <?php } ?>

                                                        <?php if ($smof_data['port_item_pp_mod'] == 1) { ?>

                                                            <a class="portfolio_pop" href="<?php the_permalink(); ?>"><i
                                                                    class="icon-search"></i></a>

                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                            </div>
                            <div class="text_center">
                                <a href="<?php echo get_template_directory_uri() . '/ajax.php'; ?>" class="load_more">Показать больше<br/><i
                                        class="icon-chevron-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a>
                    </div>
                </section>
            </li>

            <?php break;
        case 'Pricing Table' :
            ?>

            <!-- ========== PRICING TABLE ========== -->

            <li id="pricing_table" class="section<?php echo $i; ?>">
            <?php if ($smof_data['price_switch'] == 1) { ?>

                <section class="pricing_table_intro intro"

                    <?php if ($smof_data['price_intro_img']) { ?>

                        style="background-image: url(<?php echo $smof_data['price_intro_img']; ?>);"

                    <?php } ?>>
                    <div class="black_over">
                        <div class="container text_center">
                            <div class="intro_pad">
                                <?php if ($smof_data['price_intro_h1']) { ?>
                                    <h1><?php echo $smof_data['price_intro_h1']; ?></h1>
                                <?php } ?>
                                <?php if ($smof_data['price_intro_h2']) { ?>
                                    <h2><?php echo $smof_data['price_intro_h2']; ?></h2>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>

            <?php } ?>

            <section class="pricing_table_main man_box">
            <div class="pricing_table_top top_box"></div>
            <div class="pricing_table_mid">
            <div class="container">
            <?php if ($smof_data['price_title']) { ?>
                <h3 class="text_center"><?php echo $smof_data['price_title']; ?></h3>
            <?php } ?>
            <?php if ($smof_data['price_subtitle']) { ?>
                <div class="lines sub_title text_center"><?php echo $smof_data['price_subtitle']; ?></div>
            <?php } ?>

            <div class="section_exc"><?php echo $smof_data['port_excerpt']; ?></div>

            <?php

            $the_query = new WP_Query(array(
                'post_type' => 'page', /* overrides default 'post' */
                'meta_key' => '_wp_page_template',
                'meta_value' => 'pt3-page.php'
            ));

            while ($the_query->have_posts()) :

                $the_query->the_post();
                $price = get_field('money_value');
                if ($price) {
                    $sup_price = substr(strstr($price, '.'), 1);
                }
                if (!empty($sup_price)) {
                    $top_price = strstr($price, '.', true);
                } else {
                    $sup_price = '';
                    $top_price = $price;
                }
                $price2 = get_field('money_value2');
                if ($price2) {
                    $sup_price2 = substr(strstr($price2, '.'), 1);
                }
                if (!empty($sup_price2)) {
                    $top_price2 = strstr($price2, '.', true);
                } else {
                    $sup_price2 = '';
                    $top_price2 = $price2;
                }
                $price3 = get_field('money_value3');
                if ($price3) {
                    $sup_price3 = substr(strstr($price3, '.'), 1);
                }
                if (!empty($sup_price3)) {
                    $top_price3 = strstr($price3, '.', true);
                } else {
                    $sup_price3 = '';
                    $top_price3 = $price3;
                }

                ?>



                <div class="pricing_table row-fluid">
                    <div class="span4">
                        <div class="pt_title"><?php the_field('column_title'); ?></div>
                        <div class="pt_price">
                            <span><?php the_field('currency'); ?><?php echo $top_price; ?></span><sup><?php echo $sup_price; ?></sup>/<?php the_field('price_per'); ?>
                        </div>

                        <?php $rows = get_field('plan_features');

                        if ($rows) {
                            foreach ($rows as $row) {
                                echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                            }
                        }?>

                        <div class="pt_pay"><a
                                href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a></div>
                    </div>
                    <div class="span4">
                        <div class="pt_title"><?php the_field('column_title2'); ?></div>
                        <div class="pt_price">
                            <span><?php the_field('currency2'); ?><?php echo $top_price2; ?></span><sup><?php echo $sup_price2; ?></sup>/<?php the_field('price_per2'); ?>
                        </div>

                        <?php $rows = get_field('plan_features2');

                        if ($rows) {
                            foreach ($rows as $row) {
                                echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                            }
                        }?>

                        <div class="pt_pay"><a
                                href="<?php the_field('button_link2'); ?>"><?php the_field('button_text2'); ?></a></div>
                    </div>
                    <div class="span4">
                        <div class="pt_title"><?php the_field('column_title3'); ?></div>
                        <div class="pt_price">
                            <span><?php the_field('currency3'); ?><?php echo $top_price3; ?></span><sup><?php echo $sup_price3; ?></sup>/<?php the_field('price_per3'); ?>
                        </div>

                        <?php $rows = get_field('plan_features3');

                        if ($rows) {
                            foreach ($rows as $row) {
                                echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                            }
                        }?>

                        <div class="pt_pay"><a
                                href="<?php the_field('button_link3'); ?>"><?php the_field('button_text3'); ?></a></div>
                    </div>
                </div>

            <?php endwhile; ?>

            <?php

            $the_query = new WP_Query(array(
                'post_type' => 'page', /* overrides default 'post' */
                'meta_key' => '_wp_page_template',
                'meta_value' => 'pt4-page.php'
            ));

            while ($the_query->have_posts()) :

                $the_query->the_post();
                $price = get_field('money_value');
                $sup_price = substr(strstr($price, '.'), 1);
                if (!empty($sup_price)) {
                    $top_price = strstr($price, '.', true);
                } else {
                    $sup_price = '';
                    $top_price = $price;
                }
                $price2 = get_field('money_value2');
                $sup_price2 = substr(strstr($price2, '.'), 1);
                if (!empty($sup_price2)) {
                    $top_price2 = strstr($price2, '.', true);
                } else {
                    $sup_price2 = '';
                    $top_price2 = $price2;
                }
                $price3 = get_field('money_value3');
                $sup_price3 = substr(strstr($price3, '.'), 1);
                if (!empty($sup_price3)) {
                    $top_price3 = strstr($price3, '.', true);
                } else {
                    $sup_price3 = '';
                    $top_price3 = $price3;
                }
                $price4 = get_field('money_value4');
                $sup_price4 = substr(strstr($price4, '.'), 1);
                if (!empty($sup_price4)) {
                    $top_price4 = strstr($price4, '.', true);
                } else {
                    $sup_price4 = '';
                    $top_price4 = $price4;
                }



                ?>



                <div class="pricing_table row-fluid">
                    <div class="span3">
                        <div class="pt_title"><?php the_field('column_title'); ?></div>
                        <div class="pt_price">
                            <span><?php the_field('currency'); ?><?php echo $top_price; ?></span><sup><?php echo $sup_price; ?></sup>/<?php the_field('price_per'); ?>
                        </div>

                        <?php $rows = get_field('plan_features');

                        if ($rows) {
                            foreach ($rows as $row) {
                                echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                            }
                        }?>

                        <div class="pt_pay"><a
                                href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a></div>
                    </div>
                    <div class="span3">
                        <div class="pt_title"><?php the_field('column_title2'); ?></div>
                        <div class="pt_price">
                            <span><?php the_field('currency2'); ?><?php echo $top_price2; ?></span><sup><?php echo $sup_price2; ?></sup>/<?php the_field('price_per2'); ?>
                        </div>

                        <?php $rows = get_field('plan_features2');

                        if ($rows) {
                            foreach ($rows as $row) {
                                echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                            }
                        }?>

                        <div class="pt_pay"><a
                                href="<?php the_field('button_link2'); ?>"><?php the_field('button_text2'); ?></a></div>
                    </div>
                    <div class="span3">
                        <div class="pt_title"><?php the_field('column_title3'); ?></div>
                        <div class="pt_price">
                            <span><?php the_field('currency3'); ?><?php echo $top_price3; ?></span><sup><?php echo $sup_price3; ?></sup>/<?php the_field('price_per3'); ?>
                        </div>

                        <?php $rows = get_field('plan_features3');

                        if ($rows) {
                            foreach ($rows as $row) {
                                echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                            }
                        }?>

                        <div class="pt_pay"><a
                                href="<?php the_field('button_link3'); ?>"><?php the_field('button_text3'); ?></a></div>
                    </div>
                    <div class="span3">
                        <div class="pt_title"><?php the_field('column_title4'); ?></div>
                        <div class="pt_price">
                            <span><?php the_field('currency4'); ?><?php echo $top_price4; ?></span><sup><?php echo $sup_price4; ?></sup>/<?php the_field('price_per4'); ?>
                        </div>

                        <?php $rows = get_field('plan_features4');

                        if ($rows) {
                            foreach ($rows as $row) {
                                echo '<div class="pt_feature">' . $row['feature'] . '</div>';
                            }
                        }?>

                        <div class="pt_pay"><a
                                href="<?php the_field('button_link4'); ?>"><?php the_field('button_text4'); ?></a></div>
                    </div>
                </div>

            <?php endwhile; ?>

            <?php if ($smof_data['price_client'] == 1) { ?>

                <div class="c_title text_center"><?php echo $smof_data['price_client_title']; ?></div>

                <div class="lines sub_title text_center c_quot">&quot;</div>

                <div class="hapy_boys cycle-slideshow" data-cycle-slides="> div">
                    <?php $client_args = array(
                        'post_type' => 'post',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post_format',
                                'field' => 'slug',
                                'terms' => array('post-format-quote')
                            )
                        ),
                        'showposts' => $smof_data['price_client_num']
                    );


                    $the_query = new WP_Query($client_args);

                    while ($the_query->have_posts()) :

                        $the_query->the_post();?>



                        <div class="c_block text_center">
                            <div class="c_entry">
                                <?php the_content(); ?>
                            </div>
                            <div class="c_author"><?php the_title(); ?></div>
                        </div>



                    <?php endwhile; ?>
                </div>

            <?php } ?>
            </div>
            </div>
            <div class="pricing_table_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a>
            </div>
            </section>
            </li>

            <?php break;
        case 'О нас' :
            ?>

            <!-- ========== ABOUT TEAM ========== -->

            <li id="about_us" class="section<?php echo $i; ?>">
            <?php if ($smof_data['about_switch'] == 1) { ?>

                <section class="about_us_intro intro"

                    <?php if ($smof_data['about_intro_img']) { ?>

                        style="background-image: url(<?php echo $smof_data['about_intro_img']; ?>);"

                    <?php } ?>>
                    <div class="black_over">
                        <div class="container text_center">
                            <div class="intro_pad">
                                <?php if ($smof_data['about_intro_h1']) { ?>
                                    <h1><?php echo $smof_data['about_intro_h1']; ?></h1>
                                <?php } ?>
                                <?php if ($smof_data['about_intro_h2']) { ?>
                                    <h2><?php echo $smof_data['about_intro_h2']; ?></h2>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>

            <?php } ?>

            <section class="about_us_main man_box">
            <div class="about_us_top top_box"></div>
            <div class="about_us_mid">
            <div class="container">
            <?php if ($smof_data['about_title']) { ?>
                <h3 class="text_center"><?php echo $smof_data['about_title']; ?></h3>
            <?php } ?>
            <?php if ($smof_data['about_subtitle']) { ?>
                <div class="lines sub_title text_center"><?php echo $smof_data['about_subtitle']; ?></div>
            <?php } ?>

            <div class="section_exc"><?php echo $smof_data['about_excerpt']; ?></div>
            <div class="team_corusel">
                <div class="mycont">
                    <!-- Carousel items -->
                    <ul class="mycarousel2">
                        <?php $team_args = array(
                            'post_type' => 'post',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'post_format',
                                    'field' => 'slug',
                                    'terms' => array('post-format-image')
                                )
                            ),
                            'posts_per_page' => -1
                        );


                        $the_query = new WP_Query($team_args);

                        while ($the_query->have_posts()) :

                            $the_query->the_post();?>

                            <li class="item text_center">
                                <div class="team_photo">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/images/800x800.jpg" />';
                                    }?>

                                    <div class="mask mask-1"></div>
                                    <div class="mask mask-2"></div>
                                    <div class="content">
                                        <h2><?php the_field('person_position'); ?></h2>
                                    </div>
                                </div>
                                <div class="team_name"><?php the_title(); ?></div>
                                <div class="team_entry">
                                    <?php the_content(); ?>
                                </div>
                                <div class="team_social">
                                    <?php if ($smof_data['about_social_icon'] == 1) {
                                        $fb = get_field("facebook_url");
                                        $twit = get_field("twitter");
                                        $gplus = get_field("google");
                                        if ($twit) {
                                            ?>

                                            <a href="<?php echo $twit; ?>" class="soc_font" data-toggle="tooltip"
                                               title="Twitter"><i class="icon-twitter"></i></a>

                                        <?php
                                        }
                                        if ($fb) {
                                            ?>

                                            <a href="<?php echo $fb; ?>" class="soc_font" data-toggle="tooltip"
                                               title="Facebook"><i class="icon-facebook"></i></a>

                                        <?php
                                        }
                                        if ($gplus) {
                                            ?>

                                            <a href="<?php echo $gplus; ?>" class="soc_font" data-toggle="tooltip"
                                               title="Google Plus"><i class="icon-google-plus"></i></a>

                                        <?php
                                        }
                                    } ?>
                                </div>
                            </li>

                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>

            <?php if ($smof_data['about_skills'] == 1) { ?>

                <div class="our_skills">
                <script>
                    //<![CDATA[
                    // KNOB
                    jQuery(document).ready(function ($) {
                        $('.knob-1').waypoint(function () {
                            $('.knob-1').knob();
                            if ($('.knob-1').val() == 0) {
                                $({

                                    value: 0

                                }).animate({

                                        value: $('.knob-1').attr("data-rel")

                                    }, {

                                        duration: 5000,
                                        easing: 'swing',
                                        step: function () {
                                            $('.knob-1').val(Math.ceil(this.value)).trigger('change');
                                        }

                                    });
                            }
                        }, {

                            triggerOnce: true,
                            offset: function () {
                                return $(window).height() - $(this).outerHeight();
                            }

                        });
                        $('.knob-2').waypoint(function () {
                            $('.knob-2').knob();
                            if ($('.knob-2').val() == 0) {
                                $({

                                    value: 0

                                }).animate({

                                        value: $('.knob-2').attr("data-rel")

                                    }, {

                                        duration: 5000,
                                        easing: 'swing',
                                        step: function () {
                                            $('.knob-2').val(Math.ceil(this.value)).trigger('change');
                                        }

                                    });
                            }
                        }, {

                            triggerOnce: true,
                            offset: function () {
                                return $(window).height() - $(this).outerHeight();
                            }

                        });
                        $('.knob-3').waypoint(function () {
                            $('.knob-3').knob();
                            if ($('.knob-3').val() == 0) {
                                $({

                                    value: 0

                                }).animate({

                                        value: $('.knob-3').attr("data-rel")

                                    }, {

                                        duration: 5000,
                                        easing: 'swing',
                                        step: function () {
                                            $('.knob-3').val(Math.ceil(this.value)).trigger('change');
                                        }

                                    });
                            }
                        }, {

                            triggerOnce: true,
                            offset: function () {
                                return $(window).height() - $(this).outerHeight();
                            }

                        });
                        $('.knob-4').waypoint(function () {
                            $('.knob-4').knob();
                            if ($('.knob-4').val() == 0) {
                                $({

                                    value: 0

                                }).animate({

                                        value: $('.knob-4').attr("data-rel")

                                    }, {

                                        duration: 5000,
                                        easing: 'swing',
                                        step: function () {
                                            $('.knob-4').val(Math.ceil(this.value)).trigger('change');
                                        }

                                    });
                            }
                        }, {

                            triggerOnce: true,
                            offset: function () {
                                return $(window).height() - $(this).outerHeight();
                            }

                        });
                        $('.knob-5').waypoint(function () {
                            $('.knob-5').knob();
                            if ($('.knob-5').val() == 0) {
                                $({

                                    value: 0

                                }).animate({

                                        value: $('.knob-5').attr("data-rel")

                                    }, {

                                        duration: 5000,
                                        easing: 'swing',
                                        step: function () {
                                            $('.knob-5').val(Math.ceil(this.value)).trigger('change');
                                        }

                                    });
                            }
                        }, {

                            triggerOnce: true,
                            offset: function () {
                                return $(window).height() - $(this).outerHeight();
                            }

                        });
                    });
                    //]]>
                </script>
                <h4 class="text_center"><?php echo $smof_data['about_skill']; ?></h4>

                <div class="speed_container">
                    <div class="speed_box">
                        <div class="knob_box">
                            <input data-displayPrevious="false" data-readonly="true" type="text"
                                   data-bgColor="rgba(255,255,255,0.2)" data-fgcolor="#ffffff" data-width="160"
                                   data-height="100" class="knob-1"
                                   data-rel="<?php echo $smof_data['about_skill_v_1']; ?>" value="0"
                                   data-anglearc="180" data-angleoffset="-90" data-max="100">
                        </div>
                        <div class="knob_title">
                            <?php echo $smof_data['about_skill_t_1']; ?>
                        </div>
                    </div>
                    <div class="speed_box">
                        <div class="knob_box">
                            <input data-displayPrevious="false" data-readonly="true" type="text"
                                   data-bgColor="rgba(255,255,255,0.2)" data-fgcolor="#ffffff" data-width="160"
                                   data-height="100" class="knob-2"
                                   data-rel="<?php echo $smof_data['about_skill_v_2']; ?>" value="0"
                                   data-anglearc="180" data-angleoffset="-90" data-max="100">
                        </div>
                        <div class="knob_title">
                            <?php echo $smof_data['about_skill_t_2']; ?>
                        </div>
                    </div>
                    <div class="speed_box">
                        <div class="knob_box">
                            <input data-displayPrevious="false" data-readonly="true" type="text"
                                   data-bgColor="rgba(255,255,255,0.2)" data-fgcolor="#ffffff" data-width="160"
                                   data-height="100" class="knob-3"
                                   data-rel="<?php echo $smof_data['about_skill_v_3']; ?>" value="0"
                                   data-anglearc="180" data-angleoffset="-90" data-max="100">
                        </div>
                        <div class="knob_title">
                            <?php echo $smof_data['about_skill_t_3']; ?>
                        </div>
                    </div>
                    <div class="speed_box">
                        <div class="knob_box">
                            <input data-displayPrevious="false" data-readonly="true" type="text"
                                   data-bgColor="rgba(255,255,255,0.2)" data-fgcolor="#ffffff" data-width="160"
                                   data-height="100" class="knob-4"
                                   data-rel="<?php echo $smof_data['about_skill_v_4']; ?>" value="0"
                                   data-anglearc="180" data-angleoffset="-90" data-max="100">
                        </div>
                        <div class="knob_title">
                            <?php echo $smof_data['about_skill_t_4']; ?>
                        </div>
                    </div>
                    <div class="speed_box">
                        <div class="knob_box">
                            <input data-displayPrevious="false" data-readonly="true" type="text"
                                   data-bgColor="rgba(255,255,255,0.2)" data-fgcolor="#ffffff" data-width="160"
                                   data-height="100" class="knob-5"
                                   data-rel="<?php echo $smof_data['about_skill_v_5']; ?>" value="0"
                                   data-anglearc="180" data-angleoffset="-90" data-max="100">
                        </div>
                        <div class="knob_title">
                            <?php echo $smof_data['about_skill_t_5']; ?>
                        </div>
                    </div>
                </div>
                </div>

            <?php } ?>
            </div>
            </div>
            <div class="about_us_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a></div>
            </section>
            </li>

            <?php break;
        case 'Contact Us' :
            ?>

            <!-- ========== CONTACT US ========== -->

            <li id="contact_us" class="section<?php echo $i; ?>">
                <?php if ($smof_data['contact_switch'] == 1) { ?>

                    <section class="contact_us_intro intro"

                        <?php if ($smof_data['contact_intro_img']) { ?>

                            style="background-image: url(<?php echo $smof_data['contact_intro_img']; ?>);"

                        <?php } ?>>
                        <div class="black_over">
                            <div class="container text_center">
                                <div class="intro_pad">
                                    <?php if ($smof_data['contact_intro_h1']) { ?>
                                        <h1><?php echo $smof_data['contact_intro_h1']; ?></h1>
                                    <?php } ?>
                                    <?php if ($smof_data['contact_intro_h2']) { ?>
                                        <h2><?php echo $smof_data['contact_intro_h2']; ?></h2>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </section>

                <?php } ?>

                <section class="contact_us_main man_box">
                    <div class="contact_us_top top_box"></div>
                    <div class="contact_us_mid">
                        <div class="container">
                            <?php if ($smof_data['contact_title']) { ?>
                                <h3 class="text_center"><?php echo $smof_data['contact_title']; ?></h3>
                            <?php } ?>
                            <?php if ($smof_data['contact_subtitle']) { ?>
                                <div
                                    class="lines sub_title text_center"><?php echo $smof_data['contact_subtitle']; ?></div>
                            <?php } ?>

                            <div class="section_exc"><?php echo $smof_data['contact_excerpt']; ?></div>

                            <?php if ($smof_data['contact_map'] == 1) { ?>

                                <div class="google_map">
                                    <script type="text/javascript">
                                        //<![CDATA[
                                        jQuery(document).ready(function ($) {
                                            var geocoder = new google.maps.Geocoder();
                                            geocoder.geocode({'address': '<?php echo urlencode($smof_data['contact_gmap']); ?>'}, function (results, status) {
                                                if (status == google.maps.GeocoderStatus.OK) {
                                                    var latitude = results[0].geometry.location.lat();
                                                    var longitude = results[0].geometry.location.lng();
                                                    jQuery('#gmap').gmap().bind('init', function (ev, map) {
                                                        jQuery('#gmap').gmap('addMarker', {'position': latitude + ',' + longitude, 'bounds': true}).click(function () {
                                                            jQuery('#gmap').gmap('openInfoWindow', {'content': '<?php echo ucwords($smof_data['contact_gmap']); ?>'}, this);
                                                        });
                                                        jQuery('#gmap').gmap('option', 'zoom', <?php echo $smof_data['contact_gmap_zoom']; ?>);
                                                    });
                                                }
                                            });
                                        });
                                        //]]>
                                    </script>
                                    <div class="gmap" id="gmap">
                                    </div>
                                </div>

                            <?php
                            }

                            if ($smof_data['contact_form_det'] == 1) {
                                ?>

                                <div class="form">
                                    <div class="row-fluid">
                                        <div class="span8">
                                            <h4 class="bold"><?php echo $smof_data['cf_title']; ?></h4>

                                            <form id="cf"
                                                  action="<?php echo get_template_directory_uri(); ?>/sendmail.php"
                                                  method="post">
                                                <input type="hidden"
                                                       value="<?php echo esc_html($smof_data['email']); ?>"
                                                       name="send_to_email"/>
                                                <input type="text" name="name" value=""
                                                       placeholder="<?php echo __('Имя', 'GoGetThemes'); ?>"
                                                       class="half"/>
                                                <input type="text" name="email" value=""
                                                       placeholder="<?php echo __('Email', 'GoGetThemes'); ?>"
                                                       class="half"/>
                                                <textarea name="msg"
                                                          placeholder="<?php echo __('Сообщение', 'GoGetThemes'); ?>"></textarea>
                                                <input type="submit" value="ОТПРАВИТЬ"/>
                                            </form>
                                        </div>
                                        <div class="span4">
                                            <h4 class="bold"><?php echo $smof_data['det_title']; ?></h4>

                                            <div class="more_info_box">
                                                <?php echo $smof_data['contact_info']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                    <div class="contact_us_bot bot_box"><a href="#home" class="back2top"><i class="icon-chevron-up"></i></a>
                    </div>
                </section>
            </li>

            <?php break;
        default :
            break;
    }
}

?>
</ul>
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
