<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.poc-pour-ou-contre.fr
 * @since      1.0.0
 *
 * @package    Poc_Pouroucontre
 * @subpackage Poc_Pouroucontre/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Poc_Pouroucontre
 * @subpackage Poc_Pouroucontre/admin
 * @author     POC <contact@poc-pour-ou-contre.fr>
 */
class Poc_Pouroucontre_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_action('admin_menu','poc_plugin_setup_menu');
		add_action( 'admin_init', 'poc_settings_init' );

	}

	/**
	 * Register the stylesheets for the admin area.
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

		// wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/poc-pouroucontre-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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
	}
}

function poc_plugin_setup_menu(){
	    add_menu_page('POC - Pour ou contre', 'POC - Pour ou contre', 'manage_options', 'poc-pouroucontre', 'init_admin_panel' );
	}

	function init_admin_panel(){
		?>
		<form action='options.php' method='post'>
			<h2>POC - Pour ou Contre - Paramètres</h2>

			<?php
			settings_fields( 'pluginPage' );
			do_settings_sections( 'pluginPage' );
			submit_button();
			?>

		</form>
		<?php
	}

	function poc_settings_init() {
		register_setting( 'pluginPage', 'poc_settings' );
		add_settings_section(
			'poc_pluginPage_section', 
			__( 'Paramètres du plugin', 'poc' ), 
			'poc_settings_section_callback', 
			'pluginPage'
		);
		add_settings_field( 
			'poc_key', 
			__( 'Clé POC', 'poc' ), 
			'poc_text_field_0_render', 
			'pluginPage', 
			'poc_pluginPage_section' 
		);
	}

	function poc_text_field_0_render(  ) { 
		$options = get_option( 'poc_settings' );
		?>
		<input type='text' name='poc_settings[poc_key]' value='<?php echo $options['poc_key']; ?>'>
		<?php
	}

	function poc_settings_section_callback(  ) { 
		echo __( 'This section description', 'poc' );
	}
