<?php

/**
 * LoadScripts class.
 * Load css and javascripts
 */
class SherkCPTDisplaysCssJsScripts {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {
		add_action('wp_enqueue_scripts', array($this, '_include_sherk_cpt_css_js'));		
	}



	/**
	 * include_sherk_cptdisplays_css_js function.
	 *
	 * @access public
	 * @return void
	 */
	public function _include_sherk_cpt_css_js() {
		
		wp_register_style('sherk-cpt-styles', SherkCPTDisplays::get_plugin_url().'assets/css/style.css', array(), '0.0', 'all' );
		wp_enqueue_style('sherk-cpt-styles');
		
	}

}

new SherkCPTDisplaysCssJsScripts();