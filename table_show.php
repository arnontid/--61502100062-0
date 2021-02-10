<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<?php 
  include('connect.php');
  $sql = "SELECT * FROM test"; 
  if(isset ($_GET['serach_click'])){
    $sql = "SELECT * FROM test WHERE id LIKE '%{$_GET['search']}%' OR mname LIKE '%{$_GET['search']}%' ";
    
  }
  $result = $con->query($sql);

 ?>
<body>
    <br>
<form action="login.php" method="get"  style="width: 20rem; margin-left: 2%;" >
 
    <div class="mb-3">
    <input type="hiden" class="form-control" name="search"   id="search" placeholder="ค้นหา">
    
    </div>
    <button type="submit" class="btn btn-primary" name="serach_click">ค้นหา</button>
</form>
<br>
<a href="table_show.php" style=" margin-left: 2%;" ><button type="submit" class="btn btn-primary" >กลับหน้าหลัก</button></a>
<br>
<br>
<table class="table">
        <thead>
          <tr>
            <th scope="col">รหัสภาพยนต์</th>
            <th scope="col">ชื่อภาพยนต์</th>
            <th scope="col">เวลาเริ่มฉาย</th>
            <th scope="col">ชื่อผู้ใช้งาน</th>
            <th scope="col">pin</th>
            <th scope="col">แก้ไขรายการ</th>
          </tr>
        </thead>
        <tbody>
        <?php
        while($row = mysqli_fetch_array($result)) { 
          
?>
        <tr>
            <th scope="row"><?php echo $row["id"];?></th>
            <td><?php echo $row["mname"];?></td>
            <td><?php echo $row["date"];?></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["pin"];?></td>
            <td>
                
                
            <div class="btn-group" role="group" aria-label="Basic example">
            <a href="modify_from.php?id=<?php echo $row['id'];?>"><button  type="button" class="btn btn-warning">แก้ไข</button></a>
                <a href="delete.php?id=<?php echo $row['id'];?>"><button  type="button" class="btn btn-danger">ลบ</button></a>
                
                
                </div>
            </td>
         </tr>
<?php 

          }
?>
        </tbody>
        </table>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <a href="insert_from.php">
          <button type="button" class="btn btn-success">เพิ่มรายการภาพยนต์</button>
        </a>
     </div>
     <div class="btn-group" role="group" aria-label="Basic mixed styles example">
    <form action="login.php" method="post">
     <button type="submit" name="logout" class="btn btn-success">ออกจากระบบ</button>
    </form>
    </div>
<?php mysqli_close($con); ?>
</body>
</html>