<?php
/**
 * Created by PhpStorm.
 * User: ishan
 * Date: 29-Jul-18
 * Time: 8:49 PM
 */
include_once 'dbh.inc.php';// db connection file

// script to get user input into variables
$firstName= test_input($_POST['firstName']);
$lastName= test_input($_POST['lastName']);
$userName= test_input($_POST['userName']);
$pasCode=test_input($_POST["pasCode"]);
$email= test_input($_POST['email']);
$address= test_input($_POST['address']);
$phone= test_input($_POST['phone']);
$country= test_input($_POST['country']);
$state= test_input($_POST['state']);
$zip= test_input($_POST['zip']);
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
$user="INSERT INTO users (firstName,lastName,email,phone,address,country,state,zip) VALUES ('".$firstName."','".$lastName."','".$email."','".$phone."','".$address."','".$country."','".$state."','".$zip."')";

//scripts to insert and redirect page to sign in page if success or show error if fail to register
if (mysqli_query($conn, $user)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    $userLogin="INSERT INTO userlogon(username, password, userID, userType, statusId) VALUES ('".$userName."','".$pasCode."',".$last_id.",4,1)";
    if ($conn->query($userLogin) === TRUE){
        header("Location: ../template/account/signIn.php?signup=success");
    }
    else{
        echo "ERROR: Could not able to execute " . mysqli_error($conn);
    }
} else {
    echo "Error: " . $user . "<br>" . mysqli_error($conn);
}
