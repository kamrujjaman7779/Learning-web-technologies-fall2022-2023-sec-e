<?php
include "../Control/regcheck.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-ticket</title>
</head>
<body>

    <h1 align="center">Registration</h1>
    <h3>
    <form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>Full Name:</td><td><input type="text" name="name" id="name"><p style="color:red" id="errfname"></p></td>
            </tr>
            <tr>
                <td>Email:</td><td><input type="email" name="email" id="email"><p style="color:red" id="erremail"></p></td>
            </tr>
            <tr>
                <td>Username:</td><td><input type="text" name="username" id="username"><p style="color:red" id="erruname"></p></td>
            </tr>
            <tr>
                <td>Age:</td><td><input type="number" name="age" id="age"><p style="color:red" id="errage"></p></td>
            </tr>
            <tr>
                <td>Gender:</td><td><input type="radio" name="gender" value="Male" id="gender1">Male</td>
                <td><input type="radio" name="gender" value="Female" id="gender2">Female<p style="color:red" id="errgender"></p></td>
            </tr>
            <tr>
                <td>Phone no:</td><td><input type="text" name="phn" id="phn"><p style="color:red" id="errphn"></p></td>
            </tr>
            <tr>
                <td>Address:</td><td><input type="text" name="address" id="address"><p style="color:red" id="erradd"></p></td>
            </tr>
            <tr>
                <td>Password:</td><td><input type="password" name="password" id="password"><p style="color:red" id="errpass"></p></td>
            </tr><tr></tr><tr></tr><tr></tr>
            <tr><td></td><td><input type="submit" name = "registration" value="Submit" class="btn"> or <a href="login.php">go back</a></td></tr>
            
        
        </table>

    </form></h3>
    
    <script src="../JS/regvalidation.js"></script>
</body>
</html>