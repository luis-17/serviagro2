<?php
/**
 * Filter View Template
 * This contains the hooks to generate a filter sidebar.
 *
 * Override this template in your own theme by creating a file at:
 *
 *     [your-theme]/tribe-events/filter-bar/filter-view-vertical.php
 *
 * @package TribeEventsCalendar
 * @since  1.0
 * @author Modern Tribe Inc.
 * @version 4.3.4
 *
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) { die( '-1' ); } ?>

<?php do_action( 'tribe_events_filter_view_before_template' ); ?>

	<div id="tribe_events_filters_wrapper" class="tribe-events-filters-vertical tribe-clearfix">
		<?php do_action( 'tribe_events_filter_view_before_filters' ); ?>
		<div id="tribe_events_filter_control">
			<a id="tribe_events_filters_toggle" class="tribe_events_filters_close_filters" href="#" data-state="<?php esc_attr_e( 'Show Advanced Filters', 'tribe-events-filter-view' ); ?>"><?php esc_html_e( 'Collapse Filters', 'tribe-events-filter-view' ); ?></a>
			<a id="tribe_events_filters_toggle" class="tribe_events_filters_show_filters" href="#" ><?php esc_html_e( 'Show Filters', 'tribe-events-filter-view' ); ?></a>
		</div>
		<div class="tribe-events-filters-content tribe-clearfix">
			<label class="tribe-events-filters-label"><?php esc_html_e(  'Narrow Your Results', 'tribe-events-filter-view' ); ?></label>

			<form id="tribe_events_filters_form" method="post" action="">

				<?php do_action( 'tribe_events_filter_view_do_display_filters' ); ?>

				<input type="submit" value="<?php esc_attr_e( 'Submit', 'tribe-events-filter-view' ) ?>" />

				<a id="tribe_events_filters_reset" href="#"><?php esc_html_e( 'Reset Filters', 'tribe-events-filter-view' ); ?></a>
			</form>
			<div id="tribe_events_filter_control" class="tribe-events-filters-mobile-controls tribe-clearfix">
				<a id="tribe_events_filters_toggle" class="tribe_events_filters_close_filters" href="#" ><?php esc_html_e( 'Collapse Filters', 'tribe-events-filter-view' ); ?></a>
				<a id="tribe_events_filters_reset" href="#"><?php esc_html_e( 'Reset Filters', 'tribe-events-filter-view' ); ?></a>
			</div>
		</div>

		<?php do_action( 'tribe_events_filter_view_after_filters' ); ?>

	</div>

<?php
do_action( 'tribe_events_filter_view_after_template' );