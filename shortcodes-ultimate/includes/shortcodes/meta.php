<?php

su_add_shortcode(
	array(
		'id' => 'meta',
		'callback' => 'su_shortcode_meta',
		'image' => su_get_plugin_url() . 'admin/images/shortcodes/meta.svg',
		'name' => __('Meta data', 'shortcodes-ultimate'),
		'type' => 'single',
		'group' => 'data',
		'atts' => array(
			'key' => array(
				'default' => '',
				'name' => __('Key', 'shortcodes-ultimate'),
				'desc' => __('Meta key name', 'shortcodes-ultimate'),
			),
			'default' => array(
				'default' => '',
				'name' => __('Default', 'shortcodes-ultimate'),
				'desc' => __('This text will be shown if data is not found', 'shortcodes-ultimate'),
			),
			'before' => array(
				'default' => '',
				'name' => __('Before', 'shortcodes-ultimate'),
				'desc' => __('This content will be shown before the value', 'shortcodes-ultimate'),
			),
			'after' => array(
				'default' => '',
				'name' => __('After', 'shortcodes-ultimate'),
				'desc' => __('This content will be shown after the value', 'shortcodes-ultimate'),
			),
			'post_id' => array(
				'default' => '',
				'name' => __('Post ID', 'shortcodes-ultimate'),
				'desc' => __('You can specify custom post ID. Leave this field empty to use an ID of the current post. Current post ID may not work in Live Preview mode', 'shortcodes-ultimate'),
			),
			'filter' => array(
				'default' => '',
				'name' => __('Filter', 'shortcodes-ultimate'),
				'desc' => __('You can apply custom filter to the retrieved value. Enter here function name. Your function must accept one argument and return modified value. Name of your function must include word <b>filter</b>. Example function: ', 'shortcodes-ultimate') . "<br /><pre><code style='display:block;padding:5px'>function my_custom_filter( \$value ) {\n\treturn 'Value is: ' . \$value;\n}</code></pre>",
			),
		),
		'desc' => __('Post meta', 'shortcodes-ultimate'),
		'icon' => 'info-circle',
	)
);

function su_shortcode_meta($atts = null, $content = null)
{
	$atts = shortcode_atts(
		array(
			'key' => '',
			'default' => '',
			'before' => '',
			'after' => '',
			'post_id' => '',
			'filter' => '',
		),
		$atts,
		'meta'
	);

	$allowed_keys = apply_filters('su/shortcode/meta/allowed_keys', []);
	$key_allowed = in_array($atts['key'], $allowed_keys, true);

	if (!$key_allowed && !su_is_unsafe_features_enabled()) {

		return su_error_message(
			'Meta',
			sprintf(
				'%s.<br><a href="https://getshortcodes.com/docs/unsafe-features/" target="_blank">%s</a>',
				__('This shortcode cannot be used while <b>Unsafe features</b> option is turned off', 'shortcodes-ultimate'),
				__('Learn more', 'shortcodes-ultimate')
			)
		);

	}

	if (!$atts['post_id']) {
		$atts['post_id'] = get_the_ID();
	}

	if (!is_numeric($atts['post_id']) || $atts['post_id'] < 1) {
		return sprintf('<p class="su-error">Meta: %s</p>', __('post ID is incorrect', 'shortcodes-ultimate'));
	}

	if (!$atts['key']) {
		return sprintf('<p class="su-error">Meta: %s</p>', __('please specify meta key name', 'shortcodes-ultimate'));
	}

	$meta = get_post_meta($atts['post_id'], $atts['key'], true);

	if (!$meta) {
		$meta = $atts['default'];
	}

	$meta = su_safely_apply_user_filter($atts['filter'], $meta);

	return $meta ? wp_kses_post($atts['before'] . $meta . $atts['after']) : '';
}
