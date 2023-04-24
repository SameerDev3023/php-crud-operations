<?php
include 'connection.php';

    $id = $_GET['id'];
$query = "DELETE FROM `crud-operations` WHERE `id`=$id";
if(mysqli_query($mysqli,$query)){
// redirect to records page when the data is deleted and showing deleted data with header location function ;
// header is a php function it help us to redirect our pages to another pages  as we want . 
    header('location:fetch-data.php');
}else{
    echo'data not deleted';
}

?>