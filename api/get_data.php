<?php

include "connect.php";

$sql_query = mysqli_query($connect, "SELECT * FROM tbl_products");

$result = array();

while($data = mysqli_fetch_array($sql_query)){
    $result[] = $data;
}

echo json_encode($result);

?>