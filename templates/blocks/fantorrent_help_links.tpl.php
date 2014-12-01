<?php
/**
 * fantorrent_help_links.tpl.php
 * Outputs the help links.
 */
?>
<?php  
global $base_url;
$client_url = ltrim($base_url,"https://www.");
?>
<ul id="user-bar-search-block">
    <li id="user-bar-search-item"><?php print l(t('Search'), 'search', array('attributes' => array('class' => array('search-button'), 'alt' => 'Search', 'title' => 'Search'))); ?></li>
    <li id="user-bar-faq-item"><?php print l(t('FAQ'), 'http://help.masterchannel.com', array('attributes' => array('class' => array('faq-button'), 'target' => '_desk', 'alt' => 'Frequently Asked Questions', 'title' => 'Frequently Asked Questions'))); ?></li>
    <li id="user-bar-contact-item"><?php print l(t('Contact Us'), 'http://help.masterchannel.com/customer/portal/emails/new?ticket[custom_client]='.$client_url, array('attributes' => array('class' => array('contact-button'), 'target' => '_desk', 'alt' => 'Contact Us', 'title' => 'Contact Us'))); ?></li>
</ul>