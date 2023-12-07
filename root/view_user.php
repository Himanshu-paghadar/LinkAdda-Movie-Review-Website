<?php
session_start();
include "header.php";
include "db.php";
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../source/img/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $record = "SELECT * FROM user_login";
                $res = mysqli_query($con, $record);
                if ($res) {
                    while ($row = mysqli_fetch_assoc($res)){
                        $id = $row['id'];
                        $user = $row['username'];
                        $email = $row['email'];
                        $password = $row['password'];
                        echo '<tr>
                                <th scope="row">' . $id . '</th>
                                <td>' . $user . '</td>
                                <td>' . $email . '</td>
                                <td>' . $password . '</td>
                                <td><button class="btn btn-primary"><a class="text-light" href="update.php?UpdateUser='.$id.'">Update</a></button>
                                    <button class="btn btn-danger"><a class="text-light" href="delete.php?DeleteUser='.$id.'">Delete</a></button>
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