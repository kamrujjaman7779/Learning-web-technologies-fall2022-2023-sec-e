<html>

<head>
  <title>Login Form</title>
</head>
<body>
  <form method="post" action="../controllers/loginCheck.php">
    <fieldset>
      <legend>LOGIN</legend>
      <table>
        <tr>
          <td>User ID </td>
          <td><input type="text" name="userid" value="" ></td>
        </tr>
        <tr>
          <td>Password </td>
          <td><input type="password" name="password" value="" ></td>
      </table>
      <hr>
      <table>
        <tr><input type="checkbox">Remember Me</tr>
        <tr>
          <td>
          <td><input type="submit" name="btn" value="Submit"></td>
          </td>
          <td><a href="register.php">Register</a></td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>
</html>