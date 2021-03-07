<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->

<html>
<head>
<?php
include 'library/header.php';

head();

ession_start();
if (isset($_POST['submit'])) {
 if($_POST['submit'] == 'Buy one')
 {
  $_SESSION['gummys']++;
 }
 elseif($_POST['submit'] == 'Remove one'){
 $_SESSION['gummys']--;

}
 elseif($_POST['submit'] == 'Remove all')
{
 $_SESSION['gummys']=0;

 }
}
else{
 $_SESSION['gummys']=0;
}

?>
<title>Shoppingpage3</title>
</head>

<body>
<p>This page will be the third shopping  page</p>
</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
