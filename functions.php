<?php 
// Insert your Customization Functions. Read More - http://codex.wordpress.org/Child_Themes

function benedicta_child_scripts() {
    wp_enqueue_style( 'benedicta-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_print_styles', 'benedicta_child_scripts' );
?>