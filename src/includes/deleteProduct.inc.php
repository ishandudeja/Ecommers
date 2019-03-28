<?php
/**
 * Created by PhpStorm.
 * User: ishan
 * Date: 22-Sep-18
 * Time: 7:47 AM
 */
include_once 'dbh.inc.php';// db connection file
session_start();
$productId = test_input($_POST["productId"]);
//echo $productId;
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_SESSION["product_" . $productId])) {
    $_SESSION['cart'] -= 1;
    unset($_SESSION["product_" . $productId]);
    header("Location: ../bagout.php?action=deletesuccess");
}
else{
    header("Location: ../bagout.php?action=deletefail");
}

