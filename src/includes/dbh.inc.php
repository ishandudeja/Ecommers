<?php
/**
 * Created by PhpStorm.
 * User: ishan
 * Date: 29-Jul-18
 * Time: 4:23 PM
 */
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "kiviyo";
// script to create database connection and if fail to connect shows error
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}