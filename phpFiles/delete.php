<?php
include 'connection.php';

    $id = $_GET['id'];
$query = "DELETE FROM `crud-operations` WHERE `id`=$id";
if(mysqli_query($mysqli,$query)){
    header('location:fetch-data.php');
}else{
    echo'data not deleted';
}

?>