<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }
?>

<html>
<head>
    <title>Registration</title>
</head>
<body>
    <table border="1">
        <tr>
            <td width="500px"><b>Company</b></td>
            <td>
            <a href="">Home | </a>
            <a href="">Login | </a>
            <a href="">Registration</a>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2" height="200px">
                <form method="post" action="RegistrationCheck.php" enctype="">
                <fieldset>
                <legend align = "center">Registration</legend>
                <table width="200px">
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="" /> </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" email="email" value="" /> </td>
                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" username="username" value="" /> </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" password="password" value="" /> </td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="text" confirmpassword="confirmpassword" value="" /> </td>
                    </tr>
                    <tr>
                        <td>
                            <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value=""> Male 
                            <input type="radio" name="gender" value=""> Female 
                            <input type="radio" name="gender" value=""> Other 
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td>DOB:
                        <input type="date" name="dob" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Submit">
                            <input type="reset" name="reset" value="Reset">
                     </td>
        <tr>
            <td colspan="2" align="center">Copyright c 2017</td>
        </tr>
        </tr>
    </table>
</body>
</html>