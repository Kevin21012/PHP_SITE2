<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->

<html>
<head>
<?php
include 'library/header.php';
$conn = connect();
head();
if (isset($_POST['submit'])) {
 if($_POST['submit'] == 'Buy one')
 {
  $_SESSION['cheese']++;
 }
 elseif($_POST['submit'] == 'Remove one'){
 $_SESSION['cheese']--;

}
 elseif($_POST['submit'] == 'Remove all')
{
 $_SESSION['cheese']=0;

 }
}
else{
 $_SESSION['cheese']=0;
}


?>
<title>Shoppingpage4</title>
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
.divthree{
 background-color:lightgrey;
  width: 120px;
  margin: left;
  border: 1px solid black;
}

body{
background-image:url("https://images.wsj.net/im-57265?width=1280&size=1.33333333");
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;
background-size: 750px 650px;
background-color: lightblue;
}

p{text-align:center;}

</style>

</head>

<body>

<div class="divone">
<p>Order some Cheese</p>

<form align="center" method="Post">
<input type='submit' name='submit' value='Buy one'><br>
<input type='submit' name='submit' value='Remove one'><br>
<input type='submit' name='submit' value='Remove all'><br>
</form>
</div>
<br>
<div class="divone">
<p>   Your cart contains <?php echo $_SESSION['cheese']; ?> cheese</p>
</div>
</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
