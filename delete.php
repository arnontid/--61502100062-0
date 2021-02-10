<?php
include('connect.php');

    $query = "DELETE FROM test WHERE id = '{$_GET['id']}'";
    $result = mysqli_query($con, $query); 
    if ($result) {
        header("Location: table_show.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }


?>