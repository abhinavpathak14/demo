<?php

function base_url($url='') {
    $config = $GLOBALS['config'];
    return $config['base_url'].$url;
}
function redirect($url ='') {
    $config = $GLOBALS['config'];
    header('Location:'.$config['base_url'].$url);
}
function setTempSession($key, $value) {
    $_SESSION[$key] =$value;
}
function getTempSession($key) {
    if(isset($_SESSION[$key])) {
        $value = $_SESSION[$key];
        unset($_SESSION[$key]);
        return $value;
    } else {
        return '';
    }
}
function isLogin() {
    if(isset($_SESSION['userdata']['email']) && !empty($_SESSION['userdata']['email'])) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function isAdmin() {
    if(isLogin()) {
        if(isset($_SESSION['userdata']['IsAdmin']) && $_SESSION['userdata']['IsAdmin'] == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    } else {
        return FALSE;
    }
}
?>
