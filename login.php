<?php
session_start();
include "root/db.php";

if(isset($_POST['log_btn'])) {
   $user = $_POST['username'];
   $password = $_POST['password'];

   $login_check_query = "SELECT * FROM user_login WHERE username='$user' AND password='$password'";

   $login_check_run = mysqli_query($con, $login_check_query);

   if(mysqli_num_rows($login_check_run) == 1) {
      $_SESSION['username'] = $user; 
      header('location:index.php');
      exit();

    } else {
      echo '<script>alert("Please Enter Valid Data..!");</script>';

    }
  }
  if(isset($_POST['reg_btn'])) {

    $user = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data_insert = "INSERT INTO user_login(username,email,password) VALUES('$user','$email','$password')";

    $res = mysqli_query($con,$data_insert);

    if($res > 0){
      echo '<script>alert("Registration Successfully..!");</script>';
    }else{
      echo '<script>alert("Registration Failed..!");</script>';
      
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./style/admin_style.css" />
    <title>User Login & Register</title>
    <link rel="icon" type="image/x-icon" href="./source/img/favicon.ico">
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method="post">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <input type="submit" value="Login" name="log_btn" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form" method="post">
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <input type="submit" class="btn" name="reg_btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
            Let's Be The Part of Movies Verse..!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign Up
            </button>
          </div>
          <img src="./source/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            Let's Dive into the Movies Verse..!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign In
            </button>
          </div>
          <img src="./source/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="./script/admin_login.js"></script>
  </body>
</html>
