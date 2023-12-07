<?php
session_start();
include "db.php";
include "header.php";
$username = $_SESSION['username'];

if(isset($_POST['add_movies'])){
    $name = $_POST['name'];
    $desc=$_POST['desc'];
    $platform=$_POST['platform'];
    $genre=$_POST['genre'];
    $year=$_POST['year'];
    $rating=$_POST['rating'];
    $poster=$_FILES['sposter'];
    $bposter=$_FILES['bposter'];

    $po_name = $poster['name'];
    $po_temp = $poster['tmp_name'];
    
    $upload_po = 'images/'.$po_name;
    move_uploaded_file($po_temp,$upload_po);

    $bpo_name = $bposter['name'];
    $bpo_temp = $bposter['tmp_name'];

    $upload_bpo = 'images/'.$bpo_name;
    move_uploaded_file($bpo_temp,$upload_bpo);

    $sql = "INSERT INTO movies (name,description,platform,genre,year,rating,sposter,bposter) VALUES('$name','$desc','$platform','$genre','$year','$rating','$upload_po','$upload_bpo')";

    $res = mysqli_query($con,$sql);
    
}

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
        <title>Series</title>
        <link rel="icon" type="image/x-icon" href="../source/img/favicon.ico">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <style>
            img{
                width: 100px;
            }
        </style>
    </head>

    <body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="add_movies.php" class="text-light">Add Movie</a></button>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Platform</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Year</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Big-Poster</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $record = "SELECT * FROM movies";
                $res = mysqli_query($con, $record);
                if ($res) {
                    while ($row = mysqli_fetch_assoc($res)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $desc=$row['description'];
                        $platform=$row['platform'];
                        $genre=$row['genre'];
                        $year=$row['year'];
                        $rating=$row['rating'];
                        $poster=$row['sposter'];
                        $bposter=$row['bposter'];

                        echo '<tr>
                                <th scope="row">' . $id . '</th>
                                <td>' . $name . '</td>
                                <td>' . $desc . '</td>
                                <td>' . $platform . '</td>
                                <td>' . $genre . '</td>
                                <td>' . $year . '</td>
                                <td>' . $rating . '</td>
                                <td><img src="'. $poster . '"/></td>
                                <td><img src="' . $bposter . '"/></td>
                                <td><button class="btn btn-primary"><a class="text-light" href="updatemovies.php?UpdateMovies='.$id.'">Update</a></button>
                                    <button class="btn btn-danger"><a class="text-light" href="delete.php?DeleteMovies='.$id.'">Delete</a></button>
                                </td>
                            </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
    </body>

    </html>


    <?php
}
?>