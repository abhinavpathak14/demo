<?php
    require 'config.php';
    if(isset($_POST['Login']) && $_POST['Login'] == 'Login') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $str_sql = 'SELECT *';
        $str_sql .= ' FROM users';
        $str_sql .= ' WHERE email="'.$email.'"';
        $str_sql .= ' AND user_password="'.md5($password).'"';
        $result_set = mysqli_query($con, $str_sql);
        if(mysqli_num_rows($result_set)) {
            while($row = mysqli_fetch_assoc($result_set)) {
                $_SESSION['userdata'] = $row;
            }
            if($_SESSION['userdata']['IsAdmin'] == 1) {
                redirect('dashboard.php');
            } else {
                redirect('welcome.php');
            }
        } else {
            setTempSession('error', 'Some thing went wrong while processing. Please try again.');
            redirect();
        }
    } else {
        redirect();
    }
?>
