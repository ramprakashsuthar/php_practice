<?php
    // DB connection
    include('dbconnection.php');
    if(isset($_POST['submitreg']))
    {

    echo 'signup details';
        // Fetch input values
        $fname=$_POST['fname'];
        //echo $fname;
        $lname=$_POST['lname'];
        //echo $lname;
        $gender=$_POST['gender'];
        //echo $gender;
        $dob=$_POST['dob'];
        //echo $dob;
        $mobile=$_POST['mobile'];
        //echo $mobile;
        $email=$_POST['email'];
        //echo $email;
        $password=md5($_POST['password']);
        //echo $password;
        // echo '<pre>';
        // print_r($_POST);

        if($fname == ''){
            echo 'Fname should not be blank!';
            exit;
        }
        // Insert query 
        $insert_query = "INSERT INTO users(fname, lname, gender, dob,email, mobile, password) VALUES('$fname','$lname','$gender','$dob','$email','$mobile','$password')";

        if ($conn->query($insert_query) === TRUE) {
            echo "<p style='text-align:center;font-size:20px;margin-top:60px;'>You have been registered successfully, <a href='login.php'>click here</a> to login.</p>";
            //header('Location: login.php?i=true');
            exit();
        }else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
        $conn->close();
    }
    if(isset($_POST['submitlogin'])){
        echo '<pre>'; print_r($_POST);
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $loginquery = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

        $result = $conn->query($loginquery);
        #print_r($result);
        if($result->num_rows > 0){
            header("Location: users-list.php");
            exit;
        }else{
            echo 'Invalid credential! Please <a href="login.php">login</a> with correct input.';
            exit;
        }
        $conn->close();
    }

    // Update user function

    if(isset($_POST['updateuser']))
    {

    echo 'signup details';
        // Fetch input values
        $fname=$_POST['fname'];
        //echo $fname;
        $lname=$_POST['lname'];
        //echo $lname;
        $gender=$_POST['gender'];
        //echo $gender;
        $dob=$_POST['dob'];
        //echo $dob;
        $mobile=$_POST['mobile'];
        //echo $mobile;
        $email=$_POST['email'];
        //echo $email;
        
        // echo '<pre>';
        // print_r($_POST);

        if($fname == ''){
            echo 'Fname should not be blank!';
            exit;
        }
        // Insert query 
        //$insert_query = "INSERT INTO users(fname, lname, gender, dob,email, mobile, password) VALUES('$fname','$lname','$gender','$dob','$email','$mobile','$password')";
        $insert_query = "UPDATE users set fname= '$fname',lname='$lname' ";
        if ($conn->query($insert_query) === TRUE) {
            echo "<p style='text-align:center;font-size:20px;margin-top:60px;'>You have been registered successfully, <a href='login.php'>click here</a> to login.</p>";
            //header('Location: login.php?i=true');
            exit();
        }else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>