<?php
include "connection.php";
?>

<form method="GET">

<select name="city_id">

<?php

$sql = "SELECT * FROM cities";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    echo "<option value='{$row['city_id']}'>";
    echo $row['city_name'];
    echo "</option>";
}

?>

</select>

<button type="submit">Submit</button>

</form>

<?php

if (isset($_GET['city_id'])) {

    $city_id = $_GET['city_id'];

    $sql = "SELECT *
            FROM customers
            WHERE city_id = $city_id
            ORDER BY customer_name ASC";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        echo $row['customer_name'];
        echo "<br>";
    }
}

?>