<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php if(isset($fb)) : print $fb; endif; ?>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!-- facebook pixel -->
	<script>(function() {
 	var _fbq = window._fbq || (window._fbq = []);
 	if (!_fbq.loaded) {
 	var fbds = document.createElement('script');
 	fbds.async = true;
 	fbds.src = '//connect.facebook.net/en_US/fbds.js';
	 var s = document.getElementsByTagName('script')[0];
	 s.parentNode.insertBefore(fbds, s);
	 _fbq.loaded = true;
	 }
	 _fbq.push(['addPixelId', '247987955369814']);
	})();
	window._fbq = window._fbq || [];
	window._fbq.push(["track", "PixelInitialized", {}]);
	</script>
	<noscript><img height="1" width="1" border="0" alt="" style="display:none" src="https://www.facebook.com/tr?id=247987955369814&amp;ev=NoScript" /></noscript>

	
	
	<!-- RadiumOne code begin -->
	<script type="text/javascript">
	
	document.write('<iframe src="'+("https:"==document.location.protocol?"https:":"http:")+"//rs.gwallet.com/r1/pixel/x10727"+'r'+Math.round(1E7*Math.random())+'" width="1" height="1" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>');
	
	</script>
	<noscript>
	<iframe src="https://rs.gwallet.com/r1/pixel/x10727" width="1" height="1" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
	</noscript>
	<!-- RadiumOne code end -->
	
	

</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php if(module_exists('fantorrent_fullscreenr') && (isset($fullscreenr))): ?><span class="omega-narrow-up"><?php print $fullscreenr;?></span><?php endif; ?>  
</body>
</html>