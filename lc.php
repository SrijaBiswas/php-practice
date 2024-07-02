<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "test");
if ($conn) {
    echo "scesss";
}
$e = $_POST['email'];
$p = md5($_POST['password']);
$sel = "SELECT * FROM customers WHERE email='$e'AND password='$p'";
$rs = $conn->query($sel);
if ($rs->num_rows > 0) //if email and password are valid then number of rows return >0 numbers
{
    $row = $rs->fetch_assoc();
    $_SESSION['aname'] = $row['name'];
    header("location:sel.php");
    //echo "Success";
} else //if email and password or one of them are invalid then number of rows return <0 0r =0 numbers
{
    ?>
			<script>
				alert("Invalid Login");
				window.location='login.php';
			</script>
		<?php
//echo "Invalid Login";
}
?>