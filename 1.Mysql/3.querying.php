<?php
   
   $dbhost = 'localhost:3036';
   $dbuser = 'admin';
   $dbpass = '123456';
   $conn =  new mysqli('p:'.$dbhost, $dbuser, $dbpass, 't2');
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
   $sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';
   mysqli_select_db($conn,'t2');
   $retval = mysqli_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_connect_error());
   }
   
   while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
      echo "EMP ID :{$row['emp_id']}  <br> ".
         "EMP NAME : {$row['emp_name']} <br> ".
         "EMP SALARY : {$row['emp_salary']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);