<?php session_start();
if(isset($_POST['Submit'])){
$logins = array('admin' => 'password','shivendra' => 'shivendrakumar','jane' => 'jane');

$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
if (isset($logins[$Username]) && $logins[$Username] == $Password){
$_SESSION['UserData']['Username']=$logins[$Username];
header("location:user.php");
exit;
}
else {
echo " Username or Password incorrect. Please try again.";
}
}
?>

<!DOCTYPE html>
<html>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   </head>
  <body style="background-color:powderblue;">

  <form action="" method="post" name="Login_Form">
  <table width="500" border="5" align="center" cellpadding="15" cellspacing="1" class="Table">
      <td colspan="2" align="center" valign="center"><h3> Login Form </h3></td>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button"></td>
    </tr>
  </table>

</form>
</body>
</html>
