<?php 

	function theme_styles()
	{
	    wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/public/css/app.css' );
	}
	add_action( 'wp_enqueue_scripts', 'theme_styles' ); 

	function theme_js()
	{
	    global $wp_scripts;
	    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
		wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
	    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
		$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
	    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/public/js/app.bundle.js', array('jquery'), '', true );
	}
	add_action( 'wp_enqueue_scripts', 'theme_js' );

	// Add Theme Support
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
	add_theme_support( 'html5' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'starter-content' );

	add_filter('show_admin_bar', '__return_false');


	define('ALLOW_UNFILTERED_UPLOADS', true);

	
	// add_action('get_header', 'my_filter_head');

	// function my_filter_head() {
	// 	remove_action('wp_head', '_admin_bar_bump_cb');
	// }	

	// Register Menu Locations
	register_nav_menus( [
		'main-menu' => esc_html__( 'Main Menu', 'wpheirarchy' ),
		'footer-menu' => esc_html__('Footer Menu', 'wpheirarchy')
	]);


	// Setup Widget Areas
	function widget_main_sidebar() {
		$args = 
		register_sidebar([
			'name'			=> esc_html__( 'Main Sidebar', 'wpheirarchy' ),
			'id'			=> 'main-sidebar',
			'description' 	=> esc_html__( 'Add widgets for main sidebar', 'wpheirarchy' ),
			'before_widget' => '<section class="widget">',
			'after_widget' 	=> '</section>',
			'before_title' 	=> '<h2>',
			'after_title' 	=> '</h2>'
		]);
	}
	add_action( 'widgets_init', 'widget_main_sidebar' );

	function widget_contact_sidebar() {
		$args = 
		register_sidebar([
			'name'			=> esc_html__( 'Contact Sidebar', 'wpheirarchy' ),
			'id'			=> 'contact-sidebar',
			'description' 	=> esc_html__( 'Add widgets for contact sidebar', 'wpheirarchy' ),
			'before_widget' => '<section class="widget">',
			'after_widget' 	=> '</section>',
			'before_title' 	=> '<h2>',
			'after_title' 	=> '</h2>'
		]);
	}
	add_action( 'widgets_init', 'widget_contact_sidebar' );




	class Primary_Walker_Nav_Menu extends Walker_Nav_Menu {
  
		// add classes to ul sub-menus
		function start_lvl( &$output, $depth ) {
		    // depth dependent classes
		    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
		    $classes = array(
		        'sub-menu',
		        ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
		        ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
		        'menu-depth-' . $display_depth
		        );
		    $class_names = implode( ' ', $classes );
		  
		    // build html
		    $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
		}
		  
		// add main/sub classes to li's and links
		 function start_el( &$output, $item, $depth, $args ) {
		    global $wp_query;
		    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
		  
		    // depth dependent classes
		    $depth_classes = array(
		        ( $depth == 0 ? 'site-nav__item' : 'sub-menu-item' ),
		        ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
		        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
		        'menu-item-depth-' . $depth
		    );
		    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
		  
		    // passed classes
		    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
		    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
		  
		    // build html
		    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
		  
		    // link attributes
		    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		    $attributes .= ' class="site-nav__link ' . ( $depth > 0 ? 'sub-site-nav__link' : 'main-site-nav__link' ) . '"';
		  
		    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
		        $args->before,
		        $attributes,
		        $args->link_before,
		        apply_filters( 'the_title', $item->title, $item->ID ),
		        $args->link_after,
		        $args->after
		    );
		  
		    // build html
		    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}
		}



		// function projects_post_type() {
		//     $args = array(
		//         'public'    => true,
		//         'label'     => __( 'Projects'),
		//         'singular_name'       => __( 'Project', 'Post Type Singular Name', 'wpheirarchy' ),
		//         'menu_icon' => 'dashicons-book',
		//     );
		//     register_post_type( 'projects', $args );
		// }
		// add_action( 'init', 'projects_post_type' );

// 		function projects_post_type() {
 
// // Set UI labels for Custom Post Type
//     $labels = array(
//         'name'                => _x( 'Projects', 'Post Type General Name', 'twentythirteen' ),
//         'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'twentythirteen' ),
//         'menu_name'           => __( 'Projects', 'twentythirteen' ),
//         'parent_item_colon'   => __( 'Parent Project', 'twentythirteen' ),
//         'all_items'           => __( 'All Projects', 'twentythirteen' ),
//         'view_item'           => __( 'View Project', 'twentythirteen' ),
//         'add_new_item'        => __( 'Add New Project', 'twentythirteen' ),
//         'add_new'             => __( 'Add New', 'twentythirteen' ),
//         'edit_item'           => __( 'Edit Project', 'twentythirteen' ),
//         'update_item'         => __( 'Update Project', 'twentythirteen' ),
//         'search_items'        => __( 'Search Project', 'twentythirteen' ),
//         'not_found'           => __( 'Not Found', 'twentythirteen' ),
//         'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
//     );
     
// // Set other options for Custom Post Type
     
//     $args = array(
//         'label'               => __( 'Projects', 'twentythirteen' ),
//         'description'         => __( 'Project news and reviews', 'twentythirteen' ),
//         'labels'              => $labels,
//         // Features this CPT supports in Post Editor
//         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//         // You can associate this CPT with a taxonomy or custom taxonomy. 
//         'taxonomies'          => array( 'genres' ),
//         /* A hierarchical CPT is like Pages and can have
//         * Parent and child items. A non-hierarchical CPT
//         * is like Posts.
//         */ 
//         'hierarchical'        => false,
//         'public'              => true,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 5,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'page',
//     );
     
//     // Registering your Custom Post Type
//     register_post_type( 'projects', $args );
 
// }

// function projects_custom_post_type() {
//   register_post_type( 'projects',
//     array(
//       'labels' => array(
//         'name' => __( 'Projects' ),
//         'singular_name' => __( 'Project' )
//       ),
//       'public' => true,
//       'has_archive' => true,
//     )
//   );
// }
// add_action( 'init', 'projects_custom_post_type' );

		function projects_post_type() {
		    $args = array(
		        'public'    => true,
		        'label'     => __( 'Projects'),
		        'singular_name'       => __( 'Project', 'Post Type Singular Name', 'wpheirarchy' ),
		        'menu_icon' => 'dashicons-book',
		    );	
		    register_post_type( 'projects', $args );
		}
		add_action( 'init', 'projects_post_type' );
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
//add_action( 'init', 'projects_post_type', 0 );

// add_filter('acf/location/rule_match/single_template', 'acf_location_rules_match_user', 10, 3);
// function acf_location_rules_match_user( $match, $rule, $options )
// {
// 	$match_template = get_page_by_path('single-');

// 	if($rule['operator'] == "==")
// 	{
// 		$match = ($match_template);
// 	} 
// 	else if($rule['operator'] == "!=") 
// 	{
// 		$match = ($match_template);
// 	}

// 	return $match;
// }