<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--css-->
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    
    
<div id="myVideo">
    <video autoplay muted loop id="myVideo">
    <source src="video/your-namebg.mp4" type="video/mp4">
    </video>
</div>
    
    
    
    
<div id="content">   
    
    <div class="header">
    <i class='bx bx-movie bx-tada'></i><span class="main-color">MovieFun</span> 
    </div>
    
    <form action="login_db.php" method="post">
    <p id="headerform">Login</p>
    <p class="lines"></p>

        <div class="input-group">
            <label id="space" for="username">Username:</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label id="space" for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <p id="space" >Not yet a member? <a id="signin" href="register.php">Sign Up</a></p>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    </form>

</div>
</body>
</html>