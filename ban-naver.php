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
	$ban_word = "<small><b>{$ban_word}</b></small>";
	$content =  $ban_word. $content;
	return $content;
}
