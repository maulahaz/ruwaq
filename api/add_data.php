<?php

include "connect.php";

$Prod_code = $_POST['Product_code'];
$Prod_name = $_POST['Product_name'];
$Price = $_POST['Price'];
$Stock = $_POST['Stock'];

mysqli_query($connect, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

?>