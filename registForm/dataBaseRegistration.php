<?php

// connecting Database
$Servername = 'localhost';
$Username = 'root';
$Password = '';
$Database = 'regis_form';

// create connection
$con = mysqli_connect($Servername, $Username, $Password, $Database);

if(!$con){
    die("Connection Failed!" .mysqli_connect_error());
}
echo("Connected.");
?>