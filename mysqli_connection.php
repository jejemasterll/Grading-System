<?php
    $DB_SERVER = "localhost";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_NAME = "grading_system";

    // 1. Create a database connection
    $connection = mysqli_connect($DB_SERVER,$DB_USER,$DB_PASS);

    if (!$connection) {
        error_log("Failed to connect to MySQL: " . mysqli_error($connection));
        die('Internal server error');
    }

    // 2. Select a database to use
    $db_select = mysqli_select_db($connection, $DB_NAME);

    if (!$db_select) {
        error_log("Database selection failed: " . mysqli_error($connection));
        die('Internal server error');
    }
?>
