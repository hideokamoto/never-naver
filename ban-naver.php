<?php
/**
 * Plugin Name:     Ban Naver
 * Plugin URI:      https://github.com/hideokamoto/ban-naver/
 * Description:     あなたのブログ記事に「このページ内の画像をNAVERまとめに転載することを禁止します。」というテキストを追加します。
 * Author:          hideokamoto
 * Author URI:      https://github.com/hideokamoto/ban-naver/
 * Text Domain:     ban-naver
 * Domain Path:     /languages
 * Version:         0.0.1
 *
 * @package         Ban_Naver
 */

add_filter( 'the_content', 'ban_naver');
function ban_naver( $content ) {
	$ban_word = __( '※このページ内の画像をNAVERまとめに転載することを禁止します。', 'ban-naver');
	$ban_word = apply_filters( 'ban_word_test', $ban_word );
	$ban_word = "<small><b>{$ban_word}</b></small>";
	$ban_position = apply_filters( 'ban_word_position', 'top' );
	if ( 'bottom' === $ban_position ) {
		$content = $content. $ban_word;
	} else {
		$content = $ban_word. $content;
	}
	return $content;
}
