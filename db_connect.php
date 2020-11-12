<?php

define('DB_SRV', 'localhost');
define('DB_PASSWD', "Management_2018");
define('DB_USER', 'LeblancJuste');
define('DB_NAME', 'ocd_corpo');

$connection = mysqli_connect(DB_SRV, DB_USER, DB_PASSWD, DB_NAME);

if($connection == false){

	die("Error: Connection to Database could not be made." . mysqli_connect_error());
}
?>
