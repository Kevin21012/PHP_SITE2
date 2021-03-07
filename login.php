<!--  I honor Pairkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->
<html>
<head>
<title>Login to the Website</title>
<?php

include 'library/header.php';

echo head();
error_reporting(E_ALL ^ E_NOTICE);

function getPost($name)

{
        error_reporting(E_ALL ^ E_NOTICE);
        if ( isset($_POST[$name]))
       {
        return  htmlspecialchars($_POST[$name]);
      }
        return "";
}

session_start();



if (isset($_POST["submit"]))
{


if ( $_POST["user"] == "login" and $_POST["passwd"] == "passwd" )
 {
 $_SESSION["user"] = $_POST["user"];
 error_reporting(E_ALL ^ E_NOTICE);
 header("Location: landing.php");

 }
else 
 {
  echo "Wrong username and passwd";
 }

}
?>


<body>
<h3>This is not a real login,use your real password and I'll steal your gold username=login password=passwd</h3>
<form method='POST'>
<input type='text' name='user' value='<?php echo getPost("user");?>'> <br>
<input type='password' name='passwd' value='<?php echo getPost("passwd");?>'> <br>
<input type='submit' name='submit'>
</form>


<?php
include 'library/footer.php';
echo footer();

?>
</body>
</html>
