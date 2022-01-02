<?php
require("../include/connection.php");
// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.

$storename = $_POST['storename'];
$storename = mysqli_real_escape_string($con, $storename);

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$gstnumber = $_POST['gstnumber'];
$gstnumber = mysqli_real_escape_string($con, $gstnumber);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);

$query = "INSERT INTO reg (store_name, mail_id, gst_no, password) VALUES('" . $storename . "','" . $email . "','" . $gstnumber . "','" . $password . "')";
mysqli_query($con, $query) or die(mysqli_error($con));
header(".signup.php");
