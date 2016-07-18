<?php

if (file_exists(dirname(__FILE__)."/install-theme-ms.php")) require_once(dirname(__FILE__)."/install-theme-ms.php"); // обработка загрузки демо данных morestyle\n

// Exit if accessed directly
if (!defined('ABSPATH')) exit;
#-----------------------------------------------------------------#
# Google Fonts
#-----------------------------------------------------------------#
function gogetthemes_fonts()
{
    global $smof_data;
    $protocol = is_ssl() ? 'https' : 'http';
    if ($smof_data['google_body_font'] != 'none') {
        wp_enqueue_style('theme_body_fonts', "$protocol://fonts.googleapis.com/css?family=" . urlencode($smof_data['google_body_font']) . ":300,400,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese");
    }
    if ($smof_data['google_menu_font'] != 'none') {
        wp_enqueue_style('theme_menu_fonts', "$protocol://fonts.googleapis.com/css?family=" . urlencode($smof_data['google_menu_font']) . ":300,400,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese");
    }
    if ($smof_data['google_smenu_font'] != 'none') {
        wp_enqueue_style('theme_smenu_fonts', "$protocol://fonts.googleapis.com/css?family=" . urlencode($smof_data['google_smenu_font']) . ":300,400,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese");
    }
    if ($smof_data['google_h1_font'] != 'none') {
        wp_enqueue_style('theme_h1_fonts', "$protocol://fonts.googleapis.com/css?family=" . urlencode($smof_data['google_h1_font']) . ":300,400,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese");
    }
    if ($smof_data['google_h2_font'] != 'none') {
        wp_enqueue_style('theme_h2_fonts', "$protocol://fonts.googleapis.com/css?family=" . urlencode($smof_data['google_h2_font']) . ":300,400,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese");
    }
    if ($smof_data['google_h3_font'] != 'none') {
        wp_enqueue_style('theme_h3_fonts', "$protocol://fonts.googleapis.com/css?family=" . urlencode($smof_data['google_h3_font']) . ":300,400,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese");
    }
    if ($smof_data['google_h4_font'] != 'none') {
        wp_enqueue_style('theme_h4_fonts', "$protocol://fonts.googleapis.com/css?family=" . urlencode($smof_data['google_h4_font']) . ":300,400,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese");
    }
    if ($smof_data['google_h5_font'] != 'none') {
        wp_enqueue_style('theme_h5_fonts', "$protocol://fonts.googleapis.com/css?family=" . urlencode($smof_data['google_h5_font']) . ":300,400,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese");
    }
    if ($smof_data['google_h6_font'] != 'none') {
        wp_enqueue_style('theme_h6_fonts', "$protocol://fonts.googleapis.com/css?family=" . urlencode($smof_data['google_h6_font']) . ":300,400,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese");
    }
}

