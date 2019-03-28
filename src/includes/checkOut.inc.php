<?php
/**
 * Created by PhpStorm.
 * User: ishan
 * Date: 08-Nov-18
 * Time: 8:58 AM
 */
session_start();
include_once 'dbh.inc.php';
$total = 0;
$sql1 = "";
$sql2 = "";
foreach ($_SESSION as $name => $value) {
    if ($value > 0) {
        if (substr($name, 0, 8) == "product_") {
            //echo $name;
            // echo strlen($name);
            $length = strlen($name) - 8;
            $id = substr($name, 8, $length);

            $sql = "SELECT p.*,i.stockCount FROM products p join inventory i on p.productId=i.productId where p.productId=" . $id . "";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $total += ((double)$_SESSION["product_" . $id] * (double)$row["price"]);

                    $sql1 .= "INSERT INTO checkoutproducts( userID, productId, quantity, sale, SaleOn, Dipached) VALUES ("
                        . $_SESSION["userid"] . ","
                        . $row["productId"] . ","
                        . (double)$_SESSION["product_" . $id] . ","
                        . ($_SESSION["product_" . $id] * $row["price"]) . ",'" . date('Y-m-d') . "','0');";


                    $status = 6;//($row['stockCount']-$_SESSION["product_".$id])<=$row['stockCount']?6:7;
                    $sql2 .= "UPDATE inventory SET stockCount="
                        . ($row['stockCount'] - $_SESSION["product_" . $id]) . ",statusID="
                        . $status . " WHERE productId=" . $id . ";";
                }
            }
        }
    }
}
$sql1 .= $sql2;
if (mysqli_multi_query($conn, $sql1)) {
    foreach ($_SESSION as $name => $value) {
        if ($value > 0) {
            if (substr($name, 0, 8) == "product_") {
                $_SESSION['cart'] = null;
                unset($_SESSION[$name]);
            }
        }
    }
    header("Location: ../bagout.php?action=checkoutSuccess");
} else {
    //echo "Error: " . $user . "<br>" . mysqli_error($conn);
    header("Location: ../bagout.php?action=checkoutfail");
}
