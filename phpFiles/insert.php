<?php
include 'connection.php';
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $username = $_POST['user-name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    // crypt function use for making has password like this $1$U0cP3ODq$NXFHbwIeGLeL11v1nh/ad1

    
    $pass = crypt($_POST['pass']);
    $cpass = crypt($_POST['cpass']);
    $gender = $_POST['gender']; 
    $sql = "INSERT INTO `crud-operations`(`full-name`, `user-name`, `email`, `number`, `pass`, `cpass`, `gender`) 
            VALUES ('$name',
            '$username',
            '$email',
            '$number',
            '$pass',
            '$cpass',
            '$gender')";
      $query = mysqli_query($mysqli,$sql);   
    if($query){
        echo'data inserted';
    }else{
        echo'not inserted';
    }
}
?>
