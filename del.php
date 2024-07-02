<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$id = $_GET['id'];
$sel = "SELECT * FROM users WHERE id='$id'";
$rs = $conn->query($sel); //result set
$row = $rs->fetch_assoc(); //fetch row
unlink("upload_img/" . $row['image']);
$sql = "DELETE FROM users WHERE id='$id'";
$conn->query($sql);
header("location:sel.php");
