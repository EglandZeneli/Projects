<!DOCTYPE html>
<html lang="zxx">

<head>


    <?php include 'in-dex.php';?>

    <meta charet="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mangahub</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

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

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg cursor" data-setbg="img/hero/bleach-spread.jpeg" onclick="Bleach()">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div style="color:white; background-color: black;  background: rgba(000, 00, 00, 0.4); border-radius: 6px ;">
                                <h2>Bleach</h2>
                                <p>Ichigo Kurosaki has always been able to see ghosts, but this ability doesn't change his life nearly as much as his close encounter with Rukia Kuchiki, a Soul Reaper and member of the mysterious Soul Society. While fighting a Hollow, Ichigo absorbs every last drop of her energy. Now a full-fledged Soul Reaper himself, Ichigo quickly learns that the world he inhabits is one full of dangerous spirits, and along with Rukia, who is slowly regaining her powers, it's Ichigo's job to both protect the innocent from Hollows and to help the spirits themselves find peace.</p>
                            </div>
                                <a href="Bleach.php"><span>Read Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg cursor" data-setbg="img/hero/jujutsu-spread.jpg"  onclick="JJK()">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div style="color:white; background-color: black;  background: rgba(000, 00, 00, 0.4); border-radius: 6px;">
                                <h2 >Jujutsu Kaisen</h2>
                                <p>Yuuji, a student at Sugisawa Town #3 High School, happens to be ultra-talented at track and field... But since he has no interest in running around in circles, he's happy as a clam being a member of the Occult Research Club! Although he only joined up for kicks, things start to get serious when an actual spirit shows up at the school.</p>
                             </div>
                                <a href="Jujutsu Kaisen.php"><span>Read Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg cursor" data-setbg="img/hero/slam-dunk-spread.jpg" onclick="SlamDunk()">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div style="color:white; background-color: black;  background: rgba(000, 00, 00, 0.4); border-radius: 6px;">
                                <h2 >Slam Dunk</h2><br><br>
                                <p>Hanamichi Sakuragi is a delinquent who has never had any luck with girls. However, when he meets Haruko Akagi, he is sure that she's the one for him. Haruko is a big basketball fan and notices his potential as a basketball player (due to his immense height). Hoping to win her heart, Hanamichi earnestly tries out for the basketball team. Does this complete newbie have what it takes to even join the team?</p>                                </div>
                                <a href="Slam Dunk.php"><span>Read Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/trending/jujutsu-cover.jpg" onclick="JJK()">
                                        <div class="ep">3 / 214 Ch</div>
                                        <div class="view"><i class="fa fa-calendar"></i> 2010-?</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Action">Action</a></li>
                                            <li><a href="./library.php#Dark-Fantasy">Dark Fantasy</a></li>
                                            <li><a href="./library.php#Horror">Horror</a></li>
                                        </ul>
                                        <h5><a href="Jujutsu Kaisen.php">Jujutsu Kaisen</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/trending/chainsaw-man-cover.jpg" onclick="ChainsawMan()">
                                        <div class="ep">3 / 97 Ch</div>
                                        <div class="view"><i class="fa fa-calendar"></i> 2010-?</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Action">Action</a></li>
                                            <li><a href="./library.php#Dark-Fantasy">Dark Fanatasy</a></li>
                                        </ul>
                                        <h5><a href="Chainsaw Man.php">Chainsaw Man</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/trending/ajin-cover.jpg">
                                        <div class="ep">3 / 86 Ch</div>
                                        <div class="view"><i class="fa fa-calendar"></i> 2012-2021</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Psychological">Psychological</a></li>
                                        </ul>
                                        <h5><a href="Ajin: Demi-Human.php">Ajin: Demi-Human</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/trending/one-piece-cover.jpg">
                                        <div class="ep">3 / 1076 Ch</div>
                                        <div class="view"><i class="fa fa-calendar"></i> 1997-?</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Adventure">Adventure</a></li>
                                            <li><a href="./library.php#Comedy">Comedy</a></li>
                                        </ul>
                                        <h5><a href="One Piece.php">One Piece</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/trending/sunken-cover.jpg">
                                        <div class="ep">3 / 181 Ch</div>
                                        <div class="view"><i class="fa fa-clendar"></i> 2006-2016</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Action">Action</a></li>
                                            <li><a href="./library.php#Comedy">Comedy</a></li>
                                        </ul>
                                        <h5><a href="Sun-Ken Rock.php">Sun-Ken Rock</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/trending/spy-cover.jpg">
                                        <div class="ep">3 / 72 Ch</div>
                                        <div class="view"><i class="fa fa-calendar"></i> 2019-?</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Comedy">Comedy</a></li>
                                        </ul>
                                        <h5><a href="SPY x Family.php">SPY x Family</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Shows</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/popular/berserk-cover.jpg">
                                        <div class="ep">3 / 370 Ch</div>
                                        <div class="view"><i class="fa fa-calendar"></i> 1989-?</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Action">Action</a></li>
                                            <li><a href="./library.php#Dark-Fantasy">Dark Fanatasy</a></li>
                                        </ul>
                                        <h5><a href="Berserk.php">Berserk</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/popular/bleach-cover.jpg" onclick="Bleach()">
                                        <div class="ep">3 / 972 Ch</div>
                                        <div class="view"><i class="fa fa-calendar"></i> 2002-2016</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Action">Action</a></li>
                                            <li><a href="./library.php#Adventure">Adventure</a></li>
                                        </ul>
                                        <h5><a href="Bleach.php">Bleach</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/popular/vagabond-cover.jpg">
                                        <div class="ep">3 / 327 Ch</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1998-2015</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Action">Action</a></li>
                                            <li><a href="./library.php#Adventure">Adventure</a></li>
                                        </ul>
                                        <h5><a href="Vagabond.php">Vagabond</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/popular/slam-dunk-cover.jpg" onclick="SlamDunk()">
                                        <div class="ep">3 / 276 Ch</div>
                                        <div class="view"><i class="fa fa-calendar"></i> 1990-1996</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Sports">Sports</a></li>
                                            <li><a href="./library.php#Comedy">Comedy</a></li>
                                        </ul>
                                        <h5><a href="Slam Dunk.php">Slam Dunk</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/popular/monster-cover.jpg">
                                        <div class="ep">3 / 162 Ch</div>
                                        <div class="view"><i class="fa fa-calendar"></i> 1994-2001</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Drama">Drama</a></li>
                                            <li><a href="./library.php#Psychological">Psychological</a></li>
                                        </ul>
                                        <h5><a href="Monster.php">Monster</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg cursor" data-setbg="img/popular/one-punch-cover.jpg">
                                        <div class="ep">3 / 176 Ch</div>
                                        <div class="view"><i class="fa fa-calendar"></i> 2012-?</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><a href="./library.php#Action">Action</a></li>
                                            <li><a href="./library.php#Comedy">Comedy</a></li>
                                        </ul>
                                        <h5><a href="One Punch Man.php">One Punch Man</a></h5>
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
</section>
<!-- Product Section End -->

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

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/Animelinks.js"></script>


</body>

</html>