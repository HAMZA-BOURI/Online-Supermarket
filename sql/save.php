<?php
include("conn.php");
$data = json_decode(file_get_contents("php://input"), true);
$qte = $data['key1'];
$IDP = $data['index'];
//echo $IDP."<br>";
//echo $_COOKIE["cart"]."<br>";
$req = mysqli_query($conn, "update cart SET	qte = $qte WHERE  NumC=" . $_COOKIE["cart"] . "and IdP= " . $IDP . ";");
echo $req;
    