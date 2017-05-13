<?php

//create user
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "rootpassword";

//create a connection
$conn = new mysqli ($dbHost, $dbUser, $dbPass);
//test the connection
if($conn->connect_error){
	die("Could not connect: ".$conn->connect_error);
}
echo "Connected successfully\n";

//create database
$sql = "CREATE DATABASE IF NOT EXISTS bookIndex";
//test for db set up
if ($conn->query($sql)===TRUE){
	echo "Database created successfully\n";
} else {
	echo "Error creating database: ".$conn->error."\n";
}

//create table
$sql= "CREATE TABLE IF NOT EXISTS bookIndex.books(
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userId INT(30) NOT NULL,
title VARCHAR(255) NOT NULL,
author VARCHAR(255) NOT NULL,
ficNonFic VARCHAR(30),
genre VARCHAR(30)
)";

//test if table set up correctly
if($conn->query($sql)===TRUE){
	echo "Table books created successfully\n";
} else {
	echo "Error creating table: ".$conn->error."\n";
}

$conn->close();
?>