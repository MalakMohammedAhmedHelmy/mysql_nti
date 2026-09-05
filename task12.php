<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);

    if ($number === false || $number < 100 || $number > 1000) {
        echo "Number must be between 100 and 1000";
    } else {
        echo "Valid number: " . $number;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 12</title>
</head>

<body>

<h2>Number Validation</h2>

<form method="POST">

    <label>Enter Number:</label>

    <input type="number"
           name="number"
           min="100"
           max="1000"
           required>

    <button type="submit">Submit</button>

</form>

</body>
</html>