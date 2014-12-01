<?php
/**
 * @file community-join-sidebar-block.tpl.php
 *   Template for a call to action to join the community.
 * 
 * Variables:
 * 
 * $content: array of content.
 * $content['join_link']: render array for a link to the
 * 	registration page.
 * $content['artist']: render array for the name of the 'artist'
 *   around whom this awesome community has grown. Awwww.
 * 
 */
?>

<div id="join-community-top">
  Are you in The Fans Perry?
</div>
<div id="join-community-middle">
  <span>Membership Includes:</span>
  <ul>
    <li>Community Access</li>
    <li>The Band Perry concert presales</li>  
    <li>Meet & Greet eligibility</li>
    <li>Exclusive The Fans Perry content</li>
    <li>Discounts in the online store</li>
  </ul>
</div>
<div id="join-community-bottom">
  <?php print render($content['join_link']); ?>
</div>