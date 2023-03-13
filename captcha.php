<?php

if(!isset($_SESSION)) {
    session_start();
}

$value = rand(100, 999);

$_SESSION['captcha'] = $value;

$captcha = imagecreatefromjpeg("images/captcha-".rand(1,3).".jpg");

$color = imagecolorallocate($captcha, rand(0, 150), rand(0, 150), rand(0, 255));

$font = "code.otf";

imagettftext($captcha, rand(15, 30), rand(0, 45), rand(30, 200), rand(20, 70), $color, $font, $value);

imagepng($captcha);

imagedestroy($captcha);