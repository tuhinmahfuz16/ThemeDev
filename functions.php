<?php


add_action('after-setup-theme', 'monalisa_theme_support');

function monalisa_theme_support(){
	
	// 
	add_theme_support('title-tag');
		
	add_theme_support('post-thumbnails');	
}



add_action('wp_enqueue_scripts', 'monalisa_all_theme_files');

function monalisa_all_theme_files(){


wp_register_style('monalisa-bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', array(), '1.0.3', 'all');
wp_enqueue_style('monalisa-bootstrap');

wp_register_style('monalisa-font1', '//fonts.googleapis.com/css?family=Lato:300,400,700,900', array(), '1.0.1', 'all');
wp_enqueue_style('monalisa-font1');

wp_register_style('monalisa-font2', '//fonts.googleapis.com/css?family=Montserrat:400,700', array(), '1.0.2', 'all');
wp_enqueue_style('monalisa-font2');


wp_register_style('monalisa-awesome', get_template_directory_uri().'/assets/fonts/font-awesome.min.css', array(), '1.0.4', 'all');
wp_enqueue_style('monalisa-awesome');


wp_register_style('monalisa-carousel', get_template_directory_uri().'/assets/owlcarousel/css/owl.carousel.css', array(), '1.0.5', 'all');
wp_enqueue_style('monalisa-carousel');


wp_register_style('monalisa-owl', get_template_directory_uri().'/assets/owlcarousel/css/owl.theme.css', array(), '1.0.6', 'all');
wp_enqueue_style('monalisa-owl');


wp_register_style('monalisa-prettyPhoto', get_template_directory_uri().'/assets/css/prettyPhoto.css', array(), '1.0.7', 'all');
wp_enqueue_style('monalisa-prettyPhoto');


wp_register_style('monalisa-flexslider', get_template_directory_uri().'/assets/css/flexslider.css', array(), '1.0.8', 'all');
wp_enqueue_style('monalisa-flexslider');


wp_register_style('monalisa-animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.9', 'all');
wp_enqueue_style('monalisa-animate');


wp_register_style('monalisa-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.10', 'all');
wp_enqueue_style('monalisa-style');








wp_register_script('monalisa-jquery', get_template_directory_uri().'/assets/js/jquery-1.12.4.min.js', array('jquery'), '3.0.2', true);
wp_enqueue_script('monalisa-jquery');


wp_register_script('monalisa-bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '3.0.3', true);
wp_enqueue_script('monalisa-bootstrap');


wp_register_script('monalisa-modernizr', get_template_directory_uri().'/assets/js/modernizr-2.8.3.min.js', array('jquery'), '3.0.4', true);
wp_enqueue_script('monalisa-modernizr');


wp_register_script('monalisa-inview', get_template_directory_uri().'/assets/js/jquery.inview.min.js', array('jquery'), '3.0.5', true);
wp_enqueue_script('monalisa-inview');


wp_register_script('monalisa-flexslider', get_template_directory_uri().'/assets/js/jquery.flexslider-min.js', array('jquery'), '3.0.6', true);
wp_enqueue_script('monalisa-flexslider');


wp_register_script('monalisa-prettyPhoto', get_template_directory_uri().'/assets/js/jquery.prettyPhoto.js', array('jquery'), '3.0.7', true);
wp_enqueue_script('monalisa-prettyPhoto');


wp_register_script('monalisa-carousel', get_template_directory_uri().'/assets/owlcarousel/js/owl.carousel.min.js', array('jquery'), '3.0.8', true);
wp_enqueue_script('monalisa-carousel');


wp_register_script('monalisa-scrolltopcontrol', get_template_directory_uri().'/assets/js/scrolltopcontrol.js', array('jquery'), '3.0.9', true);
wp_enqueue_script('monalisa-scrolltopcontrol');


wp_register_script('monalisa-contact', get_template_directory_uri().'/assets/js/form-contact.js', array('jquery'), '3.0.10', true);
wp_enqueue_script('monalisa-contact');


wp_register_script('monalisa-wow', get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'), '3.0.11', true);
wp_enqueue_script('monalisa-wow');

wp_register_script('monalisa-maps-api', '//maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA', array('jquery'), '3.0.14', true);
wp_enqueue_script('monalisa-maps-api');

wp_register_script('monalisa-scripts', get_template_directory_uri().'/assets/js/scripts.js', array('jquery'), '3.0.13', true);
wp_enqueue_script('monalisa-scripts');


}