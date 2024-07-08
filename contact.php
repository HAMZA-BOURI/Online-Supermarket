<?php
include("sql/cookie.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
$email=$_POST["mail"];
?>
<head>
    <meta charset="utf-8">
    <title>Healthy - Contact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/png" href="img/logo_icon.png" sizes="20%">
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
                        <a href='shop.php' class='nav-item nav-link '>Shop</a>
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
                        <a href='contact.php' class='nav-item nav-link active'>Contact</a>
                    </div>
                    <div class='d-flex m-3 me-0'>
                        <a href='/cart.php' class='position-relative me-4 my-auto'>
                            <i class='fa fa-shopping-bag fa-2x'></i>
                            <!--شحال من comond دازت -->
                            <span class='position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1' style='top: -5px; left: 15px; height: 20px; min-width: 20px;'>
                                <?php
                                $PCartreq = mysqli_query($conn, "select SUM(qte) from cart where NumC=" . $_COOKIE["cart"] . ";");
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
            <li class="breadcrumb-item active text-white">Contact</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

<!-- Contact Start -->
<div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">Contact</h1>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="h-100 rounded">
                                <iframe class="rounded w-100" 
                                style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3346.4924509591283!2d-7.613962624547562!3d32.99079007303093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda60f87877a48cb%3A0xe253db6fd426df01!2z2KfZhNir2KfZhtmI2YrYqSDYp9mE2KrYp9mH2YrZhNmK2Kkg2KfZhNiq2YLZhtmK2Kk!5e0!3m2!1sfr!2sma!4v1706729387949!5m2!1sfr!2sma" 
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <form action="" class="">
                                <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Your Name">
                                <input type="email" class="w-100 form-control border-0 py-3 mb-4" placeholder="Enter Your Email" value=<?php if(isset($_POST["mail"])){
                                    echo $email;
                                }else{
                                    echo "";
                                }?>>
                                <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10" placeholder="Your Message"></textarea>
                                <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary " type="submit">Submit</button>
                            </form>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-2"> 412 BTS , Settat</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-2">company.healthy.pro@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-2">+(212) 712 201002</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <?php include("theme/Footer.php") ?>
</body>
</html>