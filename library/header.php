<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->
<?php





function head(){
session_start();
if( $_SESSION['group'] == "user"){
echo '<div class="divthree" text-align="center">';
echo '<p>admin group</p>';
echo '<p>CSC-155</p>';

echo '<img  src="images/GrassNew.png"  height="50" width="50"><br>';
error_reporting(E_ALL ^ E_NOTICE);
echo $_COOKIE["username"] ;
echo '</div>';

}

else{
echo '<div class="divthree" text-align="center">';
echo '<p>admin group</p>';
echo '<p>CSC-155</p>';

echo '<img  src="images/GrassNew.png"  height="50" width="50"><br>';
error_reporting(E_ALL ^ E_NOTICE);
echo $_COOKIE["username"] ;
echo '</div>';
}




}





function destroy(){

session_unset();
}






function connect()
{
    $user = "mbennett43";  
    $conn = mysqli_connect("localhost",$user,$user,$user);
    return $conn;
}

function error( $name )  
{
    if ( isset($_POST[$name]) ) 
    {
        return htmlspecialchars($_POST[$name]);
    }
    return "";
}

 function finduser($conn, $username)
{
    $stmt = $conn->prepare("SELECT * FROM newuser WHERE username=?");
    $stmt->bind_param("s", $username);
    
    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 0)
    {
    return 0;
    }
    else 
    {
    return $result->fetch_assoc();     
    }    
}

?>
