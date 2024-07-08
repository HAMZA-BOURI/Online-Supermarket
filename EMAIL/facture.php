<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-bottom: 20px;
        }

        .invoice-details {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <header>

            <h1>Facture</h1>
        </header>
        <div class="invoice-details">
            <p><strong>Client:</strong> Nom du client</p>
            <p><strong>Date:</strong> 10 février 2024</p>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produit 1</td>
                    <td>2</td>
                    <td>50,00€</td>
                    <td>100,00€</td>
                </tr>
                <tr>
                    <td>Produit 2</td>
                    <td>1</td>
                    <td>30,00€</td>
                    <td>30,00€</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="total">Total</td>
                    <td class="total">130,00€</td>
                </tr>
            </tfoot>
        </table>
        <p> Thank you for your trust</p>
        <a class='btn  btn-outline-secondary me-2 btn-md-square rounded-circle' href=''>Facebook</a>
        <a class='btn btn-outline-secondary me-2 btn-md-square rounded-circle' href=''>insetgrame</i></a>
    </div>

</body>

</html>