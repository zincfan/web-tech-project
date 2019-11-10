 <?php
$servername = "localhost";
$username = "root";
$password = "qwerty";
$dbname = "DB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['name'];
$password = $_POST['password'];

$sql = "UPDATE DB SET password='$password' WHERE username=$username";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
