<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->

<html>
<head>
<?php
session_start();
session_destroy();
include 'library/header.php';
header( "refresh:5;url=login.php" );
head();
?>
<title>LOGOUT</title>
</head>

<body>
<p><center>Goobye</center></p>
</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
