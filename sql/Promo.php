<?php 
include("conn.php");
// PHP code (your_php_file.php)
$data = json_decode(file_get_contents("php://input"), true);
$codeP = $data['key1'];
// Process the data as needed
// ...
// Send a response back to JavaScript (optional)
$req=mysqli_query($conn,"select * from promo where codePromo='".$codeP."'");
$row=mysqli_fetch_array($req);
if(isset($row["Pourcentage"])){
    echo $row["Pourcentage"];
}else{
        echo "null";
}
