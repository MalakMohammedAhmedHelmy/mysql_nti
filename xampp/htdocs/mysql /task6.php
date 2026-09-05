<?php
include "connection.php";
?>

<form method="GET">

    <input type="text" name="name" placeholder="Customer Name">

    <button type="submit">Search</button>

</form>

<?php

if (isset($_GET['name'])) {

    $name = $_GET['name'];

    $sql = "SELECT *
            FROM customers
            WHERE customer_name LIKE '%$name%'";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        echo $row['customer_name'];
        echo "<br>";
    }
}
?>
