<?php
$conn = mysqli_connect("localhost", "root", "", "pglife");

if (!$conn) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.".mysqli_connect_error();
    exit;
}
?>