<?php
/*
Plugin Name: Simple Events List
Version: 0.1
Plugin URI: http://www.4-14.org.uk/wordpress-plugins/simple-events-list
Description: Output a simple list of future events.
Author: Mark Barnes
Author URI: http://www.4-14.org.uk/
*/

function emw_events_list($atts, $content=NULL) {
	global $wpdb;
	$today = date('Y-m-d', strtotime('now'));
	$events = $wpdb->get_results("SELECT posts.id, posts.post_title, meta.meta_value FROM {$wpdb->prefix}postmeta as meta INNER JOIN {$wpdb->prefix}posts as posts ON (meta.post_id = posts.id) WHERE (meta.meta_key = 'event_date' AND meta.meta_value >= '{$today}' AND posts.post_status='publish' and posts.post_date < NOW()) ORDER BY meta.meta_value");
	if(is_array($events)) {
		$output = "\t<ul class=\"events_list\">\n";
		foreach ($events as $event) {
			$event_link = get_permalink($event->id);
			$event_date = date(get_option('date_format'), strtotime($event->meta_value));
			$output .= "\t\t<li><a href=\"{$event_link}\">{$event->post_title}</a> ({$event_date})</li>\n";
		}
		$output .= "\t</ul>\n";
	}
	return $output;
}

add_shortcode('events_list', 'emw_events_list');
?>