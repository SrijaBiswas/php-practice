<?php
session_start();
if (!isset($_SESSION['aname'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP_08_02</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Users Table</h2>
  <p>Using select query print the database table :</p>
  <p><a href="logout.php" class="btn btn-primary">Logout</a></p>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Stream</th>
        <th>Subject</th>
        <th>Profile Picture</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
      <?php
$conn = mysqli_connect("localhost", "root", "", "test");
$sel = "SELECT * FROM users";
$rs = $conn->query($sel);
while ($data = $rs->fetch_assoc()) {
    ?>
      <tr>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['gender']; ?></td>
        <td><?php echo $data['stream']; ?></td>
        <td><?php echo $data['subject']; ?></td>
        <td><img src="upload_img/<?php echo $data['image']; ?>" style="width: 100px; height: 100px;"></td>
        <td><a href="del.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Are you really want to delete?')" class="btn btn-danger">Delete</a></td>
        <td><a href="update.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Are you really want to Update?')" class="btn btn-danger">Update</a></td>
      </tr>
      <?php
}?>
    </tbody>
  </table>
</div>
</body>
</html>