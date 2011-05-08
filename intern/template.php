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
  $vars['sidebar'] = sidebar_helper();
}

function sidebar_helper() {
  $_items = array(
      'links' => array(
          array(
              'title' => '订阅 RSS',
              'href'  => 'rss.xml',
              'attributes' => array(
                  'class' => 'feed-icon'
              )
          ),
          array(
              'title' => '腾讯微博',
              'href'  => 'http://t.qq.com/iforeach',
              'attributes' => array(
                  'class' => 'qq',
                  'target'=> '_blank'
              )
          ),
          array(
              'title' => '新浪微博',
              'href'  => 'http://weibo.com/2123827361',
              'attributes' => array(
                  'class' => 'sina',
                  'target'=> '_blank'
              )
          )
      )
  );
  return theme('links', $_items);
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

