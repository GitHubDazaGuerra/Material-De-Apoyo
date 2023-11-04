<?php

session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "db_recordarme";
$puerto=3307;

// Create connection
try{
   $conn = new PDO("mysql:host=$server;dbname=$dbname;port=$puerto","$username","$password");
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
   die('Unable to connect with the database');
}
