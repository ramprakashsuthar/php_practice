<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<table class="table table-striped">
    <title>Database Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
  <?php 
  //db connection 
  include('dbconnection.php');
  $user_query = "SELECT * FROM users";
  $result = $conn->query($user_query);
  //print_r($result);
  ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Fname</th>
        <th scope="col">Lname</th>
        <th scope="col">Gender</th>
        <th scope="col">Dob</th>
        <th scope="col">Mobile</th>
        <th scope="col">Gmail</th>
        <th scope="col">Password</th>
        <th scope="col">Created date</th>
        <th scope="col">Updated date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
          //echo '<pre>';print_r($row);
      ?>
        <tr>
          <th scope="row"><?php echo $row['id']?></th>
          <td><?php echo $row['fname']?></td>
          <td><?php echo $row['lname']?></td>
          <td><?php echo $row['gender']?></td>
          <td><?php echo $row['dob']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['mobile']?></td>
          <td><?php echo $row['password']?></td>
          <td><?php echo $row['created_date']?></td>
          <td><?php echo $row['updated_date']?></td>
          <td>
            <a href="edit-users.php?id=<?php echo $row['id'];?>">Update</a>
            <button>Delete</button>
          </td>
        </tr>
      <?php
        }
      }
      ?>
    </tbody>
  </table>
</body>
</html>