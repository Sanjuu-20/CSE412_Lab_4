<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "style.css">
    <title>Document</title>
</head>
<body>
    <h1>Management System</h1>
    <a href="insertUser.html"><button id = "insertBtn">Add User</button></a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Country</th>
                <th>City</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "conn.php";
                $q = "SELECT * FROM userInfo";
                $result = $conn->query($q);
                if($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['date_of_birth'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td>" . $row['country'] . "</td>";
                        echo "<td>" . $row['city'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo '<td> <a href = "update.php?id=' . $row['id'] . '"><button id = "updateBtn">Update</button></a></td>';
                        echo '<td> <a href = "delete.php?id=' . $row['id'] . '"><button id = "deleteBtn">Delete</button></a></td>';
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>