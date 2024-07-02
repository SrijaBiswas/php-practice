<form action="ins.php" method="post" enctype="multipart/form-data">
    <p>Name</p>
    <p><input type="text" name="name" required></p>
    <p>Gender</p>
    <p><input type="radio" name="gender" value="male">male</p>
    <p><input type="radio" name="gender" value="female">female</p>
    <p><input type="radio" name="gender" value="other">other</p>
    <p>Stream</p>
    <p><select name="stream">
        <option value="">----Select Stream----</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="B.Tech">B.Tech</option>
        <option value="BHM">BHM</option>
    </select></p>
    <p>Subject</p>
    <p><input type="checkbox" name="sub[]" value="C">C</p>
    <p><input type="checkbox" name="sub[]" value="C++">C++</p>
    <p><input type="checkbox" name="sub[]" value="Java">Java</p>
    <p><input type="checkbox" name="sub[]" value="Python">Python</p>
    <p><input type="checkbox" name="sub[]" value="PHP">PHP</p>
    <p>Image</p>
    <p><input type="file" name="img1" required></p>
    <p><input type="submit" name="submit" value="submit"></p>
</form>
