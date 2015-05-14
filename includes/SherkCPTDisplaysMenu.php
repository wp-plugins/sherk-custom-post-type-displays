<?php


class SherkCPTDisplaysMenu {


    function __construct(){
	
	   add_action( 'admin_menu', array($this,'register_my_custom_menu_page' ));

	}
	
	
	
	

	function register_my_custom_menu_page(){
		add_submenu_page( 'tools.php', 'How To Use', 'Sherk CPT Displays', 'manage_options', 'sherkcptdisplays_info', array($this,'sherkcptdisplays_menu_page'), 'dashicons-images-alt2', 10 ); 
	}

	function sherkcptdisplays_menu_page(){
		include(SherkCPTDisplays::get_plugin_uri().'templates/sherkcptdisplays_dashboard.php');
	}
	

	
	

	
} //end of class
	
new SherkCPTDisplaysMenu();