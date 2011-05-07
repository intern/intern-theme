<?php
//
drupal_add_js(path_to_theme().'/script/cufon-yui.js');
drupal_add_js(path_to_theme().'/script/font.js');
drupal_add_js(path_to_theme().'/script/intern.js');

/**
 * Override or insert variables into the region template.
 */
function intern_preprocess_region(&$vars) {
  if ($vars['region'] == 'header') {
    $vars['classes_array'][] = 'w_600';
  }
}

/**
 * Override or insert variables into the page template.
 */
function intern_process_page(&$vars) {
  // Hook into color.module

}

/**
 * Override or insert variables into the node template.
 */
function intern_preprocess_node(&$vars) {
}

/**
 * Override or insert variables into the node template.
 */
function intern_preprocess_page(&$vars) {
  /*
  $vars['sidebar'] = <<<html
<a class="share facebook" target="_blank" href="http://www.facebook.com/fluidbyte">facebook</a>
<a class="share twitter" target="_blank" href="http://www.twitter.com/lan_chi">twitter</a>
<a class="share rss" target="_blank" href="http://www.iforeach,com/rss.xml">rss feed</a>
html;
   */
}

/**
 * Override or insert variables into the comment template.
 */
function intern_preprocess_comment(&$vars) {
  $vars['submitted'] = $vars['created'] . ' — ' . $vars['author'];
}

/**
 * Override or insert variables into the block template.
 */
function intern_preprocess_block(&$vars) {
  $vars['title_attributes_array']['class'][] = 'title';
  $vars['classes_array'][] = 'clearfix';
}

