<?php
include "connection.php";
?>

<form method="GET">

    <input type="number" name="id" placeholder="Customer ID">

    <button type="submit">Search</button>

</form>

<?php

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT *
            FROM customers
            WHERE customer_id = $id";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        echo $row['customer_name'] . "<br>";
        echo $row['email'] . "<br>";
        echo $row['salary'] . "<br>";
    }
}
?>
