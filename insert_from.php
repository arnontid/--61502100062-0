<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลภาพยนต์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
    <div class="card" style="width: 20rem; margin-left: 38%; margin-top: 5%;">
        <div class="card-body">

            <form action="insert.php" method="post">  
                <legend>เพิ่มข้อมูลภาพยนต์</legend>

                <div class="mb-3">
                  <input type="text" class="form-control" name="id" id="id"  placeholder="รหัสภาพยนต์">
                </div>

               <div class="mb-3">
                  <input type="text" class="form-control" name="mname" id="mname"  placeholder="ชื่อภาพยนต์">
                </div>

                <div class="mb-3">
                    <input type="datetime" class="form-control" name="date" id="date"  placeholder="เวลาเริ่มฉาย">
                </div>


                <button type="submit" class="btn btn-primary">ยืนยันการเพิ่มภาพยนต์</button>

              
                
              </form>

        </div>
      </div>
</body>
</html>