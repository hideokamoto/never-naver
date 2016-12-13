<?php
/**
 * Plugin Name:     Never Naver
 * Plugin URI:      https://github.com/hideokamoto/ban-naver/
 * Description:     Show text for NAVER 'do not copy images'.
 * Author:          hideokamoto
 * Author URI:      https://github.com/hideokamoto/naver-naver/
 * Text Domain:     naver-naver
 * Domain Path:     /languages
 * Version:         0.0.1
 *
 * @package         Naver_Naver
 */

add_filter( 'the_content', 'naver_naver');
function naver_naver( $content ) {
	if (is_feed()) {
		return $content;
	}
	$ban_word = __( '※このページ内の画像をNAVERまとめに転載することを禁止します。', 'naver-naver');
	$ban_word = esc_html( apply_filters( 'ban_word_text', $ban_word ) );
	$ban_word = "<small><b>{$ban_word}</b></small>";
	$ban_position = apply_filters( 'ban_word_position', 'top' );
	if ( 'bottom' === $ban_position ) {
		$content = $content. $ban_word;
	} else {
		$content = $ban_word. $content;
	}
	return $content;
}
