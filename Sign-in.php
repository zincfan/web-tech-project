  <?php
$servername = "localhost";
$username = "root";
$password = "qwerty";
$dbname = "DB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password= $_POST['password'];
$password = "qwerty";

$sql = "INSERT INTO DB (username,password)
VALUES ('$username','$password')";

if (mysqli_query($conn, $sql)) {
    echo "Created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

