<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require("include/connection.php");
    ?>
    <?php
    include './include/header.php';
    ?>
    <br>
    <div class="container">
        <h2>Inventory Details</h2>
        <p></p>
        <table class="table">
            <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Book Id</th>
                    <th>ISBN</th>
                    <th>Availabe Books in Stocks</th>
                    <th>Info_Link</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $database = mysqli_query($con, "SELECT * from book_reg where reg_id = " . $_SESSION['userid']);
                while ($row_list = mysqli_fetch_assoc($database)) {
                ?>
                    <tr>
                        <td><?php echo $row_list['book_name'] ?></td>
                        <td><?php echo $row_list['id'] ?></td>
                        <td><?php echo $row_list['isbn_no'] ?></td>
                        <td><?php echo $row_list['stock'] ?></td>
                        <td><button type="link" class="btn btn-link"><?php echo $row_list['info_link'] ?>Info</button></td>
                        <td><a href="./include/delete.inc.php?id=<?php echo $row_list['id'] ?>" button type=" button" class="btn btn-primary">Delete</button></button></td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>