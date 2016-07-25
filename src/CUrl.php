<?php

namespace oangia\CUrl;

class CUrl {
	public static function curl_get_file_contents( $url ) {
		$c = curl_init();
		curl_setopt( $c, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $c, CURLOPT_URL, $url );
		$contents = curl_exec( $c );
		$err  = curl_getinfo( $c, CURLINFO_HTTP_CODE );
		curl_close( $c );
		if ( $contents ) {
			return $contents;
		} else {
			return false;
		}
	}
}