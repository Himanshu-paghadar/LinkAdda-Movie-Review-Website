<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../source/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/header_style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="root_index.php"><img src="../source/img/logo.png"
                    alt="LinkAdda Logo" class="logo"></a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="root_index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_user.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="root_series.php">Series</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="root_movies.php">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="root_kids.php">Kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="feedback.php">Feedback</a>
                    </li>
                </ul>
                <form align-items="right">
                    <a href="#"><img src="../source/img/user.png" alt="" class="user_logo" onclick="toggleMenu()"></a>
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="../source/img/user.png" alt="">
                                <h3>James Lumen</h3>
                            </div>
                            <hr>
                            <a href="logout.php" class="sub-menu-link">
                                <img src="../source/img/logout.png">
                                <p>Logout</p>
                                <span>></span>
                            </a>
                        </div>
                    </div>
                    </a>
                    <script>
                        let subMenu = document.getElementById("subMenu");
                        function toggleMenu() {
                            subMenu.classList.toggle("open-menu");
                        }
                    </script>
                </form>
            </div>
        </div>
    </nav>
    
</body>

</html>