<?php
    require 'config.php';
    if(isset($_POST['Register']) && $_POST['Register'] == 'Register') {
        $name = $_POST['fullname'];
        $city = $_POST['city'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $str_sql = 'SELECT MAX(user_id) max_id FROM users';
        $max_id_rs = pg_query($con, $str_sql);
        $row = pg_fetch_assoc($max_id_rs);
//        $str_sql = 'INSERT INTO users SET';
//        $str_sql .= " email='".$email."',";
//        $str_sql .= " name='".$name."',";
//        $str_sql .= " user_password='".md5($password)."',";
//        $str_sql .= " city='".$city."',";
//        $str_sql .= " created_by='1',";
//        $str_sql .= " created_on='".date('Y-m-d')."'";
        
        $str_sql = "INSERT INTO users (user_id, email, name, user_password, city, created_by, created_on, is_admin)
    VALUES ('".++$row['max_id']."','".$email."', '".$name."', '".md5($password)."', '".$city."', 1, '".date('Y-m-d')."',0);";
        
        if(pg_query($con, $str_sql)) {
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
