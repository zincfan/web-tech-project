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


$sql = "UPDATE DB SET password='$password' WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
    
    //start
    $target_dir = "prof_det/";
    $target_file = $target_dir . basename($_FILES["prof_det"]["name"]);

    if (move_uploaded_file($_FILES["prof_det"]["tmp_name"], $target_file)) {
        $sql="UPDATE user_data SET resume='$target_file' WHERE username='$username'";
        if (mysqli_query($conn, $sql)) {
    	echo "Record updated successfully";
    } 
}

    
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
