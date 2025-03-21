<?php
include "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $password = $_POST['password']; 

    $q = "INSERT INTO userInfo (name, email, phone, date_of_birth, gender, country, city, password) VALUES ('$name', '$email', '$phone', '$date_of_birth', '$gender', '$country', '$city', '$password');";

    if($conn->query($q)){
        echo "<script>alert('Inserted successfully!'); window.location.href = 'index.php';</script>";
    }else{
        echo "<script>alert('Failed'); window.location.href = 'index.php';</script>";
    }
}