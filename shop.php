<?php
include("sql/cookie.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Healthy - Shop</title>
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
                            <span class='position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1' style='top: -5px; left: 15px; height: 20px; min-width: 20px; ' id="cart">
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
            <li class="breadcrumb-item active text-white">Shop</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4">Fresh fruits shop</h1>
            <div class="row g-4">
                <div class="col-lg-12">
                   
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <!--afficher les tybes et quantité-->
                                        <h4>Categories</h4>
                                        <ul class='nav list-unstyled fruite-categorie '>
                                            <?php
                                            $req = mysqli_query($conn, "Select type,COUNT(*) from produit  group by type;");
                                            $i = 2;
                                            $sum = 0;
                                            while ($row = mysqli_fetch_array($req)) {
                                                echo "
                                                <li class='nav-item'>
                                                    <div class='d-flex justify-content-between fruite-name'>
                                                        <a href='#tab-$i' data-bs-toggle='pill'><i class='fas fa-Fruit-alt me-2'></i>" . $row["type"] . "</a>
                                                        <span >(" . $row[1] . ")</span>
                                                    </div>
                                                </li>
                                                ";
                                                $i++;
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!--boocle  for the poduct promo bat just 3-->
                                    <h4 class="mb-3">Featured products</h4>
                                    <?php
                                    $i = 0;
                                    $req = mysqli_query($conn, "Select * from produit  where Promoprix is not null;");
                                    while ($row = mysqli_fetch_array($req)) {
                                        echo "<div class='d-flex align-items-center justify-content-start'>
                                        <div class='rounded me-4' style='width: 100px; height: 100px;'>
                                            <img src='PrImage/" . $row["image"] . "' class='img-fluid rounded' alt=''>
                                        </div>
                                        <div>
                                            <h6 class='mb-2'>" . $row["nomPr"] . "</h6>
                                            <div class='d-flex mb-2'>
                                                <h5 class='fw-bold me-2'>" . $row["Promoprix"] . ",1$i DH</h5>
                                                <h5 class='text-danger text-decoration-line-through'>" . $row["prix"] . "," . $i . "9 DH</h5>
                                            </div>
                                        </div>
                                    </div>";
                                        $i++;
                                    }
                                    ?>
                                </div>
                                <div class='col-lg-12'>
                                    <div class="position-relative">
                                        <img src="img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                                        <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                            <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class='tab-content'>
                                <!--Fruits and Vegetable tote les poduct Tab-->
                                <div id='tab-1' class='tab-pane fade show p-0 active'>
                                    <div class='row g-4'>
                                        <div class='col-lg-12'>
                                            <div class='row g-4'>
                                                <!-- start boocl pour insert product and link to database-->
                                                <!--change href -->
                                                <?php
                                                include("./sql/DB.php");
                                                $i = 0;
                                                $j= 0; 
                                                $var = 'active';
                                                while ($row = mysqli_fetch_array($Preq)) {
                                                    if ($i >= 9) {
                                                        $j++;
                                                    }else{
                                                        echo "<div class='col-md-6 col-lg-6 col-xl-4'>
                                                        <div class='rounded position-relative fruite-item'>
                                                            <div class='fruite-img'><a href='shop-detail.php?id=" . $row["numPr"] . "'>
                                                                <img src='PrImage/" . $row["image"] . "' class='img-fluid w-100 rounded-top' alt=''></a>
                                                            </div>
                                                            <div class='text-white bg-secondary px-3 py-1 rounded position-absolute' style='top: 10px; left: 10px;'>" . $row["type"] . "</div>
                                                            <div class='p-4 border border-secondary border-top-0 rounded-bottom'>
                                                                <h4>" . $row["nomPr"] . "</h4>
                                                                <p>" . $row["Description"] . "</p>
                                                                <div class='d-flex justify-content-between flex-lg-wrap'>
                                                                    <p class='text-dark fs-5 fw-bold mb-0'>DH" . $row["prix"] . "/ kg</p>
                                                                    <a  class='btn border border-secondary rounded-pill px-3 text-primary' onclick='addcart(" . $row["numPr"] . ")'><i class='fa fa-shopping-bag me-2 text-primary'></i> Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End boocl-->
                                                ";
                                                    }
                                                    $i++;
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    </div>
                                <!--Vegetable Tab-->
                                <div id='tab-3' class='tab-pane fade show p-0'>
                                    <div class='row g-4'>
                                        <div class='col-lg-12'>
                                            <div class='row g-4'>
                                                <!--Start  boocle link -->
                                                <?php
                                                include("./sql/DB.php");
                                                $i = 0;
                                                while ($row = mysqli_fetch_array($PVreq)) {
                                                    if ($i == 8) {
                                                        break;
                                                    }
                                                    echo "<div class='col-md-6 col-lg-6 col-xl-4'>
                            <div class='rounded position-relative fruite-item'>
                                <div class='fruite-img'><a href='shop-detail.php?id=" . $row["numPr"] . "'>
                                    <img src='PrImage/" . $row["image"] . "' class='img-fluid w-100 rounded-top' alt=''></a>
                                </div>
                                <div class='text-white bg-secondary px-3 py-1 rounded position-absolute' style='top: 10px; left: 10px;'>" . $row["type"] . "</div>
                                <div class='p-4 border border-secondary border-top-0 rounded-bottom'>
                                    <h4>" . $row["nomPr"] . "</h4>
                                    <p>" . $row["Description"] . "</p>
                                    <div class='d-flex justify-content-between flex-lg-wrap'>
                                        <p class='text-dark fs-5 fw-bold mb-0'>DH" . $row["prix"] . "/ kg</p>
                                        <a  class='btn border border-secondary rounded-pill px-3 text-primary' onclick='addcart(" . $row["numPr"] . ")'><i class='fa fa-shopping-bag me-2 text-primary' ></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End boocl-->
                    ";
                                                    $i++;
                                                } ?>
                                                <!--End boocle-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Fruits-->
                                <div id='tab-2' class='tab-pane fade show p-0'>
                                    <div class='row g-4'>
                                        <div class='col-lg-12'>
                                            <div class='row g-4'>
                                                <!--Start  boocle-->
                                                <?php
                                                include("sql/DB.php");
                                                $i = 0;
                                                while ($row = mysqli_fetch_array($PFreq)) {
                                                    if ($i == 8) {
                                                        break;
                                                    }
                                                    echo "<div class='col-md-6 col-lg-6 col-xl-4'>
                            <div class='rounded position-relative fruite-item'>
                                <div class='fruite-img'><a href='shop-detail.php?id=" . $row["numPr"] . "'>
                                    <img src='PrImage/" . $row["image"] . "' class='img-fluid w-100 rounded-top' alt=''></a>
                                </div>
                                <div class='text-white bg-secondary px-3 py-1 rounded position-absolute' style='top: 10px; left: 10px;'>" . $row["type"] . "</div>
                                <div class='p-4 border border-secondary border-top-0 rounded-bottom'>
                                    <h4>" . $row["nomPr"] . "</h4>
                                    <p>" . $row["Description"] . "</p>
                                    <div class='d-flex justify-content-between flex-lg-wrap'>
                                        <p class='text-dark fs-5 fw-bold mb-0'>DH" . $row["prix"] . "/ kg</p>
                                        <a class='btn border border-secondary rounded-pill px-3 text-primary' onclick='addcart(" . $row["numPr"] . ")'><i class='fa fa-shopping-bag me-2 text-primary' ></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End boocl-->
                    ";
                                                    $i++;
                                                } ?>
                                                <!--End boocle-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->
    <script>
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
    </script>

<?php include("theme/Footer.php") ?>
</body>

</html>