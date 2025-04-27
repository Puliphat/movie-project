<!-- PHP sever -->

<?php
include('server.php');
include('shouldlogin.php')
?>


<!--end sever-->




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        MOVIE FUN
    </title>
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
    <!-- END NAV -->


<!--แทบภาพสไลด์-->


    <div class="hero-section">
    <!-- HERO SLIDE -->
    <div class="hero-slide">
        <div class="owl-carousel carousel-nav-center" id="hero-carousel">
        
            <?php   
            
            
            $query = mysqli_query($con,"SELECT * FROM data_banner");
            while($result = mysqli_fetch_array($query)){
            
            ?>
            
            <!-- SLIDE ITEM -->
            <div class="hero-slide-item">
                <img src="<?=$result["banner"]?>" alt="banner" >
                <div class="overlay"></div>
                <div class="hero-slide-item-content">
                    <div class="item-content-wraper">
                        <div class="item-content-title top-down">
                        <?=$result["name"]?>
                        </div>
                        <div class="movie-infos top-down delay-2">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span><?=$result["star"]?></span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span><?=$result["min"]?></span>
                            </div>
                        </div>
                        <div class="item-content-description top-down delay-4">
                        <?=$result["des"]?>
                        </div>
                        <div class="item-action top-down delay-6">
                            <a href="playbanner.php?id=<?=$result["id"]?>" class="btn btn-hover">
                                <i class="bx bxs-right-arrow"></i>
                                <span>Watch now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php   
            }
            ?>
            <!-- END SLIDE ITEM -->
            </div>
        </div>
        </div>
<!-- END SLIDE ITEM -->


<br><br>
<!-- videocard  (ต้องเข้าไฟล์มันถึงรัน /index.php) -->

    
    <div class="video-card-container">
        <!--starwar-->
        <div class="video-card">
        <img src="image/starwars.png" class="video-card-image" alt="card">
        <video src="videocard/star-wars.mp4" mute loop class="card-video"></video>
        </div>

        <!--marvel-->
        <div class="video-card">
            <img src="image/marvel.png" class="video-card-image" alt="card">
            <video src="videocard/marvelcard.mp4" mute loop class="card-video"></video>
        </div>

        <!--pixar-->
        <div class="video-card">
            <img src="image/pixar.png" class="video-card-image" alt="card">
            <video src="videocard/pixar.mp4" mute loop class="card-video"></video>
            </div>

        <!--disney-->
        <div class="video-card">
            <img src="image/disney.png" class="video-card-image" alt="card">
            <video src="videocard/disney.mp4" mute loop class="card-video"></video>
        </div>
    </div>

    
        
<!-- end videocard -->



<!-- tap movie -->
<div class="section">
        <div class="container">
            <div class="section-header">
            <i class="bx bxs-star"></i>&nbsp;movie
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!--ดึงข้อมูลจากเซริฟ -->

            <?php 
            
            $query = mysqli_query($con,"SELECT * FROM data_movie WHERE `movie_row` = 'movie1' ORDER BY id DESC");
            while($result = mysqli_fetch_array($query)){
            
            
            ?>
            
            <a href="playmv.php?id=<?=$result["id"]?>" class="movie-item">
                    <img src="<?=$result['img']?>" alt="img">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        <?=$result['name']?>
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span><?=$result['star']?></span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span><?=$result['min']?></span>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>   
<div class="section">
        <div class="container">
            <div class="section-header">
            <i class="bx bxs-tv"></i>&nbsp;Cartoon+
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!--ดึงข้อมูลจากเซริฟ -->
            <?php   
            
            
            $query = mysqli_query($con,"SELECT * FROM `data_movie` WHERE `movie_row` = 'cartoon1' ORDER BY id DESC");
            while($result = mysqli_fetch_array($query)){
            
            ?>
            
            <a href="playmv.php?id=<?=$result["id"]?>" class="movie-item">
                <img src="<?=$result['img']?>" alt="img">
                <div class="movie-item-content">
                    <div class="movie-item-title">
                    <?=$result['name']?>
                    </div>
                    <div class="movie-infos">
                        <div class="movie-info">
                            <i class="bx bxs-star"></i>
                            <span><?=$result['star']?></span>
                        </div>
                        <div class="movie-info">
                            <i class="bx bxs-time"></i>
                            <span><?=$result['min']?></span>
                        </div>
                    </div>
                </div>
                </a> 
            <?php } ?>       
        </div>
    </div>
</div>

<div class="section">
        <div class="container">
            <div class="section-header">
            <i class="bx bxs-movie-play"></i>&nbsp;Movie
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">

            <!--ดึงข้อมูลจากเซริฟ -->
            
            <?php   
            
            
            $query = mysqli_query($con,"SELECT * FROM `data_movie` WHERE `movie_row` = 'movie2' ORDER BY id DESC");
            while($result = mysqli_fetch_array($query)){
            
            ?>
            <a href="playmv.php?id=<?=$result["id"]?>" class="movie-item">
                    <img src="<?=$result['img']?>" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                        <?=$result["name"]?>
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span><?=$result["star"]?></span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span><?=$result["min"]?></span>
                            </div>
                        </div>
                    </div>
                </a>
                <?php }?>
        </div>
    </div>
</div>



<!-- end แทบหนัง -->

<!--footer-->

<footer class="py-3 my-4">
<ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
<p class="text-center ">© 2021 <i class='bx bx-movie'></i>MovieFun, Inc</p>
</footer>

<!--footer end-->

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="js/app.js"></script>

</body>

