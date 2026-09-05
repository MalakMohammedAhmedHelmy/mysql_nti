<?php
include "connection.php";

$sql = "SELECT
            e.employee_name AS employee,
            m.employee_name AS manager
        FROM employees e
        LEFT JOIN employees m
        ON e.manager_id = m.employee_id";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    echo "Employee: " . $row['employee'];
    echo " | Manager: " . $row['manager'];
    echo "<br>";
}
?>
