<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../main/style.css">
</head>

<body>
    <?php
    include './include/header.php';
    require("include/connection.php");
    ?>
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="img-rounded" src=""><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Update Book Stock & Details</h4>
                </div>
                <form action="include/update.inc.php" method="post">
                    <?php
                    $id = $_GET['id'];
                    $database = mysqli_query($con, "SELECT * from  book_reg  where id =" . $id);
                    while ($row_list = mysqli_fetch_assoc($database)) {
                    ?>
                        <input type="hidden" name="id" value="<?php echo $row_list['id'] ?>">
                            <div><img src="<?php echo $row_list['img'] ?>" width="175" height="200"></div>
                        <div class="row mt-2">

                            <div class="col-md-6"><label class="labels">Book Name</label><input type="text" name="book_name" class="form-control" placeholder="" value="<?php echo $row_list['book_name'] ?>"></div>
                            <div class="col-md-6"><label class="labels">ISBN No</label><input type="text" name="isbn_no" class="form-control" value="<?php echo $row_list['isbn_no'] ?>" placeholder=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Publisher Name</label><input type="text" name="publisher" class="form-control" placeholder="Publisher Name" value="<?php echo $row_list['publisher'] ?>"></div>
                            <div class="col-md-12"><label class="labels">Author Name</label><input type="text" name="author" class="form-control" placeholder="Author Name" value="<?php echo $row_list['author'] ?>"></div>
                            <div class="col-md-12"><label class="labels">For_Info_Link</label><input type="text" name="info_link" class="form-control" placeholder="Info" value="<?php echo $row_list['info_link'] ?>"></div>
                            <div class="col-md-12"><label class="labels">Update_Image</label><input type="file" name="img" class="form-control" placeholder="" value="<?php echo $row_list['img'] ?>"></div>
                            <div class="col-md-12"><label class="labels">Availabe Stocks</label><input type="text" name="stocks" class="form-control" placeholder="" value="<?php echo $row_list['stock'] ?>"></div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Update</button>
                        </div>
                    <?php
                    }

                    ?>
                </form>

            </div>
        </div>
    </div>

</body>

</html>