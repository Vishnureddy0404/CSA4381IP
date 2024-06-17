<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";
$conn = new mysqli($servername, $username, $password, $dbname);
$username = $_POST["uname"];
$password = $_POST["pass"];
$result = $conn->query("SELECT * FROM user");
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
if ($row["user_name"] == "$username" && $row["password"] == "$password") {
echo "User found";
}
else 
{
echo "Invalid Entry";
}
}
} 
else 
{
echo "No record found";
}
?>