<?php
include("database.php");
include 'in-dex.php'
?>
<!DOCTYPE html>
<html>
<head>
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
    <link rel="stylesheet" href="css/table.css" type="text/css">
<style>
    table{
background: #ffffff;
width: 50%;
height: 50%;
border: #000;
}
 th{
	background: #ab201c;
	color: rgb(255, 255, 255);
}
</style>
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
    <?php echo $deleteMsg??''; ?>
    <thead>
        <tbody>
      <table class="table">
         <th>Id</th>
         <th>User id</th>
         <th>Username</th>
         <th>Password</th>
         <th>Email</th>
         <th>Role</th>
         <th>Date</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['user_id']??''; ?></td>
      <td><?php echo $data['user_name']??''; ?></td>
      <td><?php echo $data['password']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['role']??''; ?></td>
      <td><?php echo $data['date']??''; ?></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.php"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.php">Homepage</a></li>
                        <li><a href="./library.html">Library</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
              </div>
          </div>
      </div>
  </footer>
</body>
</html>