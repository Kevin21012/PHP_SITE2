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
  $_SESSION['sprite']++;
 }
 elseif($_POST['submit'] == 'Remove one'){
 $_SESSION['sprite']--;

}
 elseif($_POST['sprite'] == 'Remove all')
{
 $_SESSION['sprite']=0;

 }
}
else{
 $_SESSION['sprite']=0;
}


?>
<title>Shoppingpage2</title>
</head>

<body>
<p>This page will be the second shopping  page</p>
</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
