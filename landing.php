<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->

<html>
<head>
<?php
include 'library/header.php';
head();

$_SESSION['gummys']=0;
$_SESSION['sprite']=0;
$_SESSION['cheetos']=0;
$_SESSION['cheese']=0;
$cookie_value = $_POST["username"];
setcookie('username', $cookie_value, time() + (86400 * 30), "/"); 
?>
<title>Landing Page</title>
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

</style>
</head>

<body>
<div class="divone"  align="center">
<form method='POST'>
<p>Enter a username to be called</p>
<input type='text' name='username' value=''> <br>
<input type='submit' name='submit'>
</form>
</div>
</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
