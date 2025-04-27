<?php
session_start(); //session_start() คือการเริ่มต้นสร้าง session 
include("server.php"); //เรียกไฟล์ server.php
$sql_user = "SELECT * FROM `user`";
$result_user = mysqli_query($con, $sql_user);
$ID = (int)$_GET["ID"];
$Us = $_GET["Us"];
$Em = $_GET["Em"];
$Role = $_GET["Role"];
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
        <form action="update.php" method="POST">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="number" name="ID" value="<?php echo $ID ?>"></td>
                        <td><input type="text" name="Us" value="<?php echo $Us ?>" readonly></td>
                        <td><input type="text" name="Em" value="<?php echo $Em ?>" readonly></td>
                        <td style= "width: 100px;">
                        <center>
                            <select name="Role" >
                                <option value="user" <?php if ($Role == "user") {
                                                        echo "selected";
                                                    } ?>>user</option>
                                <option value="admin" <?php if ($Role == "admin") {
                                                            echo "selected";
                                                        } ?>>admin</option>
                            </select>
                        </center>
                        </td>                        
                        <td><input type="submit" name="update" value="update"></td>
                    </tr>
                    
                </table>
            </form>
        </center>
    </div>
    </body>
<html>