<?php
try {
    $con = new PDO("sqlsrv:server = cmproject.database.windows.net; Database = cloud_project", "Abhishek", "cloud@007");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>
