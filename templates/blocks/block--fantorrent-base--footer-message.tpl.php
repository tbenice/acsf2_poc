<?php global $base_url;
$client_url = ltrim($base_url,"https://www.");
?>
<?php $tag = $block->subject ? 'section' : 'div'; ?>
<<?php print $tag; ?><?php print $attributes; ?>>
  <div class="block-inner clearfix">
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h2<?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    
    <div<?php print $content_attributes; ?>>
		<div class="privacy-footer">

	        <?php print l(t('Privacy'), 'legal', array('fragment' => 'privacy-policy', 'attributes' => array('class' => array('link-privacy'), 'alt' => 'Privacy Policy', 'title' => 'Privacy Policy'))); ?>
	        <?php print l(t('Terms & Conditions'), 'legal', array('attributes' => array('class' => array('link-legal'), 'alt' => 'Terms and Conditions', 'title' => 'Terms and Conditions'))); ?>
			<?php print l(t('FAQ'), 'http://help.masterchannel.com', array('attributes' => array('class' => array('link-faq'), 'target' => '_desk', 'alt' => 'Frequently Asked Questions', 'title' => 'Frequently Asked Questions'))); ?>
			<?php print l(t('Contact Us'), 'contact', array('attributes' => array('class' => array('link-content'),  'alt' => 'Contact Us', 'title' => 'Contact Us'))); ?>
			<?php print l(t('Help'), 'http://help.masterchannel.com/customer/portal/emails/new?ticket[custom_client]='.$client_url, array('attributes' => array('class' => array('link-help'), 'alt' => 'Help', 'title' => 'Help'))); ?>


	    </div>
	    <div class="copyright">Copyright <?php echo date('Y');?> Imagine Dragons, All Rights Reserved.</div>
	    <div class="footer-logos">
	    	<?php print l(t('Interscope Records'), 'http://interscope.com', array('attributes'  => array('title' => t('Interscope Records'), 'class' => array('interscope-logo')))); ?>
	    	<?php print l(t('Bravado'), 'http://bravadousa.com', array('attributes'  => array('title' => t('Bravado'), 'class' => array('bravado-logo')))); ?>
	    	<?php print l(t('Universal Music Group'), 'http://www.universalmusic.com/', array('attributes'  => array('title' => t('Universal Music Group'), 'class' => array('umg-logo')))); ?>
	    	<?php print l(t('Master Channel LLC'), 'http://ideaden.com', array('attributes'  => array('title' => t('Powered by Master Channel'), 'class' => array('ideaden-logo')))); ?>
	    </div>    
    </div>
  </div>
</<?php print $tag; ?>>