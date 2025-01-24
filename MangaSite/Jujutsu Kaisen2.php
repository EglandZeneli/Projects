<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'in-dex.php';?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="Title">Chap. 1 JJK</title>
    <link rel="stylesheet" href="css/JJK.css">
    <script>
    let chap=2;
    let totalp=26;
    </script>
        <style>
          @font-face {
        font-family: "CustomFont";
        src: url(fonts/mangat.ttf);
      }
    </style>
    <script id="js" type="text/javascript" src="js/JJK.js"></script>
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
</head>
<body onload="pageset1()">

<div id="left" class="row">  
  <div id="Ender1" onclick="library()"><a><</a></div>
  <div id="Ender" onclick="library()"><a>Library</a></div>
</div>
<div id="wrapper">
<div class="imgbox">
<img id="Page" src="1/1.jpg" usemap="#map">
<map name="map">
<area shape="default" alt="Next" onclick="next()">
</map>
</div>
<div class="Right">
  <div id="Header" onclick="library()"></div>
<div class="button1">
<button id="Next" class="button" onclick="next()">></button>
  <button id="Prev" class="button" onclick="prev()"><</button>
  <button id="Nextc" class="button" onclick="nextc()">></button>
  <button id="Prevc" class="button" onclick="prevc()"><</button>
  </div>  
<div> 
</div>
<div class="dropdown" id="Chapter">
    <button onclick="myFunction()" id="dropper" class="dropbtn"></button ><button id="arrow" class="dropbtn" onclick="myFunction()">v</button>
    <div class="dropdown-content" id="pagesetter">
    <p1></p1>
    </div>
  </div>
<div class="dropdown" id="Pagers">
    <button onclick="myFunction1()" id="dropper1" class="dropbtn"></button><button id="arrow1" class="dropbtn" onclick="myFunction1()">v</button>
    <div class="dropdown-content" id="pagesetter1">
    <p1></p1>
    </div>
  </div>
</div>
</div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</html>