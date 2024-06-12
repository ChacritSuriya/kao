<?php
require ('Connect.php');
?>

<?php

$Username = $_POST["username"];
$Password = $_POST["password"];


$sqlcheck = "SELECT * FROM register WHERE Username = '$Username' AND Password = '$Password'";
$resultcheck = mysqli_query($conn, $sqlcheck) or die ("<script>alert('Result Error'); window.history.back();</script>");

if (mysqli_num_rows($resultcheck) == 1) {
    echo "<script>alert('เข้าสู้ระบบเรียบร้อย');
    window.location.href = 'Main.html';
    </script>";
} else {
    echo "<script>
    alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'); 
    window.history.back();
    </script>";
}

?>