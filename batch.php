<?php
// サイズ設定
$width = 570;
$height = 380;

// テキスト
$text = 'MySQL8';
$font_size = 90;

$colors = [
    'bright_red' => [255, 0, 0],
    'light_red' => [255, 64, 64],
    'soft_red' => [255, 128, 128],
    'pastel_red' => [255, 192, 192],
    'dark_red' => [192, 0, 0],
    'deeper_red' => [128, 0, 0],
    'darkest_red' => [64, 0, 0],
    'red_orange' => [255, 64, 0],
    'light_red_orange' => [255, 128, 0],
    'soft_red_orange' => [255, 192, 0]
];

foreach ($colors as $name => $color) {

    // 画像作成
    $image = imagecreatetruecolor($width, $height);
    $image = imagecreatetruecolor($width, $height);

    // 色設定
    $white = imagecolorallocate($image, $color[0],$color[1],$color[2]); // Soft Red-Orange
    $black = imagecolorallocate($image, 255, 255, 255);

    // 背景色塗りつぶし
    imagefilledrectangle($image, 0, 0, $width, $height, $white);

    // テキスト描画
    imagettftext($image, $font_size, 0, 50, 285, $black, './arial.ttf', $text);

    // 出力
    imagepng($image, './output/' . $name . ".png");

    // メモリ解放
    imagedestroy($image);

}
