<?php
// session_start();
// ob_start(); 
$host = "localhost";
$username="root";
$password="";
$database="phpecom";

//creating db connection
$con= mysqli_connect($host,$username,$password,$database);

//check db connection
if(!$con){
    die("Connection Failed".mysqli_connect_error());
}
else{
    // echo "Connected Successfully";
    // ob_end_clean(); 
}
?>