<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'webbanhang';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO brands(name,slug,position,is_active)
VALUES ('test2','test2',1,1)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
