<?php
session_start();
include "header.php";
include "db.php";
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
        <title>Dashboard</title>
        <link rel="icon" type="image/x-icon" href="../source/img/favicon.ico">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="admin-content">
            <div class="container">
                <table class="table my-5" border-radius="20px">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">
                                <h6 align="center"><i class="bi bi-people-fill"></i> Users</h6>
                            </th>
                            <th scope="col">
                                <h6 align="center"><i class="bi bi-film"></i> Movies</h6>
                            </th>
                            <th scope="col">
                                <h6 align="center"><i class="bi bi-camera-reels-fill"></i> Series</h6>
                            </th>
                            <th scope="col">
                                <h6 align="center"><i class="bi bi-film"></i> Kids Movies</h6>
                            </th>
                            <th scope="col">
                                <h6 align="center"><i class="bi bi-chat-left-text-fill"></i> Feedbacks</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <td align="center">
                            <div class="dashboard-item">
                                <p>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total_users FROM user_login";
                                    $result = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $user = $row['total_users'];
                                    echo $user;
                                    ?>
                                </p>
                            </div>
                        </td>
                        <td align="center">
                            <div class="dashboard-item">
                                <p>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total_movie FROM movies";
                                    $result = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $movie = $row['total_movie'];
                                    echo $movie;
                                    ?>
                                </p>
                            </div>
                        </td>
                        <td align="center">
                            <div class="dashboard-item">
                                <p>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total_series FROM series";
                                    $result = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $series = $row['total_series'];
                                    echo $series;
                                    ?>
                                </p>
                            </div>
                        </td>
                        <td align="center">
                            <div class="dashboard-item">
                                <p>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total_kids FROM kids";
                                    $result = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $kids = $row['total_kids'];
                                    echo $kids;
                                    ?>
                                </p>
                            </div>
                        </td>
                        <td align="center">
                            <div class="dashboard-item">
                                <p>
                                    <?php
                                    $sql = "SELECT COUNT(*) AS total_feed FROM feedback";
                                    $result = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $feeds = $row['total_feed'];
                                    echo $feeds;
                                    ?>
                                </p>
                            </div>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>

    </body>

    </html>


    <?php
}
?>