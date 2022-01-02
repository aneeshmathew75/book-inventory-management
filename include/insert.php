<?php
require("../include/connection.php");
// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.

$bookname = $_POST['bookname'];
$bookname = mysqli_real_escape_string($con, $bookname);

$isbn = $_POST['isbn'];
$isbn = mysqli_real_escape_string($con, $isbn);

$publisher = $_POST['publisher'];
$publisher = mysqli_real_escape_string($con, $publisher);

$authorname = $_POST['authorname'];
$authorname = mysqli_real_escape_string($con, $authorname);

$info = $_POST['info'];
$info = mysqli_real_escape_string($con, $info);

$image = $_POST['image'];
$image = mysqli_real_escape_string($con, $image);

$stock = $_POST['stock'];
$stock = mysqli_real_escape_string($con, $stock);

$query = "INSERT INTO book_reg (reg_id, book_name, isbn_no, publisher, author, info_link, img, stock) VALUES('". $_SESSION['userid'] . "','" . $bookname . "','" . $isbn . "','" . $publisher . "','" . $authorname . "','" . $info . "','" . $image . "','" . $stock . "')";
mysqli_query($con, $query) or die(mysqli_error($con));
header("../main/index.php");

?>

