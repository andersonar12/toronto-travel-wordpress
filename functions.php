<?php  

//Cuando el tema es activado
function toronto_setup(){

    //habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    // Agregar imagenes de tamaño personalizado

    add_image_size('square', 350, 350, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
    add_image_size('destacada', 1100, 418, true);
}
add_action( 'after_setup_theme', 'toronto_setup', );


//Scripts y Styles
function toronto_scripts_styles() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.4.1 ');

    wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.min.css', array(), '1.0.0 ');

    wp_enqueue_style( 'hover.css', get_template_directory_uri() . '/css/hover.css', array(), '2.3.2');

    wp_enqueue_style( 'bxslider.css','https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.css', array(), '4.2.15');


    //hoja de estilos principal
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap'), '1.0.1');
  
   /* Fuentes */
    wp_enqueue_style( 'googlefonts','https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500&display=swap' , array('bootstrap'), '1.0.1');
 

    //Scripts
    wp_enqueue_script('jquery',get_template_directory_uri() . '/js/jquery.js', array(), '3.4.1 ',true);

    wp_enqueue_script('bootstrap.js',get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.4.1 ',true);
    wp_enqueue_script('popper',get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '4.4.1 ',true);

    wp_enqueue_script('lightbox',get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.2',true);

    wp_enqueue_script('bxslider','https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js', array('jquery'), '4.2.15',true);

    wp_enqueue_script('scripts',get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0 ',true);

}
add_action( 'wp_enqueue_scripts', 'toronto_scripts_styles' );

//Menus de nav, agregar mas utilizando el arreglo
function toronto_menus() {
    register_nav_menus( array(
        'menu-principal' => __( 'Menu Principal', 'TorontoTravel' )
    ));
}
add_action('init','toronto_menus');

function toronto_li_class($classes,$item,$args) {
    
    $classes[] = 'nav-item';
    
    return $classes;

}
add_filter( 'nav_menu_css_class', 'toronto_li_class', 1, 3 );


//Agrega las clases nav-link de bootstrap al <a> del menu
function toronto_a_class($atts,$item,$args) {
    
   $atts['class'] = 'nav-link pr-3 pl-3';
    
   return $atts;
};
add_filter( 'nav_menu_link_attributes', 'toronto_a_class', 10, 3 );

function toronto_widgets()
{
        register_sidebar( array(
			'name' 				=> __('Sidebar Testimoniales'),
			'id'				=> 'sidebar-2',
			'description'		=> 'Widgets de Testimoniales',
			'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
			'after_widget'		=> '</aside>',
			'before_title' 		=> '<h3 class="widget-title"	>',
			'after_title'  		=> '</h3>',
		) );
}
add_action('widgets_init','toronto_widgets');
