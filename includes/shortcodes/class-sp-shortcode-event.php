<?php
/**
 * Event Shortcode
 *
 * @author 		ThemeBoy
 * @category 	Shortcodes
 * @package 	SportsPress/Shortcodes/Event
 * @version     0.7
 */
class SP_Shortcode_Event {

	/**
	 * Output the event shortcode.
	 *
	 * @param array $atts
	 */
	public static function output( $atts ) {

		if ( ! isset( $atts['id'] ) && isset( $atts[0] ) && is_numeric( $atts[0] ) )
			$atts['id'] = $atts[0];

		sp_get_template( 'event.php', $atts );
	}
}