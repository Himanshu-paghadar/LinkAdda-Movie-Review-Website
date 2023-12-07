<?php
session_start();
$username = $_SESSION['username'];

if ($username == null) {
    echo "Please login first to access the site...!";
} else {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movies</title>
        <link rel="icon" type="image/x-icon" href="./source/img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="./style/header_style.css">
        <link rel="stylesheet" type="text/css" href="./style/index_style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    </head>

    <body>
        <header>
            <video src="./source/video/jurasic world.webm" autoplay muted loop></video>
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
                <h1 id="title">Jurasic World</h1>
                <p>Four years after the destruction of Isla Nublar, dinosaurs now live and hunt alongside humans all over
                    the world. This fragile balance will reshape the future and determine, once and for all, whether human
                    beings are to remain the apex predators on a planet they now share with history's most fearsome
                    creatures.</p>
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
                        <img src="./source/img/ant man.jpg" alt="" class="poster">
                        <div class="rest_card">
                            <img src="./source/img/ant man1.jpg" alt="">
                            <div class="cont">
                                <h4>Ant Man</h4>
                                <div class="sub">
                                    <p>Thriller, 2020</p>
                                    <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;8</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card">
                        <img src="./source/img/avengers.jpg" alt="" class="poster">
                        <div class="rest_card">
                            <img src="./source/img/avengers1.jpg" alt="">
                            <div class="cont">
                                <h4>Avengers</h4>
                                <div class="sub">
                                    <p>Sci-Fi, 2020</p>
                                    <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.3</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card">
                        <img src="./source/img/eesho.jpeg" alt="" class="poster">
                        <div class="rest_card">
                            <img src="./source/img/eesho1.jpg" alt="">
                            <div class="cont">
                                <h4>Eesho</h4>
                                <div class="sub">
                                    <p>Crime, 2021</p>
                                    <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.6</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card">
                        <img src="./source/img/eternals.jpg" alt="" class="poster">
                        <div class="rest_card">
                            <img src="./source/img/eternals1.webp" alt="">
                            <div class="cont">
                                <h4>Eternals</h4>
                                <div class="sub">
                                    <p>Sci-fi, 2022</p>
                                    <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.7</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card">
                        <img src="./source/img/Jhon Wick.jpg" alt="" class="poster">
                        <div class="rest_card">
                            <img src="./source/img/john wick1.webp" alt="">
                            <div class="cont">
                                <h4>John Wick</h4>
                                <div class="sub">
                                    <p>Action, 2022</p>
                                    <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.7</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card">
                        <img src="./source/img/jurassic world.jpg" alt="" class="poster">
                        <div class="rest_card">
                            <img src="./source/img/jurassic world1.jpg" alt="">
                            <div class="cont">
                                <h4>Jurassic World</h4>
                                <div class="sub">
                                    <p>Thriller, 2022</p>
                                    <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;8.6</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card">
                        <img src="./source/img/spiderman.jpg" alt="" class="poster">
                        <div class="rest_card">
                            <img src="./source/img/spiderman1.jpg" alt="">
                            <div class="cont">
                                <h4>Spiderman</h4>
                                <div class="sub">
                                    <p>Action, 2021</p>
                                    <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.6</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card">
                        <img src="./source/img/topgun.jpg" alt="" class="poster">
                        <div class="rest_card">
                            <img src="./source/img/topgun1.jpg" alt="">
                            <div class="cont">
                                <h4>Topgun</h4>
                                <div class="sub">
                                    <p>Thriller,Action, 2021</p>
                                    <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.1</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card">
                        <img src="./source/img/uncharted.webp" alt="" class="poster">
                        <div class="rest_card">
                            <img src="./source/img/uncharted1.jpg" alt="">
                            <div class="cont">
                                <h4>Uncharted</h4>
                                <div class="sub">
                                    <p>Action, 2022</p>
                                    <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;8.1</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card">
                        <img src="./source/img/thor love of thunder.jpg" alt="" class="poster">
                        <div class="rest_card">
                            <img src="./source/img/thor love of thunder1.avif" alt="">
                            <div class="cont">
                                <h4>Thor Love Of Thunder</h4>
                                <div class="sub">
                                    <p>Sci-fi,Action, 2021</p>
                                    <h3><span>IMDB</span><i class="bi bi-star-fill"></i>&nbsp;&nbsp;9.8</h3>
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