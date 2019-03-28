<?php
/**
 * Created by PhpStorm.
 * User: ishan
 * Date: 15-Aug-18
 * Time: 3:01 PM
 */

session_start();
// destroy the session
session_destroy();

header("Location: ../index.php");
