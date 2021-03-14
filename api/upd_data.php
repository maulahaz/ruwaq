<?php

include "connect.php";

$uid = $_POST['uid'];
$Prod_code = $_POST['Product_code'];
$Prod_name = $_POST['Product_name'];
$Price = $_POST['Price'];
$Stock = $_POST['Stock'];

mysqli_query($connect, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE uid=$uid");