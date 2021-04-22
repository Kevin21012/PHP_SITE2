<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->
<?php
function footer(){

echo '<br><br><div class="divtwo" align="center">';
echo '<p>Links
<br>----------------</p>
<a href="newuser.php">Make Account</a><br>';
echo '<a href="landing.php">Landing</a><br>';
echo '<a href="logout.php">Lougout</a><br>';
echo '<a href="shopping.php">Shopping</a><br>';
echo '<a href="cart.php">Cart</a><br>';
if(isset($_SESSION['group']) && $_SESSION['group'] == "admin"){

   echo "<a href='orders.php'>Orders</a><br>";
   echo "<a href='users.php'>Users</a><br>";
}

echo '<br></div>';
echo '<br><div align="center"><img src="images/Block_of_Diamond_Old.png"  height="100" width="100"><br></div>';

}

function boot()
{ 
 if (!isset($_SESSION['user']))
 {
  header("Location: login.php");
 
 }
 
 



}
















?>
