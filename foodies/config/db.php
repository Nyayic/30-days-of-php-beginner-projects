<?php 
// connect to database
$connect = new mysqli("localhost","root","","blog");
// check connection
if($connect->connect_error){
    die("Connection Failed" .$connect->connect_error);
}
?>