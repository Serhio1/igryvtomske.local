<!doctype html>
<!--[if lt IE 7 ]>
<html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport"
          content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <?php global $smof_data; ?>

    <!-- ==SEO== -->

    <?php if (is_front_page()) {
        if ($smof_data['site_keywords']) {
            ?>

            

        <?php } ?>

        <?php if ($smof_data['site_desc']) { ?>

            <meta name="description" content="<?php echo $smof_data['site_desc']; ?>"/>

        <?php } ?>

        <?php if ($smof_data['site_title']) { ?>

            <title><?php echo $smof_data['site_desc']; ?></title>

        <?php } else { ?>

            <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>

        <?php
        }
    } else {
        ?>

        <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <?php } ?>



    <!-- ==Favicon== -->

    <?php if ($smof_data['custom_favicon_ie']) { ?>

        <link rel="shortcut icon" href="<?php echo $smof_data['custom_favicon_ie']; ?>" type="image/x-icon"/>

    <?php } ?>

    <?php if ($smof_data['custom_favicon_mod']) { ?>

        <link rel="icon" href="<?php echo $smof_data['custom_favicon_mod']; ?>" type="image/png"/>

    <?php } ?>

    <?php if ($smof_data['custom_favicon_iphone']) { ?>

        <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo $smof_data['custom_favicon_iphone']; ?>">

    <?php } ?>

    <?php if ($smof_data['custom_favicon_ipad']) { ?>

        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
              href="<?php echo $smof_data['custom_favicon_ipad']; ?>">

    <?php } ?>

    <?php if ($smof_data['custom_favicon_retina']) { ?>

        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
              href="<?php echo $smof_data['custom_favicon_retina']; ?>">

    <?php } ?>



    <!-- <link rel="profile" href="http://gmpg.org/xfn/11" /> -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php if ($smof_data['custom_css']) {
        echo '<style>';
        echo $smof_data['custom_css'];
        echo '</style>';
    }?>



    <style>
        header {

        <?php if (has_nav_menu('top_navigation', 'GoGetThemes')) {

              echo 'background: url('.get_template_directory_uri().'/images/header_bg.png) repeat-x 34px;';

         } else {

              echo 'background: url('.get_template_directory_uri().'/images/header_bg.png) repeat-x top;';

         } ?>

        }
    </style>



    <?php wp_head(); ?>

</head>
<body data-smooth-scrolling="1" <?php body_class(); ?>>
<?php get_template_part('styles'); ?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- ==========================HEADER=========================== -->
<header>
    <?php if (has_nav_menu('top_navigation', 'GoGetThemes')) { ?>

        <div id="menu_back">
            <?php wp_nav_menu(array(
                    'container' => 'div',
                    'container_class' => 'container',
                    'fallback_cb' => false,
                    'menu_class' => 'top_navigation',
                    'theme_location' => 'top_navigation')
            );

            ?>
        </div>

    <?php } ?>

    <div class="container">
        <div class="logo">
                </div>

        <?php if (is_front_page()) { ?>

            <div class="nav js">
                <nav>
                    <ul>
                        <li class="current"><a href="#home" class="menu_1">Главная</a></li>

                        <?php $smof_data['homepage_blocks'];

                        foreach ($smof_data['homepage_blocks']['enabled'] as $block) {
                            switch ($block) {
                                case 'Service':
                                    echo '<li><a href="#services" class="menu_2">' . $smof_data["serv_menu_name"] . '</a></li>';
                                    break;
                                case 'Portfolio':
                                    echo '<li><a href="#portfolio" class="menu_3">' . $smof_data["port_menu_name"] . '</a></li>';
                                    break;
                                case 'Pricing Table':
                                    echo '<li><a href="#pricing_table" class="menu_4">' . $smof_data["price_menu_name"] . '</a></li>';
                                    break;
                                case 'About Us':
                                    echo '<li><a href="#about_us" class="menu_5">' . $smof_data["about_menu_name"] . '</a></li>';
                                    break;
                                case 'Contact Us':
                                    echo '<li><a href="#contact_us" class="menu_7">' . $smof_data["contact_menu_name"] . '</a></li>';
                                    break;
                                default:
                                    break;
                            }
                        }?>

                        <?php if ($smof_data['blog_show'] == 1) { ?>

                            <li><a href="<?php echo get_category_link(get_cat_ID($smof_data['blog_cat'])); ?>"
                                   class="menu_6 external">Блог</a></li>

                        <?php } ?>
                    </ul>
                </nav>
            </div>

            <div class="mob_nav js">
                <span class="trigger"></span>
                <ul>
                    <li class="current"><a href="#home" class="menu_1">Главная</a></li>

                    <?php $smof_data['homepage_blocks'];

                    foreach ($smof_data['homepage_blocks']['enabled'] as $block) {
                        switch ($block) {
                            case 'Service':
                                echo '<li><a href="#services" class="menu_2">' . $smof_data["serv_menu_name"] . '</a></li>';
                                break;
                            case 'Portfolio':
                                echo '<li><a href="#portfolio" class="menu_3">' . $smof_data["port_menu_name"] . '</a></li>';
                                break;
                            case 'Pricing Table':
                                echo '<li><a href="#pricing_table" class="menu_4">' . $smof_data["price_menu_name"] . '</a></li>';
                                break;
                            case 'About Us':
                                echo '<li><a href="#about_us" class="menu_5">' . $smof_data["about_menu_name"] . '</a></li>';
                                break;
                            case 'Contact Us':
                                echo '<li><a href="#contact_us" class="menu_7">' . $smof_data["contact_menu_name"] . '</a></li>';
                                break;
                            default:
                                break;
                        }
                    }?>

                    <?php if ($smof_data['blog_show'] == 1) { ?>

                        <li><a href="<?php echo get_category_link(get_cat_ID($smof_data['blog_cat'])); ?>"
                               class="menu_6 external">Блог</a></li>

                    <?php } ?>
                </ul>
            </div>

        <?php } else { ?>

            <div class="nav">
                <nav>
                    <ul>
                        <li><a href="<?php echo home_url(); ?>" class="menu_1">Главная</a></li>

                        <?php $smof_data['homepage_blocks'];

                        foreach ($smof_data['homepage_blocks']['enabled'] as $block) {
                            switch ($block) {
                                case 'Service':
                                    echo '<li><a href="' . home_url() . '#services" class="menu_2">' . $smof_data["serv_menu_name"] . '</a></li>';
                                    break;
                                case 'Portfolio':
                                    echo '<li><a href="' . home_url() . '#portfolio" class="menu_3">' . $smof_data["port_menu_name"] . '</a></li>';
                                    break;
                                case 'Pricing Table':
                                    echo '<li><a href="' . home_url() . '#pricing_table" class="menu_4">' . $smof_data["price_menu_name"] . '</a></li>';
                                    break;
                                case 'About Us':
                                    echo '<li><a href="' . home_url() . '#about_us" class="menu_5">' . $smof_data["about_menu_name"] . '</a></li>';
                                    break;
                                case 'Contact Us':
                                    echo '<li><a href="' . home_url() . '#contact_us" class="menu_7">' . $smof_data["contact_menu_name"] . '</a></li>';
                                    break;
                                default:
                                    break;
                            }
                        }?>

                        <?php if ($smof_data['blog_show'] == 1) { ?>

                            <li><a href="<?php echo get_category_link(get_cat_ID($smof_data['blog_cat'])); ?>"
                                   class="menu_6 external">Блог</a></li>

                        <?php } ?>
                    </ul>
                </nav>
            </div>

        <?php } ?>
    </div>
</header>