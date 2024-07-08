<?php
include("conn.php");
try {
        $Creq = mysqli_query($conn, "select * from client");
$Preq = mysqli_query($conn, "select * from produit where Promoprix is null");
$PVreq = mysqli_query($conn, "select * from produit where type= 'Vegetable'");
$PFreq = mysqli_query($conn, "select * from produit where type= 'Fruit'");
$PSreq = mysqli_query($conn, "select * from produit order by Stock;");

} catch (\Exception $th) {
        echo "hamza";
}

if (!$conn) {
        echo "La connexion n'a pu être établie.<br />";
        die(print_r(mysqli_error(), true));
        header("location:'404.html'");
}
?>

