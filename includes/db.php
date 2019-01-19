<?php
    define("host", "localhost");
    define("user", "root");
    define("pass", "");
    define("db_name", "cms");

    $connection = mysqli_connect(host, user, pass, db_name);

    if (!$connection) die("There was an issue connecting to the database");
?>