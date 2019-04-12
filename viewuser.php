<html>
<header>
    <div class="container">
       <link rel="stylesheet" href="abc.css" type="text/css"/>
       <link rel="stylesheet" href="abc.css" type="text/css"/>
    </div>
  </header>
<body>
 <table style="text-align:center;">
 <tr>
  <th>Id</th> 
  <th>Username</th> 
  <th>current_credit</th>
 </tr>

 <?php
$conn = mysqli_connect("localhost", "root", "root", "creditt");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT id, name, credits FROM people";
  $result = $conn->query($sql);
  if ($result-> num_rows> 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["credits"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
