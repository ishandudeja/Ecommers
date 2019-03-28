<?php
if (!isset($_SESSION)) {
    session_start();
}
/**
 * Created by PhpStorm.
 * User: ishan
 * Date: 31-Jul-18
 * Time: 5:49 PM
 */
include_once 'dbh.inc.php';// db connection file

$userName = test_input($_POST['userName']);
$pasCode = test_input($_POST["pasCode"]);
$path=test_input($_POST["path"]);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "SELECT * FROM `userlogon` WHERE username='" . $userName . "'";
//script to execute sql on db and fetch data
$result = mysqli_query($conn, $sql);
//script to check weather user is validate or not
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["password"] == $pasCode) {
            $_SESSION["userid"] = $row["userID"];
            $_SESSION["userType"] = $row["userType"];
            $_SESSION["username"] = $userName;
            header("Location: ../".$path."");
        } else {
            echo "<div class='container justify-content-center'>Incorrect Password</div>";
        }
    }
} else {
    echo "<div class='container justify-content-center'>  UserName not found <br> Please register you self first</div>";
}

