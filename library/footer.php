<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->
<?php
function footer(){

echo '<img src="images/Block_of_Diamond_Old.png"  height="100" width="100">';
echo '<p>Links</p>';
echo '<p>----------------</p>';
echo '<a href="landing.php">Landing</a><br>';
echo '<a href="logout.php">Lougout</a><br>';
echo '<a href="shopping1.php">Shopping1</a><br>';
echo '<a href="shopping2.php">Shopping2</a><br>';
echo '<a href="shopping3.php">Shopping3</a><br>';
echo '<a href="shopping4.php">Shopping4</a><br>';
echo '<a href="cart.php">Cart</a><br>';

}

function boot()
{ 
 if (!isset($_SESSION['user']))
 {
  header("Location: login.php");
 
 }
 
 



}
















?>
