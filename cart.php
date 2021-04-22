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




if (isset ($_POST["submit"]))
{
        $stmt = $conn->prepare("INSERT INTO orders (gummys, cheetos, cheese, sprite) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $gummys, $cheetos, $cheese, $sprite);

        $gummys = $_SESSION['gummys'];
        $cheetos = $_SESSION['cheetos'];
        $cheese = $_SESSION['cheese'];
        $sprite = $_SESSION['sprite'];
        $stmt->execute();
  }

?>
<title>Cart</title>
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
background-image:url("https://www.cheatsheet.com/wp-content/uploads/2017/08/grocery-store-checkout.jpg");
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;
background-size: 750px 650px;
background-color: lightblue;
}

p,form{text-align:center;}

</style>

</head>

<body>
<br><br><br><br><br>
<div class="divone">
<p><?php echo $_SESSION['gummys']; ?> Gummies</p>
<p><?php echo $_SESSION['cheetos']; ?> Cheetos</p>
<p><?php echo $_SESSION['cheese']; ?> Cheese</p>
<p><?php echo $_SESSION['sprite']; ?> Sprite</p>
<form method="POST">
<input type='submit' name='submit' value='purchase'><br>
<form>
</div>
</body>
<?php

include 'library/footer.php';
footer();
boot();

?>
</html>
