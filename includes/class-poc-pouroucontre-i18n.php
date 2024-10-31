<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.poc-pour-ou-contre.fr
 * @since      1.0.0
 *
 * @package    Poc_Pouroucontre
 * @subpackage Poc_Pouroucontre/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Poc_Pouroucontre
 * @subpackage Poc_Pouroucontre/includes
 * @author     POC <contact@poc-pour-ou-contre.fr>
 */
class Poc_Pouroucontre_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'poc-pouroucontre',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
