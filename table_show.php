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
  include('connect.php');//เรียกใช้กcon
  $sql = "SELECT * FROM test"; //สร้างเก้บ
  $result = $con->query($sql);//ดึงข้อมูล

 ?>
<body>
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
                
                
                </div>
            </td>
         </tr>
<?php 

          }
?>
<?php mysqli_close($con); ?>
</body>
</html>