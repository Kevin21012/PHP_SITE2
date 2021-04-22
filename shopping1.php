<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->

<html>
<head>
<?php
include 'library/header.php';
head();
$conn = connect();

if (isset($_POST['submit'])) {
 if($_POST['submit'] == 'Buy one')
 {
  $_SESSION['cheetos']++;
 }
 elseif($_POST['submit'] == 'Remove one'){
 $_SESSION['cheetos']--;

}
 elseif($_POST['submit'] == 'Remove all')
{
 $_SESSION['cheetos']=0;

 }
}


?>
<title>Shoppingpage1</title>
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
<p>Order some Cheetos</p>

<form align="center" method="Post">
<input type='submit' name='submit' value='Buy one'><br>
<input type='submit' name='submit' value='Remove one'><br>
<input type='submit' name='submit' value='Remove all'><br>
</form>
</div>
<br>
<div class="divone">
<p>   Your cart contains <?php echo $_SESSION['cheetos']; ?> cheetos</p>
</div>
</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