add_action('wp_enqueue_scripts', 'gogetthemes_fonts');
#-----------------------------------------------------------------#
# Register JS
#-----------------------------------------------------------------#
function goget_register_js()
{
    global $smof_data;
    if (!is_admin()) {
        wp_register_script('modernizer', get_template_directory_uri() . '/js/modernizr.js', 'jquery', '2.6.2');
        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '2.3.1', TRUE);
        wp_register_script('nicescroll', get_template_directory_uri() . '/js/nicescroll.js', 'jquery', '3.1.0', TRUE);
        wp_register_script('isotope', get_template_directory_uri() . '/js/isotope.min.js', 'jquery', '1.5.25', TRUE);
        wp_register_script('imageload', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js', 'jquery', '1.5.25', TRUE);
        wp_register_script('cycle', get_template_directory_uri() . '/js/cycle2.min.js', 'jquery', '20130502', TRUE);
        wp_register_script('cycle-swipe', get_template_directory_uri() . '/js/jquery.cycle2.swipe.js', 'jquery', '20130502', TRUE);
        wp_register_script('ios6fix', get_template_directory_uri() . '/js/ios6fix.js', 'jquery', '20130502', TRUE);
        wp_register_script('nicescroll', get_template_directory_uri() . '/js/nicescroll.js', 'jquery', '2', TRUE);
        wp_register_script('pop_up', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', 'jquery', '0.8.2', TRUE);
        wp_register_script('fresco', get_template_directory_uri() . '/js/fresco.js', 'jquery', '1.2.2', TRUE);
        wp_register_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', 'jquery', '1.0', TRUE);
        wp_register_script('placeholder', get_template_directory_uri() . '/js/placeholder.min.js', 'jquery', '1.0', TRUE);
        wp_register_script('scrollto', get_template_directory_uri() . '/js/scrollTo.min.js', 'jquery', '1.4.3', TRUE);
        wp_register_script('nav', get_template_directory_uri() . '/js/nav.js', 'jquery', '2.2.0', TRUE);
        wp_register_script('superfish', get_template_directory_uri() . '/js/superfish.js', 'jquery', '2.2.0', TRUE);
        wp_register_script('supersab', get_template_directory_uri() . '/js/supersubs.js', 'jquery', '2.2.0', TRUE);
        wp_register_script('knob', get_template_directory_uri() . '/js/knob.js', 'jquery', '1.2.0', TRUE);
        wp_register_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', 'jquery', '2.0.2', true);
        wp_register_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', 'jquery', '1.0', true);
        wp_register_script('tweets', get_template_directory_uri() . '/js/jquery.tweet.js', 'jquery', '1.0', true);
        wp_register_script('tinynav', get_template_directory_uri() . '/js/tinynav.min.js', 'jquery', '1.1', true);
        wp_register_script('gmap', get_template_directory_uri() . '/js/gmap.js', 'jquery', '1.0', true);
        wp_register_script('gmap-api', 'http://maps.google.com/maps/api/js?sensor=true&amp;language=en', 'jquery', '1.0', true);
        wp_register_script('gogetthemes', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);
    }
    wp_enqueue_script('jquery');
    wp_enqueue_script('comment-reply');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('modernizer');
    wp_enqueue_script('pop_up');
    wp_enqueue_script('tinynav');
    wp_enqueue_script('imageload');
    wp_enqueue_script('cycle');
    wp_enqueue_script('cycle-swipe');
    wp_enqueue_script('ios6fix');
    wp_enqueue_script('isotope');
    wp_enqueue_script('fresco');
    wp_enqueue_script('placeholder');
    wp_enqueue_script('scrollto');
    wp_enqueue_script('nav');
    wp_enqueue_script('superfish');
    wp_enqueue_script('supersab');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('knob');
    wp_enqueue_script('fitvids');
    wp_enqueue_script('tweets');
    wp_enqueue_script('bxslider');
    wp_enqueue_script('gogetthemes');
    if ($smof_data['contact_map'] == 1) {
        wp_enqueue_script('gmap');
        wp_enqueue_script('gmap-api');
    }
}

add_action('init', 'goget_register_js');
#-----------------------------------------------------------------#
# Register/Enqueue CSS
#-----------------------------------------------------------------#
function gogetthemes_styles()
{
    wp_enqueue_style('responsive-style', get_stylesheet_uri(), false, '1.0');
    // Register
    wp_register_style("ie8", get_template_directory_uri() . "/css/ie.css");
    // Enqueue
    wp_enqueue_style('ie8');
    //IE
    global $wp_styles;
    $wp_styles->add_data("ie8", 'conditional', 'lt IE 9');
}

add_action('wp_print_styles', 'gogetthemes_styles');
#-----------------------------------------------------------------#
# Automatic Feed Links
#-----------------------------------------------------------------#
if (function_exists('add_theme_support')) {
    add_theme_support('automatic-feed-links');
}
#-----------------------------------------------------------------#
# Image sizes
#-----------------------------------------------------------------#
add_theme_support('post-thumbnails');
add_image_size('blog-thumb', 900, 300, true);
add_image_size('portfolio-widget', 100, 100, true);
#-----------------------------------------------------------------#
# Default RSS feed links
#-----------------------------------------------------------------#
add_theme_support('automatic-feed-links');
#-----------------------------------------------------------------#
# Allow shortcodes in widget text
#-----------------------------------------------------------------#
add_filter('widget_text', 'do_shortcode');
#-----------------------------------------------------------------#
# Include SMOF
#-----------------------------------------------------------------#
require_once('admin/index.php');
#-----------------------------------------------------------------#
# Post Formats
#-----------------------------------------------------------------#
add_theme_support('post-formats', array('standart', 'video', 'audio', 'link', 'gallery', 'aside', 'image', 'quote'));
// Rename Aside format
function gg_rename_aside($safe_text)
{
    if ($safe_text == 'Aside')
        return 'Slider';
    return $safe_text;
}

add_filter('esc_html', 'gg_rename_aside');
// Rename Link format
function gg_rename_link($safe_text)
{
    if ($safe_text == 'Link')
        return 'Service';
    return $safe_text;
}

add_filter('esc_html', 'gg_rename_link');
// Rename Image format
function gg_rename_image($safe_text)
{
    if ($safe_text == 'Image')
        return 'Team';
    return $safe_text;
}

add_filter('esc_html', 'gg_rename_image');
#-----------------------------------------------------------------#
# Create admin portfolio section
#-----------------------------------------------------------------#
function gg_portfolio_register()
{
    $portfolio_labels = array(
        'name' => _x('Portfolio', 'taxonomy general name', 'GoGetThemes'),
        'singular_name' => _x('Portfolio Item', 'GoGetThemes'),
        'search_items' => __('Search Portfolio Items', 'GoGetThemes'),
        'all_items' => __('Portfolio', 'GoGetThemes'),
        'parent_item' => __('Parent Portfolio Item', 'GoGetThemes'),
        'edit_item' => __('Edit Portfolio Item', 'GoGetThemes'),
        'update_item' => __('Update Portfolio Item', 'GoGetThemes'),
        'add_new_item' => __('Add New Portfolio Item', 'GoGetThemes')
    );
    $options = get_option('salient');
    $custom_slug = null;
    if (!empty($options['portfolio_rewrite_slug'])) $custom_slug = $options['portfolio_rewrite_slug'];
    $args = array(
        'labels' => $portfolio_labels,
        'rewrite' => array('slug' => $custom_slug, 'with_front' => false),
        'singular_label' => __('Project', 'GoGetThemes'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'menu_icon' => get_template_directory_uri() . '/images/icons/portfolio.png',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('portfolio', $args);
}

add_action('init', 'gg_portfolio_register');
#-----------------------------------------------------------------#
# Add taxonomys attached to portfolio
#-----------------------------------------------------------------#
$category_labels = array(
    'name' => _x('Project Categories', 'GoGetThemes'),
    'singular_name' => _x('Project Category', 'GoGetThemes'),
    'search_items' => __('Search Project Categories', 'GoGetThemes'),
    'all_items' => __('All Project Categories', 'GoGetThemes'),
    'parent_item' => __('Parent Project Category', 'GoGetThemes'),
    'edit_item' => __('Edit Project Category', 'GoGetThemes'),
    'update_item' => __('Update Project Category', 'GoGetThemes'),
    'add_new_item' => __('Add New Project Category', 'GoGetThemes'),
    'menu_name' => __('Project Categories', 'GoGetThemes')
);
register_taxonomy("project-type",
    array("portfolio"),
    array("hierarchical" => true,
        'labels' => $category_labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'project-type')
    ));
#-----------------------------------------------------------------#
# Portfolio Posts class
#-----------------------------------------------------------------#
add_filter('post_class', 'custom_taxonomy_post_class', 10, 3);
if (!function_exists('custom_taxonomy_post_class')) {
    function custom_taxonomy_post_class($classes, $class, $ID)
    {
        $taxonomy = 'project-type';
        $terms = get_the_terms((int)$ID, $taxonomy);
        if (!empty($terms)) {
            foreach ((array)$terms as $order => $term) {
                if (!in_array($term->slug, $classes)) {
                    $classes[] = $term->slug;
                }
            }
        }
        return $classes;
    }
}
#-----------------------------------------------------------------#
# Excerpt related
#-----------------------------------------------------------------#
//excerpt length
function excerpt_length($length)
{
    return 30;
}

add_filter('excerpt_length', 'excerpt_length', 999);
//custom excerpt ending
function excerpt_more($more)
{
    return '...';
}

add_filter('excerpt_more', 'excerpt_more');
#-----------------------------------------------------------------#
# Current Page Url
#-----------------------------------------------------------------#
function gg_current_page_url()
{
    $pageURL = 'http';
    if (isset($_SERVER["HTTPS"])) {
        if ($_SERVER["HTTPS"] == "on") {
            $pageURL .= "s";
        }
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

#-----------------------------------------------------------------#
# Custom menu
#-----------------------------------------------------------------#
register_nav_menu('top_navigation', 'Top Navigation');
register_nav_menu('404_pages', '404 Useful Pages');
#-----------------------------------------------------------------#
# Register sidebars
#-----------------------------------------------------------------#
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Blog sidebar', 'GoGetThemes'),
        'id' => 'blog',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => __('Footer Widget 1', 'GoGetThemes'),
        'id' => 'footer_type_1',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="span4 widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => __('Footer Widget 2', 'GoGetThemes'),
        'id' => 'footer_type_2',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="span4 widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => __('Footer Widget 3', 'GoGetThemes'),
        'id' => 'footer_type_3',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="span4 widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>'
    ));
}
#-----------------------------------------------------------------#
# Custom widgets
#-----------------------------------------------------------------#
include('includes/widgets/facebook-like-box-widget.php');
include('includes/widgets/flickr_widget.php');
include('includes/widgets/recent_posts_widget.php');
include('includes/widgets/twitter.php');
#-----------------------------------------------------------------#
# Requeired
#-----------------------------------------------------------------#
if (!isset($content_width)) $content_width = 1170;
#-----------------------------------------------------------------#
# Shortcodes
#-----------------------------------------------------------------#
require_once('includes/tinymce/shortcodes.php');
#-----------------------------------------------------------------#
# Creating new Comment List Template
#-----------------------------------------------------------------#
function gg_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
    if ('div' == $args['style']) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }

    ?>

    <?php if ('div' != $args['style']) : ?>

    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">

