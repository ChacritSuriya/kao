<?php

$localhost = "localhost";
$myname = "root";
$mypass = "";
$mydb = "newtest";

$conn = mysqli_connect($localhost, $myname, $mypass, $mydb) or die("<script>alert('Connect Error'); window.history.back();</script>");
?>