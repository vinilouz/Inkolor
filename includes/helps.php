<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inkolor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Funçao Leia Mais
 */
function leia_mais( $string, int $lenght, string $stringFim = '', bool $removerTags = false ) : string{
	$string = trim($string);
	if( $removerTags )
		$string = strip_tags( $string );
	if( strlen( $string ) <= $lenght )
		return $string;
	$lenght -= strlen( $stringFim );
	$string = substr( $string, 0, $lenght);
	return $string.$stringFim;
}

/* Ativar SVG em midias */
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Slugify
 */
function slugify($string) {
	$string = preg_replace('/[\t\n]/', ' ', $string);
	$string = preg_replace('/\s{2,}/', ' ', $string);
	$list = array(
		'Š' => 'S','š' => 's','Đ' => 'Dj','đ' => 'dj','Ž' => 'Z','ž' => 'z','Č' => 'C','č' => 'c','Ć' => 'C','ć' => 'c','À' => 'A','Á' => 'A','Â' => 'A','Ã' => 'A','Ä' => 'A','Å' => 'A','Æ' => 'A','Ç' => 'C','È' => 'E','É' => 'E','Ê' => 'E','Ë' => 'E','Ì' => 'I','Í' => 'I','Î' => 'I','Ï' => 'I','Ñ' => 'N','Ò' => 'O','Ó' => 'O','Ô' => 'O','Õ' => 'O','Ö' => 'O','Ø' => 'O','Ù' => 'U','Ú' => 'U','Û' => 'U','Ü' => 'U','Ý' => 'Y','Þ' => 'B','ß' => 'Ss','à' => 'a','á' => 'a','â' => 'a','ã' => 'a','ä' => 'a','å' => 'a','æ' => 'a','ç' => 'c','è' => 'e','é' => 'e','ê' => 'e','ë' => 'e','ì' => 'i','í' => 'i','î' => 'i','ï' => 'i','ð' => 'o','ñ' => 'n','ò' => 'o','ó' => 'o','ô' => 'o','õ' => 'o','ö' => 'o','ø' => 'o','ù' => 'u','ú' => 'u','û' => 'u','ý' => 'y','ý' => 'y','þ' => 'b','ÿ' => 'y','Ŕ' => 'R','ŕ' => 'r','/' => '-',' ' => '-','.' => '-',
	);
	$string = strtr($string, $list);
	$string = preg_replace('/-{2,}/', '-', $string);
	$string = strtolower($string);
	return $string;
}

/**
 * Easy pre response
 */
function pre($value) {
	echo "<pre style='background: #3e3e3e; color: #fff; padding: 20px;'>",print_r($value, true),"</pre>";
}
