<!-- หน้าจัดการหลังกด delete_user -->

<?php 
    include("server.php");
    $id = (int)$_GET["ID"]; //ดึงค่า id ที่ส่งมา
    $sql_deleteuser = "DELETE from user WHERE id = $id"; //sql สำหรับลบข้อมูล   
    $result_user = mysqli_query($con,$sql_deleteuser); //ทำการ run คำสั่ง sql
    if($result_user){
        header('Location:admin_user.php'); //ถ้าทำสำเร็จให้ Refresh หน้า admin_page
    }

?>



