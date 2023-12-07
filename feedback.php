<?php
session_start();
include "root/db.php";
$username = $_SESSION['username'];

if (isset($_POST['feed'])) {

    $user = $_POST['username'];
    $email = $_POST['email'];
    $reply = $_POST['reply'];

    $data_insert = "INSERT INTO feedback(username,email,reply) VALUES('$user','$email','$reply')";

    $res = mysqli_query($con, $data_insert);

    if ($res > 0) {
        echo '<script>alert("Feedback Submitted Successfully..!");</script>';
    } else {
        echo '<script>alert("Feedback Submitted Failed..!");</script>';

    }
}

if ($username == null) {
    echo "Please login first to access the site...!";
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <title>Feedback</title>
        <link rel="icon" type="image/x-icon" href="./source/img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="./style/admin_login.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    </head>

    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="#" class="sign-in-form" method="post">
                        <h2 class="title">Message Us Here</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Username" name="username" />
                        </div>
                        <div class="input-field">
                            <i class="bi bi-envelope-at-fill"></i>
                            <input type="email" placeholder="Email" name="email" />
                        </div>
                        <div class="input-field">
                            <i class="bi bi-chat-right-text-fill"></i>
                            <input type="text" name="reply" placeholder="Reply Us">
                        </div>
                        <input type="submit" value="Submit" name="feed" class="btn solid" />
                    </form>
                </div>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <img width="500" height="400" src="./source/img/feedback.webp" alt="FeedBack -Image" />
                    <style>
                        img {
                            padding-left: 180px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </body>

    </html>

<?php } ?>