<?php
/**
 * Simone functions and definitions
 *
 * @package Simone
 */

/**
 * For child theme authors: To disable the styles and layouts from Simone properly,
 * add the following code to your child theme functions.php file:
 *
 * <?php
 * add_action( 'wp_enqueue_scripts', 'dequeue_parent_theme_styles', 11 );
 * function dequeue_parent_theme_styles() {
 *     wp_dequeue_style( 'simone-parent-style' );
 *     wp_dequeue_style( 'simone-layout' );
 * }
 *
 */

if (!function_exists('simone_setup')): /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */ 
    function simone_setup()
    {
        
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on simone, use a find and replace
         * to change 'simone' to the name of your theme in all the template files
         */
        load_theme_textdomain('simone', get_template_directory() . '/languages');
        
        /**
         * Set the content width based on the theme's design and stylesheet.
         */
        if (!isset($content_width)) {
            $content_width = 700;
            /* pixels */
        }
        
        // This theme styles the visual editor to resemble the theme style.
        $font_url = '//fonts.googleapis.com/css?family=Lato:300,400,400italic,700,900,900italic|PT+Serif:400,700,400italic,700italic';
        add_editor_style(array(
            'inc/editor-style.css',
            str_replace(',', '%2C', $font_url)
        ));
        
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');
        
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        // Featured image sizes for single posts and pages
        set_post_thumbnail_size(1060, 650, true);
        // Featured image size for small image in archives
        add_image_size('index-thumb', 780, 250, true);
        
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'simone'),
            'social' => __('Social Menu', 'simone')
        ));
        
        // Enable support for Post Formats.
        add_theme_support('post-formats', array(
            'aside'
        ));
        
        // Setup the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('simone_custom_background_args', array(
            'default-color' => 'b2b2b2',
            'default-image' => get_template_directory_uri() . '/images/pattern.svg'
        )));
        
        // Enable support for HTML5 markup.
        add_theme_support('html5', array(
            'comment-list',
            'search-form',
            'comment-form',
            'gallery',
            'caption'
        ));
    }
endif; // simone_setup
add_action('after_setup_theme', 'simone_setup');

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function simone_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'simone'),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>'
    ));
    
    register_sidebar(array(
        'name' => __('Footer Widget', 'simone'),
        'description' => __('Footer widget area appears, not surprisingly, in the footer of the site.', 'simone'),
        'id' => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>'
    ));
}
add_action('widgets_init', 'simone_widgets_init');




/**
 * Enqueue scripts and styles.
 */
