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
    <title>login</title>
</head>
<body>
    <table border="1">
        <tr>
            <td width="300px"><b>Company</b></td>
            <td>
            <a href="">Home | </a>
            <a href="">Login | </a>
            <a href="">Registration</a>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2"  height="200px">
                <form method="post" action="logincheck.php" enctype="">
                    <fieldset>
                        <legend>LOGIN</legend>
                        <table>
                            <td>Name:</td>
                            <td><input type="text" name="Name"></td>
                            <tr>
                                <td>Password</td>
                            <td><input type="text" name="Password"></td>
                            </tr>
                            <tr>
                            <td><input type="checkbox" name="Remember Me"></td>
                            <td>Remember Me</td></br>
                            </tr>
                            <tr>
                            <td>
                            <input type="submit" name="submit" value="Submit">
                            <a href="">Forgot Password?</a>
                        
                            </tr>
                            </table>
                        
                    </fieldset>
                </form>
                              <tr>
                            <td colspan="2" align="center">Copyright c 2017</td>
                            </tr>      
            </td>
        </tr>
    </table>
</body>
</head>