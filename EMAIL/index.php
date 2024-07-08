<?php
include("../sql/conn.php");
$Date = date('Y-m-d H:i');
$mssg = "  <body style='
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
background-color: #f4f4f4;
'>
<div class='container' style='
  max-width: 600px;
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
' >
<header style='
    background-color: #81c408;
    color: #fff;
    text-align: center;
    padding: 10px;
    margin-bottom: 20px;
  '>
  <h1>Facture</h1>
</header>
<div class='invoice-details' style='margin-bottom: 20px'>
  <p><strong>Client:</strong>   $nom $Prenom</p>
  <p><strong>Date:</strong> $Date</p>
</div>
<table style='width: 100%; border-collapse: collapse; margin-bottom: 20px'>
  <thead>
    <tr>
      <th style='
          padding: 10px;
          border-bottom: 1px solid #ddd;
          text-align: left;
          background-color: #2a844a;
          color: #fff;
        '>
        Description
      </th>
      <th style='
          padding: 10px;
          border-bottom: 1px solid #ddd;
          text-align: left;
          background-color:#2a844a;
          color: #fff;
        '>
        Quantity
      </th>
      <th style='
          padding: 10px;
          border-bottom: 1px solid #ddd;
          text-align: left;
          background-color: #2a844a;
          color: #fff;
        '>
        Unit price
      </th>
      <th style='
          padding: 10px;
          border-bottom: 1px solid #ddd;
          text-align: left;
          background-color: #2a844a;
          color: #fff;
        '>
        Total
      </th>
    </tr>
  </thead>
  <tbody>";
$sum = 0;
$Rreq = sqlsrv_query($conn, "select * from produit P, cart C where P.numPr=C.idP and C.NumC=" . $_COOKIE["cart"] . ";");
while ($row = sqlsrv_fetch_array($Rreq)) {
  $mssg .= "<tr>
        <td
          style='
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
          '
        >
          " . $row["nomPr"] . "
        </td>
        <td
          style='
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
          '
        >
          " . $row["qte"] . "
        </td>
        <td
          style='
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
          '
        >
        " . $row["prix"] . " DH
        </td>
        <td
          style='
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
          '
        >
        " . $row["prix"] * $row["qte"] . " DH
        </td>
      </tr>";
}
$mssg .= "
</tbody>
<tfoot>
  <tr>
    <td colspan='3' class='total' style='font-weight: bold'>Total</td>
    <td class='total' style='
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;
      '>
      $Prixtotal DH
    </td>
  </tr>
</tfoot>
</table>
<p>Merci de votre entreprise!</p>
</div>
</body>
";
$to = $mail;
$subject = "Facture";
$headers = "Content-Type: text/Html; charset=utf-8`\r\n";
$headers .= "Form Healthy: <company.healthy.pro@gmail.com>\r\n";

if (mail($to, $subject, $mssg, $headers)) {
  echo "Envoye !";
} else {
  echo "Erreur";
}
