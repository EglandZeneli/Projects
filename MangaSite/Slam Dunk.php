<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'in-dex.php';?>
    <script src="js/Slam Dunk.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title id="Tit">Manga Reader</title>

    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="icon" href="http://www.your-web-site-name.com/favicon.ico">
    <script>
            function map1(){
        window.open("https://www.animenewsnetwork.com/news/2023-01-20/gleipnir-manga-ends-with-14th-volume/.193963","_blank");    
    }
    function map2(){
        window.open("https://www.animenewsnetwork.com/news/2023-01-20/pen-america-nominates-the-tatami-galaxy-novel-for-literary-translation-award/.194031","_blank");    
    }
    function map3(){
        window.open("https://www.animenewsnetwork.com/news/2023-01-17/tokyo-revengers-spinoff-manga-todai-revengers-ends-in-6th-volume/.193898","_blank");    
    }
    function map4(){
        window.open("https://www.animenewsnetwork.com/news/2023-01-09/captain-tsubasa-rising-sun-manga-to-start-the-final-arc/.193634","_blank");    
    }
    function map5(){
        window.open("https://www.animenewsnetwork.com/interest/2023-01-06/shinchosha-publishes-ai-drawn-manga/.193569","_blank");    
    }
    function bruh(){
    document.getElementById("Tit").innerHTML=manga;
    document.getElementById("cover").src="img/"+manga+"/1/1.jpg";
    document.getElementById("late").innerHTML="Chapter "+totalchap;
    document.getElementById("late").href=manga+totalchap+".php";
    document.getElementById("Header").innerHTML=manga;
    document.getElementById("Chap1").href=manga+1+".php";
    for(let i=totalchap;i>0;i--){
        const table = document.getElementById("chapters");
        const row = document.createElement("TR");
        table.appendChild(row)
        const cell = document.createElement("TH");
        row.appendChild(cell);
        const para = document.createElement("a");
        cell.appendChild(para);
        const node = document.createTextNode("Chapter "+i);
        para.appendChild(node);
        para.href=manga+i+".php";

    }
    }
    </script>
</head>

