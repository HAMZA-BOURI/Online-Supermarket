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
                        <a href='/cart.html' class='position-relative me-4 my-auto'>
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


    <!-- Cart Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Products</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody id="changePage">
                        <!--start Boocle list de product-->
                        <?php
                        $Creq = mysqli_query($conn, "select count(*) from produit P, cart C where P.numPr=C.idP and C.NumC=" . $_COOKIE["cart"] . ";");
                        $Col = mysqli_fetch_array($Creq);
                        $req = mysqli_query($conn, "select * from produit P, cart C where P.numPr=C.idP and C.NumC=" . $_COOKIE["cart"] . ";");
                        $i = 0;
                        $sum = 0;
                        while ($row = mysqli_fetch_array($req)) {
                            echo " <tr >
                                <th scope='row'>
                                    <div class='d-flex align-items-center'>
                                        <img src='PrImage/" . $row["image"] . "' class='img-fluid me-5 rounded-circle' style='width: 80px; height: 80px;' alt=''>
                                    </div>
                                </th>
                                <td>
                                    <p class='mb-0 mt-4'>" . $row["nomPr"] . "</p>
                                </td>
                                <td>
                                    <p class='mb-0 mt-4' id='prix $i'>" . $row["prix"] . " DH</p>
                                </td>
                                <td>
                                    <div  class='input-group quantity mt-4' style='width: 100px;'>
                                        <div class='input-group-btn'>
                                            <button id='plus' class='btn btn-sm btn-minus rounded-circle bg-light border'  onclick='minus($i," . $Col[0] . ")' >
                                            <i class='fa fa-minus'></i>
                                            </button>
                                        </div>
                                        <input type='text' id='Nbstock $i'  class='form-control form-control-sm text-center border-0'  value=" . $row["qte"] . " required>
                                        <div class='input-group-btn'>Kg
                                                
                                            <button class='btn btn-sm btn-plus rounded-circle bg-light border' onclick='moreprix($i," . $Col[0] . ")' style='margin-right: -16px;'>
                                                <i class='fa fa-plus'></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class='mb-0 mt-4' id='TotaleP $i'>" . $row["prix"] * $row["qte"] . " DH</p>
                                </td>
                                <td>
                                    <button class='btn btn-md rounded-circle bg-light id='IDP' border mt-4' onclick='deleteP(" . $row["IdP"] . ")'>
                                    <input hidden value=" . $row["IdP"] . " id='IDP $i'>
                                        <i class='fa fa-times text-danger'></i>
                                    </button>
                                </td>
                            </tr>";
                            $i++;
                            $sum = $row["prix"] * $row["qte"] + $sum;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-5">
                            <input type="text" class="border-0 border-bottom rounded me-5 py-3 mb-4" placeholder="Coupon Code" id="codePromo">
                            <?php
                            $req = mysqli_query($conn, "select count(*) from produit P, cart C where P.numPr=C.idP and C.NumC=" . $_COOKIE["cart"] . ";");
                            $row = mysqli_fetch_array($req);
                            echo "
                <button class='btn border-secondary rounded-pill px-4 py-3 text-primary' type='button' onclick='Promo(" . $row[0] . ")'>Apply Coupon</button>"; ?>
                        </div>
            <div class="row g-4 justify-content-end">
                <div class="col-8"></div>
                <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                    <div class="bg-light rounded">
                        <div class="p-4">
                            <h1 class="display-6 mb-4">Cart <span class="fw-normal">Total</span></h1>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Subtotal:</h5>
                                <p class="mb-0" id="totalein"><?php echo $sum; ?> DH</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0 me-4">Shopping :</h5>
                                <div class="">
                                    <p class="mb-0" id="shop"><?php if($sum < 700){ echo "Free Shopping: 5.00 DH";}else{echo"Free Shopping: 0.00 DH";}?></p>
                                </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0 me-4">Reduction :</h5>
                                <div class="">
                                    <p class="mb-0" id="PR">0</p>
                                </div>
                            </div>
                        </div>

                        <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                            <h5 class="mb-0 ps-4 me-4">Total</h5>
                            <p class="mb-0 pe-4" id="totale"><?php if($sum < 700){ echo $sum + 5;;}else{echo $sum ;}?> DH</p>
                        </div>
                            <input type="hidden" id="Promo" name="Promo" value=>
                            <?php
                            $req = mysqli_query($conn, "select count(*) from produit P, cart C where P.numPr=C.idP and C.NumC=" . $_COOKIE["cart"] . ";");
                            $row = mysqli_fetch_array($req);
                            echo "<button class='btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4' type='button'onclick='save(" . $row[0] . ")'>Proceed Checkout</button>";
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page End -->
    <script>
        // add cart 
        function addcart(num) {
            var data = {
                key1: num
            };
            fetch('sql/addcart.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data),
                })
                .then(response => response.text())
                .then(result => {
                    //result=parseInt(result);
                    // console.log(result);
                    document.getElementById("cart").innerText = result;
                })
                .catch(error => console.error('Error:', error));
        }
        // save all data base 
        function save(linerow) {
            Prixtotale=document.getElementById('totalein').innerText;
            Prixtotale =parseFloat(Prixtotale);
            console.log(Prixtotale);
            if (Prixtotale === 0) {
                alert("NUll Commande");
            }else{
                R = document.getElementById('PR');
            R = R.innerText;
            R = parseFloat(R);
            console.log(R);
            for (let i = 0; i < linerow; i++) {
                var ID = document.getElementById("IDP " + i).value;
                var qte = document.getElementById("Nbstock " + i).value;
                var data = {
                    key1: qte,
                    index: ID
                };
                fetch('sql/save.php', {
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
            }
           window.location.href = "chackout.php?Promo="+ R
            }
            
        }
        // for code promo
        function Promo(linerow) {
            var Count = 0;
            var codePromo = document.getElementById("codePromo").value;
            console.log(codePromo);
            if (codePromo === "") {
                alert("coupon Code");
            }else {
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
                        if (result === "null") {
                            alert("coupon Code not true");
                        } else {
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
                            if(Count < 300){ Count = Count + 5.00;
                                document.getElementById('shop').innerText="Free Shopping: 5.00 DH";
                            }else{document.getElementById('shop').innerText="Free Shopping: 0.00 DH"}
                            document.getElementById('totale').innerText = Count + " DH";
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        }

        function deleteP(id) {
            var check = confirm("Are you sure you want to delete?");
            if (check) {
                var data = {
                    key1: id
                };
                fetch('sql/delete.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(data),
                    })
                    .then(response => response.text())
                    .then(result => {
                        location.reload();
                    })
                    .catch(error => console.error('Error:', error));
            }
        }
        //function More product 
        function moreprix(i, linerow) {
            var quantity = document.getElementById('Nbstock ' + i).value;
            var prix = document.getElementById('prix ' + i);
            prix = prix.innerText;
            prix = parseFloat(prix);
            var totale = prix * quantity;
            totale = totale + prix;
            document.getElementById('TotaleP ' + i).innerText = totale + " DH";
            var Count = 0;
            for (i = 0; i < linerow; i++) {
                var Tprix = document.getElementById('TotaleP ' + i);
                Tprix = Tprix.innerText;
                Tprix = parseFloat(Tprix);
                Count = Count + Tprix;
            }
            R = document.getElementById('PR');
            R = R.innerText;
            R = parseFloat(R);
            console.log(R);
            if (R === 0) {
                console.log(R);
                Count = Count - (Count * (0 / 100));
                document.getElementById('totalein').innerText = Count + " DH";
                if(Count < 300){ Count = Count + 5.00;
                    document.getElementById('shop').innerText="Free Shopping: 5.00 DH";
                }else{document.getElementById('shop').innerText="Free Shopping: 0.00 DH"}
                document.getElementById('totale').innerText = Count + " DH";
            } else {
                Count = Count - (Count * (R / 100));
                document.getElementById('totalein').innerText = Count + " DH";
                if(Count < 300){ Count = Count + 5.00;
                    document.getElementById('shop').innerText="Free Shopping: 5.00 DH";
                }else{document.getElementById('shop').innerText="Free Shopping: 0.00 DH"}
                document.getElementById('totale').innerText = Count + " DH";
            }
        }
        //function More product 
        function minus(i, linerow) {
            var quantity = document.getElementById('Nbstock ' + i).value;
            var prix = document.getElementById('prix ' + i);
            prix = prix.innerText;
            prix = parseFloat(prix);
            var totale = prix * (quantity - 1);
            if (totale <= 0) {
                document.getElementById('TotaleP ' + i).innerText = 0 + " DH";
            } else {
                document.getElementById('TotaleP ' + i).innerText = totale + " DH";
            }
            var Count = 0;
            for (i = 0; i < linerow; i++) {
                var Tprix = document.getElementById('TotaleP ' + i);
                Tprix = Tprix.innerText;
                Tprix = parseFloat(Tprix);
                Count = Count + Tprix;
            }
            R = document.getElementById('PR');
            R = R.innerText;
            R = parseFloat(R);
            console.log(R);
            if (R === 0) {
                console.log(R);
                Count = Count - (Count * (0 / 100));
                document.getElementById('totalein').innerText = Count + " DH";
                if(Count < 300){ Count = Count + 5.00;
                    document.getElementById('shop').innerText="Free Shopping: 5.00 DH";
                }else{document.getElementById('shop').innerText="Free Shopping: 0.00 DH"}
                document.getElementById('totale').innerText = Count + " DH";
            } else {
                Count = Count - (Count * (R / 100));
                document.getElementById('totalein').innerText = Count + " DH";
                if(Count < 300){ Count = Count + 5.00;
                    document.getElementById('shop').innerText="Free Shopping: 5.00 DH";
                }else{document.getElementById('shop').innerText="Free Shopping: 0.00 DH"}
                document.getElementById('totale').innerText = Count + " DH";
            }
        }
    </script>
    <?php include("theme/Footer.php") ?>
</body>

</html>