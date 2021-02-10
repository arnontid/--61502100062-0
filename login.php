<?php
     include('connect.php');
    session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM test WHERE name = '{$_POST['name']}' AND pin = '{$_POST['pin']}'";
        $result = $con->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["name"] = $row['name'];
        } else {
            echo "<p>รหัสผิด</p>";
        }
    }

    if(isset($_POST['logout'])) {
        session_unset();
        header("Location: login_form.php");
    }

    if(isset($_SESSION['name'])) {
     require_once("table_show.php");
    } else {
        require_once("login_form.php");
    }
?>
