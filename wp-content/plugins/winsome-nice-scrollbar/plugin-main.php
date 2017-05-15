<?php 
/*
Plugin Name: Winsome scrollbar
Plugin URI:http://www.mhost.5gbfree.com/demo
Description: This plugin will enable nice scrollbar in your wordpress theme without any shortcode .
Version: 1.0
Author: Masum Abdullah
Author URI:http://abdullahmasum.elance.com/
*/

   
// LOAD JQUERY

		function customscrollbar_wp_latest_jquery() {
			wp_enqueue_script('jquery');
		}
		add_action('init', 'customscrollbar_wp_latest_jquery');

// LOAD SCRIPT

		function scrollbar_plugin_main_js() {
			wp_enqueue_script( 'customscrollbar-js', plugins_url( '/js/jquery.nicescroll.js', __FILE__ ), array('jquery'), 1.0, false);
		   
		}

		add_action('init','scrollbar_plugin_main_js');

// ACTIVATION

		function nicescrollbar_active(){ ?>

			<script type="text/javascript">
			
			  jQuery(document).ready(function(){
			  
				jQuery('html').niceScroll({
				
				  cursorcolor:"<?php echo  vp_option('vpt_option.div_color') ?>",
				  cursorwidth: "<?php echo  vp_option('vpt_option.scroll_width') ?>",
				  scrollspeed: "<?php echo  vp_option('vpt_option.scroll_speed') ?>",
				  cursorborder: "<?php echo  vp_option('vpt_option.scroll_border') ?>",
				  cursorborderradius: "<?php echo  vp_option('vpt_option.scroll_border_radius') ?>",
				  touchbehaviour: "<?php echo  vp_option('vpt_option.scroll_touch') ?>"
		 
				});
			  });
			</script>
			<?php
		}
		add_action('wp_head','nicescrollbar_active');



// LOAD VAFPRESS FRAMEWORK

 require_once 'vafpress/bootstrap.php';
 

     function my_init_options()
        {
 // Built path to options template array file from plugin directory
	
        $tmpl_opt = plugin_dir_path( __FILE__ ) . '/admin/option/option.php';
		
 // Initialize the Option's object
		
        $theme_options = new VP_Option(array(
        'is_dev_mode' => false,
        'option_key' => 'vpt_option',
        'page_slug' => 'plugin_option',
        'template' => $tmpl_opt,
         'menu_page' => array(),
        'use_auto_group_naming' => true,
        'use_exim_menu' => true,
        'minimum_role' => 'edit_theme_options',
        'layout' => 'fixed',
        'page_title' => __( 'Nice Scrollbar', 'vp_textdomain' ),
        'menu_label' => __( 'Nice Scrollbar', 'vp_textdomain' ),
        ));
        }
 // the safest hook to use, since Vafpress Framework may exists in Theme or Plugin
 
        add_action( 'after_setup_theme', 'my_init_options' );
    

?>
