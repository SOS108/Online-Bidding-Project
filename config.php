<?php

session_start();

$dbHost="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="auctioniz";

$dbcon=new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($dbcon->connect_error){
	die("Connection Failed: ".$dbcon->connect_error);
}

?>