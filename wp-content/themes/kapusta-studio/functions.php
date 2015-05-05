<?php

/*Безопасное добавление файла стиля*/
function my_css() {
 	wp_enqueue_style( 'wp_head_style', get_stylesheet_directory_uri() . '/style.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'my_css' );

/* Отменяем зарегистрированный jQuery и ставим динамический*/
function jquery() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}    
add_action( 'wp_enqueue_scripts', 'jquery' );

/*Безопасное добавление файла скрипта*/
function theme() {
 	wp_enqueue_script( 'theme', get_template_directory_uri() . '/javascript/theme.js',array('jquery'), true,true );
}
add_action( 'wp_enqueue_scripts', 'theme' );


/*Удаление ненужных метатегов из Хедера*/
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action( 'wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head','wp_shortlink_wp_head', 10, 0 );

/*Добавление миниатюр к постам*/
add_theme_support('post-thumbnails');

/*Регистрируем меню*/
register_nav_menus('vmenu');

/*Новый объект меню*/
class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
           $class_names = $value = '';
 
           $classes = empty( $item->classes ) ? array() : (array) $item->classes;
 
           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';
 
           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
 
           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
 
           $prepend = '<strong>';
           $append = '</strong>';
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';
 
           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }
 
            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
 
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}