<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->

<html>
<head>
<?php
include 'library/header.php';
session_start();
head();

$_SESSION['gummys']=0;
$_SESSION['sprite']=0;
$_SESSION['cheetos']=0;
$_SESSION['cheese']=0;
$cookie_value = $_POST["username"];
setcookie('username', $cookie_value, time() + (86400 * 30), "/"); 
?>
<title>Landing Page</title>
</head>

<body>

<form method='POST'>
<input type='text' name='username' value=''> <br>
<input type='submit' name='submit'>
</form>

</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
