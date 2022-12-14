<?php

/**
 * Summer Guides Post Type
 */

$context = Timber::get_context();
$post = Timber::get_post();

$path = '/summer-programs';
$context['lp_theme'] = get_field('lp_theme', get_page_by_path($path)->ID);

$context['post'] = $post;

$context['archive_link'] = get_post_type_archive_link('summer-guide');
$context['domain'] = 'GUNY-Seasonal';
$context['eventslink'] = get_post_type_archive_link('tribe_events');

// in-body alert under banner
$landing_page = get_page_by_path('summer');
$context['program_page_alert'] = get_field('banner_content', get_field('banner_alert_message', $landing_page->ID));

$template = 'summer-guide/single.twig';

Timber::render($template, $context);
