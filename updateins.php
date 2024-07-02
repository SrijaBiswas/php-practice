<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$n = $_POST['name'];
$g = $_POST['gender'];
$s = $_POST['stream'];
$id = $_POST['id'];
$sb = implode(", ", $_POST['sub']); //string to array    //$fn=$_FILES['img1']['name'];//file only upload
if (isset($_FILES['img1']['name']) && $_FILES['img1']['name'] != "") {
    $extarr = explode(".", $_FILES['img1']['name']);
    $extrev = array_reverse($extarr);
    $ext = $extrev[0];
    if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
        $fn = time() . $_FILES['img1']['name']; //for time stamp
        $buf = $_FILES['img1']['tmp_name'];
        move_uploaded_file($buf, "upload_img/" . $fn);
    } else {
        echo "File Type Not Allowed";
    }
    /*echo "Name : ".$n."<br>";    echo "Gender : ".$g."<br>";    echo "Stream : ".$s."<br>";*/
    $ins = "UPDATE users SET name='$n', gender='$g', stream='$s', subject='$sb', image='$fn' WHERE id='$id'";
} else {
    $ins = "UPDATE users SET name='$n', gender='$g', stream='$s', subject='$sb' WHERE id='$id'";
}
$conn->query($ins);
header("location:sel.php");
?>
<h1>Name : <?php echo $n; ?></h1>
<h1>Gender : <?php echo $g; ?></h1>
<h1>Stream : <?php echo $s; ?></h1>
<h1>Subject : <?php echo $sb; ?></h1>