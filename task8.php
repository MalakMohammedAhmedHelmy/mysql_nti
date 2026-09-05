<?php
include "connection.php";
?>

<form method="GET">

<input
    type="number"
    name="number"
    min="100"
    max="1000"
    required
>

<button type="submit">Search</button>

</form>


<?php

if (isset($_GET['number'])) {

    $number = $_GET['number'];

    $sql = "SELECT
                p.product_name,
                SUM(od.quantity) AS total_quantity
            FROM products p
            JOIN order_details od
            ON p.product_id = od.product_id
            GROUP BY p.product_id, p.product_name
            HAVING SUM(od.quantity) > $number";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        echo $row['product_name'];
        echo " - ";
        echo $row['total_quantity'];
        echo "<br>";
    }
}

?>