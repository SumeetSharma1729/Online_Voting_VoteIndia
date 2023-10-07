<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "voter_details";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
