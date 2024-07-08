<?php
include("sql/cookie.php");
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <title>Healthy - Home</title>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta content='' name='keywords'>
    <meta content='' name='description'>
    <link rel='icon' type='image/png' href='./img/logo_icon.png' sizes='20%'>
    <!-- Google Web Fonts -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap'
          rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.4/css/all.css'/>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css' rel='stylesheet'>

    <!-- Libraries Stylesheet -->
    <link href='lib/lightbox/css/lightbox.min.css' rel='stylesheet'>
    <link href='lib/owlcarousel/assets/owl.carousel.min.css' rel='stylesheet'>


    <!-- Customized Bootstrap Stylesheet -->
    <link href='css/bootstrap.min.css' rel='stylesheet'>

    <!-- Template Stylesheet -->
    <link href='css/style.css' rel='stylesheet'>
</head>

<body>
<!-- Spinner Start -->
<div id='spinner'
     class='show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center'>
    <div class='spinner-grow text-primary' role='status'></div>
</div>
<!-- Spinner End -->
<!-- Navbar start -->
<div class='container-fluid fixed-top'>
    <div class='container topbar bg-primary d-none d-lg-block'>
        <div class='d-flex justify-content-between'>
            <div class='top-info ps-2'>
                <small class='me-3'><i class='fas fa-map-marker-alt me-2 text-secondary'></i> <a
                            href='https://maps.app.goo.gl/XKbM57rZdDoRWyK68' class='text-white'>412 BTS ,
                        Settat</a></small>
                <small class='me-3'><i class='fas fa-envelope me-2 text-secondary'></i><a
                            href='mailto:company.healthy.pro@gmail.com'
                            class='text-white'>company.healthy.pro@gmail.com</a></small>
            </div>
        </div>
    </div>
    <div class='container px-0'>
        <nav class='navbar navbar-light bg-white navbar-expand-xl'>
            <a href='.' class='navbar-brand'><img src='./img/logo_.png' alt='' style='width: 30%;'></a>
            <button class='navbar-toggler py-2 px-3' type='button' data-bs-toggle='collapse'
                    data-bs-target='#navbarCollapse'>
                <span class='fa fa-bars text-primary'></span>
            </button>
            <div class='collapse navbar-collapse bg-white' id='navbarCollapse'>
                <div class='navbar-nav mx-auto'>
                    <a href='.' class='nav-item nav-link active'>Home</a>
                    <a href='shop.php' class='nav-item nav-link'>Shop</a>
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
                        <span class='position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1'
                              style='top: -5px; left: 15px; height: 20px; min-width: 20px;' id='cart'>
                            <?php
                            $id = $_COOKIE["cart"];
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
<!--valider-->
<!-- Hero Start -->
<div class='container-fluid py-5 mb-5 hero-header'>
    <div class='container py-5'>
        <div class='row g-5 align-items-center'>
            <div class='col-md-12 col-lg-7'>
                <h4 class='mb-3 text-secondary'>100% Bio </h4>
                <h1 class='mb-5 display-3 text-primary'>Organic vegetables & Fruits Foods</h1>
                <div class='position-relative mx-auto'><!--
                        <input class='form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill' type='number' placeholder='Search'>
                        <button type='submit' class='btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100' style='top: 0; right: 0;'>Submit Now</button>-->
                </div>
            </div>
            <div class='col-md-12 col-lg-5'>
                <div id='carouselId' class='carousel slide position-relative' data-bs-ride='carousel'>
                    <div class='carousel-inner' role='listbox'>
                        <div class='carousel-item active rounded'>
                            <img src='img/Fruits.jpg' class='img-fluid w-100 h-100 bg-secondary rounded'
                                 alt='First slide'>
                            <a href='#tab-3' class='btn px-4 py-2 text-white rounded'>Fruits</a>
                        </div>
                        <div class='carousel-item rounded'>
                            <img src='img/vegetables.jpg' class='img-fluid w-100 h-100 rounded' alt='Second slide'>
                            <a href='#tab-2' class='btn px-4 py-2 text-white rounded'>Vegetables</a>
                        </div>
                    </div>
                    <button class='carousel-control-prev' type='button' data-bs-target='#carouselId'
                            data-bs-slide='prev'>
                        <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                        <span class='visually-hidden'>Previous</span>
                    </button>
                    <button class='carousel-control-next' type='button' data-bs-target='#carouselId'
                            data-bs-slide='next'>
                        <span class='carousel-control-next-icon' aria-hidden='true'></span>
                        <span class='visually-hidden'>Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!--valider but change place-->
<!-- Featurs Section Start -->

<!-- Featurs Section End -->

