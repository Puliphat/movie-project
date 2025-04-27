<?php
    session_start(); //session_start() คือการเริ่มต้นสร้าง session 
    include("server.php"); //เรียกไฟล์ server.php
    
    //กำหนด sql ที่จะใช้ดึง ข้อมูลบน Database
    $sql_movie = "SELECT * from data_movie ORDER BY `id` DESC"; //ดึงข้อมูลทั้งหมดจากตาราง DATA MOVIE
    
    //ทำการสืบค้นข้อมูลตาม sql ที่เขียนกับ Database และส่งค่ากลับมาในรูปแบบ  mysqli_result object
    $result_movie =  mysqli_query($con,$sql_movie);

    $errors = array();
    if (isset($_POST['insert'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $type = mysqli_real_escape_string($con, $_POST['type']);
        $img = mysqli_real_escape_string($con, $_POST['img']);
        $vdo_ex = mysqli_real_escape_string($con, $_POST['vdo_ex']);
        $star = mysqli_real_escape_string($con, $_POST['star']);
        $vdo_main = mysqli_real_escape_string($con, $_POST['vdo_main']);
        $min = mysqli_real_escape_string($con, $_POST['min']);
        $movie_row = mysqli_real_escape_string($con, $_POST['movie_row']);

        $movie_check_query = "SELECT * FROM data_movie WHERE name = '$name' LIMIT 1";
        $query = mysqli_query($con, $movie_check_query);
        $result_movie = mysqli_fetch_assoc($query);

        if ($result_movie) { // if movie exists
            if ($result_movie['name'] === $name) {
                array_push($errors, "movie already exists");
            }
        }
        if (count($errors) == 0) {
            $sql_insert = "INSERT INTO `data_movie` (`name`, `type` ,`img`, `vdo_ex`, `vdo_main`, `star`, `min`, `movie_row`) VALUES ('$_POST[name]','$_POST[type]','$_POST[img]','$_POST[vdo_ex]','$_POST[vdo_main]','$_POST[star]','$_POST[min]','$_POST[movie_row]')";
            $result_insert = mysqli_query($con, $sql_insert);

            header('location: admin.php');
        }else {array_push($errors, "movie already exists");
            $_SESSION['error'] = "movie already exists";
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="./js/tableSort.js"></script>
    
    <!-- เอาไว้ดึง icon -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

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
        <h1>Add a new movie</h1>

        <!-- สร้าง form สำหรับเพิ่มข้อมูล -->

        <form  action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <table>
            <tr>

            <label for="username">
                <td>
                     *name movie :
                </td>
            </label>
                <td>
                    <center><input type="text" name="name" required></center>
                </td>
            </tr>
            
            <tr>
            <label for="username">
                <td>
                    *type :
                </td>
            </label>
                <td>
                    <center><input type="text" name="type" required></center>
                </td>
            </tr>
            <tr>
                <td>
                    *image:
                </td>

                <td>
                    <center><input type="text" name="img" required></center>
                </td>
            </tr>

            <tr>
                <td>
                    *vdo_example:
                </td>

                <td>
                    <center><input type="text" name="vdo_ex" required></center>
                </td>
            </tr>
            
            <tr>
                <td>
                    *vdo_main:
                </td>

                <td>
                <center><input type="text" name="vdo_main" required></center>
                </td>
            </tr>

            <tr>
                <td>
                    *star:
                </td>

                <td>
                <center><input type="number" step="0.1" name="star" required></center>
                </td>
            </tr>

            <tr>
                <td>
                    *min:
                </td>

                <td>
                <center><input type="text" name="min" value="0 mins" required></center>
                </td>
            </tr>
            <tr>
                <td>
                    *movie_row:
                </td>

                <td>
                    <center>
                        <select name="movie_row">
                            <option value="movie1" selected >movie row 1</option>
                            <option value="cartoon1">cartoon row 1</option>
                            <option value="movie2">movie row 2</option>
                        </select>
                    </center>
                </td>
            </tr>

            <tr>                
                <td colspan="2">
                    <input type="submit" value="insert" name="insert" > 
                    <input type="reset" value="Clear Form">
                </td>
            </tr>
        <table>
            </center>
        </form>
    </div>
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
<br>

    <div>
        <h1 style = "text-align: center;">List of all movie</h1>
        <br>
        <center>
            <table class="table table-bordered" id="myTable" >

                <!-- สร้าง row ที่เป็นหัวตาราง ซึ่งสามารถใช้กดและ sort ข้อมูลได้-->
                <tr>
                    <th onclick="sortTable(0)">Id<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(1)">Name movie<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(2)">Type<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(3)">Image<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(4)">vdo_ex<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(5)">vdo_main<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(6)">star<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(7)">min<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(8)">movie_row<i class="fa fa-fw fa-sort"></i></th>
                    <th>Action</th>
                </tr>

                <!-- ดึงทั้งหมดจากตาราง movie มาเก็บในรูปแบบของ array แบบต่อ row -->
                <!-- จะวนรูปไปเลื่อยๆจนกว่าจะแสดงข้อมูลครบทุก row -->
                
                <?php if (count($errors) == 0) {
                    
                    while ($row = mysqli_fetch_array($result_movie)) { ?> 

                        <!-- นำข้อมูลออกมาแสดง โดย วน 1 รอบจะเอามาแสดง 1 row -->
                        <tr>            
                            <td><?php echo $row['id'] ?></td> 
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['type'] ?></td>
                            <td><?php echo $row['img'] ?></td>
                            <td><?php echo $row['vdo_ex'] ?></td>
                            <td><?php echo $row['vdo_main'] ?></td>
                            <td><?php echo $row['star'] ?></td>
                            <td><?php echo $row['min'] ?></td>
                            <td><?php echo $row['movie_row'] ?></td>
                            
                            <td> 
                            
                                <!-- ส่วน delete -->

                                <a href="delete.php?ID=<?php echo $row['id']?>" 
                                onclick="return confirm('Are you sure you want to delete?')"> <!-- ให้ถามเช็คว่าแน่ใจใช่ไหมที่จะลบค่า -->
                                
                                <!-- เพิ่มไอคอนถังขยะ -->
                                <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }
                }?>

            </table>
        </center>    
    </div>
    </body>
<html>