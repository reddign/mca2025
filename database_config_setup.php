<?php
/*
*******************************************************************
* You should copy this file and rename it as database_config.php
*******************************************************************
*/
if($_SERVER['HTTP_HOST']=="127.0.0.1"){
  $host = "127.0.0.1";
  $database = "mca";
  $db_user = "root";
  $db_pass = "";
}else{//TODO: revisit this area to get password correct
  $host = "?????????";
  $database = "??????";
  $db_user = "?????";
  $db_pass = "???????";    
}



?>
