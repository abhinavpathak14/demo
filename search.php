<?php
require_once 'config.php';
$str_sql = 'SELECT name';
$str_sql .= ' FROM users';
$str_sql .= ' WHERE name LIKE "%'.$_POST['term'].'%" AND IsAdmin <> 1';
$result_set = mysqli_query($con, $str_sql);
$data = array();
if(mysqli_num_fields($result_set)) {
    while($row = mysqli_fetch_assoc($result_set)) {
        $data[] = $row['name'].' - Name';
    }
}
$str_sql = 'SELECT city';
$str_sql .= ' FROM users';
$str_sql .= ' WHERE city LIKE "%'.$_POST['term'].'%" AND IsAdmin <> 1';
$result_set = mysqli_query($con, $str_sql);

if(mysqli_num_fields($result_set)) {
    while($row = mysqli_fetch_assoc($result_set)) {
        $data[] = $row['city'].' - City';
    }
}
echo json_encode($data);
?>
