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


$sql = "INSERT INTO DB (username,password)
VALUES ('$username','$password')";

if (mysqli_query($conn, $sql))
{


$sql="CREATE TABLE $username (curr_proj VARCHAR(100) NOT NULL,ratings VARCHAR(20) NOT NULL,contributors VARCHAR(1000) NOT NULL,PRIMARY KEY (curr_proj,ratings,contributors))";
mysqli_query($conn, $sql);

$sql = "INSERT INTO user_data (username)
VALUES ('$username')";
mysqli_query($conn, $sql);
    echo "Created successfully";
    
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

