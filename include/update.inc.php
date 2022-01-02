<?php

require("connection.php");

$id = $_POST['id'];
$id = mysqli_real_escape_string($con, $id);

$book_name = $_POST['book_name'];
$book_name = mysqli_real_escape_string($con, $book_name);

$isbn_no = $_POST['isbn_no'];
$isbn_no = mysqli_real_escape_string($con, $isbn_no);

$publisher = $_POST['publisher'];
$publisher = mysqli_real_escape_string($con, $publisher);

$author = $_POST['author'];
$author = mysqli_real_escape_string($con, $author);

$info_link = $_POST['info_link'];
$info_link = mysqli_real_escape_string($con, $info_link);

$img = $_POST['img'];
$img = mysqli_real_escape_string($con, $img);

$stocks = $_POST['stocks'];
$stocks = mysqli_real_escape_string($con, $stocks);

$query = "UPDATE book_reg SET book_name = '" . $book_name . "', isbn_no= '" . $isbn_no . "',publisher = '" . $publisher . "',author ='" . $author . "',info_link ='" . $info_link . "',img='" . $img . "', stock='" . $stocks . "' where id = '" . $id . "' " ;
mysqli_query($con, $query) or die(mysqli_error($con));
header('location:../index.php');
?>