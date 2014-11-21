<?php
    require_once 'config.php';
    if(isLogin()) {
        redirect('welcome.php');
    }
    require_once 'view/register.php';
?>