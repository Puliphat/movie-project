<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        
        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) == 1) {
            
                $row = mysqli_fetch_array($result); //ดึงข้อมูลทั้ง row ของผลลัพธ์ที่ตรงกันมาเก็บในรูปแบบของ array

                //ดึงข้อมูล username และ role ของคนที่ loging เข้ามาเก็บลง SESSION
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['success'] = "Your are now logged in";
                    
                if ($_SESSION['role'] == 'admin') //กรณีเป็น admin
                {
                header("Location:admin.php"); //ให้ไปที่หน้า admin
                }

                if ($_SESSION['role'] == 'user') //กรณีเป็น user
                {
                header("Location:index.php"); //ให้ไปที่หน้า user
                }
            }else {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";
                header("location: login.php");
            }
           
        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: login.php");
        }
    }

?>