<?php
session_start();
$id = $_SESSION['id'];
include 'connection.php';
if(isset($_POST['update'])){
    $name =  $_POST['name'];
    $username = $_POST['user-name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $pass = $_POST['pass'];
    $cpass =$_POST['cpass'];
    $gender = $_POST['gender']; 
    $update = "UPDATE `crud-operations` SET `full-name`='$name',`user-name`='$username',`email`='$email',`number`='$phone',`pass`='$pass',`cpass`='$cpass',`gender`='$gender'  WHERE id='$id'";
    var_dump($name);
    if(mysqli_query($mysqli,$update)){
        header('location:fetch-data.php');
    }else{
        echo "Error updating record: " . $mysqli->error;
    }
}

?>