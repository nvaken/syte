<?php
require('include/detectmobilebrowsers.php');

function nielsvanaken_preprocess_html(&$vars) {

	$vars['inclpath'] = base_path() . drupal_get_path('theme', variable_get('theme_default', NULL));
	$vars['is_mobile'] = detect_mobile_browser();

	// Doesn't play nice with other IE-only includes...
	// drupal_add_css(path_to_theme() . '/css/fix-ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE), 'preprocess' => TRUE));

	$vars['classes_array'] = array();
	if ($vars['is_front']) { $vars['classes_array'][] = 'front'; }
	if ($vars['is_mobile']) { $vars['classes_array'][] = 'mobile'; }

}


function nielsvanaken_preprocess(&$vars) {

	$vars['inclpath'] = base_path() . drupal_get_path('theme', variable_get('theme_default', NULL));
	$vars['is_mobile'] = detect_mobile_browser();

}

function nielsvanaken_preprocess_page(&$vars) {
	/* */
}

function nielsvanaken_form_comment_form_alter(&$form, &$form_state, &$form_id) {
    $form['comment_body']['#after_build'][] = 'configure_comment_form';
}
function configure_comment_form(&$form) {
    unset($form[LANGUAGE_NONE][0]['format']);
    return $form;
}

function nielsvanaken_css_alter(&$css) {

	/*foreach ($css as $key => $value) {
		if ($value['group'] != CSS_THEME && $value['group'] != CSS_DEFAULT) {
			$exclude[$key] = FALSE;
		}
	}
	$css = array_diff_key($css, $exclude);
	*/
	if (isset($css['modules/contextual/contextual.css'])) $contextual = $css['modules/contextual/contextual.css'];
    $exclude = array();
	foreach ($css as $key => $value) {
		if ($value['group'] != CSS_THEME && $value['group'] != CSS_DEFAULT) {
			$exclude[$key] = FALSE;
		}
	}
	$css = array_diff_key($css, $exclude);
	if (isset($contextual)) $css['modules/contextual/contextual.css'] = $contextual;
}


function nielsvanaken_preprocess_node(&$vars) {
    $node = $vars['node'];
    $vars['date'] = format_date($node->created, 'custom', 'M jS, Y');
    $vars['time_ago'] = format_date($node->created, 'custom', 'c'); // 'c' is the ISO 8601 date format. Since PHP 5

	$vars['inclpath'] = base_path() . drupal_get_path('theme', variable_get('theme_default', NULL));
	$vars['is_mobile'] = detect_mobile_browser();

}
?>
