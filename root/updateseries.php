<?php
session_start();
include "header.php";
include "db.php";
$username = $_SESSION['username'];

$id = $_GET['UpdateSeries'];

$sql= "SELECT * FROM series";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$d_name = $row['name'];
$d_desc=$row['description'];
$d_platform=$row['platform'];
$d_genre=$row['genre'];
$d_year=$row['year'];
$d_rating=$row['rating'];
$d_poster=$row['sposter'];
$d_bposter=$row['bposter'];

if(isset($_post['Upd_series'])){
    $name = $_POST['name'];
    $desc=$_POST['description'];
    $platform=$_POST['platform'];
    $genre=$_POST['genre'];
    $year=$_POST['year'];
    $rating=$_POST['rating'];
    $poster=$_POST['sposter'];
    $bposter=$_POST['bposter'];

    $upd = "UPDATE series set id='$id',description='$desc', platform='$platform',genre='$genre',year='$year',rating='$rating',poster='$poster',bposter='$bposter' WHERE id='$id' ";
    $res=mysqli_query($con,$upd);
    if($res > 0){
        echo '<script>alert("Selected row has been updated..!");</script>';
        header('Location:root_series.php');
    }
}

if ($username == null) {
    echo "Please login first to access the site...!";
    header('location: root_login.php');
} else {

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../source/img/favicon.ico" type="image/x-icon">
    <title>Update-Series</title>
</head>

<body>
<h2 class="text-center text-light my-4">Update Series</h2>
    <div class="container d-flex justify-content-center">
        <form method="post" class="w-50 " enctype="multipart/form-data">
            <div class="form-group my-3">
                <input type="text" name="name" class="form-control" placeholder="Series Title" value="<?php echo $d_name ?>">
            </div>
            <div class="form-group my-3">
                <input type="text" name="desc" class="form-control" placeholder="Description" value="<?php echo $d_desc; ?>">
            </div>
            <div class="form-group my-3">
                <select name="platform" class="form-control" value="<?php echo $d_platform; ?>">
                    <option>Select Platforms</option Selected>
                    <option value="Netflix" name="netflix">Netflix</option>
                    <option value="Amazon Prime" name="amazon prime">Amazon Prime</option>
                    <option value="Disney+ hotstar" name="disney+ hotstar">Disney+ Hotstar</option>
                    <option value="Apple+" name="apple+">Apple+</option>       
                </select>
            </div>
            <div class="form-group my-3">
                <input type="text" name="genre" class="form-control" placeholder="Genre" value="<?php echo $d_genre; ?>">
            </div>
            <div class="form-group my-3">
                <input type="date" name="year" class="form-control" placeholder="Year" value="<?php echo $d_year; ?>">
            </div>
            <div class="form-group my-3">
                <input type="tel" name="rating" class="form-control" placeholder="Rating" max-length="2" value="<?php echo $d_rating; ?>">
            </div>
            <div class="form-group my-3">
                <input type="file" name="sposter" class="form-control" placeholder="Cover Poster">
            </div>
            <div class="form-group my-3">
                <input type="file" name="bposter" class="form-control" placeholder="Banner Poster">
            </div>
            <div class="form-group my-3">
                <input type="submit" name="Upd_series" class="btn btn-primary text-light" >
            </div>
        </form>
    </div>

</body>

</html>
<?php } ?>