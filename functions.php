<?php

if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Debugging helper function
 */
if( !function_exists( 'p' ) ){
	function p( $var, $return = FALSE  )
	{
		$content = '<pre>';
		$content.= print_r( $var, TRUE );
		$content.= '</pre>';

		if( !$return ){
			echo $content;
		}
		return $content;
	}
}