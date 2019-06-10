
<?php
include_once 'connections.php';
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
<<<<<<< HEAD
    echo "<table><tr><th>ID</th><th>FirstName</th><th>Last Name</th><th>MobileNumber</th></tr>";
=======
    echo "<table><tr><th>ID</th><th>First Name2</th><th>Last Name1</th><th>phone Number</th></tr>";
>>>>>>> 7db4a0a379e9e852f4cd92fe08238335fef46fce
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["phone"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
