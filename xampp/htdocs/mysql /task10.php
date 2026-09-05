<?php
include "connection.php";
?>

<form method="GET">

<input type="number" name="product_id">

<button type="submit">Search</button>

</form>

<?php

if (isset($_GET['product_id'])) {

    $product_id = $_GET['product_id'];

    $sql = "SELECT
                p.product_name,
                o.order_id,
                c.customer_name,
                c.salary
            FROM products p
            JOIN order_details od
            ON p.product_id = od.product_id
            JOIN orders o
            ON od.order_id = o.order_id
            JOIN customers c
            ON o.customer_id = c.customer_id
            WHERE p.product_id = $product_id
            ORDER BY c.salary DESC";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        echo "Product: " . $row['product_name'];
        echo " | Order: " . $row['order_id'];
        echo " | Customer: " . $row['customer_name'];
        echo " | Salary: " . $row['salary'];

        echo "<br>";
    }
}

?>
