<?php 

function mytheme_scripts() {
	//! CSS
	wp_enqueue_style( 'bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
	// google font linkini eklemedi arkadaş ben eklemiş bulundum bu sebeple headerdan kaldırmadım
	// wp_enqueue_style( 'googlefonts-style', 'https://fonts.googleapis.com/css2?family=Niramit:wght@200;300;400&family=Open+Sans:wght@300;400&display=swap');
	wp_enqueue_style( 'lightbox-style', get_template_directory_uri().'/css/lightbox.css');
	wp_enqueue_style( 'custom-style', get_stylesheet_uri(), array(), rand(111,9999), 'all');

	//! JS
	wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_enqueue_script('lightbox-js', get_template_directory_uri().'/js/lightbox-plus-jquery.js');
	wp_enqueue_script('custom-script', get_template_directory_uri().'/js/script.js', array('jquery-js'), '1.0.0',true);
	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script('fontawsome-js', 'https://kit.fontawesome.com/7bc4c0f83b.js');
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');


function remove_admin_bar() {
	show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

require_once('class-wp-bootstrap-navwalker.php');



function register_my_menus() {
	register_nav_menus(
		array(
		'primary' => __('Primary Menu'),
	   )
	 );
   }
   add_action( 'init', 'register_my_menus' );



   add_filter('wp_nav_menu_items','add_search_box', 1, 2);
   function add_search_box($items, $args) {
   
		   ob_start();
		   get_search_form();
		   $searchform = ob_get_contents();
		   ob_end_clean();
   
		   $items .= '<div class="">' . $searchform . '</div>';
//    !z
//   todo malesef search formunu sola yaslayamadım :(
//    !z
	   return $items;
   }
?>