<?php 

function load_stylesheets(){

    wp_register_style("bootstrap", get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.min.css', array(), 1, 'all');
    wp_enqueue_style('animate');

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), 1, 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), 1, 'all');
    wp_enqueue_style('flexslider');

    wp_register_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), 1, 'all');
    wp_enqueue_style('owl-carousel');

    wp_register_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array(), 1, 'all');
    wp_enqueue_style('owl-theme');

    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');

}
add_action('wp_enquque_scripts','load_stylesheets');



// Load scripts

function addjs(){


    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', '', 1, 1, 1);
}
add_action('wp_enquque_scripts','addjs');
// echo(get_template_directory_uri() . '/css/style.css')

// <script type="text/javascript" src="js/queryloader2.min.js"></script>
//   <script type="text/javascript" src="js/jquery.min.js"></script>
//   <script type="text/javascript" src="js/bootstrap.min.js"></script>
//   <script type="text/javascript" src="js/wow.min.js"></script>
//   <script type="text/javascript" src="js/jquery.countTo.js"></script>
//   <script type="text/javascript" src="js/jquery.inview.min.js"></script>
//   <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
//   <script type="text/javascript" src="js/classie.js"></script>
//   <script type="text/javascript" src="js/jquery.nav.js"></script>
//   <script type="text/javascript" src="js/owl.carousel.min.js"></script>
//   <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>
//   <script type="text/javascript" src="js/form-contact.js"></script>
//   <script type="text/javascript" src="js/app.js"></script>
//   <script type="text/javascript" src="js/smoothscroll.min.js"></script>
?>