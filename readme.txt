=== Plugin Name ===
Contributors: mark8barnes
Donate link: http://www.4-14.org.uk/wordpress-plugins/donate
Tags: events, calendar, list
Requires at least: 2.5
Tested up to: 2.7.1
Stable tag: trunk

Output a simple list of future events. Each event must have it's own post or page.

== Description ==

This is a very simple event plugin. Some websites that use Wordpress as a CMS display information about future events. But keeping the list of events current is a pain. So this plugin simple displays a list of all future events.

To be listed, an event must have its own post or page. To tell the plugin that the page is an event, you add a custom field (if you can't see custom fields and you're using Wordpress 2.7+, you may need to add it by selecting screen options). Add a custom field with the name event_date and the value YYYY-MM-DD (e.g. 2009-02-03 for 3rd February 2009). Then save the page.

To ouput the list of events add the text [events_list] to any post or page. You can see a demo at the [Evangelical Movement of Wales](http://www.emw.org.uk/events/en/).

As I said, it's very simple. There are no options to tweak, no settings to change. But if it's what you need, you won't want to change anything!
== Installation ==

1. Download the plugin, and unzip it.
2. Place the simple-events-list folder in your wp-content/plugins folder and upload it to your website.
3. Activate the plugin from the plugins tab of your Wordpress admin.
4. Create a Wordpress post or page with the text [events_list]. The plugin will display your events on this page.

== Screenshots ==

1. **Adding the custom field:**
