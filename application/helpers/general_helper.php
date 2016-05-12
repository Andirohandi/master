<?php 

if(!function_exists('encode')) {
	function encode($text='') {
	
		$encode = base64_encode($text);
		$encode = base64_encode($encode);
		
		return $encode;
	}
}

if(!function_exists('decode')) {
	function decode($text='') {
	
		$decode = base64_decode($text);
		$decode = base64_decode($decode);
		
		return $decode;
	}
}