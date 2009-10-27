<?php
	require_once("setUpEnvironment.php");
	$extVersion = "3.0.0";
	$extRoot = isProduction() ? "http://extjs.cachefly.net" : "";
	$extRoot .= "/ext-" . $extVersion;
?>
		<link rel="stylesheet" type="text/css" href="<?php echo($extRoot); ?>/resources/css/ext-all.css"/>
		<script type="text/javascript" src="<?php echo($extRoot); ?>/adapter/ext/ext-base.js"></script>
		<script type="text/javascript" src="<?php echo($extRoot); ?>/ext-all-debug.js"></script>
		<script type="text/javascript">
			Ext.BLANK_IMAGE_URL = '<?php echo($extRoot); ?>/resources/images/default/s.gif';
		</script>
