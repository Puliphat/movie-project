<?php
    include("server.php"); 

    //ดึงข้อมูลทั้งหมดที่ส่งมาจาก form หน้า edit
    $ID = (int)$_POST["ID"];
    $Us = $_POST["Us"];
    $Em = $_POST["Em"];
    $Role = $_POST["Role"];  

    //กำหนด SQL สำหรับอัพเดทค่าต่างๆ

    //กรณีที่มีข้อมูลครบทั้งหมด
    $update = " UPDATE `user` SET `id` = '$ID', `role` = '$Role' WHERE `username` = '$Us'; "; 
    
    //ส่วน run sql อัปเดทค่า  
    if($Role != null){ 
        $result = mysqli_query($con,$update);
    }
    else
    { 
        echo "<script>alert('cannot null.')</script>";
    }
    //ถ้า update เสร็จให้กลับไปหน้า admin_page
    if($result){
        header("Location:admin_user.php");
    }else{ //ถ้า update ไม่สำเร็จขึ้นข้อความ
        echo "<script>alert('cannot be updated.')</script>";
    }
?>