<?php
/**
 * Muffin Builder | Items
 *
 * @package Betheme
 * @author Muffin group
 * @link https://muffingroup.com
 */

/**
 * PRINT functions
 * Print: items
 */

if (! function_exists('mfn_print_accordion')) {
	/**
	 * [accordion]
	 */
	function mfn_print_accordion($item)
	{
		echo sc_accordion($item['fields']);
	}
}

if (! function_exists('mfn_print_article_box')) {
	/**
	 * [article_box]
	 */
	function mfn_print_article_box($item)
	{
		echo sc_article_box($item['fields']);
	}
}

if (! function_exists('mfn_print_before_after')) {
	/**
	 * [before_after]
	 */
	function mfn_print_before_after($item)
	{
		echo sc_before_after($item['fields']);
	}
}

if (! function_exists('mfn_print_blockquote')) {
	/**
	 * [blockquote]
	 */
	function mfn_print_blockquote($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_blockquote($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_blog')) {
	/**
	 * [blog]
	 */
	function mfn_print_blog($item)
	{
		echo sc_blog($item['fields']);
	}
}

if (! function_exists('mfn_print_blog_news')) {
	/**
	 * [blog_news]
	 */
	function mfn_print_blog_news($item)
	{
		echo sc_blog_news($item['fields']);
	}
}

if (! function_exists('mfn_print_blog_slider')) {
	/**
	 * [blog_slider]
	 */
	function mfn_print_blog_slider($item)
	{
		echo sc_blog_slider($item['fields']);
	}
}

if (! function_exists('mfn_print_blog_teaser')) {
	/**
	 * [blog_teaser]
	 */
	function mfn_print_blog_teaser($item)
	{
		echo sc_blog_teaser($item['fields']);
	}
}

if (! function_exists('mfn_print_button')) {
	/**
	 * [button]
	 */
	function mfn_print_button($item)
	{
		echo sc_button($item['fields']);
	}
}

if (! function_exists('mfn_print_call_to_action')) {
	/**
	 * [call_to_action]
	 */
	function mfn_print_call_to_action($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_call_to_action($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_chart')) {
	/**
	 * [chart]
	 */
	function mfn_print_chart($item)
	{
		echo sc_chart($item['fields']);
	}
}

if (! function_exists('mfn_print_clients')) {
	/**
	 * [clients]
	 */
	function mfn_print_clients($item)
	{
		echo sc_clients($item['fields']);
	}
}

if (! function_exists('mfn_print_clients_slider')) {
	/**
	 * [clients_slider]
	 */
	function mfn_print_clients_slider($item)
	{
		echo sc_clients_slider($item['fields']);
	}
}

if (! function_exists('mfn_print_code')) {
	/**
	 * [code]
	 */
	function mfn_print_code($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_code($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_column')) {
	/**
	 * [column]
	 */
	function mfn_print_column($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}

		$column_class = '';
		$column_attr 	= '';
		$style 				= '';

		// align

		if (key_exists('align', $item['fields']) && $item['fields']['align']) {
			$column_class	.= ' align_'. $item['fields']['align'];
		}
		if (! empty($item['fields']['align-mobile'])) {
			$column_class	.= ' mobile_align_'. $item['fields']['align-mobile'];
		}

		// animate

		if (key_exists('animate', $item['fields']) && $item['fields']['animate']) {
			$column_class	.= ' animate';
			$column_attr	.= ' data-anim-type="'. $item['fields']['animate'] .'"';
		}

		// background

		if (key_exists('column_bg', $item['fields']) && $item['fields']['column_bg']) {
			$style .= ' background-color:'. $item['fields']['column_bg'] .';';
		}

		if (key_exists('bg_image', $item['fields']) && $item['fields']['bg_image']) {

			// background image

			$style .= ' background-image:url(\''. $item['fields']['bg_image'] .'\');';

			// background position

			if (key_exists('bg_position', $item['fields']) && $item['fields']['bg_position']) {
				$bg_pos = $item['fields']['bg_position'];

				if ($bg_pos) {
					$background_attr = explode(';', $bg_pos);
					$aBg[] = 'background-repeat:'. $background_attr[0];
					$aBg[] = 'background-position:'. $background_attr[1];
				}
				$background = implode('; ', $aBg);

				$style .= ' '. implode('; ', $aBg) .';';
			}

			// background size

			if (isset($item['fields']['bg_size']) && ($item['fields']['bg_size'] != 'auto')) {
				$column_class .= ' bg-'. $item['fields']['bg_size'];
			}
		}

		// padding

		if (key_exists('padding', $item['fields']) && $item['fields']['padding']) {
			$style .= ' padding:'. $item['fields']['padding'] .';';
		}

		// custom | style

		if (key_exists('style', $item['fields']) && $item['fields']['style']) {
			$style .= ' '. $item['fields']['style'];
		}

		echo '<div class="column_attr clearfix'. $column_class .'" '. $column_attr .' style="'. $style .'">';
			echo do_shortcode($item['fields']['content']);
		echo '</div>';
	}
}

if (! function_exists('mfn_print_contact_box')) {
	/**
	 * [contact_box]
	 */
	function mfn_print_contact_box($item)
	{
		echo sc_contact_box($item['fields']);
	}
}

if (! function_exists('mfn_print_content')) {
	/**
	 * [content]
	 */
	function mfn_print_content($item)
	{
		echo '<div class="the_content">';
			echo '<div class="the_content_wrapper">';
				the_content();
			echo '</div>';
		echo '</div>';
	}
}

if (! function_exists('mfn_print_countdown')) {
	/**
	 * [countdown]
	 */
	function mfn_print_countdown($item)
	{
		echo sc_countdown($item['fields']);
	}
}

if (! function_exists('mfn_print_counter')) {
	/**
	 * [counter]
	 */
	function mfn_print_counter($item)
	{
		echo sc_counter($item['fields']);
	}
}

if (! function_exists('mfn_print_divider')) {
	/**
	 * [divider]
	 */
	function mfn_print_divider($item)
	{
		echo sc_divider($item['fields']);
	}
}

if (! function_exists('mfn_print_fancy_divider')) {
	/**
	 * [fancy_divider]
	 */
	function mfn_print_fancy_divider($item)
	{
		echo sc_fancy_divider($item['fields']);
	}
}

if (! function_exists('mfn_print_fancy_heading')) {
	/**
	 * [fancy_heading]
	 */
	function mfn_print_fancy_heading($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_fancy_heading($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_faq')) {
	/**
	 * [faq]
	 */
	function mfn_print_faq($item)
	{
		echo sc_faq($item['fields']);
	}
}

if (! function_exists('mfn_print_feature_box')) {
	/**
	 * [feature_box]
	 */
	function mfn_print_feature_box($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_feature_box($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_feature_list')) {
	/**
	 * [feature_list]
	 */
	function mfn_print_feature_list($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_feature_list($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_flat_box')) {
	/**
	 * [flat_box]
	 */
	function mfn_print_flat_box($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_flat_box($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_helper')) {
	/**
	 * [helper]
	 */
	function mfn_print_helper($item)
	{
		echo sc_helper($item['fields']);
	}
}

if (! function_exists('mfn_print_hover_box')) {
	/**
	 * [hover_box]
	 */
	function mfn_print_hover_box($item)
	{
		echo sc_hover_box($item['fields']);
	}
}

if (! function_exists('mfn_print_hover_color')) {
	/**
	 * [hover_color]
	 */
	function mfn_print_hover_color($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_hover_color($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_how_it_works')) {
	/**
	 * [how_it_works]
	 */
	function mfn_print_how_it_works($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_how_it_works($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_icon_box')) {
	/**
	 * [icon_box]
	 */
	function mfn_print_icon_box($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_icon_box($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_image')) {
	/**
	 * [image]
	 */
	function mfn_print_image($item)
	{
		echo sc_image($item['fields']);
	}
}

if (! function_exists('mfn_print_image_gallery')) {
	/**
	 * [image]
	 */
	function mfn_print_image_gallery($item)
	{
		$item[ 'fields' ][ 'link' ] = 'file';
		echo sc_gallery($item['fields']);
	}
}

if (! function_exists('mfn_print_info_box')) {
	/**
	 * [info_box]
	 */
	function mfn_print_info_box($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_info_box($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_list')) {
	/**
	 * [list]
	 */
	function mfn_print_list($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_list($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_map_basic')) {
	/**
	 * [map_basic]
	 */
	function mfn_print_map_basic($item)
	{
		echo sc_map_basic($item['fields']);
	}
}

if (! function_exists('mfn_print_map')) {
	/**
	 * [map]
	 */
	function mfn_print_map($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_map($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_offer')) {
	/**
	 * [offer]
	 */
	function mfn_print_offer($item)
	{
		echo sc_offer($item['fields']);
	}
}

if (! function_exists('mfn_print_offer_thumb')) {
	/**
	 * [offer_thumb]
	 */
	function mfn_print_offer_thumb($item)
	{
		echo sc_offer_thumb($item['fields']);
	}
}

if (! function_exists('mfn_print_opening_hours')) {
	/**
	 * [opening_hours]
	 */
	function mfn_print_opening_hours($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_opening_hours($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_our_team')) {
	/**
	 * [our_team]
	 */
	function mfn_print_our_team($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_our_team($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_our_team_list')) {
	/**
	 * [our_team_list]
	 */
	function mfn_print_our_team_list($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_our_team_list($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_photo_box')) {
	/**
	 * [photo_box]
	 */
	function mfn_print_photo_box($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_photo_box($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_placeholder')) {
	/**
	 * [placeholder]
	 */
	function mfn_print_placeholder($item)
	{
		echo '<div class="placeholder">&nbsp;</div>';
	}
}

if (! function_exists('mfn_print_portfolio')) {
	/**
	 * [portfolio]
	 */
	function mfn_print_portfolio($item)
	{
		echo sc_portfolio($item['fields']);
	}
}

if (! function_exists('mfn_print_portfolio_grid')) {
	/**
	 * [portfolio_grid]
	 */
	function mfn_print_portfolio_grid($item)
	{
		echo sc_portfolio_grid($item['fields']);
	}
}

if (! function_exists('mfn_print_portfolio_photo')) {
	/**
	 * [portfolio_photo]
	 */
	function mfn_print_portfolio_photo($item)
	{
		echo sc_portfolio_photo($item['fields']);
	}
}

if (! function_exists('mfn_print_portfolio_slider')) {
	/**
	 * [portfolio_slider]
	 */
	function mfn_print_portfolio_slider($item)
	{
		echo sc_portfolio_slider($item['fields']);
	}
}

if (! function_exists('mfn_print_pricing_item')) {
	/**
	 * [pricing_item]
	 */
	function mfn_print_pricing_item($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_pricing_item($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_progress_bars')) {
	/**
	 * [progress_bars]
	 */
	function mfn_print_progress_bars($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_progress_bars($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_promo_box')) {
	/**
	 * [promo_box]
	 */
	function mfn_print_promo_box($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_promo_box($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_quick_fact')) {
	/**
	 * [quick_fact]
	 */
	function mfn_print_quick_fact($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_quick_fact($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_shop_slider')) {
	/**
	 * [shop_slider]
	 */
	function mfn_print_shop_slider($item)
	{
		echo sc_shop_slider($item['fields']);
	}
}

if (! function_exists('mfn_print_sidebar_widget')) {
	/**
	 * [sidebar_widget]
	 */
	function mfn_print_sidebar_widget($item)
	{
		echo sc_sidebar_widget($item['fields']);
	}
}

if (! function_exists('mfn_print_slider')) {
	/**
	 * [slider]
	 */
	function mfn_print_slider($item)
	{
		echo sc_slider($item['fields']);
	}
}

if (! function_exists('mfn_print_slider_plugin')) {
	/**
	 * [slider_plugin]
	 */
	function mfn_print_slider_plugin($item)
	{
		echo sc_slider_plugin($item['fields']);
	}
}

if (! function_exists('mfn_print_sliding_box')) {
	/**
	 * [sliding_box]
	 */
	function mfn_print_sliding_box($item)
	{
		echo sc_sliding_box($item['fields']);
	}
}

if (! function_exists('mfn_print_story_box')) {
	/**
	 * [story_box]
	 */
	function mfn_print_story_box($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_story_box($item['fields'], $item['fields']['content']);
	}
}

if (! function_exists('mfn_print_tabs')) {
	/**
	 * [tabs]
	 */
	function mfn_print_tabs($item)
	{
		echo sc_tabs($item['fields']);
	}
}

if (! function_exists('mfn_print_testimonials')) {
	/**
	 * [testimonials]
	 */
	function mfn_print_testimonials($item)
	{
		echo sc_testimonials($item['fields']);
	}
}

if (! function_exists('mfn_print_testimonials_list')) {
	/**
	 * [testimonials_list]
	 */
	function mfn_print_testimonials_list($item)
	{
		echo sc_testimonials_list($item['fields']);
	}
}

if (! function_exists('mfn_print_timeline')) {
	/**
	 * [timeline]
	 */
	function mfn_print_timeline($item)
	{
		echo sc_timeline($item['fields']);
	}
}

if (! function_exists('mfn_print_trailer_box')) {
	/**
	 * [trailer_box]
	 */
	function mfn_print_trailer_box($item)
	{
		echo sc_trailer_box($item['fields']);
	}
}

if (! function_exists('mfn_print_video')) {
	/**
	 * [video]
	 */
	function mfn_print_video($item)
	{
		echo sc_video($item['fields']);
	}
}

if (! function_exists('mfn_print_visual')) {
	/**
	 * [visual]
	 */
	function mfn_print_visual($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo do_shortcode($item['fields']['content']);
	}
}

if (! function_exists('mfn_print_zoom_box')) {
	/**
	 * [zoom_box]
	 */
	function mfn_print_zoom_box($item)
	{
		if (! key_exists('content', $item['fields'])) {
			$item['fields']['content'] = '';
		}
		echo sc_zoom_box($item['fields'], $item['fields']['content']);
	}
}
