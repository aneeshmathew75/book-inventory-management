<?php

require("connection.php");

$id = $_GET['id'];
$id = mysqli_real_escape_string($con, $id);

$query = "DELETE FROM `book_reg` WHERE id =". $id;
mysqli_query($con, $query) or die(mysqli_error($con));
header('location:../index.php');
