<?php
include("conn.php");
$data = json_decode(file_get_contents("php://input"), true);
$IDP = $data['key1'];
//echo $IDP."<br>";
//echo $_COOKIE["cart"]."<br>";
$id=$_COOKIE["cart"];
$checktreq = mysqli_query($conn, "select qte from cart where NumC=$id and IdP=$IDP;");
$IDc = mysqli_fetch_array($checktreq);
if (!isset($IDc[0])) {
    $req = mysqli_query($conn, "insert into cart (NumC, IdP,qte) values (" . $_COOKIE["cart"] . ", " . $IDP . ",1);");
} else {
    $req = mysqli_query($conn, "update cart SET		qte = (" . $IDc[0] . "+1) WHERE  NumC=" . $_COOKIE["cart"] . "and IdP= " . $IDP . ";");
}
$PCartreq = mysqli_query($conn, "select SUM(qte) from cart where NumC=" . $_COOKIE["cart"] . ";");
$ID = mysqli_fetch_array($PCartreq);
echo $ID[0];