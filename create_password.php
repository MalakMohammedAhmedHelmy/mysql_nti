<?php
include "connection.php";

$password = password_hash("123456", PASSWORD_DEFAULT);

$sql = "UPDATE customers
        SET password = '$password'
        WHERE customer_id = 1";

if (mysqli_query($conn, $sql)) {
    echo "Password added successfully";
} else {
    echo "Error";
}
?>