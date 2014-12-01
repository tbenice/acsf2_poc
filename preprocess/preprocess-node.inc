<?php
/**
 * @file
 * Theme preprocess code for nodes.
 */

/**
 * Implements hook_alpha_preprocess_node.
 *
 * Currently used only if needed to override default Fantorrent byline.
 * (this file can be deleted from your theme if you don't need to do this).
 *
 * @param array $vars
 *
 * Key Variables:
 * - $vars['content'] - All incoming (preprocessed) content variables
 *   available for modifying.
 *
 * - $vars['content']['author_display_name'] - The author's full name as displayed in their profile
 * - $vars['content']['posted_date'] - The post created date in Month Day, Year
 * - $vars['content']['posted_date_ago'] - The post created days ago
 * - $vars['content']['submitted'] - The optional byline--incorporating Author and Created Date--
 *   that appears in nodes if the Display settings option is checked in the Content Type definition.
 *
 */

function imaginedragonsmusic_alpha_preprocess_node(&$vars) {
//  dsm($vars['content'], 'Content IN');
  $node = $vars['node'];

  // Display post information only on certain node types.
  if (variable_get('node_submitted_' . $node->type, TRUE)) {
    $vars['display_submitted'] = TRUE;

    // uncomment following line for simple date submitted
    $vars['content']['submitted'] = t('!datetime', array('!datetime' => render($vars['content']['posted_date'])));

    // uncomment following line for full "posted by" byline, featuring author name and date.
    //$vars['content']['submitted'] = t('posted by !username &nbsp;on !datetime', array('!username' => render($vars['content']['author_display_name']), '!datetime' => render($vars['content']['posted_date'])));

    // uncomment following line for abbreviated byline, featuring only submitted date.
    //$vars['content']['submitted'] = t('posted on !datetime', array('!datetime' => render($vars['content']['posted_date'])));

    // uncomment following line for abbreviated byline, featuring only author name.
    //$vars['content']['submitted'] = t('posted by !username', array('!username' => render($vars['content']['author_display_name'])));

    if ($vars['teaser']) {

    // uncomment following line for simple date submitted
    $vars['content']['submitted'] = t('!datetime', array('!datetime' => render($vars['content']['posted_date'])));

      // uncomment following line for days ago
      //$vars['content']['submitted'] = t('!datetime', array('!datetime' => render($vars['content']['posted_date_ago'])));

      // uncomment following line for author - date submitted
      //$vars['content']['submitted'] = t('!username &nbsp;-&nbsp; !datetime', array('!username' => render($vars['content']['author_display_name']), '!datetime' => render($vars['content']['posted_date'])));

      // uncomment following line for author - days ago
     //$vars['content']['submitted'] = t('!username &nbsp;-&nbsp; !datetime', array('!username' => render($vars['content']['author_display_name']), '!datetime' => render($vars['content']['posted_date_ago'])));
    }
  }
  else {
    $vars['display_submitted'] = FALSE;
    $vars['content']['submitted'] = '';
  }
//  dsm($vars['content'], 'Content OUT');
}

