<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Your name 
Your section -->

 <html>
<head>
<title>Orders</title>
<style type="text/css">
</style>




<?php
require("library/header.php");
$conn = connect();

session_start();


function printData($conn)
{
    $sql = "SELECT * FROM newuser; ";
    $result = $conn->query($sql);
    $rowcount = 0;
    if ($result->num_rows > 0) {
    echo "<table cellspacing='5'>";

    echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Users</th>";
        echo "<th>Email</th>";
        echo "<th>Usergroup</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        $rowcount++;
        if ($rowcount % 2 == 0) 
        echo "<tr bgcolor='lightblue'>";

        else
        echo "<tr bgcolor='white'>";

             echo "<td>" . $row["id"]. "</td>";
            echo "<td>" . $row["username"]. "</td>";
            echo "<td>" . $row["email"]. "</td>";
            echo "<td>" . $row["usergroup"]. "</td>";
        echo "</tr>";
    }
    echo "</table>";
    } 
 
}

?>
<style>

.divone{
 background-color: lightgrey;
 width: 450px;
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
background-color: lightblue;
}



p{text-align:center;}

</style>

</head>
<body>
<div class="divone">
<table align='center'><tr>
<td><?php printData($conn); ?></td>
</tr></table>
</div>

</body>
<?php

include 'library/footer.php';
footer();

?>





</html>