function simone_scripts()
{
    
    // Get the current layout setting (sidebar left or right)
    $simone_layout = get_option('layout_setting');
    if (is_page_template('page-templates/page-nosidebar.php') || !is_active_sidebar('sidebar-1')) {
        $layout_stylesheet = '/layouts/no-sidebar.css';
    } elseif ('left-sidebar' == $simone_layout) {
        $layout_stylesheet = '/layouts/sidebar-content.css';
    } else {
        $layout_stylesheet = '/layouts/content-sidebar.css';
    }
    
    // Load parent theme stylesheet even when child theme is active
    wp_enqueue_style('simone-style', simon_get_parent_stylesheet_uri());
    
    // Load layout stylesheet
    wp_enqueue_style('simone-layout', get_template_directory_uri() . $layout_stylesheet);
    
    // Load child theme stylesheet
    if (is_child_theme()) {
        wp_enqueue_style('simone-child-style', get_stylesheet_uri());
    }
    
    // Lato http://www.google.com/fonts/specimen/Lato + PT Serif http://www.google.com/fonts/specimen/PT+Serif
    wp_enqueue_style('simone-google-fonts', '//fonts.googleapis.com/css?family=Lato:100,300,400,400italic,700,900,900italic|PT+Serif:400,700,400italic,700italic');
    
    // FontAwesome
    wp_enqueue_style('simone_fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css');
    
    wp_enqueue_script('simone-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);
    
    wp_enqueue_script('simone-search', get_template_directory_uri() . '/js/hide-search.js', array(), '20120206', true);
    
    wp_enqueue_script('simone-superfish', get_template_directory_uri() . '/js/superfish.min.js', array(
        'jquery'
    ), '20140328', true);
    
    wp_enqueue_script('simone-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array(
        'jquery'
    ), '20140328', true);
    
    wp_enqueue_script('simone-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array(
        'masonry'
    ), '20140401', true);
    
    wp_enqueue_script('simone-enquire', get_template_directory_uri() . '/js/enquire.min.js', false, '20140429', true);
    
    
    if (is_single() || is_author()) {
        wp_enqueue_script('simone-hide', get_template_directory_uri() . '/js/hide.js', array(
            'jquery'
        ), '20140310', true);
    }
    
    wp_enqueue_script('simone-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'simone_scripts');

/**
 * Return parent stylesheet URI
 */
function simon_get_parent_stylesheet_uri()
{
    if (is_child_theme()) {
        return trailingslashit(get_template_directory_uri()) . 'style.css';
    } else {
        return get_stylesheet_uri();
    }
}


/**
 * Related Posts.
 *
 * Usage:
 * To show related by categories:
 * Add in single.php <?php dfw_related_posts(); ?>.
 * To show related by tags:
 * Add in single.php <?php dfw_related_posts('tag'); ?>.
 *
 * @global array $post
 *   WP global post.
 * @param string $display
 *   Set category or tag.
 * @param int $qty
 *   Number of posts to be displayed.
 * @param bool $images
 *   Enable or disable displaying images.
 * @param string $title
 *   Set the widget title.
 */
// function dfw_related_posts($display = 'category', $qty = 5, $images = true) {
//     global $post;
//     $show = false;
//     $post_qty = (int) $qty;
//     switch ($display) :
//         case 'tag':
//             $tags = wp_get_post_tags($post->ID);
//             if ($tags) {
//                 $show = true;
//                 $tag_ids = array();
//                 foreach ($tags as $individual_tag) {
//                     $tag_ids[] = $individual_tag->term_id;
//                 }
//                 $args = array(
//                     'tag__in' => $tag_ids,
//                     'post__not_in' => array($post->ID),
//                     'posts_per_page' => $post_qty,
//                     'ignore_sticky_posts' => 1
//                 );
//             }
//             break;
//         default :
//             $categories = get_the_category($post->ID);
//             if ($categories) {
//                 $show = true;
//                 $category_ids = array();
//                 foreach ($categories as $individual_category) {
//                     $category_ids[] = $individual_category->term_id;
//                 }
//                 $args = array(
//                     'category__in' => $category_ids,
//                     'post__not_in' => array($post->ID),
//                     'showposts' => $post_qty,
//                     'ignore_sticky_posts' => 1
//                 );
//             }
//     endswitch;
//     if ($show == true) {
//         $related = new wp_query($args);
//         if ($related->have_posts()) {
//             echo " <div id= 'the_title'>Related Posts:</h2>";
//             $layout = '<div id="related-post">';
//             $layout .= '<h3>' . strip_tags($title) . '</h3>';
//             while ($related->have_posts()) {
//                 $related->the_post();
//                 $rel_title = get_the_title(); # get post title.
//                 $rel_link  = get_permalink(); # get post link.   
//                 if ($images == true) {
//                     ## get featured image with default thumbnail size. 
//                     $rel_img   = get_the_post_thumbnail($post->ID, 'thumbnail' , array("class" => "feature-img") ); 
//                     $layout .= "<div id='content_rel_posts'> <a href='$rel_link'>$rel_img</a> <p><a href='$rel_link'> $rel_title </a></p></div>";
                    
//                     // $layout .= '<span class="thumb">';
//                     // $layout .= '<a style="clear:both; margin-top:10px; margin:auto;" href="' . get_permalink() . '" title="' . get_the_title() . '">' . "<br>";
//                     // $layout .= '<figure style="clear:both;">' . get_the_post_thumbnail($related->ID,'thumbnail', array( 'class' => 'alignleft' )). '</figure>'. "</a>";
//                     // // $layout .= '<a style="clear:both; margin-top:10px; margin:auto;" href="' . get_permalink() . '" title="' . get_the_title() . '">' . "<br>" .'</a>';
//                     // $layout .= '</span>';
//                 }
//                 else{
//                 $layout .= "<div id='content_rel_posts'><p><a href='$rel_link'> $rel_title </a></p></div>";
//             }
//             }
//             $layout .= '</div>';
//             echo $layout;

//             // <div id='content_rel_posts'> <a href='$rel_link'>$rel_img</a> <p><a href='$rel_link'> $rel_title </a></p></div>;
//         }
//         wp_reset_query();
//     }
// }


 // $rel_img   = get_the_post_thumbnail($post->ID, 'thumbnail' , array("class" => "feature-img") ); 
 //                    $layout .= '<div style = "margin-top:-10px; padding:0px;">';
 //                    $layout .="<div id='content_rel_posts' style= 'width: 100%; float: left; margin: 0px 12px 5px 0px; padding: 5px;'> 
 //                    <a style='text-decoration: none; color: #21759b;' href='$rel_link'>
 //                    <div style=' margin-left:-7vw;  display: block; padding: 0px; height: auto; max-width: 100%;'>$rel_img</div></a> 
 //                    <p style='font-size: 1.1em; line-height: 120%; padding: 5px 0 0 0;margin: 0px;'>
 //                    <a style='text-decoration: none; color: #21759b;'  href='$rel_link'> $rel_title </a></p></div>";
 //                    $layout .= '</div>';

// /* Function to add related posts with thumb on single post pages */
function related_posts_with_thumb($content)
{
    global $post;
    if (is_single()) {
        $rel_posts = '';
        
        # 1. get category IDs of the current article and save to variable as an array.
        $categories = get_the_category();
        foreach ($categories as $category) {
            $rel_cat[] = $category->cat_ID;
        }
        # 2. arguments for wp_query.    
        $rep_args  = array(
            'post__not_in' => array(
                $post->ID
            ), # don't display current post.
            'category__in' => $rel_cat, # get posts within current categories.
            'posts_per_page' => 5, # number of posts to display.
            'orderby' => 'rand' # display random posts.
        );
        # 3. run the query. 
        $rep_query = new wp_query($rep_args);
        
        # 4. if the query has posts start the loop.
        if ($rep_query->have_posts()) {
            while ($rep_query->have_posts()):
                $rel_posts .= '<hr>';
                $rep_query->the_post();
                $rel_img   = get_the_post_thumbnail($post->ID, 'thumbnail' , array("class" => "feature-img") ); 
                ## get featured image with default thumbnail size. 
                $rel_title = get_the_title(); # get post title.
                $rel_link  = get_permalink(); # get post link.   
                $rel_posts .= "<div id='content_rel_posts'> <a href='$rel_link'><div style='margin-left:-15.5vw;'>$rel_img</div></a> <p><a href='$rel_link'> $rel_title </a></p></div>";

            endwhile;
            wp_reset_postdata();
        }
        # 5. Output.
        $content .= "<h2 class='heading_rel_posts'>Related Articles</h2> $rel_posts";
    }
    return $content;
}
add_filter('the_content', 'related_posts_with_thumb', 2);



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';