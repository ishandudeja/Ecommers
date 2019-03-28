<?php
/**
 * Created by PhpStorm.
 * User: ishan
 * Date: 05-Nov-18
 * Time: 8:14 AM
 */

include_once 'dbh.inc.php';// db connection file
session_start();
$productId = test_input($_POST["productId"]);
$quanity = test_input($_POST["quantity"]);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    //$data = escape_string($data);
    return $data;
}

if (isset($productId)) {
    //selecting data associated with this particular id
    $stockCount = 0;
    $statusID = 0;
    $result = mysqli_query($conn, "SELECT * FROM inventory WHERE productId=$productId");
    while ($res = mysqli_fetch_array($result)) {

        $stockCount = $res['stockCount'];
        $statusID = $res['statusID'];

    }

    if ($stockCount > 0 && $statusID == 6 &&  $quanity<=$stockCount) {
        if( !isset($_SESSION["product_".$productId])){
            $_SESSION['cart']+=1;
            $_SESSION["product_".$productId]=$quanity;
        }
        else{
           $_SESSION["product_".$productId]=$quanity;
        }


       header("Location: ../productDetail.php?product=".$productId."&quantity=".$quanity."&action=addtocartsuccess");

    }
    else{
        header("Location: ../productDetail.php?product=".$productId."&quantity=".$quanity." &action=outofstock");
    }

}

//header("Location: ../reservations.php?action=deletefail");

