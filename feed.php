<?php
/**
 * Short description for feed.php
 *
 * @package feed
 * @author kevin <kevin@kevin-ScrapboxOmega>
 * @version 0.1
 * @copyright (C) 2023 kevin <kevin@kevin-ScrapboxOmega>
 * @license MIT
 */
$rss_feed_url = 'https://floodedrealms.substack.com/feed';
$rss_feed = simplexml_load_file($rss_feed_url);

$latest_item = $rss_feed->channel->item[0];
$title = $latest_item->title;
$link = $latest_item->link;
?>
