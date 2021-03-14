<?php

include "connect.php";

$uid = $_POST['uid'];

mysqli_query($connect, "DELETE FROM users WHERE uid=$id");

?>