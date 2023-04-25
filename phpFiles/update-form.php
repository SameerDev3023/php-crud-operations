<html>
    <head>
        <title>
</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <h1 class="col-md-12  mb-5 text-center bg-success text-white">Update your details</h1>
<form  action="update-data.php" method="post">
<?php
session_start();
include 'connection.php';
$id = $_GET['id'];
$_SESSION["id"] = $id;
$query = "SELECT * FROM `crud-operations` WHERE id=$id";
$result = mysqli_query($mysqli, $query);
if(mysqli_num_rows($result)>0){
    while($data = mysqli_fetch_assoc($result)){
echo'<div class="form-group">
<label for="name">Full Name :</label>
<input type="text" class="form-control" value="'.$data['full-name'].'" name="name">
</div>
<div class="form-group">
<label for="dob">User Name :</label>
<input type="text" class="form-control" value="'.$data['user-name'].'" name="user-name">
</div>
<div class="form-group">
<label for="email">Email address :</label>
<input type="email" class="form-control" value="'.$data['email'].'" name="email">
</div>
<div class="form-group">
<label for="address">Number :</label>
<input type="text" class="form-control" value="'.$data['number'].'" name="number">
</div>   
<div class="form-group">
<label for="income">Password :</label>
<input type="text" class="form-control" value="'.$data['pass'].'" name="pass">
</div>
<div class="form-group">
<label for="income">Confirm Password :</label>
<input type="text" class="form-control"  value="'.$data['cpass'].'" name="cpass">
</div>
<div class="form-group">
<label for="income">Gender :</label>
<input type="text" class="form-control"  value="'.$data['gender'].'" name="gender">
</div>

';}
}else{
    echo"data not availble";
}



?>
<button type="submit" name="update" class="col-md-4 btn btn-success mt-5" style="float:right">Update</button>
</form>
</div>
</body>
    </html>

