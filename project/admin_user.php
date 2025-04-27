<?php

    session_start(); //session_start() คือการเริ่มต้นสร้าง session 
    include("server.php"); //เรียกไฟล์ server.php
    
    //กำหนด sql ที่จะใช้ดึง ข้อมูลบน Database
    $sql_user = "SELECT * FROM `user` ORDER BY `id` Asc"; //ดึงข้อมูลทั้งหมดจากตาราง DATA user
    //ทำการสืบค้นข้อมูลตาม sql ที่เขียนกับ Database และส่งค่ากลับมาในรูปแบบ  mysqli_result object
    $result_user =  mysqli_query($con,$sql_user);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="./js/tableSort.js"></script>
    
    <!-- เอาไว้ดึง icon -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style></style>
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MovieFun</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin.php">movie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin_user.php">user</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div>
        <p style = "color:black; text-align: right; font-size:20px;">
            Welcome <?php echo $_SESSION['username']?>
            (You have <b><?php echo $_SESSION['role']?></b> rights) |

            <span>
                <a href="login.php?logout='1'">Logout</a>
            </span>
        </p>    
    <center>

    <div>
        <h1 style = "text-align: center;">List of all user</h1>
        <br>
        <center>
            <table class="table table-bordered" id="myTable" >

                <!-- สร้าง row ที่เป็นหัวตาราง ซึ่งสามารถใช้กดและ sort ข้อมูลได้-->
                <tr>
                    <th onclick="sortTable(0)">ID<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(1)">Username<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(2)">Email<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(3)">Role<i class="fa fa-fw fa-sort"></i></th>
                    <th>Action</th>
                </tr>

                <!-- ดึงทั้งหมดจากตาราง movie มาเก็บในรูปแบบของ array แบบต่อ row -->
                <!-- จะวนรูปไปเลื่อยๆจนกว่าจะแสดงข้อมูลครบทุก row -->
                
                <?php 
                    
                    while ($row = mysqli_fetch_array($result_user)) { ?> 

                        <!-- นำข้อมูลออกมาแสดง โดย วน 1 รอบจะเอามาแสดง 1 row -->
                        <tr>            
                            <td><?php echo $row['id'] ?></td> 
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['role'] ?></td>
                            
                            <td> 
                              <!-- ส่วนแก้ไข และ delete -->
                        
                                <!-- ส่วนแก้ไข ให้ทำการย้ายไปที่หน้า edit_user.php และทำการส่งข้อมูลทั้งหมด(ส่งแบบ GET)ของ row นั้นไปให้ -->
                                <a href="edit_user.php?ID=<?php echo $row['id']?>
                                    &Us=<?php echo $row['username']?>
                                    &Em=<?php echo $row['email']?>
                                    &Role=<?php echo $row['role']?>
                                    
                                ">

                                <!-- เพิ่มไอคอนดินสอ -->
                                <i class="fas fa-pen"></i>
                                </a> 
                            
                                <!-- ส่วน delete -->

                                <a href="delete_user.php?ID=<?php echo $row['id']?>" 
                                onclick="return confirm('Are you sure you want to delete?')"> <!-- ให้ถามเช็คว่าแน่ใจใช่ไหมที่จะลบค่า -->
                                
                                <!-- เพิ่มไอคอนถังขยะ -->
                                <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }
                ?>

            </table>
        </center>    
    </div>
    </body>
<html>