<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->

<html>
<head>
<?php
include 'library/header.php';
session_start();
head();
?>
<title>Landing Page</title>
</head>

<body>

<?php echo $_SESSION['user'] ?>
<p>This page will be the landing page</p>
</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
