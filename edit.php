<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "crud_db");
    $updId = $_GET['id'];
    $query = "SELECT * FROM `registration` Where id = $updId";
    $data = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($data);
    $getName = $row['name'];
    $getEmail = $row['email'];
    $getPassword = $row['password'];
    $getPhone = $row['phone'];
    $getGender = $row['gender'];

    
if(isset($_REQUEST['updateBtn'])){
  $updName = $_REQUEST['name'];
  $updEmail = $_REQUEST['email'];
  $updPassword = $_REQUEST['password'];
  $hashPass = password_hash($updPassword,PASSWORD_BCRYPT);
  $updPhone = $_REQUEST['phone'];
  $updGen = $_REQUEST['gender'];
  $updQuery = "UPDATE `registration` SET `name`='$updName',`email`='$updEmail',`password`='$hashPass',`phone`='$updPhone',`gender`='$updGen' WHERE id = $updId";
  mysqli_query($con, $updQuery);
  header("Location: read.php");
}
    ?>
    <div class="form-container">
        <h2>Update Form</h2>
        <form method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" value="<?php echo $getName ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required value="<?php echo $getEmail ?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" value="<?php echo $getPassword ?>" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" name="phone" id="phone" placeholder="Enter your phone" value="<?php echo $getPhone ?>" required>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <div class="gender-options">
                    <label for="male">
                        <input type="radio" name="gender" id="male" value="1" <?php echo ($getGender == 1 ? "checked": ''); ?>> Male
                    </label>
                    <label for="female">
                        <input type="radio" name="gender" id="female" value="0" <?php echo ($getGender == 0 ? "checked": ''); ?>> Female
                    </label>
                </div>
            </div>

            <button type="submit" name="updateBtn">UPDATE</button>
        </form>
    </div>
</body>
</html>
