<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- <style>
        *,
        *:before,
        *:after{
        padding: 0;
         margin: 0;
        box-sizing: border-box;
        }
        body{
        background-color: #080710;
        }
        form{
        height: auto;
        width: 50%;
        background-color: rgba(255,255,255,0.13);
        position: absolute;
        transform: translate(-50%,-50%);
        top: 80%;
        left: 50%;
        bottom:-140%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255,255,255,0.1);
        box-shadow: 0 0 40px rgba(8,7,16,0.6);
        padding: 50px 35px;
        }
        form h3{
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
        }
        form *{
        font-family: 'Poppins',sans-serif;
        color: #ffffff;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
        }
        label {
        display: block;
        margin-top: 10px;
        font-size: 16px;
        font-weight: 500;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="date"] {
        display: block;
        height: 50px;
        width: 100%;
        background-color: rgba(255,255,255,0.07);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 30px;
        font-size: 14px;
        font-weight: 300;
        }
        input[type="radio"] {
            margin-top:30px;
        margin-right: 10px;
        }
        button{
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }
        p{
        color: red;
        }
        .error{
            color:red;
        }
    </style> -->
</head>
<body>
<?php 
  //db connection 
  include('dbconnection.php');
  $userid = $_GET['id'];
  $user_query = "SELECT * FROM users WHERE id = $userid";
  $result = $conn->query($user_query);
  $row = $result->fetch_assoc();
 //echo '<pre>'; print_r($row);
 //echo $row['gender'];
  ?>
    <div class="formdiv">
        <form name="myForm" id="updateform" action="userdb.php" method="post">
            <h3>Update Details</h3>
            <input type="hidden" value='<?php echo $row['id']?>' name='id'>
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" value='<?php echo $row['fname'];?>'>
            <div><p id="fmessage"></p></div>
        
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" value='<?php echo $row['lname'];?>'>
            <div><p id="lmessage"></p></div>

            <label style="display: inline; margin-top:5px;">Gender:</label>
            <input type="radio" id="male" name="gender" value="male" <?php echo ($row['gender']=='male')?'checked':''?> >
            <label for="male" style="display: inline;">Male</label>
        
            <input type="radio" id="female" name="gender" value="female" <?php echo ($row['gender']=='female')?'checked':''?>>
            <label for="female" style="display: inline;">Female</label>
        
            <input type="radio" id="other" name="gender" value="other" <?php echo ($row['gender']=='other')?'checked':''?>>
            <label for="other" style="display: inline;">Other</label>
            <div><p id="rmessage"></p></div>
        
        
            <label for="dob" style="padding-top: 10px;">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required value='<?php echo $row['dob'];?>'>
            <div><p id="dmessage"></p></div>
        
            <label for="mobile">Mobile Number:</label>
                <input type="text" name="mobile" id="mobile" value='<?php echo $row['mobile'];?>'>
            <div><p id="mmessage"></p></div>
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value='<?php echo $row['email'];?>'>
            <div><p id="emessage"></p></div>
            
            <button type="submit" name="updateuser" id="updateuser">Update</button>
        </form> 
    </div>
</body>
</html>