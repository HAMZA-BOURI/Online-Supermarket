<?php
include("sql/cookie.php");
?>
    <?php 
$id=$_GET["id"];
$Preq = mysqli_query($conn, "select * from produit where numPr = $id");
$Creq = mysqli_query($conn, "select * from cart where NumC=".$_COOKIE["cart"]." and IdP = $id");
$row = mysqli_fetch_array($Preq);
$Crow = mysqli_fetch_array($Creq);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Healthy - <?php echo $row["nomPr"]; ?></title>
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
                            <span class='position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1' style='top: -5px; left: 15px; height: 20px; min-width: 20px;' id="cart">
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
            <li class="breadcrumb-item active text-white"><?php echo $row["nomPr"]; ?></li>
        </ol>
    </div>
    <!-- Single Page Header End -->




        <!-- Single Product Start -->
        <div class="container-fluid py-5 mt-5">
            <div class="container py-5">
                <div class="row g-4 mb-5">
                    <div class="col-lg-8 col-xl-9">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="border rounded">
                                    <!--php link -->
                                        <img src="PrImage/<?php echo $row["image"]; ?>" class="img-fluid rounded" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3"><?php echo $row["nomPr"]; ?></h4>
                                <p class="mb-3">Category: <?php echo $row["type"]; ?></p>
                                <h5 class="fw-bold mb-3"><?php echo $row["prix"]; ?> DH</h5>
                                <p class="mb-4"><?php echo $row["Description"]; ?></p>
                                <div class="input-group quantity mb-5" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" id="qte" class="form-control form-control-sm text-center border-0" value=<?php if (!isset($Crow)){echo 1;}else{echo $Crow["qte"];} ?>>
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <a href="#" onclick='addcart(<?php echo $row["numPr"]; ?>)' class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                            <div class="col-lg-12">
                                <nav>
                                    <div class="nav nav-tabs mb-3">
                                        <button class="nav-link active border-white border-bottom-0" type="button" role="tab"
                                            id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                            aria-controls="nav-about" aria-selected="true">Description</button>
                                    </div>
                                </nav>
                                <div class="tab-content mb-5">
                                    <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                        <p><?php echo $row["Description"]; ?></p>
                                        <div class="px-2">
                                            <div class="row g-4">
                                                <div class="col-6">
                                                    <div class="row bg-light align-items-center text-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Weight</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">1 kg</p>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Country of Origin</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0"><?php echo $row["Sources"]; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Quality</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0"><?php echo $row["qualite"]; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Сheck</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">Healthy</p>
                                                        </div>
                                                    </div>
                                                    <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Max Weight</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0"><?php echo $row["Stock"]; ?>Kg</p>
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
                    <div class="col-lg-4 col-xl-3">
                        <div class="row g-4 fruite">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <h4>Categories</h4>
                                    <!--php-->
                                    <ul class="list-unstyled fruite-categorie">
                                    <?php
                                            $req = mysqli_query($conn, "Select type,COUNT(*) from produit  group by type;");
                                            $i = 0;
                                            $sum = 0;
                                            while ($row = mysqli_fetch_array($req)) {
                                                echo "
                                                <li class='nav-item'>
                                                    <div class='d-flex justify-content-between fruite-name'>
                                                        <a href='#tab-3' data-bs-toggle='pill'><i class='fas fa-Fruit-alt me-2'></i>" . $row["type"] . "</a>
                                                        <span >(" . $row[1] . ")</span>
                                                    </div>
                                                </li>
                                                ";
                                            }
                                            ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative">
                                    <img src="img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                        <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="fw-bold mb-0">Related products</h1>
                <div class="vesitable">
                <div class='owl-carousel vegetable-carousel justify-content-center'>
                <!--boocl to add product start-->
                <?php
                include("./sql/DB.php");
                $i = 0;
                while ($row = mysqli_fetch_array($Preq)) {
                    if ($i == 8) {
                        break;
                    }
                    echo "<div class='border border-primary rounded position-relative vesitable-item'>
                                        <a href='shop-detail.php?id=" . $row["numPr"] . "'>
                                            <div class='vesitable-img'>
                                                <img src='PrImage/" . $row["image"] . "' class='img-fluid w-100 rounded-top' alt=''>
                                            </div>
                                        </a>
                                        <div class='text-white bg-primary px-3 py-1 rounded position-absolute' style='top: 10px; right: 10px;'>" . $row["type"] . "</div>
                                        <div class='p-4 rounded-bottom'>
                                            <h4>" . $row["nomPr"] . "</h4>
                                            <p>" . $row["Description"] . "</p>
                                            <div class='d-flex justify-content-between flex-lg-wrap'>
                                                <p class='text-dark fs-5 fw-bold mb-0'>DH" . $row["prix"] . " / kg</p>
                                                <a onclick='addcart(" . $row["numPr"] . ")' class='btn border border-secondary rounded-pill px-3 text-primary'><i class='fa fa-shopping-bag me-2 text-primary'></i> Add to cart</a>
                                            </div>
                                        </div>
                                    </div>";
                    $i++;
                }
                ?>
                <!--finsh here-->

            </div>
                </div>
            </div>
        </div>
        <!-- Single Product End -->
    
        <script>
        function addcart(num) {
            var q =document.getElementById("qte").value;
            console.log(q);
            var data = {
                key1: num,
                Qte :q
            };
            fetch('sql/addcartqte.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data),
                })
                .then(response => response.text())
                .then(result => {
                    //result=parseInt(result);
                    console.log(result);
                    document.getElementById("cart").innerText = result;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
    <?php include("theme/Footer.php") ?>
</body>

</html>

