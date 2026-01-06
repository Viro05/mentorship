<?php
/**
 * Mentorship theme functions and definitions
 *
 * @package Mentorship
 */

if (!defined("ABSPATH")) {
    exit(); // Exit if accessed directly.
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function mentorship_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support("automatic-feed-links");

    // Let WordPress manage the document title.
    add_theme_support("title-tag");

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support("post-thumbnails");

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus([
        "primary" => esc_html__("Primary Menu", "mentorship"),
        "footer" => esc_html__("Footer Menu", "mentorship"),
    ]);

    // Switch default core markup for search form, comment form, and comments
    add_theme_support("html5", [
        "search-form",
        "comment-form",
        "comment-list",
        "gallery",
        "caption",
        "style",
        "script",
    ]);

    // Add theme support for selective refresh for widgets.
    add_theme_support("customize-selective-refresh-widgets");

    // Add support for core custom logo.
    add_theme_support("custom-logo", [
        "height" => 250,
        "width" => 250,
        "flex-width" => true,
        "flex-height" => true,
    ]);

    // Add support for responsive embedded content.
    add_theme_support("responsive-embeds");

    // Add support for editor styles.
    add_theme_support("editor-styles");

    // Add support for wide alignment.
    add_theme_support("align-wide");

    // Add support for block editor color palette.
    add_theme_support("editor-color-palette", [
        [
            "name" => esc_html__("Primary", "mentorship"),
            "slug" => "primary",
            "color" => "#296794",
        ],
        [
            "name" => esc_html__("Secondary", "mentorship"),
            "slug" => "secondary",
            "color" => "#F5F5F5",
        ],
        [
            "name" => esc_html__("Success", "mentorship"),
            "slug" => "success",
            "color" => "#2DA647",
        ],
        [
            "name" => esc_html__("Info", "mentorship"),
            "slug" => "info",
            "color" => "#2590B1",
        ],
        [
            "name" => esc_html__("Warning", "mentorship"),
            "slug" => "warning",
            "color" => "#ffc107",
        ],
        [
            "name" => esc_html__("Danger", "mentorship"),
            "slug" => "danger",
            "color" => "#dc3545",
        ],
    ]);

    // Set content width.
    $GLOBALS["content_width"] = 1200;
}
add_action("after_setup_theme", "mentorship_setup");

/**
 * Enqueue scripts and styles.
 */
function mentorship_scripts()
{
    // Bootstrap CSS - Load first as base framework
    wp_enqueue_style(
        "bootstrap-css",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css",
        [],
        "5.1.3",
    );

    // Font Awesome
    wp_enqueue_style(
        "font-awesome",
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css",
        [],
        "6.4.0",
    );

    // Bootstrap Icons
    wp_enqueue_style(
        "bootstrap-icons",
        "https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css",
        [],
        "1.0.0",
    );

    // Google Fonts
    wp_enqueue_style(
        "mentorship-fonts",
        "https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&family=Inter:wght@300;400;500&family=Montserrat:wght@100&display=swap",
        [],
        null,
    );

    // Main theme stylesheet - Load after Bootstrap to override styles
    wp_enqueue_style(
        "mentorship-style",
        get_stylesheet_uri(),
        [
            "bootstrap-css",
            "font-awesome",
            "bootstrap-icons",
            "mentorship-fonts",
        ],
        wp_get_theme()->get("Version"),
    );

    // Bootstrap JS for dropdown functionality
    wp_enqueue_script(
        "bootstrap-js",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js",
        [],
        "5.1.3",
        true,
    );

    // Main theme script
    wp_enqueue_script(
        "mentorship-script",
        get_template_directory_uri() . "/assets/js/main.js",
        ["jquery", "bootstrap-js"],
        wp_get_theme()->get("Version"),
        true,
    );

    // Localize script for AJAX
    wp_localize_script("mentorship-script", "mentorship_ajax", [
        "ajax_url" => admin_url("admin-ajax.php"),
        "nonce" => wp_create_nonce("mentorship_nonce"),
    ]);

    // Comment reply script
    if (is_singular() && comments_open() && get_option("thread_comments")) {
        wp_enqueue_script("comment-reply");
    }
}
add_action("wp_enqueue_scripts", "mentorship_scripts");

/**
 * Register widget areas.
 */
function mentorship_widgets_init()
{
    register_sidebar([
        "name" => esc_html__("Sidebar", "mentorship"),
        "id" => "sidebar-1",
        "description" => esc_html__("Add widgets here.", "mentorship"),
        "before_widget" => '<section id="%1$s" class="widget %2$s">',
        "after_widget" => "</section>",
        "before_title" => '<h2 class="widget-title">',
        "after_title" => "</h2>",
    ]);

    register_sidebar([
        "name" => esc_html__("Footer 1", "mentorship"),
        "id" => "footer-1",
        "description" => esc_html__("Add widgets here.", "mentorship"),
        "before_widget" => '<section id="%1$s" class="widget %2$s">',
        "after_widget" => "</section>",
        "before_title" => '<h3 class="widget-title">',
        "after_title" => "</h3>",
    ]);

    register_sidebar([
        "name" => esc_html__("Footer 2", "mentorship"),
        "id" => "footer-2",
        "description" => esc_html__("Add widgets here.", "mentorship"),
        "before_widget" => '<section id="%1$s" class="widget %2$s">',
        "after_widget" => "</section>",
        "before_title" => '<h3 class="widget-title">',
        "after_title" => "</h3>",
    ]);

    register_sidebar([
        "name" => esc_html__("Footer 3", "mentorship"),
        "id" => "footer-3",
        "description" => esc_html__("Add widgets here.", "mentorship"),
        "before_widget" => '<section id="%1$s" class="widget %2$s">',
        "after_widget" => "</section>",
        "before_title" => '<h3 class="widget-title">',
        "after_title" => "</h3>",
    ]);
}
add_action("widgets_init", "mentorship_widgets_init");

