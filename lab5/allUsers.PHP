<?php  
require("base.php");
require('connOOP.php');
$allUsersData=$database->index("users");
var_dump($allUsersData);

/*** Display All users Data */

?>