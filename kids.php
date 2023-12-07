<?php
session_start();
$username = $_SESSION['username'];

if ($username == null) {
    echo "Please login first to access the site...!";
}
else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids</title>
    <link rel="icon" type="image/x-icon" href="./source/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./style/header_style.css">
    <link rel="stylesheet" type="text/css" href="./style/index_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

</head>

<body>
    <header>
        <video src="./source/video/luca.mp4" autoplay muted loop></video>
        <nav>
            <div class="logo_ul">
                <a href="index.php"><img src="./source/img/logo.png" alt="LinkAdda Logo"></a>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="series.php">Series</a>
                    </li>
                    <li>
                        <a href="movie.php">Movie</a>
                    </li>
                    <li>
                        <a href="kids.php">Kids</a>
                    </li>
                    <li>
                        <a href="feedback.php">Feedback</a>
                    </li>
                </ul>
            </div>
            <div class="search_user">
                <input type="search" name="search_bar" id="search_input" placeholder="Search...">
                <a href="#"><img src="./source/img/user.png" alt="" onclick="toggleMenu()"></a>
                
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="./source/img/user.png" alt="">
                                <h2>James Lumen</h2>
                            </div>
                            <hr>
                            <a href="logout.php" class="sub-menu-link">
                                <img src="./source/img/logout.png">
                                <p>Logout</p>
                                <span>></span> 
                            </a>
                        </div>
                    </div>
                <script>
                    let subMenu = document.getElementById("subMenu");
                    function toggleMenu(){
                        subMenu.classList.toggle("open-menu");
                    }
                </script>
                <div class="search">
                    <a href="#" class="card">
                        <img src="./source/img/the boys.jpg" alt="">
                        <div class="cont">
                            <h3>The Boys</h3>
                            <p>Action, 2021 <span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;9.6</p>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
        <div class="content">
            <h1 id="title">Luca</h1>
            <p>Luca, a sea monster, befriends Alberto, another one of his kind who takes him on a land adventure. He experiences an exciting summer while keeping his parents in the dark.</p>
            <div class="details">
                <h6>A Netflix Origional Film</h6>
                <h5 id="gen">Action</h5>
                <h4 id="date">2021</h4>
                <h3 id="rate"><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;9.8</h3>
            </div>
            <div class="btns">
                <a href="#" id="play">Watch<i class="bi bi-play-fill"></i></a>
                <a href="#" id="Download_main"><i class="bi bi-cloud-arrow-down"></i></a>
            </div>
        </div>
        <section>
            <h4>Popular</h4>
            <i class="bi bi-chevron-left"></i>
            <i class="bi bi-chevron-right"></i>
            <div class="cards">
                <a href="#" class="card">
                    <img src="./source/img/kids/Cars.jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/Cars1.jpeg" alt="">
                        <div class="cont">
                            <h4>Cars</h4>
                            <div class="sub">
                                <p>Racing, 2021</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.6</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <img src="./source/img/kids/Despicable Me.jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/despicable me1.jpeg" alt="">
                        <div class="cont">
                            <h4>Despicable Me</h4>
                            <div class="sub">
                                <p>Action, Comedy, 2020</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;8</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <img src="./source/img/kids/elemental.jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/elemental1.jpeg" alt="">
                        <div class="cont">
                            <h4>Elemental</h4>
                            <div class="sub">
                                <p>Sci-Fi, 2020</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.3</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <img src="./source/img/kids/Ferdinand.jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/Ferdinand1.jpeg" alt="">
                        <div class="cont">
                            <h4>Ferdinand</h4>
                            <div class="sub">
                                <p>Love, 2019</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;7.6</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <img src="./source/img/kids/finding dory.jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/finding dory1.jpeg" alt="">
                        <div class="cont">
                            <h4>Finding Dory</h4>
                            <div class="sub">
                                <p>Thriller, 2021</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.6</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <img src="./source/img/kids/incredible 2.jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/incredibles 2 1.jpeg" alt="">
                        <div class="cont">
                            <h4>Incredible 2</h4>
                            <div class="sub">
                                <p>Sci-fi, 2022</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.7</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <img src="./source/img/kids/luca.jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/luca1.jpeg" alt="">
                        <div class="cont">
                            <h4>Luca</h4>
                            <div class="sub">
                                <p>Thriller, 2022</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;8.6</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <img src="./source/img/kids/onwards.jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/onwards1.jpeg" alt="">
                        <div class="cont">
                            <h4>Onwards</h4>
                            <div class="sub">
                                <p>Comedy, 2022</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <img src="./source/img/kids/The Boss Baby.jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/The Boss Baby1.jpeg" alt="">
                        <div class="cont">
                            <h4>The Boss Baby</h4>
                            <div class="sub">
                                <p>Attitude, 2020</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;7.1</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <img src="./source/img/kids/WALL_E .jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/wall_e1.jpeg" alt="">
                        <div class="cont">
                            <h4>WALL-E</h4>
                            <div class="sub">
                                <p>Robotics, 2021</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.6</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <img src="./source/img/kids/Cars.jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/Cars1.jpeg" alt="">
                        <div class="cont">
                            <h4>Cars</h4>
                            <div class="sub">
                                <p>Animation, 2021</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;8.2</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card">
                    <img src="./source/img/kids/luca.jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/luca1.jpeg" alt="">
                        <div class="cont">
                            <h4>Luca</h4>
                            <div class="sub">
                                <p>Thriller, 2021</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;7.4</h3>
                            </div>
                        </div>
                    </div>
                </a>
                
                <a href="#" class="card">
                    <img src="./source/img/kids/WALL_E .jpeg" alt="" class="poster">
                    <div class="rest_card">
                        <img src="./source/img/kids/wall_e1.jpeg" alt="">
                        <div class="cont">
                            <h4>WALL-E</h4>
                            <div class="sub">
                                <p>Animation, 2018</p>
                                <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;8.4</h3>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </section>
    </header>
    <script src="./script/app.js"></script>
</body>

</html>
<?php } ?>