<?php
// サイズ設定
$width = 570;
$height = 380;

// テキスト
$text = 'MySQL8';
$font_size = 90;

// 画像作成
$image = imagecreatetruecolor($width, $height);

// 色設定
$white = imagecolorallocate($image, 255,100,0);
$black = imagecolorallocate($image, 255, 255, 255);

// 背景色塗りつぶし
imagefilledrectangle($image, 0, 0, $width, $height, $white);

// テキスト描画
imagettftext($image, $font_size, 0, 50, 285, $black, './arial.ttf', $text);

// 出力
header('Content-Type: image/png');
imagepng($image);

// メモリ解放
imagedestroy($image);