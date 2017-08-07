<?php
/**
 * Map View Template
 * The wrapper template for map view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/map.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php do_action( 'tribe_events_before_template' ); ?>

<!-- Tribe Bar -->
<div class="row">
	<?php tribe_get_template_part( 'modules/bar' ); ?>
	<div class="tribe-clear"></div>
</div>


<!-- Main Events Content -->
<div class="col-xs-12">
	<?php //tribe_get_template_part( 'pro/map/content' ) ?>
</div>

<div class="tribe-clear"></div>

<?php
do_action( 'tribe_events_after_template' );
