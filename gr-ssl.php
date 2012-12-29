<?php
	
	/*
		Plugin Name: GR-SSL
		Plugin URI: http://developer.gripd.com/gr-ssl/
		Description: Forces an SSL connection throughout your Wordpress site. Requires an SSL certificate to be installed and properly configured.
		Version: 1.0
		Author: Grip'd LLC.
		Author URI: http://gripd.com/
	*/	
	
	add_action("wp", "gr_ssl");
	function gr_ssl() {
		if(!$_SERVER['HTTPS']) {
			if($_SERVER["SERVER_PORT"] != "80") {
				$forwardURL .= 'https://' . $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			} else {
				$forwardURL .= 'https://' . $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			}
			header("Location: " . $forwardURL);
		}
	}

?>