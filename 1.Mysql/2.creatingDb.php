<?php

$dbhost = 'localhost:3036';
$dbuser = 'admin';
$dbpass = '123456';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

$sql = 'CREATE Database test_db';
$retval = mysql_query($sql, $conn);

if (!$retval) {
    die('Could not create database: ' . mysql_error());
}

echo "Database test_db created successfully\n";
mysql_close($conn);
