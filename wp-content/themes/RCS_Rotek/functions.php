
<?php function wpb_adding_scripts() {
    //wp_enqueue_style( $handle, $src, $deps, $ver, $media );
    //parameters in order:
    //1. handle or name of script
    //2. src of script
    //3. dependencies (ex. jquery)
    //4. version (not req)
    //5. in footer? (ex. set to 'true')
    
    //scripts for footer
    wp_register_script('footer_scripts', get_template_directory_uri() . '/assets/js/footer_scripts.js', array('jquery'),'1.1', true);
    
    //scripts for header
    wp_register_script('header_scripts', get_template_directory_uri().'/assets/js/header_scripts.js', true);

    wp_enqueue_script('header_scripts' ,'footer_scripts');
}
  
//css styles
function wpb_adding_styles() {
    wp_register_style('test-style', get_template_directory_uri().'/assets/css/style.css');
    
    wp_enqueue_style('test-style');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' ); 

?>
