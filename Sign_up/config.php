<?php

define('DB_server','localhost');
define('DB_username','root');
define('DB_password','');
define('DB_name','login');
// connecct to datbabse
$connect = mysqli_connect(DB_server,DB_username,DB_password,DB_name);

// check the conn
if($connect == false){
    dir('Err: cant connect');
}


?>