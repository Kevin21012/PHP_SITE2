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



error_reporting(E_ALL ^ E_NOTICE);


session_start();


if ( isset($_POST["submit"]) )
{ 
    $row = finduser($conn, error("user"));
    if ($row == 0) 
    {
    echo "wrong username or password";
    }
    else if ( password_verify($_POST["passwd"], $row['encrypted_password'] ))
    {
    $_SESSION["user"] =  error("user");
    $_SESSION["group"] =  $row['usergroup'];
    header("Location: landing.php");
    }
    else 
    {
    echo "Something went wrong try again";
    }
}

?>
<style>

.divone{
 background-color: lightgrey;
 width: 200px;
  margin: auto;
  border: 1px solid black;
}
.divtwo{
 background-color: lightgrey;
  width: 120px;
  margin: auto;
  border: 1px solid black;
}

body{
background-color:lightblue;
}
form{
  text-align: center;
}

</style>

</head>
<body>
<div class="divone">
<form method='POST'>
<p>Login:</p>
<input type='text' name='user' value='<?php echo error("user");?>'> <br>
<p>Password:</p>
<input type='password' name='passwd' value='<?php echo error("passwd");?>'> <br>
<input type='submit' name='submit'>
</form>
</div>

<?php
include 'library/footer.php';
echo footer();

?>
</body>
</html>
