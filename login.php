<!--  I honor Pairkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->
<html>
<head>
<title>Login to the Website</title>
<?php
require("library/header.php");

$conn = connect();



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


if ( isset($_POST["submit"]) )
{ 
    $row = finduser($conn, getPost("user"));
    if ($row == 0) 
    {
    echo "wrong username or password";
    }
    else if ( password_verify($_POST["passwd"], $row['encrypted_password'] ))
    {
    $_SESSION["user"] =  getPost("user");
    $_SESSION["group"] =  $row['usergroup'];
    header("Location: landing.php");
    }
    else 
    {
    echo "Something went wrong try again";
    }
}

?>


<body>
<h3>This is not a real login,use your real password and I'll steal your gold username=loginweb password=passwd</h3>
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
