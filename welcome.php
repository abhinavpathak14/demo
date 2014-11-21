<?php
    require 'config.php';
    if(isLogin()) {
        require_once 'view/welcome.php';
    } else {
        setTempSession('error', 'Please login in order to access welcome page.');
        redirect();
    }
?>