<body onload="bruh()">
<!-- Header Section Begin -->
<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Homepage</a></li>
                                <li><a href="./library.php">Library <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                        <li><a href="./library.php#Action">Action</a></li>
                                        <li><a href="./library.php#Adventure">Adventure</a></li>
                                        <li><a href="./library.php#Comedy">Comedy</a></li>
                                        <li><a href="./library.php#Drama">Drama</a></li>
                                        <li><a href="./library.php#Dark-Fantasy">Dark Fantasy</a></li>
                                        <li><a href="./library.php#Psychological">Psychological</a></li>
                                        <li><a href="./library.php#Horror">Horror</a></li>
                                        <li><a href="./library.php#Sports">Sports</a></li>
                                    </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                       <?php
                        if (($user_data["role"] == 'Admin')) {
                            ?>
                        <a id='up' href="table.php"><?php echo $user_data["role"] ?></a>
                        <?php
                        if (isset($_SESSION["user_id"])) {
                            ?>
                         <a id='up' href="#"><?php echo $user_data["user_name"] ?></a>
                         <a href="logout.php">Log Out</a>
                         <?php
                        }
                        }
                        elseif (($user_data["role"] == 'User')){
                        ?>
                         <a id='up' href="#"><?php echo $user_data["user_name"] ?></a>
                         <a href="logout.php">Log Out</a>
                         <?php
                        }
                       else
                       {
                        ?>
                        <a href="./login.php"><span class="icon_profile"></span></a>
                        <?php
                       }
                        ?>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    <!-- start reading intro -->
    <section class="product spad">
    <div class="container">
    <div class="row">
    <div class="col-lg-8">
    <div class="trending__product">
    <div class="container my-5" >
        <div class="section-title">
            <h5 id="Header" style="font-size: 35px;"></h5>
        </div>
        <div class="read-intro" id="backgroond">
            <div class="row">
                <div class="cover col-*">
                    <img class="shadow" src="img/cover1.jpg" alt="" id="cover" height="350px" width="250px">
                </div>
                <div class="info col">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row" id="shitman">Genre:</th>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <th scope="row" id="shitman">Artist:</th>
                                <td>Takehiko Inoue</td>
                            </tr>
                            <tr>
                                <th scope="row" id="shitman">Latest:</th>
                                <td ><a id="late"></a></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <p>
                        Hanamichi Sakuragi is a delinquent with a long history of getting dumped by girls. After enrolling in Shohoku High School, Hanamichi becomes interested in a girl named Haruko who loves the game of basketball.
                    </div>
            </div>
            <div class="row">
                <a class="btn my-3 mx-1 px-5" id="Chap1" href="#">Start reading CHAP. 1</a>
            </div>
        </div>
        <div class="container my-5">
            <div class="intro-lists">
                <div class="section-title">
                    <h5 style="font-size: 35px;">Chapters</h5>
                </div>
                <div class="tab-content">
                    <!-- start ch -->
                    <div id="ch" class="tab-pane fade in active show">
                        <div class="row" id="backgroond">
                            <table class="table table-striped" id="chapters">
                                <tbody></tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
    <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="product__sidebar">
            <div class="product__sidebar__view">
                <div class="section-title">
                    <h5>News</h5>
                </div>
                <div class="filter__gallery">
                    <div class="product__sidebar__view__item set-bg mix day years cursor"
                    data-setbg="img/sidebar/glepnir-news.jpg" onclick="map1()">
                    <h5><a href="https://www.animenewsnetwork.com/news/2023-01-20/gleipnir-manga-ends-with-14th-volume/.193963" target="_blank" rel="noreferrer noopener">Gleipnir Manga Ends With 14th Volume</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix month week cursor"
                data-setbg="img/sidebar/tatami-news.jpg" onclick="map2()">
                <h5><a href="https://www.animenewsnetwork.com/news/2023-01-20/pen-america-nominates-the-tatami-galaxy-novel-for-literary-translation-award/.194031" target="_blank" rel="noreferrer noopener">PEN America Nominates The Tatami Galaxy Novel for Literary Translation Award</a></h5>
            </div>
            <div class="product__sidebar__view__item set-bg mix week years cursor"
            data-setbg="img/sidebar/tokyo-news.jpg" onclick="map3()">
            <h5><a href="https://www.animenewsnetwork.com/news/2023-01-17/tokyo-revengers-spinoff-manga-todai-revengers-ends-in-6th-volume/.193898"  target="_blank" rel="noreferrer noopener">Tokyo Revengers Spinoff Manga Tōdai Revengers Ends in 6th Volume</a></h5>
        </div>
        <div class="product__sidebar__view__item set-bg mix years month cursor"
        data-setbg="img/sidebar/tsubasa-news.jpg" onclick="map4()">
        <h5><a href="https://www.animenewsnetwork.com/news/2023-01-09/captain-tsubasa-rising-sun-manga-to-start-the-final-arc/.193634"  target="_blank" rel="noreferrer noopener">Captain Tsubasa: Rising Sun Manga to Start 'The Final' Arc (Updated)</a></h5>
    </div>
    <div class="product__sidebar__view__item set-bg mix day cursor"
    data-setbg="img/sidebar/ai-news.jpg" onclick="map5()">
    <h5><a href="https://www.animenewsnetwork.com/interest/2023-01-06/shinchosha-publishes-ai-drawn-manga/.193569"  target="_blank" rel="noreferrer noopener">Shinchosha Publishes AI-Drawn Manga</a></h5>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
    
    <!-- end reading intro -->

    <!-- start intro lists -->

                <!-- end ch -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.php"><img src="img/logo.png" alt="" style="height:50px; width:200px; margin-bottom: 200px;"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.php">Homepage</a></li>
                        <li><a href="./library.php">Library</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

    <!-- js files -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>