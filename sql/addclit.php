<?php
include("conn.php");
$data = json_decode(file_get_contents("php://input"), true);
//clinet 
$nom = $data['nom'];
$Prenom = $data['Prenom'];
$address = $data['address'];
$phone = $data['phone'];
$mail = $data['mail'];
$comm = $data['comm'];
$req = mysqli_query($conn, "insert INTO client VALUES (".$_COOKIE["cart"].",'$nom','$Prenom','$address','$mail','$phone','$comm');");
if ($req) {
    echo "yes   ";
}else
echo" no ";
//commande 
$dateC = $data['date'];
$typePay = $data['type'];
$Prixtotal = $data['Prix'];
if($typePay == 'COD'){
    $typecomm = 'A'; // Waiting 
}else{
    $typecomm = 'E';// En cour
}
$Creq = mysqli_query($conn, "insert INTO commande(PrixTotal,dateCom,TypePay,typeComm,IdC) VALUES($Prixtotal,'$dateC','$typePay','$typecomm',".$_COOKIE["cart"].");");  
// Facture 
if ($Creq) {
    echo "yes   ";
}else
echo" no ";

$Rreq = mysqli_query($conn, "Select * from cart where NumC = ".$_COOKIE["cart"]."");
$numc = mysqli_query($conn,"select NumComm from commande order by NumComm DESC");
$Nrow = mysqli_fetch_array($numc);
while($row = mysqli_fetch_array($Rreq)){
    $Freq = mysqli_query($conn, "insert INTO facture VALUES (".$_COOKIE["cart"].",".$row["IdP"].",".$row["qte"].",'$dateC','$typecomm',$Nrow[0]);"); 
    $Ureq = mysqli_query($conn , "update produit set Stock = Stock - (".$row["qte"].") where numPr = ".$row["IdP"]." ;");
}
if ($Freq) {
    echo "yes   ";
}else
echo" no ";
if($typePay == 'COD'){
        
}else{
    include("../EMAIL/index.php");
}
$Dreq = mysqli_query($conn, "delete FROM cart WHERE NumC =  ".$_COOKIE["cart"].";");