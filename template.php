<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

/**
 * theme function adds a popup share link + whatever else
 * to a piece of content
 * just have to add fb_preview_fid get param to any page to
 * pull it into the fb preview for links on that page. It
 * requires some kind of preprocess...see fantorrent_basse_preprocess_html
 * for how this works...
 * @param array $vars
 *   required:
 *     ['value'] => the element to set with a share link and
 *     other stuff
 *     ['other'] => markup for other stuff to add to the share
 *     links area
 *     ['fid'] => the drupal fid of the image being shared
 *
 */
function imaginedragonsmusic_preprocess_community_join_sidebar_block(&$vars) {
  $vars['content']['join_link']['#path'] = 'join';
}
