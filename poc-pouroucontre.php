<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.poc-pour-ou-contre.fr
 * @since             1.0.0
 * @package           Poc_Pouroucontre
 *
 * @wordpress-plugin
 * Plugin Name:       POC - Pour ou contre
 * Plugin URI:        http://www.poc-pour-ou-contre.fr
 * Description:       Service de débat en ligne POC - Pour ou Contre.
 * Version:           1.0.0
 * Author:            POC
 * Author URI:        https://www.owlie.xyz
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       poc-pouroucontre
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'POC_POUROUCONTRE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-poc-pouroucontre-activator.php
 */
function activate_poc_pouroucontre() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-poc-pouroucontre-activator.php';
	Poc_Pouroucontre_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-poc-pouroucontre-deactivator.php
 */
function deactivate_poc_pouroucontre() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-poc-pouroucontre-deactivator.php';
	Poc_Pouroucontre_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_poc_pouroucontre' );
register_deactivation_hook( __FILE__, 'deactivate_poc_pouroucontre' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-poc-pouroucontre.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_poc_pouroucontre() {

	$plugin = new Poc_Pouroucontre();
	$plugin->run();

}
run_poc_pouroucontre();