<!--valider-->
<!-- Fruits Shop Start-->
<div class='container-fluid fruite py-5'>
    <div class='container py-5'>
        <div class='tab-class text-center'>
            <div class='row g-4'>
                <div class='col-lg-4 text-start'>
                    <h1>Our Organic Products</h1>
                </div>
                <div class='col-lg-8 text-end'>
                    <!--start condtion for tybe de product and link for DataBase-->
                    <!--valider-->
                    <ul class='nav nav-pills d-inline-flex text-center mb-5'>
                        <li class='nav-item'>
                            <a class='d-flex m-2 py-2 bg-light rounded-pill active' data-bs-toggle='pill' href='#tab-1'>
                                <span class='text-dark' style='width: 130px;'>All Products</span>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='d-flex py-2 m-2 bg-light rounded-pill' data-bs-toggle='pill' href='#tab-2'>
                                <span class='text-dark' style='width: 130px;'>Vegetables</span>
                            </a>
                        </li>
                        <li class='nav-item'>
                            <a class='d-flex m-2 py-2 bg-light rounded-pill' data-bs-toggle='pill' href='#tab-3'>
                                <span class='text-dark' style='width: 130px;'>Fruits</span>
                            </a>
                        </li>
                        <!--end boocle-->
                    </ul>
                </div>
            </div>
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
                                $var = 'active';
                                while ($row = mysqli_fetch_array($Preq)) {
                                    if ($i == 8) {
                                        break;
                                    }
                                    echo "<div class='col-md-6 col-lg-4 col-xl-3'>
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
                                    $i++;
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Vegetable Tab-->
                <div id='tab-2' class='tab-pane fade show p-0'>
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
                                    echo "<div class='col-md-6 col-lg-4 col-xl-3'>
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
                <div id='tab-3' class='tab-pane fade show p-0'>
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
                                    echo "<div class='col-md-6 col-lg-4 col-xl-3'>
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
        })                       ,
    .
        then(response => response.text())
            .then(result => {
                //result=parseInt(result);
                // console.log(result);
                document.getElementById("cart").innerText = result;
            })
            .catch(error => console.error('Error:', error));
    }

</script>
<!--valider-->
<!-- Featurs Start -->
<div class='container-fluid service py-5'>
    <div class='container py-5'>
        <div class='row g-4 justify-content-center'>
            <div class='col-md-6 col-lg-4'>
                <a href='#'>
                    <div class='service-item bg-secondary rounded border border-secondary'>
                        <img src='PrImage/tomato.jpg' class='img-fluid rounded-top w-100' alt=''>
                        <div class='px-4 rounded-bottom'>
                            <div class='service-content bg-primary text-center p-4 rounded'>
                                <h5 class='text-white'>Fresh Tomatoes</h5>
                                <h3 class='mb-0'>20% OFF</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class='col-md-6 col-lg-4'>
                <a href='#'>
                    <div class='service-item bg-dark rounded border border-dark'>
                        <img src='img/featur-2.jpg' class='img-fluid rounded-top w-100' alt=''>
                        <div class='px-4 rounded-bottom'>
                            <div class='service-content bg-light text-center p-4 rounded'>
                                <h5 class='text-primary'>Tasty Fruits</h5>
                                <h3 class='mb-0'>Free delivery</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class='col-md-6 col-lg-4'>
                <a href='#'>
                    <div class='service-item bg-primary rounded border border-primary'>
                        <img src='img/featur-3.jpg' class='img-fluid rounded-top w-100' alt=''>
                        <div class='px-4 rounded-bottom'>
                            <div class='service-content bg-secondary text-center p-4 rounded'>
                                <h5 class='text-white'>Exotic Vegetable</h5>
                                <h3 class='mb-0'>Discount 30DH</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Featurs End -->

