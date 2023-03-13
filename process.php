<?php

if(isset($_POST['login_btn'])) {
    $data = $_POST;
    
    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['captcha'])) {
        die('captcha not set!');
    }

    if($_SESSION['captcha'] == $data['captcha']) {
        echo "valid captcha";
    }else{
        echo "invalid captcha";
    }

}