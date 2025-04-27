<!-- หน้าจัดการหลังกด delete -->

<?php 
    include("server.php");
    $id = (int)$_GET["ID"]; //ดึงค่า id ที่ส่งมา
    $sql_deletemovie = "DELETE from data_movie WHERE id = $id"; //sql สำหรับลบข้อมูล   
    $result_movie = mysqli_query($con,$sql_deletemovie); //ทำการ run คำสั่ง sql
    if($result_movie){
        header('Location:admin.php'); //ถ้าทำสำเร็จให้ Refresh หน้า admin_page
    }
    

?>



