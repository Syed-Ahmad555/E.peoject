<?php
$servername = "localhost";
$username = "root";
$password ="";
$database ="Ali";

$conn = new mysql ($servername,$username,$password,$database);
if ($conn->connect_error){
    die("connection ailed" .$conn->connecion_error)
}
else{
    echo "Database connection";
}
?>