<?php
/**
 * All the functions are in the PHP pages in the `inc/` folder.
 */

show_admin_bar(false);

require_once locate_template('/inc/helpers.php');
require_once locate_template('/inc/admin.php');
require_once locate_template('/inc/login.php');
require_once locate_template('/inc/customizer.php');

require_once locate_template('/inc/breadcrumbs.php');
require_once locate_template('/inc/cleanup.php');
require_once locate_template('/inc/custom-logo.php');
require_once locate_template('/inc/setup.php');
require_once locate_template('/inc/enqueues.php');
require_once locate_template('/inc/navbar.php');
require_once locate_template('/inc/widgets.php');
require_once locate_template('/inc/index-pagination.php');
require_once locate_template('/inc/split-post-pagination.php');
require_once locate_template('/inc/feedback.php');
require_once locate_template('/inc/shortcodes.php');
require_once locate_template('/inc/post_type/reviews.php');
require_once locate_template('/inc/post_type/reviews-metabox.php');
require_once locate_template('/inc/post_type/post-metabox.php');
require_once locate_template('/inc/post_type/service-prices.php');

if ( ! function_exists('dump')) {
    /** Dump
     *
     * @param mixed $expression
     * @return void
     */
    function dump($expression)
    {
        echo '<pre>';
        var_dump($expression);
        echo '</pre>';
    }
}

if ( ! function_exists( 'ot_get_option' ) ) {

	/**
	 * Get Option.
	 *
	 * Helper function to return the option value.
	 * If no value has been saved, it returns $default.
	 *
	 * @param  string $option_id The option ID.
	 * @param  string $default   The default option value.
	 * @return mixed
	 *
	 * @access public
	 * @since  2.0
	 */
	function ot_get_option( $option_id, $default = '' ) {

		// Get the saved options.
		$options = get_option( ot_options_id() );

		// Look for the saved value.
		if ( isset( $options[ $option_id ] ) && '' !== $options[ $option_id ] ) {

			return ot_wpml_filter( $options, $option_id );

		}

		return $default;

	}
}

if (function_exists('pll_register_string') && function_exists('ot_get_option')) {
    function bw_pll_register_string()
    {
        $background = ot_get_option('hero_background');
        $string = isset($background['background-image']) ? $background['background-image'] : 'hero_background_url';
        pll_register_string('Hero Background', $string, 'Option Three');

        // Callback
        pll_register_string('Callback title', ot_get_option('callback_title'), 'Option Three');
        pll_register_string('Callback desc', ot_get_option('callback_desc'), 'Option Three');
        pll_register_string('Callback form', ot_get_option('callback_form'), 'Option Three');
    }

    add_action('after_setup_theme', 'bw_pll_register_string');
}

add_action('after_setup_theme', function () {
	pll_register_string( 'skype', 'Skype', 'Messengers' );
	pll_register_string( 'social-youtube', 'YouTube', 'Social' );
	pll_register_string( 'social-facebook', 'Facebook', 'Social' );
	pll_register_string( 'social-vk', 'Vk', 'Social' );
	pll_register_string( 'social-odnoklassniki', 'Odnoklassniki', 'Social' );
	pll_register_string( 'social-twitter', 'Twitter', 'Social' );
	pll_register_string( 'social-linkedin', 'Linkedin', 'Social' );
	pll_register_string( 'social-instagram', 'Instagram', 'Social' );
	pll_register_string( 'social-google-plus', 'Google Plus', 'Social' );
});
