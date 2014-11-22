<?php
require_once 'config.php';
$str_sql = 'SELECT name';
$str_sql .= ' FROM users';
$str_sql .= " WHERE name ILIKE '%".$_POST['term']."%' AND is_admin <> 1";
$result_set = pg_query($con, $str_sql);
$data = array();
if(pg_num_fields($result_set)) {
    while($row = pg_fetch_assoc($result_set)) {
        $data[] = $row['name'].' - Name';
    }
}
$str_sql = 'SELECT city';
$str_sql .= ' FROM users';
$str_sql .= " WHERE city ILIKE '%".$_POST['term']."%' AND is_admin <> 1";
$result_set = pg_query($con, $str_sql);

if(pg_num_fields($result_set)) {
    while($row = pg_fetch_assoc($result_set)) {
        $data[] = $row['city'].' - City';
    }
}
echo json_encode($data);
?>
