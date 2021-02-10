<?php
include('connect.php');
$sql = "UPDATE test SET
mname = '{$_POST['mname']}',
date = '{$_POST['date']}',
WHERE mname = '{$_POST['mname']}' ";
 if ($con->query($sql) === TRUE) {
    header("Location:table_show.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>