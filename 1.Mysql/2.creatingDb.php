<?php

$dbhost = 'localhost:3036';
$dbuser = 'admin';
$dbpass = '123456';
$conn =  new mysqli('p:'.$dbhost, $dbuser, $dbpass, 't2');

if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

$sql = 'CREATE Database test_db';
$retval = mysqli_query($sql, $conn);

if (!$retval) {
    die('Could not create database: ' . mysqli_connect_error());
}

echo "Database test_db created successfully\n";
mysqli_close($conn);
