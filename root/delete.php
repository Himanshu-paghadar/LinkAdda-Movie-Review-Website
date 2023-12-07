<?php 
// delete the user
include "db.php";
if(isset($_GET['DeleteUser'])){
    $id = $_GET['DeleteUser'];
    $del = "DELETE FROM user_login WHERE id='$id'";
    $res = mysqli_query($con,$del);
    if($res){
        echo "<script>alert('Selected row has been deleted..!');</script>";
        header('Location:view_user.php');
    }
}
// delete the feedbacks
if(isset($_GET['Deletereply'])){
    $id = $_GET['Deletereply'];
    $del = "DELETE FROM feedback WHERE id='$id'";
    $res = mysqli_query($con,$del);
    if($res){
        echo "<script>alert('Selected row has been deleted..!');</script>";
        header('Location:feedback.php');
    }
}

// delete the series
if(isset($_GET['DeleteSeries'])){
    $id = $_GET['DeleteSeries'];
    $del = "DELETE FROM series WHERE id='$id'";
    $res = mysqli_query($con,$del);
    if($res){
        echo "<script>alert('Selected row has been deleted..!');</script>";
        header('Location:root_series.php');
    }
}

// delete the movies
if(isset($_GET['DeleteMovies'])){
    $id = $_GET['DeleteMovies'];
    $del = "DELETE FROM movies WHERE id='$id'";
    $res = mysqli_query($con,$del);
    if($res){
        echo "<script>alert('Selected row has been deleted..!');</script>";
        header('Location:root_movies.php');
    }
}
// delete the Kids
if(isset($_GET['DeleteKids'])){
    $id = $_GET['DeleteKids'];
    $del = "DELETE FROM kids WHERE id='$id'";
    $res = mysqli_query($con,$del);
    if($res){
        echo "<script>alert('Selected row has been deleted..!');</script>";
        header('Location:root_kids.php');
    }
}
?>