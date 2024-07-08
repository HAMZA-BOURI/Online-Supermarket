<?php
include("DB.php");
$PCartreq = mysqli_query($conn, "select * from cart order by ID DESC;");
$ID = mysqli_fetch_array($PCartreq);
if (!isset($_COOKIE["cart"])) {
    $i = 1 + $ID["NumC"];
    setcookie('cart', $i, time() + (60 * 60*24*30),'/');
}
