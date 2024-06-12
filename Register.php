<?php
require ('Connect.php');
?>

<?php

$Username = $_POST["username"];
$Password = $_POST["password"];


$sqlcheck = "SELECT * FROM register WHERE Username = '$Username'";
$resultcheck = mysqli_query($conn, $sqlcheck) or die ("<script>alert('Result Error'); window.history.back();</script>");

if (mysqli_num_rows($resultcheck) == 0) {
    $sql = "INSERT INTO register(Username, Password) VALUES('$Username','$Password');";
    $result = mysqli_query($conn, $sql) or die ("<script>alert('Result Error'); window.history.back();</script>");
    echo "<script>alert('รับข้อมูลเรียบร้อย'); 
    window.location.href = 'Login.html';
    </script>";
} else {
    echo "<script>alert('ชื่อนี้มีผู้ใช้แล้ว');
    window.history.back();
    </script>";
}

?>