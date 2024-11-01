<?php
/*
Plugin Name: WP simpleEdit
Plugin URI: http://saquery.com/wordpress/simpleedit/
Description: WP simpleEdit.
Version: 1.0
Author: Stephan Ahlf
Author URI: http://saquery.com/wordpress/simpleedit/
*/
	

	global $saqSimpleEdit;
	$saqSimpleEdit = new saqSimpleEdit();

	class saqSimpleEdit{
		function admin_head(){
			if(is_admin()){
				$proot = plugins_url( '/', __FILE__ );
				echo '<script src="'.$proot.'simpleedit.min.js"></sctipt>';
			}
		}
	}
	
	add_action( 'admin_head', array('saqSimpleEdit','admin_head') );

?>