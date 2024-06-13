<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="rationondemand";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$con)
{
    die('Could Not Connect Database: '.mysqli_error());
}
?>