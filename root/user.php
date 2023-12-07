<?php
session_start();
include "header.php";
include "db.php";
$username = $_SESSION['username'];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $input = "INSERT into user_login(username,email,password) values('$username','$email','$password')";
    $res=mysqli_query($con,$input);
    if($res > 0){
        echo "<script>alert('Record has been Inserted..!');</script>";
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
    <title>Add-User</title>
</head>

<body>
    <div class="container my-5" align="center">
        <h2 class="text-center text-light my-4">Add User</h2>
        <form method="post" class="form-group my-3 w-50">
            <div class="mb-4">
                <label class="form-label text-light">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-4">
                <label class="form-label text-light">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-4">
                <label class="form-label text-light">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>
<?php } ?>