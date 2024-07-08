<?php 
include("conn.php");
// PHP code (your_php_file.php)
$data = json_decode(file_get_contents("php://input"), true);
$ID = $data['key1'];
// Process the data as needed
// ...
// Send a response back to JavaScript (optional)
$req=mysqli_query($conn,"delete FROM cart WHERE idP=$ID and NumC=" . $_COOKIE["cart"] . ";");
echo 'hamza bouri';