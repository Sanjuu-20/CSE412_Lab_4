<?php
include "conn.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "DELETE FROM userInfo WHERE id = $id;";
    if($conn->query($q)){
        echo "<script>alert('Deleted successfully!'); window.location.href = 'index.php';</script>";
    }else{
        echo "<script>alert('Failed'); window.location.href = 'index.php';</script>";
    }
}
?>