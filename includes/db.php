<?php
    define("DB_HOST", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "cmS");

    $connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($connection) {
        echo "Connected";
    }
?>