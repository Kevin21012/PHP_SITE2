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






function connect()
{
    $user = "mbennett43";  
    $conn = mysqli_connect("localhost",$user,$user,$user);
    echo "connection found";
    return $conn;
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
