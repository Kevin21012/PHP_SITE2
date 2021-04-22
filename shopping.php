`<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->

<html>
<head>
<?php
include 'library/header.php';
head();
$conn = connect();

?>
<title>Shopping Page</title>
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
background-image:url("https://www.kttn.com/wp-content/uploads/2019/10/Walmart-Store.jpg");
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;
background-size: 750px 650px;
background-color: lightblue;
}

</style>
</head>

<body>
<div class="divone"  align="center">
<h1>Choose a shopping page</h1>
</form>
</div>
<br>
<div class="divtwo"  align="center">
<a href="shopping1.php">Cheetos</a><br>
<a href="shopping2.php">Sprite</a><br>
<a href="shopping3.php">Gummys</a><br>
<a href="shopping4.php">Cheese</a><br>
</div>

</body>
<?php

include 'library/footer.php';
footer();

?>
</html>
