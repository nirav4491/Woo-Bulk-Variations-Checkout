<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/nirav4491/
 * @since      1.0.0
 *
 * @package    Woo_Bulk_Variations_Checkout
 * @subpackage Woo_Bulk_Variations_Checkout/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woo_Bulk_Variations_Checkout
 * @subpackage Woo_Bulk_Variations_Checkout/includes
 * @author     Nirav Mehta <nirmehta4491@gmail.com>
 */
class Woo_Bulk_Variations_Checkout_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woo-bulk-variations-checkout',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
