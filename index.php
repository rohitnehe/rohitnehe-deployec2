
<?php
include_once 'connections.php';
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name1</th><th>Mobile Number</th></tr>";
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