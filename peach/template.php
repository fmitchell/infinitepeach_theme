<?php
/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
function peach_preprocess_html(&$variables, $hook) {
	if (drupal_is_front_page()) {
  	$variables['classes_array'][] = 'home';
	}
}

/*
 * Implementation of hook_preprocess_node()
 *
 *
function peach_preprocess_node(&$vars) {
  unset($vars['content']['field_page_rightsidebar']);
}

/*
 * Implementation of hook_preprocess_block()
 *
 *
function peach_preprocess_page(&$vars, $hook) {
  $node = menu_get_object('node');
  if ($node->type == 'page') {
    node_build_content($node);
    $block = $node->content['field_page_rightsidebar'];
    $vars['page']['events_sidebar'] = $vars['page']['events_sidebar'] + array($block);
  }
}

function peach_menu_tree__main_menu(&$variables) {
	if (strpos($variables['tree'], 'Home')) {
		return '<ul id="top_nav">' . $variables['tree'] . '</ul>';
	}
	else {
		return '<ul>' . $variables['tree'] . '</ul>';
	}
}

function peach_menu_link__main_menu(&$variables) {
	$element = $variables['element'];
  $sub_menu = '';

	$leaf = array('leaf', 'expanded');
	$element['#attributes']['class'] = array_diff($element['#attributes']['class'], $leaf);

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // STARTERKIT_preprocess_node_page() or STARTERKIT_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  $variables['classes_array'][] = 'count-' . $variables['block_id'];
}
// */
