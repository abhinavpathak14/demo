<?php
    require 'config.php';
    if(isAdmin()) {
        //get data from database
        $str_sql = 'SELECT *';
        $str_sql .= ' FROM users';
        $str_sql .= ' WHERE IsAdmin<>1';
        
        $result_set = mysqli_query($con, $str_sql);
        
        require_once 'view/dashboard.php';
    } else {
        setTempSession('error', 'Please login with admin account in order to access dashboard page.');
        redirect();
    }
?>
