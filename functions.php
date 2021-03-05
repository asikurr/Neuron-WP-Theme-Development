<?php
function neuron_scripts() {
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'neuron-style', get_stylesheet_uri() );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), '1.0.0', true );
    // wp_enqueue_script('ajaxchimp', get_template_directory_uri() .'/assets/js/ajaxchimp.js',array('jquery'), '1.0.0', true);
    // wp_enqueue_script('ajaxchimpcon', get_template_directory_uri() .'/assets/js/ajaxchimp-config.js',array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'neuron-script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'neuron_scripts' );
apply_filters( 'widget_text', 'do_shortcode' );

function neuron_theme_support() {
    //this is for multi language support
    load_theme_textdomain( 'neuron-online', get_template_directory() . '/languages' );
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    //adding support for automatic title tags
    add_theme_support( 'title-tag' );
    //enable for post thumbnail
    add_theme_support( 'post-thumbnails' );
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'neuron-online' ),
        )
    );
    //support for html5
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    //custom logo size
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

}
add_action( 'after_setup_theme', 'neuron_theme_support' );

//Custom Post Types

function neuron_theme_custom_post() {
    //for slider
    $labels = array(
        'name'          => _x( 'Sliders', 'Post type general name', 'neuron-online' ),
        'singular_name' => _x( 'Slider', 'Post type singular name', 'neuron-online' ),

    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slide' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
    );
    register_post_type( 'slide', $args );

    //for custom features
    $labels = array(
        'name'          => _x( 'Features', 'Post type general name', 'neuron-online' ),
        'singular_name' => _x( 'Feature', 'Post type singular name', 'neuron-online' ),
        'add_new'       => __( 'Add New', 'neuron-online' ),
        'add_new_item'  => __( 'Add New Feature', 'neuron-online' ),

    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'feature' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
    );
    register_post_type( 'feature', $args );

    //for custom Services
    $labels = array(
        'name'          => _x( 'Services', 'Post type general name', 'neuron-online' ),
        'singular_name' => _x( 'Service', 'Post type singular name', 'neuron-online' ),

    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
    );
    register_post_type( 'service', $args );
    //for custom works
    $labels = array(
        'name'          => _x( 'Works', 'Post type general name', 'neuron-online' ),
        'singular_name' => _x( 'work', 'Post type singular name', 'neuron-online' ),

    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'work' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
    );
    register_post_type( 'work', $args );
}

add_action( 'init', 'neuron_theme_custom_post' );
//footer widgets
function neuron_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer One', 'neuron-online' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add Footer One widgets here.', 'neuron-online' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Two', 'neuron-online' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add Footer Two widgets here.', 'neuron-online' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Three', 'neuron-online' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add Footer Three widgets here.', 'neuron-online' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Four', 'neuron-online' ),
            'id'            => 'footer-4',
            'description'   => esc_html__( 'Add Footer Four widgets here.', 'neuron-online' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'neuron_widgets_init' );

//widget short code
function thumbnail_list_shortcode( $atts ) {
    extract( shortcode_atts( array(
        'count' => 3,
    ), $atts ) );
    $q = new WP_Query( array( 'posts_per_page' => $count, 'post_type' => 'post' ) );
    $list = '<ul>';
    while ( $q->have_posts() ): $q->the_post();
        $idd = get_the_ID();
        $list .= '
		    <li>
		        ' . get_the_post_thumbnail( $idd, 'thumbnail' ) . '
		        <p><a href="' . get_permalink() . '">' . get_the_title() . '</a></p>
		        <span>' . get_the_date( 'd F Y', $idd ) . '</span>

			</li>
		    ';
    endwhile;
    $list .= '</ul>';
    wp_reset_query();
    return $list;
}

add_shortcode( 'thumb-posts', 'thumbnail_list_shortcode' );