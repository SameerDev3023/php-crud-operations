<html>
    <head>
    <title>
    
   </title>
   <link href="../assests/table-data.css" rel="stylesheet">
  
</head>
<body>
    <div class="table-container">

  
<table border='1px' cellpadding="15px" cellspacing="0px">
            <thead>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Password</th>
            <th>Confirm Password</th>
            <th>Gender</th>
            <th colspan="2">Commands</th>
            </tr>
            </thead>
            <?php
            include 'connection.php';
            $sql = "SELECT * FROM `crud-operations`";
            $query = mysqli_query($mysqli,$sql);
            if(mysqli_num_rows($query)>0){
                while($row = mysqli_fetch_assoc($query)){
                    echo'
                    <tbody>
                    <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['full-name'].'</td>
                    <td>'.$row['user-name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['number'].'</td>
                    <td>'.$row['pass'].'</td>
                    <td>'.$row['cpass'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td style="background-color:red !important;cursor:pointer;color:white;"><a href="delete.php?id='.$row['id'].'">Delete</a></td>
                    <td style="background-color:green !important;cursor:pointer;color:black;"><a href="../update-form.php?id='.$row['id'].'">Update</a></td>
                    </tr>


                    </tbody>
                    
                    
                    ';
                }
            }else{
                echo'data not availble'; 
            }


?>
</table>
  </div>
</body>
    </html>
