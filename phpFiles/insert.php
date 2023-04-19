<?php
include 'connection.php';

if(isset($_POST['register'])){
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $username = mysqli_real_escape_string($mysqli, $_POST['user-name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    // Check if number is numeric and convert to integer
        $phone = intval($_POST['number']);
   
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $cpass = password_hash($_POST['cpass'], PASSWORD_DEFAULT);
    $gender = mysqli_real_escape_string($mysqli, $_POST['gender']); 

    $sql = "INSERT INTO `crud-operations`(`full-name`, `user-name`, `email`, `number`, `pass`, `cpass`, `gender`) VALUES  
            ('$name',
            '$username',
            '$email',
            '$phone',
            '$pass',
            '$cpass',
            '$gender')";

    $query = mysqli_query($mysqli,$sql);   
    if($query){
       header('location:fetch-data.php');
    } else {
        echo 'Error inserting data: ' . mysqli_error($mysqli);
    }
}
?>
