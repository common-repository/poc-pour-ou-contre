<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.poc-pour-ou-contre.fr
 * @since      1.0.0
 *
 * @package    Poc_Pouroucontre
 * @subpackage Poc_Pouroucontre/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Poc_Pouroucontre
 * @subpackage Poc_Pouroucontre/public
 * @author     POC <contact@poc-pour-ou-contre.fr>
 */
class Poc_Pouroucontre_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Poc_Pouroucontre_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Poc_Pouroucontre_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Poc_Pouroucontre_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Poc_Pouroucontre_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		 $options = get_option( 'poc_settings' );
		 wp_enqueue_script('poc-pouroucontre', '//pouroucontre-widget.firebaseapp.com/poc.js', array(), $this->version, true);
		 wp_add_inline_script( 'poc-pouroucontre', 'POC.default.init(["'.$options['poc_key'].'"]);POC.default.injectInterface();' );
	}

}
