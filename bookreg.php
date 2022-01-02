<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Reg</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
        <h2> Reg the Book</h2>
        <form action="./include/insert.php" method="post" class="was-validated">
            <div class="form-group">
                <label for="uname">Book Name:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="bookname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="pwd">ISBN:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="isbn" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="uname">Publish by</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="publisher" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="uname">Author</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="authorname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="uname">Info link</label>
                <input type="link" class="form-control" id="uname" placeholder="Enter username" name="info" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="uname">Image</label>
                <input type="file" class="form-control" id="uname" placeholder="Enter username" name="image" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="uname">Stock</label>
                <input type="number" class="form-control" id="uname" placeholder="Enter username" name="stock" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> I agree on T&C.
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>
            </div>
            <center> <button type="submit" class="btn btn-primary">Submit</button></center>
        </form>
    </div>

</body>

</html>