<?php
include "connection.php";

$sql = "SELECT
            p.product_name,
            SUM(od.quantity) AS total_quantity,
            SUM(od.quantity * od.price) AS total_sales
        FROM products p
        JOIN order_details od
        ON p.product_id = od.product_id
        GROUP BY p.product_id, p.product_name
        ORDER BY total_quantity DESC";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    echo $row['product_name'] . " - ";
    echo $row['total_quantity'] . " - ";
    echo $row['total_sales'];
    echo "<br>";
}
?>