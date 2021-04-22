<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->

<html>
<head>
<?php
include 'library/header.php';
head();
session_destroy();
header( "refresh:5;url=login.php" );
?>
<title>LOGOUT</title>
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

<div class="divone";
<p><center><h2>Goodbye</h2></center></p>
</div>





</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
