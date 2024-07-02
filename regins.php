<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$n = $_POST['name'];
$e = $_POST['email'];
$p = md5($_POST['password']);
$ins = "INSERT INTO customers SET name='$n', email='$e', password='$p'";
$conn->query($ins);
header("location:login.php");
