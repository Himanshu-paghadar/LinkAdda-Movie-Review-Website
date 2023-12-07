<?php
session_start();
include "db.php";
include "header.php";
$username = $_SESSION['username'];


if ($username == null) {
    echo "Please login first to access the site...!";
    header('location: root_login.php');
} else {

?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add-Animation</title>
        <link rel="icon" type="image/x-icon" href="../source/img/favicon.ico">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
<body>
    <h2 class="text-center text-light my-4">Insert Animation Movies</h2>
    <div class="container d-flex justify-content-center">
        <form method="post" action="root_kids.php" class="w-50" enctype="multipart/form-data">
            <div class="form-group my-3">
                <input type="text" name="name" class="form-control" placeholder="Animation Movies Title">
            </div>
            <div class="form-group my-3">
                <input type="text" name="desc" class="form-control" placeholder="Description">
            </div>
            <div class="form-group my-3">
                <select name="platform" class="form-control">
                    <option>Select Platforms</option Selected>
                    <option value="Netflix" name="netflix">Netflix</option>
                    <option value="Amazon Prime" name="amazon prime">Amazon Prime</option>
                    <option value="Disney+ hotstar" name="disney+ hotstar">Disney+ Hotstar</option>
                    <option value="Apple+" name="apple+">Apple+</option>       
                </select>
            </div>
            <div class="form-group my-3">
                <input type="text" name="genre" class="form-control" placeholder="Genre">
            </div>
            <div class="form-group my-3">
                <input type="date" name="year" class="form-control" placeholder="Year">
            </div>
            <div class="form-group my-3">
                <input type="tel" name="rating" class="form-control" placeholder="Rating" max-length="2">
            </div>
            <div class="form-group my-3">
                <input type="file" name="sposter" class="form-control" placeholder="Cover Poster">
            </div>
            <div class="form-group my-3">
                <input type="file" name="bposter" class="form-control" placeholder="Banner Poster">
            </div>
            <div class="form-group my-3">
                <input type="submit" name="add_kids" class="btn btn-primary text-light" >
            </div>
        </form>
    </div>
</body>
</html>
<?php 
} 
?>