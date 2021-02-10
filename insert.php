<?php
include('connect.php');

$query =  "INSERT INTO test (id, mname, deta)
VALUES ('{$_POST['id']}', '{$_POST['mname']}',  '{$_POST['date']}'";
$result = mysqli_query($con, $query); 
if ($result == TRUE) {
    header("Location: table_show.php");
} else {
    echo "เลขซ้ำ";
    
}


?>