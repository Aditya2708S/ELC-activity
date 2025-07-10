<?php
$host = "sql205.infinityfree.com";
$user = "if0_39441026";
$password = "elcappdomain123";
$database = "if0_39441026_form_app";

$conn = new mysqli($host,$user,$password,$database);

if($conn->connect_error){
    die("connection failed, Error :".$conn->connect_error);
}else{
    echo "connection succeeded <br>";
}
?>
