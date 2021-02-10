<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- ส่วนของการเรียกใช้ bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
    <div class="card" style="width: 20rem; margin-left: 38%; margin-top: 5%;">
    <div class="card-body">
    <h2>เข้าสู่ระบบ</h2>
    <form action="login.php"  method="post">
    <label for="id">ชื่อผู้ใช้</label>
    <div class="mb-3">
    <input type="text"  class="form-control" name="name" id="name">
    </div>

    <label for="pin">pin</label>
    <div class="mb-3">
    <input type="text"  class="form-control" name="pin" id="pin">
    </div>
    <button type="submit" name="login" class="btn btn-primary">เข้าสู่ระบบ</button>
    </form> 
    </div>
    </div>
</body>
</html>