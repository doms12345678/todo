<?php
$server_name = "db";
$db_username = "admin";
$db_passwd = "admin_1234";
$db_name = "todo_list";

$connection = mysqli_connect("$server_name", "$db_username", "$db_passwd");
$dbconfig = mysqli_select_db($connection, $db_name);

if ($dbconfig){

} else {
    echo "Database connection error";
}

?>