<html>
<head>
<title>Username Creator</title>
<?php 

require("library/header.php");
$conn = connect();


function findpost( $name )
{
    if ( isset($_POST[$name]) ) 
    {
        return htmlspecialchars($_POST[$name]);
    }
    return "";
}



if (isset ($_POST["submit"]))
{
   if ($_POST["submit"] == "Create")
    {
      if (empty($_POST['login']))
    {
       echo 'login missing';
    } 
      else if (empty($_POST['passwd']))
      {
       echo 'no password';
      } 
      else if ( $_POST['passwd'] != $_POST['passcheck'])
     {
       echo '<p>passwords dont match</p>';
        }
       else if ( finduser($conn, $_POST['login']) != 0 )
      { 
       echo 'username taken';
      }     
       else {
        $stmt = $conn->prepare("INSERT INTO newuser (username, encrypted_password, email, usergroup) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $user, $strongpassword, $email, $group);
        
        $user = findpost('login');
        $strongpassword = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
        $email = findpost('email');
        $group = findpost('groupone');        
        $stmt->execute();
      }
    }
  }
?>
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
  text-align:center;
}

body{
background-color:orange;

}


p,form,a{
text-align:center;
}

</style>
</head>
<body>
<div class="divone">
<form method='POST'>
<p>Email</p>  
<input type='text' name='email' value=''><br>

<p>Username:</p>
<input type='text' name='login' value=''><br>


<p>Password:<p>
<input type='password' name='passwd' value=''></td>

<p>Retype password:</p>
<input type='password' name='passcheck' value=''><br>




<p>Group:<p>
<select name='groupone'>
<option>user</option>
<option>admin</option>
</select>
<br>
<br>
<input type='submit' name='submit' value='Create'>
<br>
<input type='submit' name='submit' value='Cancel'>
</form>
</div>

<br><br>
<div class="divtwo">
<a href="login.php">Back to login</a>
</div>
</body>
</html>

