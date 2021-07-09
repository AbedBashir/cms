<?php

//initializing the variables for database
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_password'] = '';
$db['db_name'] = 'cms';

//loop into the array to pass it to the connection
foreach ($db as $key => $value) {
  define (strtoupper($key), $value);
}

//connecting the database
$connection = mysqli_connect(DB_HOST , DB_USER , DB_PASSWORD , DB_NAME);
// if ($connection) {
//   echo "We Are Connected";
// }


?>
