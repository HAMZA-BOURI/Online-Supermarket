<?php
include("sql/cookie.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Healthy - Cart</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/png" href="./img/logo_icon.png" sizes="20%">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Navbar start -->
    <div class='container-fluid fixed-top'>
        <div class='container topbar bg-primary d-none d-lg-block'>
            <div class='d-flex justify-content-between'>
                <div class='top-info ps-2'>
                    <small class='me-3'><i class='fas fa-map-marker-alt me-2 text-secondary'></i> <a href='https://maps.app.goo.gl/XKbM57rZdDoRWyK68' class='text-white'>412 BTS , Settat</a></small>
                    <small class='me-3'><i class='fas fa-envelope me-2 text-secondary'></i><a href='mailto:company.healthy.pro@gmail.com' class='text-white'>company.healthy.pro@gmail.com</a></small>
                </div>

            </div>
        </div>
        <div class='container px-0'>
            <nav class='navbar navbar-light bg-white navbar-expand-xl'>
                <a href='.' class='navbar-brand'><img src='./img/logo_.png' alt='' style='width: 30%;'></a>
                <button class='navbar-toggler py-2 px-3' type='button' data-bs-toggle='collapse' data-bs-target='#navbarCollapse'>
                    <span class='fa fa-bars text-primary'></span>
                </button>
                <div class='collapse navbar-collapse bg-white' id='navbarCollapse'>
                    <div class='navbar-nav mx-auto'>
                        <a href='.' class='nav-item nav-link'>Home</a>
                        <a href='shop.php' class='nav-item nav-link active'>Shop</a>
                        <!--<a href='shop-detail.html' class='nav-item nav-link'>Shop Detail</a>
                            <div class='nav-item dropdown'>
                                <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>Pages</a>
                                <div class='dropdown-menu m-0 bg-secondary rounded-0'>
                                    <a href='cart.html' class='dropdown-item'>Cart</a>
                                    <a href='chackout.html' class='dropdown-item'>Chackout</a>
                                    <a href='testimonial.html' class='dropdown-item'>Testimonial</a>
                                    <a href='404.html' class='dropdown-item'>404 Page</a>
                                </div>
                            </div>-->
                        <a href='contact.php' class='nav-item nav-link'>Contact</a>
                    </div>
                    <div class='d-flex m-3 me-0'>
                        <a href='cart.php' class='position-relative me-4 my-auto'>
                            <i class='fa fa-shopping-bag fa-2x'></i>
                            <!--شحال من comond دازت -->
                            <span class='position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1' style='top: -5px; left: 15px; height: 20px; min-width: 20px;'>
                            <?php
                                $id=$_COOKIE["cart"];
                                $PCartreq = mysqli_query($conn, "select SUM(qte) AS 'QTE' from cart where NumC=$id;");
                                $ID = mysqli_fetch_array($PCartreq);
                                echo $ID[0];
                                ?>
                            </span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Cart</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href=".">Home</a></li>
            <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
            <li class="breadcrumb-item active text-white">Cart</li>
        </ol>
    </div>
    <!-- Single Page Header End -->



    <!-- Checkout Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="mb-4">Billing details</h1>
            <form action="#">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-6 col-xl-7">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">First Name<sup>*</sup></label>
                                    <input type="text" id="Fname" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Last Name<sup>*</sup></label>
                                    <input type="text" id="Lname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Address <sup>*</sup></label>
                            <input type="text" class="form-control" id="Address" placeholder="House Number Street Name">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Mobile<sup>*</sup></label>
                            <input type="tel" id="phone" class="form-control">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Email Address<sup>*</sup></label>
                            <input type="email" id="mail" class="form-control">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3"><sup></sup></label>
                            <textarea name="text" id="com" class="form-control" spellcheck="false" cols="30" rows="11" placeholder="Oreder Notes (Optional)"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-5">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Products</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $req = mysqli_query($conn, "select * from produit P, cart C where P.numPr=C.idP and C.NumC=" . $_COOKIE["cart"] . ";");
                                    $i = 0;
                                    $sum = 0;
                                    while ($row = mysqli_fetch_array($req)) {
                                        echo "<tr>
                                        <th scope='row'>
                                            <div class='d-flex align-items-center mt-2'>
                                                <img src='PrImage/" . $row["image"] . "' class='img-fluid rounded-circle' style='width: 90px; height: 90px;' alt=''>
                                            </div>
                                        </th>
                                        <td class='py-5'>" . $row["nomPr"] . "</td>
                                        <td class='py-5'>" . $row["prix"] . " DH</td>
                                        <td class='py-5'>" . $row["qte"] . "</td>
                                        <td class='py-5'>" . $row["prix"] * $row["qte"] . " DH</td>
                                    </tr>";
                                        $sum = $row["prix"] * $row["qte"] + $sum;
                                    }
                                    ?>
                                    <tr>
                                        <th scope="row">
                                        </th>
                                        <td class="py-5">
                                            <p class="mb-0 text-dark text-uppercase py-3">TOTAL</p>
                                        </td>
                                        <td class="py-5"></td>
                                        <td class="py-5"></td>
                                        <td class="py-5">
                                            <div class="py-3 border-bottom border-top">
                                                <p class="mb-0 text-dark" id="Tprix"><?php
                                                                                        if ($sum < 300) {
                                                                                            if ($_GET["Promo"] == 0) {
                                                                                                echo $sum + 5;
                                                                                            } else {
                                                                                                $sum = $sum - ($sum * ($_GET["Promo"] / 100));
                                                                                                echo $sum + 5;
                                                                                            }
                                                                                        } else {
                                                                                            if ($_GET["Promo"] == 0) {
                                                                                                echo $sum ;
                                                                                            } else {
                                                                                                $sum = $sum - ($sum * ($_GET["Promo"] / 100));
                                                                                               echo $sum;
                                                                                            }
                                                                                        }
                                                                                        ?> DH</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                            <div class="col-12">
                                <div class="form-check text-start my-3">
                                    <input type="radio" class="form-check-input bg-primary border-0" name="Mpay" value="Payments">
                                    <label class="form-check-label" for="Payments-1">bank card</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                            <div class="col-12">
                                <div class="form-check text-start my-3">
                                    <input type="radio" value="COD" class="form-check-input bg-primary border-0" name="Mpay">
                                    <label class="form-check-label" for="Delivery-1">Cash On Delivery</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                            <div class="col-12">
                                <div class="form-check text-start my-3">
                                    <input type="radio" class="form-check-input bg-primary border-0" name="Mpay" value="Paypal">
                                    <label class="form-check-label" for="Paypal-1">Paypal</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                            <button type="button" onclick="addclt()" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Checkout Page End -->
    <script>
        // for code promo
        function Promo(linerow) {
            var Count = 0;
            var codePromo = document.getElementById("codePromo").value;
            console.log(codePromo);
            if (codePromo === "") {
                var check = confirm("coupon Code");
            } else {
                var data = {
                    key1: codePromo
                };
                fetch('sql/Promo.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(data),
                    })
                    .then(response => response.text())
                    .then(result => {
                        if (result === "") {} else {
                            for (i = 0; i < linerow; i++) {
                                var Tprix = document.getElementById('TotaleP ' + i);
                                Tprix = Tprix.innerText;
                                Tprix = parseFloat(Tprix);
                                Count = Count + Tprix;
                            }
                            result = parseFloat(result);
                            Count = Count - (Count * (result / 100));
                            document.getElementById('PR').innerText = result + " %";
                            document.getElementById('totalein').innerText = Count + " DH";
                            Count = Count + 5.00;
                            document.getElementById('totale').innerText = Count + " DH";
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        }
        // ADD client
        function addclt() {
            Fname = document.getElementById("Fname").value;
            Lname = document.getElementById("Lname").value;
            address = document.getElementById("Address").value;
            phone = document.getElementById("phone").value;
            mail = document.getElementById("mail").value;
            comm = document.getElementById("com").value;
            //
            let ms = Date.now();
            var Pay = document.getElementsByName("Mpay");
            prixtotal = document.getElementById("Tprix").innerText;
            prixtotal = parseFloat(prixtotal);
            // Get the current date and time
            var year = currentDate.getFullYear();
            var month = currentDate.getMonth() + 1; // Months are zero-based, so add 1
            var day = currentDate.getDate();
            // Format the date and time as a string
            var DateComm = year + '-' + pad(month) + '-' + pad(day);
            typePay = "";
            // Function to pad single-digit numbers with a leading zero
            function pad(number) {
                return number < 10 ? '0' + number : number;
            }
            for (i = 0; i < 3; i++) {
                if (Pay[i].checked) {
                    typePay = Pay[i].value;
                }
            }
            if (typePay === "") {
                alert("check Payments ");
            } else {
                if (Fname === "" || Lname === "" || address === "" || phone === "" || mail === "") {
                    alert("Make sure all textbox are full");
                } else {
                    var data = {
                        nom: Fname,
                        Prenom: Lname,
                        address: address,
                        phone: phone,
                        mail: mail,
                        comm: comm,
                        //Communde 
                        type: typePay,
                        Prix: prixtotal,
                        date: DateComm
                    };
                    fetch('sql/addclit.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify(data),
                        })
                        .then(response => response.text())
                        .then(result => {
                            console.log(result);
                        })
                        .catch(error => console.error('Error:', error));
                    if (typePay === "COD") {
                        alert("Your purchase has been completed successfully. Thank you for your trust");
                        window.location.href ="/mini Projuct finly/";
                    } else {
                        alert("Your purchase has been completed successfully. Thank you for your trust, check your email");
                        window.location.href ="/mini Projuct finly/";
                    }
                    
                }

            }
        }

        function chekk() {}

        // Create a new Date object
        var currentDate = new Date();
    </script>

    <?php include("theme/Footer.php") ?>
</body>

</html>