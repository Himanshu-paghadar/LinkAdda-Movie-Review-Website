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
        <title>Feedback</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="icon" type="image/x-icon" href="../source/img/favicon.ico">
    </head>

    <body>
        <div class="container">
            <table class="table my-5">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Feedbacks</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $record = "SELECT * FROM feedback";
                    $res = mysqli_query($con, $record);
                    if ($res) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            $id = $row['id'];
                            $user = $row['username'];
                            $email = $row['email'];
                            $reply = $row['reply'];
                            echo '<tr>
                                <th scope="row">' . $id . '</th>
                                <td>' . $user . '</td>
                                <td>' . $email . '</td>
                                <td>' . $reply . '</td>
                                <td>
                                    <button class="btn btn-danger"><a class="text-light" href="delete.php?Deletereply=' . $id . '">Delete</a></button>
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