<?php
include "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $password = $_POST['password']; 

    $q = "UPDATE userInfo SET name= '$name', email='$email', phone='$phone', date_of_birth='$date_of_birth',  gender='$gender',  country='$country', city='$city', password='$password' WHERE id='$id'";
    if($conn->query($q)){
        echo "<script>alert('Updated Successfully!'); window.location.href = 'index.php';</script>";
    }else{
        echo "<script>alert('Failed'); window.location.href = 'index.php';</script>";
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "SELECT * FROM userInfo WHERE id = '$id'";
    $result = $conn->query($q);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href= "style.css">
</head>
<body>
    <form action="update.php" method="POST">
        <h1>Update User</h1>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo ($row['name']); ?>" required>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo ($row['email']); ?>" required>

        <label>Phone No:</label>
        <input type="text" name="phone" value="<?php echo ($row['phone']); ?>">

        <label>Date of Birth:</label>
        <input type="date" name="date_of_birth" value="<?php echo ($row['date_of_birth']); ?>">

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" <?php if($row['gender'] == 'Male'){ echo 'checked'; } ?>> Male
        <input type="radio" name="gender" value="Female" <?php if($row['gender'] == 'Female'){ echo 'checked'; } ?>> Female
        <input type="radio" name="gender" value="Other" <?php if($row['gender'] == 'Other'){ echo 'checked'; } ?>> Other

        <label>Country:</label>
        <input type="text" name="country" value="<?php echo ($row['country']); ?>" required>

        <label>City:</label>
        <input type="text" name="city" value="<?php echo ($row['city']); ?>" required>

        <label>Password:</label>
        <input type="password" name="password" value="<?php echo ($row['password']); ?>" required>
        <button type="submit" id = "btnSubmit">Update User</button>
    </form>
</body>
</html>