<?php endif; ?>

    <div class="comment-author vcard">
        <div class="avatar">
            <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, 48); ?>
        </div>
        <div class="comment_info">
            <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>

            <div class="comment-meta commentmetadata"><a
                    href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>">
                    <?php

                    /* translators: 1: date, 2: time */

                    printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'), '  ', '');

                ?>
            </div>
        </div>
        <div class="reply">
            <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
    </div>

    <?php if ($comment->comment_approved == '0') : ?>

    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>

    <br/>

<?php endif; ?>

    <div class="clear"></div>



    <div class="comment_entry">
        <?php comment_text() ?>
    </div>





    </div>

<?php
}

/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF

 */
/**
 * Hide ACF menu item from the admin menu

 */
function hide_admin_menu()
{
    echo '<style type="text/css">#toplevel_page_edit-post_type-acf{display:none;}</style>';
}

//add_action('admin_head', 'hide_admin_menu');
if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_gallery-settings',
        'title' => 'Gallery Settings',
        'fields' => array(
            array(
                'key' => 'field_51924fd161b58',
                'label' => 'Gallery',
                'name' => 'gallery',
                'type' => 'gallery',
                'instructions' => 'Upload all images for this gallery post.',
                'required' => 1,
                'preview_size' => 'thumbnail',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_format',
                    'operator' => '==',
                    'value' => 'gallery',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_portfolio-settings',
        'title' => 'Portfolio Settings',
        'fields' => array(
            array(
                'key' => 'field_5193507450256',
                'label' => 'Images for slider',
                'name' => 'image_slider',
                'type' => 'gallery',
                'preview_size' => 'thumbnail',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_pricing-table-3-columns',
        'title' => 'Pricing Table 3 Columns',
        'fields' => array(
            array(
                'key' => 'field_5194ab30a03e9',
                'label' => 'First Column',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_5194ab50a03ec',
                'label' => 'Column title',
                'name' => 'column_title',
                'type' => 'text',
                'default_value' => 'Basic',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194ababa03ef',
                'label' => 'Currency',
                'name' => 'currency',
                'type' => 'text',
                'default_value' => '$',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194abd9a03f2',
                'label' => 'Money Value',
                'name' => 'money_value',
                'type' => 'text',
                'default_value' => 19,
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194ac08a03f5',
                'label' => 'Price per',
                'name' => 'price_per',
                'type' => 'select',
                'multiple' => 0,
                'allow_null' => 0,
                'choices' => array(
                    'one' => 'Once',
                    'Чел' => 'Чел',
                    'week' => 'Week',
                    'month' => 'Month',
                    'year' => 'Year',
                ),
                'default_value' => 'month',
            ),
            array(
                'key' => 'field_5194ac4ba03f8',
                'label' => 'Plan Features',
                'name' => 'plan_features',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5194ac62a03f9',
                        'label' => 'Feature',
                        'name' => 'feature',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'formatting' => 'html',
                    ),
                ),
                'row_min' => 0,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Feature',
            ),
            array(
                'key' => 'field_5194ac85a03fe',
                'label' => 'Button text',
                'name' => 'button_text',
                'type' => 'text',
                'default_value' => 'Buy Now',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194acc2a0401',
                'label' => 'Button Link',
                'name' => 'button_link',
                'type' => 'text',
                'default_value' => 'http://gogetthemes.com',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194ab3ca03eb',
                'label' => 'Second Column',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_5194ab78a03ee',
                'label' => 'Column title',
                'name' => 'column_title2',
                'type' => 'text',
                'default_value' => 'Basic',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194abb9a03f1',
                'label' => 'Currency',
                'name' => 'currency2',
                'type' => 'text',
                'default_value' => '$',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194abf0a03f4',
                'label' => 'Money Value',
                'name' => 'money_value2',
                'type' => 'text',
                'default_value' => 59,
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194ac33a03f7',
                'label' => 'Price per',
                'name' => 'price_per2',
                'type' => 'select',
                'multiple' => 0,
                'allow_null' => 0,
                'choices' => array(
                    'one' => 'Once',
                    'Чел' => 'Чел',
                    'week' => 'Week',
                    'month' => 'Month',
                    'year' => 'Year',
                ),
                'default_value' => 'month',
            ),
            array(
                'key' => 'field_5194ac6ea03fc',
                'label' => 'Plan Features',
                'name' => 'plan_features2',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5194ac6ea03fd',
                        'label' => 'Feature',
                        'name' => 'feature',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'formatting' => 'html',
                    ),
                ),
                'row_min' => 0,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Feature',
            ),
            array(
                'key' => 'field_5194aca0a0400',
                'label' => 'Button text',
                'name' => 'button_text2',
                'type' => 'text',
                'default_value' => 'Buy Now',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194acdea0403',
                'label' => 'Button Link',
                'name' => 'button_link2',
                'type' => 'text',
                'default_value' => 'http://gogetthemes.com',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194ab3ca03ea',
                'label' => 'Third Column',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_5194ab77a03ed',
                'label' => 'Column title',
                'name' => 'column_title3',
                'type' => 'text',
                'default_value' => 'Basic',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194abb8a03f0',
                'label' => 'Currency',
                'name' => 'currency3',
                'type' => 'text',
                'default_value' => '$',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194abefa03f3',
                'label' => 'Money Value',
                'name' => 'money_value3',
                'type' => 'text',
                'default_value' => 99,
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194ac31a03f6',
                'label' => 'Price per',
                'name' => 'price_per3',
                'type' => 'select',
                'multiple' => 0,
                'allow_null' => 0,
                'choices' => array(
                    'one' => 'Once',
                    'Чел' => 'Чел',
                    'week' => 'Week',
                    'month' => 'Month',
                    'year' => 'Year',
                ),
                'default_value' => 'month',
            ),
            array(
                'key' => 'field_5194ac6da03fa',
                'label' => 'Plan Features',
                'name' => 'plan_features3',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5194ac6da03fb',
                        'label' => 'Feature',
                        'name' => 'feature',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'formatting' => 'html',
                    ),
                ),
                'row_min' => 0,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Feature',
            ),
            array(
                'key' => 'field_5194ac9fa03ff',
                'label' => 'Button text',
                'name' => 'button_text3',
                'type' => 'text',
                'default_value' => 'Buy Now',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194acdda0402',
                'label' => 'Button Link',
                'name' => 'button_link3',
                'type' => 'text',
                'default_value' => 'http://gogetthemes.com',
                'formatting' => 'html',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'pt3-page.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(
                0 => 'the_content',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_pricing-table-4-columns',
        'title' => 'Pricing Table 4 Columns',
        'fields' => array(
            array(
                'key' => 'field_51949c535d292',
                'label' => 'First Column',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_51949cc03ce9c',
                'label' => 'Column title',
                'name' => 'column_title',
                'type' => 'text',
                'default_value' => 'Personal',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_51949d793ce9d',
                'label' => 'Currency',
                'name' => 'currency',
                'type' => 'text',
                'default_value' => '$',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_51949d993ce9e',
                'label' => 'Money Value',
                'name' => 'money_value',
                'type' => 'text',
                'instructions' => 'Use dot(.) to separate monets value',
                'default_value' => 9,
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_51949ed63ce9f',
                'label' => 'Price per',
                'name' => 'price_per',
                'type' => 'select',
                'multiple' => 0,
                'allow_null' => 0,
                'choices' => array(
                    'one' => 'Once',
                    'Чел' => 'Чел',
                    'week' => 'Week',
                    'month' => 'Month',
                    'year' => 'Year',
                ),
                'default_value' => 'month',
            ),
            array(
                'key' => 'field_51949f573cea0',
                'label' => 'Plan Features',
                'name' => 'plan_features',
                'type' => 'repeater',
                'instructions' => 'Add plan features',
                'sub_fields' => array(
                    array(
                        'key' => 'field_51949f873cea1',
                        'label' => 'Feature',
                        'name' => 'feature',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'formatting' => 'html',
                    ),
                ),
                'row_min' => 0,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Feature',
            ),
            array(
                'key' => 'field_51949f9c3cea2',
                'label' => 'Button text',
                'name' => 'button_text',
                'type' => 'text',
                'default_value' => 'Buy Now',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_51949fdf3cea3',
                'label' => 'Button URL',
                'name' => 'button_url',
                'type' => 'text',
                'default_value' => 'http://gogetthemes.com',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a02ebd767',
                'label' => 'Second Column',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_5194a03bbd76a',
                'label' => 'Column title',
                'name' => 'column_title2',
                'type' => 'text',
                'default_value' => 'Small Business',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a045bd76c',
                'label' => 'Currency',
                'name' => 'currency2',
                'type' => 'text',
                'default_value' => '$',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a04dbd76e',
                'label' => 'Money Value',
                'name' => 'money_value2',
                'type' => 'text',
                'instructions' => 'Use dot(.) to separate monets value',
                'default_value' => 49,
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a052bd770',
                'label' => 'Price per',
                'name' => 'price_per2',
                'type' => 'select',
                'multiple' => 0,
                'allow_null' => 0,
                'choices' => array(
                    'one' => 'Once',
                    'Чел' => 'Чел',
                    'week' => 'Week',
                    'month' => 'Month',
                    'year' => 'Year',
                ),
                'default_value' => 'month',
            ),
            array(
                'key' => 'field_5194a05abd775',
                'label' => 'Plan Features',
                'name' => 'plan_features2',
                'type' => 'repeater',
                'instructions' => 'Add plan features',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5194a05abd776',
                        'label' => 'Feature',
                        'name' => 'feature',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'formatting' => 'html',
                    ),
                ),
                'row_min' => 0,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Feature',
            ),
            array(
                'key' => 'field_5194a063bd778',
                'label' => 'Button text',
                'name' => 'button_text2',
                'type' => 'text',
                'default_value' => 'Buy Now',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a06bbd77b',
                'label' => 'Button URL',
                'name' => 'button_url2',
                'type' => 'text',
                'default_value' => 'http://gogetthemes.com',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a02bbd766',
                'label' => 'Third Column',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_5194a03bbd769',
                'label' => 'Column title',
                'name' => 'column_title3',
                'type' => 'text',
                'default_value' => 'Professional',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a044bd76b',
                'label' => 'Currency',
                'name' => 'currency3',
                'type' => 'text',
                'default_value' => '$',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a04cbd76d',
                'label' => 'Money Value',
                'name' => 'money_value3',
                'type' => 'text',
                'instructions' => 'Use dot(.) to separate monets value',
                'default_value' => 199,
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a052bd76f',
                'label' => 'Price per',
                'name' => 'price_per3',
                'type' => 'select',
                'multiple' => 0,
                'allow_null' => 0,
                'choices' => array(
                    'one' => 'Once',
                    'Чел' => 'Чел',
                    'week' => 'Week',
                    'month' => 'Month',
                    'year' => 'Year',
                ),
                'default_value' => 'month',
            ),
            array(
                'key' => 'field_5194a059bd773',
                'label' => 'Plan Features',
                'name' => 'plan_features3',
                'type' => 'repeater',
                'instructions' => 'Add plan features',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5194a059bd774',
                        'label' => 'Feature',
                        'name' => 'feature',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => 'Fully Responsive Layout',
                        'formatting' => 'html',
                    ),
                ),
                'row_min' => 0,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Feature',
            ),
            array(
                'key' => 'field_5194a063bd779',
                'label' => 'Button text',
                'name' => 'button_text3',
                'type' => 'text',
                'default_value' => 'Buy Now',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a06bbd77c',
                'label' => 'Button URL',
                'name' => 'button_url3',
                'type' => 'text',
                'default_value' => 'http://gogetthemes.com',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a018bd761',
                'label' => 'Fourth Column',
                'name' => '',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_5194a01cbd762',
                'label' => 'Column title',
                'name' => 'column_title4',
                'type' => 'text',
                'default_value' => 'Enterprise',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a020bd763',
                'label' => 'Currency',
                'name' => 'currency4',
                'type' => 'text',
                'default_value' => '$',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a021bd764',
                'label' => 'Money Value',
                'name' => 'money_value4',
                'type' => 'text',
                'instructions' => 'Use dot(.) to separate monets value',
                'default_value' => 399,
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a023bd765',
                'label' => 'Price per',
                'name' => 'price_per4',
                'type' => 'select',
                'multiple' => 0,
                'allow_null' => 0,
                'choices' => array(
                    'one' => 'Once',
                    'Чел' => 'Чел',
                    'week' => 'Week',
                    'month' => 'Month',
                    'year' => 'Year',
                ),
                'default_value' => 'month',
            ),
            array(
                'key' => 'field_5194a059bd771',
                'label' => 'Plan Features',
                'name' => 'plan_features4',
                'type' => 'repeater',
                'instructions' => 'Add plan features',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5194a059bd772',
                        'label' => 'Feature',
                        'name' => 'feature',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => 'Fully Responsive Layout',
                        'formatting' => 'html',
                    ),
                ),
                'row_min' => 0,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Feature',
            ),
            array(
                'key' => 'field_5194a062bd777',
                'label' => 'Button text',
                'name' => 'button_text4',
                'type' => 'text',
                'default_value' => 'Buy Now',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5194a06abd77a',
                'label' => 'Button URL',
                'name' => 'button_url4',
                'type' => 'text',
                'default_value' => 'http://gogetthemes.com',
                'formatting' => 'html',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'pt4-page.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(
                0 => 'the_content',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_quote-description',
        'title' => 'Quote Description',
        'fields' => array(
            array(
                'key' => 'field_519251323221f',
                'label' => 'Info',
                'name' => '',
                'type' => 'message',
                'message' => 'Post title will be a Quote\'s author!',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_format',
                    'operator' => '==',
                    'value' => 'quote',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_service-settings',
        'title' => 'Service Settings',
        'fields' => array(
            array(
                'key' => 'field_519255f40cae8',
                'label' => 'Icon Class',
                'name' => 'icon_class',
                'type' => 'text',
                'instructions' => 'You can find full list of FontAwesome Icons on <a href="https://vk.com/good_tlt">Good Design</a> site.',
                'default_value' => '',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_519ca828b6afc',
                'label' => 'Icon Image',
                'name' => 'icon_image',
                'type' => 'text',
                'instructions' => 'You can upload your own image instead of icon',
                'default_value' => '',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5192571f0cae9',
                'label' => 'Icon URL',
                'name' => 'icon_url',
                'type' => 'text',
                'instructions' => 'If you want you can add link to your service icon. Ex.: http://your_link.com',
                'default_value' => '',
                'formatting' => 'html',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_format',
                    'operator' => '==',
                    'value' => 'link',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_slider-settings',
        'title' => 'Slider Settings',
        'fields' => array(
            array(
                'key' => 'field_51925242c3208',
                'label' => 'Slider Images',
                'name' => 'slider_images',
                'type' => 'gallery',
                'instructions' => 'Uploaded images will be cropped to good looking size.',
                'required' => 1,
                'preview_size' => 'thumbnail',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_format',
                    'operator' => '==',
                    'value' => 'aside',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array(
        'id' => 'acf_team-settings',
        'title' => 'Team Settings',
        'fields' => array(
            array(
                'key' => 'field_5194b21e8ea77',
                'label' => 'Person position',
                'name' => 'person_position',
                'type' => 'text',
                'instructions' => 'Ex: <i>Director, Pastor, Developer</i>',
                'default_value' => '',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_519259341c57e',
                'label' => 'Facebook',
                'name' => 'facebook_url',
                'type' => 'text',
                'instructions' => 'Paste member\'s Facebook profile url.',
                'default_value' => '',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_519259721c57f',
                'label' => 'Twitter',
                'name' => 'twitter',
                'type' => 'text',
                'instructions' => 'Paste member\'s Twitter profile url.',
                'default_value' => '',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_519259891c580',
                'label' => 'Google ++',
                'name' => 'google',
                'type' => 'text',
                'instructions' => 'Paste member\'s Google Plus profile url.',
                'default_value' => '',
                'formatting' => 'html',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_format',
                    'operator' => '==',
                    'value' => 'image',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));
}
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package       TGM-Plugin-Activation
 * @subpackage Example
 * @version       2.3.6
 * @author       Thomas Griffin <thomas@thomasgriffinmedia.com>
 * @author       Gary Jones <gamajo@gamajo.com>
 * @copyright  Copyright (c) 2012, Thomas Griffin
 * @license       http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.

 */
require_once dirname(__FILE__) . '/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'gg_register_required_plugins');
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.

 */
function gg_register_required_plugins()
{
    $plugins = array(
        array(
            'name' => 'Advanced Custom Fields', // The plugin name
            'slug' => 'advanced-custom-fields', // The plugin slug (typically the folder name)
            'source' => get_stylesheet_directory() . '/includes/plugins/acf.zip', // The plugin source
            'required' => true, // If false, the plugin is only 'recommended' instead of required
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
        ),
        array(
            'name' => 'ACF-Repeater', // The plugin name
            'slug' => 'acf-repeater', // The plugin slug (typically the folder name)
            'source' => get_stylesheet_directory() . '/includes/plugins/acf-repeater.zip', // The plugin source
            'required' => true, // If false, the plugin is only 'recommended' instead of required
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
        ),
        array(
            'name' => 'ACF-Gallery', // The plugin name
            'slug' => 'acf-gallery', // The plugin slug (typically the folder name)
            'source' => get_stylesheet_directory() . '/includes/plugins/acf-gallery.zip', // The plugin source
            'required' => true, // If false, the plugin is only 'recommended' instead of required
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
        ),
        array(
            'name' => 'FlexSlider', // The plugin name
            'slug' => 'wooslider', // The plugin slug (typically the folder name)
            'source' => get_stylesheet_directory() . '/includes/plugins/wooslider.zip', // The plugin source
            'required' => true, // If false, the plugin is only 'recommended' instead of required
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
        ),
        array(
            'name' => 'LayerSlider', // The plugin name
            'slug' => 'layerslider', // The plugin slug (typically the folder name)
            'source' => get_stylesheet_directory() . '/includes/plugins/layerslider.zip', // The plugin source
            'required' => true, // If false, the plugin is only 'recommended' instead of required
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
        ),
        array(
            'name' => 'WP Paginate', // The plugin name
            'slug' => 'wp-paginate', // The plugin slug (typically the folder name)
            'source' => get_stylesheet_directory() . '/includes/plugins/wp-paginate.zip', // The plugin source
            'required' => true, // If false, the plugin is only 'recommended' instead of required
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
        ),
    );
    // Change this to your theme text domain, used for internationalising strings
    $theme_text_domain = 'GoGetThemes';
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.

     */
    $config = array(
        'domain' => $theme_text_domain, // Text domain - likely want to be the same as your theme.
        'default_path' => '', // Default absolute path to pre-packaged plugins
        'parent_menu_slug' => 'themes.php', // Default parent menu slug
        'parent_url_slug' => 'themes.php', // Default parent URL slug
        'menu' => 'install-required-plugins', // Menu slug
        'has_notices' => true, // Show admin notices or not
        'is_automatic' => false, // Automatically activate plugins after installation or not
        'message' => '', // Message to output right before the plugins table
        'strings' => array(
            'page_title' => __('Install Required Plugins', $theme_text_domain),
            'menu_title' => __('Install Plugins', $theme_text_domain),
            'installing' => __('Installing Plugin: %s', $theme_text_domain), // %1$s = plugin name
            'oops' => __('Something went wrong with the plugin API.', $theme_text_domain),
            'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.'), // %1$s = plugin name(s)
            'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.'), // %1$s = plugin name(s)
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.'), // %1$s = plugin name(s)
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.'), // %1$s = plugin name(s)
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.'), // %1$s = plugin name(s)
            'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins'),
            'activate_link' => _n_noop('Activate installed plugin', 'Activate installed plugins'),
            'return' => __('Return to Required Plugins Installer', $theme_text_domain),
            'plugin_activated' => __('Plugin activated successfully.', $theme_text_domain),
            'complete' => __('All plugins installed and activated successfully. %s', $theme_text_domain), // %1$s = dashboard link
            'nag_type' => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );
    tgmpa($plugins, $config);
}

	require_once("includes/widgets/theme-notifier.php");
?>