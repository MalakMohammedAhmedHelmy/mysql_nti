<?php
include "connection.php";
?>

<form method="GET">

<input type="text" name="city" placeholder="City Name">

<button type="submit">Search</button>

</form>

<?php

if (isset($_GET['city'])) {

    $city = $_GET['city'];

    $sql = "SELECT
                c.customer_name,
                c.salary
            FROM customers c
            JOIN cities ci
            ON c.city_id = ci.city_id
            WHERE ci.city_name = '$city'
            ORDER BY c.salary DESC
            LIMIT 3";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        echo $row['customer_name'];
        echo " - ";
        echo $row['salary'];
        echo "<br>";
    }
}

?>