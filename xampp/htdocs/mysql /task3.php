<?php
include "connection.php";

$sql = "SELECT
            c.customer_name,
            COUNT(o.order_id) AS orders_count
        FROM customers c
        LEFT JOIN orders o
        ON c.customer_id = o.customer_id
        GROUP BY c.customer_id, c.customer_name";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    echo $row['customer_name'];
    echo " ";
    echo $row['orders_count'];
    echo "<br>";
}
?>
