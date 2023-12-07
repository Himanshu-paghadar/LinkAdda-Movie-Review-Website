<?php
session_start();
include "header.php";
include "db.php";
$username = $_SESSION['username'];

$id = $_GET['UpdateUser'];

$sql="SELECT * FROM user_login";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$d_username=$row['username'];
$d_email=$row['email'];
$d_password=$row['password'];

if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $upd = "UPDATE user_login set id='$id',username='$username', password='$password' WHERE id='$id' ";
    $res=mysqli_query($con,$upd);
    if($res > 0){
        echo '<script>alert("Selected row has been updated..!");</script>';
        header('Location:view_user.php');
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
    <title>User</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-4">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $d_username; ?>">
            </div>
            <div class="mb-4">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $d_email; ?>">
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $d_password; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>

</body>

</html>
<?php } ?>