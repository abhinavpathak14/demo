<?php
    require 'config.php';
    if(isset($_POST['Register']) && $_POST['Register'] == 'Register') {
        $name = $_POST['fullname'];
        $city = $_POST['city'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $str_sql = 'INSERT INTO users SET';
        $str_sql .= ' email="'.$email.'",';
        $str_sql .= ' name="'.$name.'",';
        $str_sql .= ' user_password="'.md5($password).'",';
        $str_sql .= ' city="'.$city.'"';
        if(mysqli_query($con, $str_sql)) {
            setTempSession('success', 'Registration has been successfully completed. Thank You. Now You can login.');
            redirect();
        } else {
            setTempSession('error', 'Some thing went wrong while processing. Please try again.');
            redirect();
        }
    } else {
        redirect();
    }
?>
