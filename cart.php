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

?>
<title>Cart</title>
</head>

<body>
<p><?php echo $_SESSION['gummys']; ?> Gummies</p>
<p><?php echo $_SESSION['cheetos']; ?> Cheetos</p>
<p><?php echo $_SESSION['cheese']; ?> Cheese</p>
<p><?php echo $_SESSION['sprite']; ?> Sprite</p>

</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
