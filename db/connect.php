<?php

session_start();

mysqli_report(MYSQLI_REPORT_OFF);

$db = mysqli_connect("localhost", "root", "", "database");
if ($db === false) {
    echo "<p>Připojení k databázi bylo neúspěšné</p>";
    exit;
}
mysqli_set_charset($db, "utf8mb4");