<!--valider-->
<!-- Vesitable Shop Start-->
<div class='container-fluid vesitable py-5'>
    <div class='container py-5'>
        <h1 class='mb-0'>Fresh Organic Vegetables</h1>
        <a href='google.com'></a>
        <div class='owl-carousel vegetable-carousel justify-content-center'>
            <!--boocl to add product start-->
            <?php
            include("./sql/DB.php");
            $i = 0;
            while ($row = mysqli_fetch_array($PVreq)) {
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
<!-- Vesitable Shop End -->

<!--valider-->
<!-- Banner Section Start-->
<div class='container-fluid banner bg-secondary my-5'>
    <div class='container py-5'>
        <div class='row g-4 align-items-center'>
            <div class='col-lg-6'>
                <div class='py-4'>
                    <h1 class='display-3 text-white'>Fresh Exotic Fruits</h1>
                    <p class='fw-normal display-3 text-dark mb-4'>in Our Store</p>
                    <p class='mb-4 text-dark'>The generated Lorem Ipsum is therefore always free from repetition
                        injected humour, or non-characteristic words etc.</p>
                    <a href='#' class='banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5'>BUY</a>
                </div>
            </div>
            <div class='col-lg-6'>
                <div class='position-relative'>
                    <img src='img/baner-1.png' class='img-fluid w-100 rounded' alt=''>
                    <div class='d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute'
                         style='width: 140px; height: 140px; top: 0; left: 0;'>
                        <h1 style='font-size: 100px;'>1</h1>
                        <div class='d-flex flex-column'>
                            <span class='h2 mb-0'>5DH</span>
                            <span class='h4 text-muted mb-0'>kg</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->
<!--valider-->
<!-- Bestsaler Product Start -->
<div class='container-fluid py-5'>
    <div class='container py-5'>
        <div class='text-center mx-auto mb-5' style='max-width: 700px;'>
            <h1 class='display-4'>Bestseller Products</h1>
            <!--
                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>-->
        </div>
        <div class='row g-4'>

            <!--boocle to insert Bestseller Products -->
            <?php
            include("./sql/DB.php");
            $i = 0;
            while ($row = mysqli_fetch_array($PSreq)) {
                if ($i == 3) {
                    break;
                }
                echo " <div class='col-lg-6 col-xl-4'>
                            <div class='p-4 rounded bg-light'>
                            <div class='row align-items-center'>
                            <div class='col-6'>
                                <img src='PrImage/" . $row["image"] . "' class='img-fluid rounded-circle w-100' alt=''>
                            </div>
                            <div class='col-6'>
                                <a href='shop-detail.php?id=" . $row["numPr"] . "' class='h5'>" . $row["nomPr"] . "</a>
                                <div class='d-flex my-3'>
                                    <i class='fas fa-star text-primary'></i>
                                    <i class='fas fa-star text-primary'></i>
                                    <i class='fas fa-star text-primary'></i>
                                    <i class='fas fa-star text-primary'></i>
                                    <i class='fas fa-star'></i>
                                </div>
                                <h4 class='mb-3'>" . $row["prix"] . "DH</h4>
                                <a onclick='addcart(" . $row["numPr"] . ")' class='btn border border-secondary rounded-pill px-3 text-primary'><i class='fa fa-shopping-bag me-2 text-primary'></i> Add to cart</a>
                            </div>
                        </div>
                        
                </div></div>";
                $i++;
            }
            ?>
            <?php
            include("./sql/DB.php");
            $i = 0;
            while ($row = mysqli_fetch_array($PSreq)) {
                if ($i >= 3) {
                    echo " 
                 <div class='col-md-6 col-lg-6 col-xl-3'>
                    <!--boocle pour afficher les producte DataBase Start -->
                    <div class='text-center'>
                        <img src='PrImage/" . $row["image"] . "' class='img-fluid rounded' alt=''>
                        <div class='py-4'>
                            <a href='shop-detail.php?id=" . $row["numPr"] . "' class='h5'>" . $row["nomPr"] . "</a>
                            <div class='d-flex my-3 justify-content-center'>
                                <i class='fas fa-star text-primary'></i>
                                <i class='fas fa-star text-primary'></i>
                                <i class='fas fa-star text-primary'></i>
                                <i class='fas fa-star text-primary'></i>
                                <i class='fas fa-star'></i>
                            </div>
                            <h4 class='mb-3'>" . $row["prix"] . "DH</h4>
                            <a onclick='addcart(" . $row["numPr"] . ")' class='btn border border-secondary rounded-pill px-3 text-primary'><i class='fa fa-shopping-bag me-2 text-primary'></i> Add to cart</a>
                        </div>
                    </div>
                    <!--finsh boocl -->
            </div>
                        
            ";
                } else if ($i == 7) {
                    break;
                }
                $i++;
            }
            ?>
        </div>
    </div>
</div>
<!-- Bestsaler Product End -->

<!--valider-->
<!-- Fact Start -->
<div class='container-fluid py-5'>
    <div class='container'>
        <div class='bg-light p-5 rounded'>
            <div class='row g-4 justify-content-center'>
                <div class='col-md-6 col-lg-6 col-xl-3'>
                    <div class='counter bg-white rounded p-5'>
                        <i class='fa fa-users text-secondary'></i>
                        <h4>satisfied customers</h4>
                        <h1>1963</h1>
                    </div>
                </div>
                <div class='col-md-6 col-lg-6 col-xl-3'>
                    <div class='counter bg-white rounded p-5'>
                        <i class='fa fa-users text-secondary'></i>
                        <h4>quality of service</h4>
                        <h1>99%</h1>
                    </div>
                </div>
                <div class='col-md-6 col-lg-6 col-xl-3'>
                    <div class='counter bg-white rounded p-5'>
                        <i class='fa fa-users text-secondary'></i>
                        <h4>quality certificates</h4>
                        <h1>33</h1>
                    </div>
                </div>
                <div class='col-md-6 col-lg-6 col-xl-3'>
                    <div class='counter bg-white rounded p-5'>
                        <i class='fa fa-users text-secondary'></i>
                        <h4>Available Products</h4>
                        <h1>789</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact Start -->

<?php include("theme/Footer.php") ?>

</body>

</html>