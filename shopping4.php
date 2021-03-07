<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->

<html>
<head>
<?php
include 'library/header.php';

head();
session_start();
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
<title>ShoppingPage4</title>
</head>

<body>
<p>This page will be the fourth shopping page</p>
</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
