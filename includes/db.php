<?php
    define("host", "localhost");
    define("user", "root");
    define("pass", "");
    define("db_name", "cms");

    $connection = mysqli_connect(host, user, pass, db_name);

    if ($connection) echo "WE LIT";
    else echo "we lite";
?>