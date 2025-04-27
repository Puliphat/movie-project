<!-- PHP sever -->
<?php

include('server.php');
include('shouldlogin.php');

$id = $_GET['id'];
$query = mysqli_query($con,"SELECT * FROM data_movie WHERE id= $id");
$result = mysqli_fetch_array($query);
?>
<!--end sever-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$result['name'] ?></title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">

</head>   
<body>

<!-- navbar -->
<div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="index.php" class="logo">
                    <i class='bx bx-movie bx-tada'></i><span class="main-color">MovieFun</span> 
                </a>
                <div></div>
                <form method="get" action= "search.php">
                <div class="right-container">
                <input type="text" name="search" class="search-box"  method="get" placeholder="Search.." required>
                <button type="submit" name="act" value="q" class="btn btn-fault"><i class='bx bx-search'></i></button></form>
                </div>
                <ul class="nav-menu" id="nav-menu">
                    <li><i class='bx bx-home'></i><a href="index.php">Home</a></li>       
                    <li><i class='bx bx-play'></i><a href="index.php">Movies</a></li>
                    <li><i class='bx bx-tv'></i><a href="#">cartoon+</a></li>
                    <li>
                        <?php if (isset($_SESSION['username'])) : ?>
                        <a href="index.php?logout='1'" class="btn btn-hover"><span>Logout</span></a>
                    <?php endif ?>
                        </a>
                    </li>
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
</div>


<!--ตัวแสดง.หนัง-->   
<div class="album py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="<?=$result['img'] ?>" style="object-fit:cover;"  width="100%" height="520">
                </div>
            </div>
            <div class="col-md-9">
                <div class="card mb-4 shadow-sm">
                <iframe width="100%" height="520" src="<?=$result['vdo_ex'] ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div><br>
        <p class="linesz"></p>
        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ✿ &nbsp;☁️ &nbsp;&nbsp;🧃 &nbsp;&nbsp;˖ &nbsp; welcome &nbsp;˖ &nbsp;&nbsp;🧸 &nbsp;&nbsp;💖 &nbsp;&nbsp;✿</h5>
        <p class="lines"></p>
        <div class="section-header"><?=$result['name']?></div>
        <div class="row">
        <div class="col-md-12">
                <div class="card mb-4 shadow-sm">
                <iframe width="100%" height="720" src="<?=$result['vdo_main']?> " frameborder='0'  allowfullscreen='true'></iframe>
            </div>
            </div>
        </div>
        <p class="liness"></p>
        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ✿ &nbsp;˖ &nbsp;☁️ &nbsp;˖&nbsp;🧃 &nbsp;˖ &nbsp;🧸 &nbsp;˖&nbsp;💖 &nbsp;˖&nbsp;✿</h5>
        <p class="lineszz"></p>
    </div>
</div>



<!--footer-->
<footer class="py-3 my-4">
<ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
<p class="text-center ">© 2021 <i class='bx bx-movie'></i>MovieFun, Inc</p>
</footer>

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="js/app.js"></script>
</body>
</html>