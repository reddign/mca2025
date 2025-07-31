<?php
/*
*******************************************************************
* You should copy this file and rename it as database_config.php
* Be sure that you do not put real credentials in any local file 
* unless you are sure it is in the .gitignore file.
* You do not want to place your DB creds on a public repo.
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