/**
 * Add custom image sizes.
 */
function mentorship_image_sizes()
{
    add_image_size("mentorship-hero", 700, 500, true);
    add_image_size("mentorship-program-card", 350, 200, true);
    add_image_size("mentorship-mentor-avatar", 128, 128, true);
    add_image_size("mentorship-benefit", 578, 671, false);
}
add_action("after_setup_theme", "mentorship_image_sizes");

/**
 * Custom excerpt length.
 */
function mentorship_excerpt_length($length)
{
    return 20;
}
add_filter("excerpt_length", "mentorship_excerpt_length");

/**
 * Custom excerpt more.
 */
function mentorship_excerpt_more($more)
{
    return "...";
}
add_filter("excerpt_more", "mentorship_excerpt_more");

/**
 * Custom pagination.
 */
function mentorship_pagination()
{
    $pagination = paginate_links([
        "type" => "array",
        "prev_text" => '<i class="fa fa-chevron-left"></i>',
        "next_text" => '<i class="fa fa-chevron-right"></i>',
    ]);

    if ($pagination) {
        echo '<nav class="pagination-nav" aria-label="' .
            esc_attr__("Posts navigation", "mentorship") .
            '">';
        echo '<ul class="pagination">';
        foreach ($pagination as $page) {
            echo '<li class="page-item">' . $page . "</li>";
        }
        echo "</ul>";
        echo "</nav>";
    }
}

/**
 * Add custom body classes.
 */
function mentorship_body_classes($classes)
{
    // Add class for the current page
    if (is_front_page()) {
        $classes[] = "home-page";
    }
    if (is_page()) {
        $classes[] =
            "page-" . get_post_field("post_name", get_queried_object());
    }

    // Add class if user is logged in
    if (is_user_logged_in()) {
        $classes[] = "user-logged-in";
    } else {
        $classes[] = "user-not-logged-in";
    }

    return $classes;
}
add_filter("body_class", "mentorship_body_classes");

/**
 * Customize the login page.
 */
function mentorship_login_logo()
{
    ?>
    <style type="text/css">
        #login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png);
            height: 65px;
            width: 320px;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
        .login form {
            background: #296794;
            color: white;
        }
        .login #nav a,
        .login #backtoblog a {
            color: #296794 !important;
        }
        .login input[type=submit] {
            background: #2590B1;
            border-color: #2590B1;
        }
        .login input[type=submit]:hover {
            background: #1e7a99;
            border-color: #1e7a99;
        }
    </style>
    <?php
}
add_action("login_enqueue_scripts", "mentorship_login_logo");

/**
 * Change login logo URL.
 */
function mentorship_login_logo_url()
{
    return home_url();
}
add_filter("login_headerurl", "mentorship_login_logo_url");

/**
 * Change login logo title.
 */
function mentorship_login_logo_url_title()
{
    return get_bloginfo("name");
}
add_filter("login_headertext", "mentorship_login_logo_url_title");

/**
 * Remove admin bar for non-admins.
 */
function mentorship_remove_admin_bar()
{
    if (!current_user_can("administrator") && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action("after_setup_theme", "mentorship_remove_admin_bar");

/**
 * Add security headers.
 */
function mentorship_security_headers()
{
    header("X-Content-Type-Options: nosniff");
    header("X-Frame-Options: DENY");
    header("X-XSS-Protection: 1; mode=block");
    header("Referrer-Policy: strict-origin-when-cross-origin");
}
add_action("send_headers", "mentorship_security_headers");

/**
 * Optimize database queries.
 */
function mentorship_optimize_queries()
{
    // Remove emoji scripts
    remove_action("wp_head", "print_emoji_detection_script", 7);
    remove_action("wp_print_styles", "print_emoji_styles");
    remove_action("admin_print_scripts", "print_emoji_detection_script");
    remove_action("admin_print_styles", "print_emoji_styles");

    // Remove unnecessary WordPress features
    remove_action("wp_head", "wp_generator");
    remove_action("wp_head", "wlwmanifest_link");
    remove_action("wp_head", "rsd_link");
    remove_action("wp_head", "wp_shortlink_wp_head");

    // Clean up head
    remove_action("wp_head", "adjacent_posts_rel_link_wp_head", 10);
    remove_action("wp_head", "wp_shortlink_wp_head", 10, 0);
}
add_action("init", "mentorship_optimize_queries");
