<?php
    require 'config.php';
    if(isAdmin()) {
        $query_for = '';
        if(isset($_GET['search_txt']) && !empty($_GET['search_txt'])) {
            $search_txt = rtrim($_GET['search_txt'], ' - City');
            $search_txt = rtrim($search_txt, ' - Name');
            $query_for = " AND (name ILIKE '%".$search_txt."%' OR city ILIKE '%".$search_txt."%')";
        }
        //get data from database
        $str_sql = 'SELECT *';
        $str_sql .= ' FROM users';
        $str_sql .= ' WHERE is_admin != 1'.$query_for;
        $result_set = pg_query($con, $str_sql);
        
        require_once 'view/dashboard.php';
    } else {
        setTempSession('error', 'Please login with admin account in order to access dashboard page.');
        redirect();
    }
?>
