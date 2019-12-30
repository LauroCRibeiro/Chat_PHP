<?php 

// Localhost Server XAMPP
$server = "localhost";
$user = "lauro";
$password = "L@uro09121988";
$bd = "chat";  

$con = new mysqli($server,$user,$password,$bd);

function formatData($data){
	return date('H:i:s', strtotime($data));

}


 ?>