<?php
/**
 * @file spotlight.tpl.php
 *   Default template to theme spotlight block content
 *   
 * Variables available:
 * $delta : the block id (delta) of this spotlight. Is unique
 * 	and based on the node id of the spotlight node [spotlight-{nid}]
 * $spotlight_type : based on the spotlight node 'type' selection
 *   can be either 'drop-down' or 'pop-up'
 * $has_body : TRUE if the spotlight has content in the body field,
 *   FALSE otherwise
 * $node : the full spotlight node object
 * $content : the preprocessed content of the spotlight, as renderable
 *   arrays.
 *   
 * @see fantorrent_ads_support_preprocess_spotlight
 */
?>
<?php if ($spotlight_type == 'drop-down') : print l(t("Hide"), current_path(), array('attributes' => array('id' => 'toggle-' . $delta, 'class' => array('toggle-spotlight')))); endif; ?>
<div id="<?php print $delta; ?>" class="spotlight <?php print $spotlight_type?>" style="display:none;">
  <?php print render($content); ?>
</div> 