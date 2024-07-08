<?php
try {
    // Create a new PDO instance
    $conn=mysqli_connect("localhost","root","","n_dbhealthy");
    echo "";
} catch (PDOException $e) {
    echo "Connection failed:";
}
?>
