<?php
/**
 * Plugin Name:     Ban Naver
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     ban-naver
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ban_Naver
 */


add_filter( 'the_content', 'ban_naver');
function ban_naver( $content ) {
	$ban_word = __( '※このページ内の画像をNAVERまとめに転載することを禁止します。', 'ban-naver');
	$ban_word = "<small><b>{$ban_word}</b></small>";
	$content =  $ban_word. $content;
	return $content;
}
