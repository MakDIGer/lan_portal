<?php 
// No direct access
defined('_JEXEC') or die; ?>

<table bgcolor="#000000">
	<tr>
		<td>
			<!-- BEGIN SPEED TEST - DO NOT ALTER BELOW-->
			<script type="text/javascript" src="/speedtest/speedtest/swfobject.js?v=2.2"></script>
				  <div id="mini-demo">
					  Speedtest.net Mini requires at least version 8 of Flash. Please <a href="http://get.adobe.com/flashplayer/">update your client</a>.
				  </div><!--/mini-demo-->
				<script type="text/javascript">
				  var flashvars = {
						upload_extension: "php"
					};
					var params = {
						wmode: "transparent",
						quality: "high",
						menu: "false",
						allowScriptAccess: "always"
					};
					var attributes = {};
					swfobject.embedSWF("/speedtest/speedtest.swf?v=2.1.8", "mini-demo", "350", "200", "9.0.0", "/speedtest/speedtest/expressInstall.swf", flashvars, params, attributes);
				</script>
			<!-- END SPEED TEST - DO NOT ALTER ABOVE -->
		</td>
	</tr>
</table>
