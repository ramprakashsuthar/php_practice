<!DOCTYPE html>
<html>
    <head>
    <title>Signup Form</title>
    <style>
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
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    
    </head>
    <body>   
        <form name="myForm" id="signupForm" action="userdb.php" method="post">
            <h3>Signup Form</h3>
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname">
            <div><p id="fmessage"></p></div>
        
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname">
            <div><p id="lmessage"></p></div>
        
            <label style="display: inline; margin-top:5px;">Gender:</label>
            <input type="radio" id="male" name="gender" value="male" checked>
            <label for="male" style="display: inline;">Male</label>
        
            <input type="radio" id="female" name="gender" value="female">
            <label for="female" style="display: inline;">Female</label>
        
            <input type="radio" id="other" name="gender" value="other">
            <label for="other" style="display: inline;">Other</label>
            <div><p id="rmessage"></p></div>
        
        
            <label for="dob" style="padding-top: 10px;">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            <div><p id="dmessage"></p></div>
        
            <label for="mobile">Mobile Number:</label>
                <input type="text" name="mobile" id="mobile">
            <div><p id="mmessage"></p></div>
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
            <div><p id="emessage"></p></div>
        
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
            <div><p id="pmessage"></p></div>
        
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirmpassword" name="confirmpassword" >
            <div><p id="cpmessage"></p></div>
        
            <button type="submit" name="submitreg" id="submitreg">Submit</button>
        </form>
    </body>
    <script>
        $(document).ready(function() {
        $("#signupForm").validate({
            rules: {
                fname: {
                required: true,
                minlength: 3,
                maxlength: 20,
                letterswithbasicpunc: true
                },
                lname: {
                required: true,
                minlength: 3,
                maxlength: 20,
                letterswithbasicpunc: true
                },
                gender: {
                required: true
                },
                dob: {
                required: true,
                date: true
                },
                mobile: {
                required: true,
                minlength: 10,
                maxlength: 10,
                digits: true
                },
                email: {
                required: true,
                email: true
                },
                password: {
                required: true,
                minlength: 8,
                maxlength: 20
                },
                confirmpassword: {
                required: true,
                equalTo: "#password"
                }
            },
            messages: {
                fname: {
                required: "Please enter your first name.",
                minlength: "Your first name must be at least 3 characters long.",
                maxlength: "Your first name must not exceed 20 characters.",
                letterswithbasicpunc: "Please enter only letters and basic punctuation."
                },
                lname: {
                required: "Please enter your last name.",
                minlength: "Your last name must be at least 3 characters long.",
                maxlength: "Your last name must not exceed 20 characters.",
                letterswithbasicpunc: "Please enter only letters and basic punctuation."
                },
                gender: {
                required: "Please select your gender."
                },
                dob: {
                required: "Please enter your date of birth.",
                date: "Please enter a valid date."
                },
                mobile: {
                required: "Please enter your mobile number.",
                minlength: "Your mobile number must be at least 10 digits long.",
                maxlength: "Your mobile number must not exceed 10 digits.",
                digits: "Please enter only digits."
                },
                email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address."
                },
                password: {
                required: "Please enter a password.",
                minlength: "Your password must be at least 8 characters long.",
                maxlength: "Your password must be less then 20 characters."
                },
                confirmpassword: {
                required: "Please confirm your password.",
                equalTo: "Your password and confirmation password do not match."
                }
            }
        });
    });
  
    </script>
</html>
  