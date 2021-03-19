<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->
<?php



function head(){


echo '<p>Matthew M Bennett</p>';
echo '<p>CSC-155</p>';
echo '<img src="images/GrassNew.png"  height="100" width="100">';
echo '<br>';
error_reporting(E_ALL ^ E_NOTICE);
echo  $_COOKIE["username"] ;
}

function destroy(){

session_unset();
}

?>
