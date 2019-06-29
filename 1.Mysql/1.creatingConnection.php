<?php
   
   $dbhost = 'localhost:3306';
   $dbuser = 'myadmin';
   $dbpass = '123456';
   //$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   $conn =  new mysqli('p:'.$dbhost, $dbuser, $dbpass, 't2');
   
   var_dump($conn);
   if(! $conn ) {
      die('Could not connect:'.mysqli_connect_error());
   }
   
   echo 'Connected successfully';
   mysqli_close($conn);