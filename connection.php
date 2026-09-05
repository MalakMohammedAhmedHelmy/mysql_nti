<?php

$conn = mysqli_connect("localhost", "root", "", "mysql_assignment");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>