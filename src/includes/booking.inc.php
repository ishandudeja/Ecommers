<?php
/**
 * Created by PhpStorm.
 * User: ishan
 * Date: 21-Sep-18
 * Time: 9:59 AM
 */
include_once 'dbh.inc.php';// db connection file
$productId = test_input($_POST['productId']);
//$status = test_input($_POST['status']);
$category = test_input($_POST['category']);
$name = test_input($_POST['name']);
$description = test_input($_POST["description"]);
$imageUrl = test_input($_POST['imageUrl']);
$price = test_input($_POST['price']);
$size = test_input($_POST['size']);
$colour = test_input($_POST['colour']);
$stockCount = test_input($_POST['Inventory']);
//validate user input
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (empty($statusId)) {
    $statusId = 6;
}

//this statement identify the current request is from new booking or edit existing booking
if ($productId == 0) {
    $inserProduct = "INSERT INTO products( categoryId, `name`, `description`, `imageUrl`, `statusID`, `isActive`, `price`, `sizeId`, `colourId`) VALUES('" . $category . "','" . $name . "','" . $description . "','" . $imageUrl . "','" . $status . "','" . 1 . "','" . $price . "','" . $size . "','" . $colour . "')";
    // echo $inserProduct;
//scripts to insert and redirect page to sign in page if success or show error if fail to register
    if (mysqli_query($conn, $inserProduct)) {
        $last_id = mysqli_insert_id($conn);
        echo 'productId' . $last_id;
        $sqlinventory = "INSERT INTO `inventory`( `productId`, `categoryId`, `stockCount`, `statusID`, `isActive`) VALUES (" . $last_id . "," . $category . "," . $stockCount . ",6,1);";
        if (mysqli_query($conn, $sqlinventory))
            header("Location: ../productDetail.php?product=" . $last_id . "&quantity=1&action=insertsuccess");
    } else {
        echo "Error inserting:" . mysqli_error($conn);
        header("Location: ../productDetail.php?product=0&quantity=1&action=insertfail");
    }
} else {

    $productUpdate = "UPDATE products SET categoryId=" . $category . ",name='" . $name . "',description='" . $description . "',imageUrl='" . $imageUrl . "',statusID=6,price=" . $price . ",sizeId=" . $size . ",colourId=" . $colour . " where ProductId=" . $productId . ";";
     $inventoryUpdate="UPDATE `inventory` SET  `stockCount`=".$stockCount.", WHERE productId=".$productId.";";
    $productUpdate.=$inventoryUpdate;
    if (mysqli_multi_query($conn, $productUpdate)) {
        header("Location: ../productDetail.php?product=" . $productId . "&quantity=1&action=editsuccess");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
        header("Location: ../productDetail.php?product=" . $productId . "&quantity=1&action=editfail");
    }
}
