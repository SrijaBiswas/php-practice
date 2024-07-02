<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$id = $_GET['id'];
$sel = "SELECT * FROM users WHERE id='$id'";
$rs = $conn->query($sel); //result set
$row = $rs->fetch_assoc(); //fetch row
?>
<form action="updateins.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <p>Name</p>
    <p><input type="text" name="name" value="<?php echo $row['name']; ?>"></p>
    <p>Gender</p>
    <p><input type="radio" name="gender" value="male" <?php if ($row['gender'] == "male") {echo "checked";}?>>male</p>
    <p><input type="radio" name="gender" value="female" <?php if ($row['gender'] == "female") {echo "checked";}?>>female</p>
    <p><input type="radio" name="gender" value="other" <?php if ($row['gender'] == "other") {echo "checked";}?>>other</p>
    <p>Stream</p>
    <p><select name="stream">
        <option value="">----Select Stream----</option>
        <option value="BCA" <?php if ($row['stream'] == "BCA") {echo "selected";}?>>BCA</option>
        <option value="BBA" <?php if ($row['stream'] == "BBA") {echo "selected";}?>>BBA</option>
        <option value="B.Tech" <?php if ($row['stream'] == "B.Tech") {echo "selected";}?>>B.Tech</option>
        <option value="BHM" <?php if ($row['stream'] == "BHM") {echo "selected";}?>>BHM</option>
    </select></p>
    <p>Subject</p>
    <?php
$sb = explode(", ", $row['subject']);
?>
    <p><input type="checkbox" name="sub[]" value="C" <?php if (in_array("C", $sb)) {echo "checked";}?>>C</p>
    <p><input type="checkbox" name="sub[]" value="C++" <?php if (in_array("C++", $sb)) {echo "checked";}?>>C++</p>
    <p><input type="checkbox" name="sub[]" value="Java" <?php if (in_array("Java", $sb)) {echo "checked";}?>>Java</p>
    <p><input type="checkbox" name="sub[]" value="Python" <?php if (in_array("Python", $sb)) {echo "checked";}?>>Python</p>
    <p><input type="checkbox" name="sub[]" value="PHP" <?php if (in_array("PHP", $sb)) {echo "checked";}?>>PHP</p>
    <p>Image</p>
    <p><input type="file" name="img1" ></p>
    <p><img src="upload_img/<?php echo $row['image']; ?>" style="width: 100px; height: 100px;"></p> <p><input type="submit" name="submit" value="submit"></p>
</form>