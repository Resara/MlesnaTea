<?php

include 'db/dbConnection.php';
$id1 =  $_GET['id'];
$dataqqq = " SELECT * FROM product_tbl  WHERE pro_id = '$id1' ";
$sql2qw = mysqli_query($connection,$dataqqq);
$row3q = mysqli_fetch_array($sql2qw);
$pdata = $row3q['pro_name'];
$pdata1 = $row3q['pro_catid'];
$pdata2 = $row3q['pro_prise'];
$pdata3 = $row3q['pro_description'];

$dataqqq = " SELECT * FROM category_tbl  WHERE category_id = '$pdata1' ";
$sql2qw = mysqli_query($connection,$dataqqq);
$row3q = mysqli_fetch_array($sql2qw);
$pdata4= $row3q['category_name'];


$datai = " SELECT * FROM image_table  WHERE pro_id = '$id1' ";
$sqli = mysqli_query($connection,$datai);
$rowi = mysqli_fetch_array($sqli);
$pdata5 = $rowi['image_name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coche Car Servicing HTML Template</title>

    <!-- favicon -->
    <link rel=icon href=favicon.ico sizes="20x20" type="image/png">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Fonts Awesome Icons -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!--Jquery UI Css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--Themefy Icons-->
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--Slick Carousel-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- // search Popup -->

    <!--Sidebar Nav-->
    <div id="sidebar" class="sidebar-class right">
        <div class="toggle-btn">
            <span class="closebtn" title="Close Overlay">×</span>
        </div>
        <div class="sidebar-logo-area">
            <!--Logo Area Start-->
            <div class="logo-area">
                <a href="index.html">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
            </div>
            <!--// Logo Area End-->
            <p>We believe brand interaction is key in commu- nication.
                Real innovations and a positive customer experience are the heart of successful communication.</p>
        </div>
        <!--// Sidebar Logo Area-->

        <div class="sidebar-working-area">
            <div class="section-title padding-bottom-20">
                <h4 class="heading-04">Work Hour</h4>
            </div>
            <div class="timing-area">
                <div class="date">Monday to Friday</div>
                <div class="time">
                    <span>7:00</span> - <span>21:00</span>
                </div>

                <div class="date padding-top-20">Saturday</div>
                <div class="time">
                    <span>7:00</span> - <span>16:00</span>
                </div>
            </div>
        </div>
        <!--// Sidebar Working Area-->

        <div class="sidebar-contact-area">
            <div class="section-title padding-bottom-20">
                <h4 class="heading-04">Contact</h4>
            </div>
            <div class="timing-area">
                <div class="date">Support:</div>
                <div class="time">
                    <span> (012) 800 456 789</span>
                </div>

                <div class="date padding-top-20">Shoroom:</div>
                <div class="time">
                    <span>Lavaca Street, Suite 2000 <br> Austin, TX 24141</span>
                </div>
            </div>
        </div>
        <!--// Sidebar Contact Area-->
        <div class="sidebar-social-icon-wrap">
            <div class="banner__header__follow_us">
                <div class="text">FOLLOW US</div>
                <div class="banner__header__icon">
                    <ul>
                        <li><a class="icon" href="https://www.facebook.com/codingeek.net/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a class="icon" href="https://twitter.com/codingeeknet" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a class="icon" href="https://www.instagram.com/codingeeknet" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a class="icon" href="https://www.linkedin.com/company/codingeek/about" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// Sidebar Social Icon-->
    </div>
    <!--// Sidebar Nav-->

    <!--Open Menu Cart-->
    <div id="menu-cart-open">
        <div class="cart-title-wrap">
            <div class="title">
                <h3 class="heading-03">Cart</h3>
            </div>
            <div class="show-cart">
                <span class="closebtn" title="Close Overlay">×</span>
            </div>
        </div>
        <!--// Cart Title-->
        <div class="cart-content">
            <div class="cart-item-wrap">
                <!-- cart Single Item-->
                <div class="cart-single-item">
                    <div class="item-left">
                        <img src="assets/img/cart/01.png" alt="img">
                    </div>
                    <div class="item-right">
                        <div class="item-text">
                            <h5 class="heading-05">Honda NSX</h5>
                            <div class="price"><span class="price_text"> Price:</span> $145 </div>
                        </div>
                    </div>
                    <div class="cart-item-close-btn">×</div>
                </div>
                <!--// cart Single Item-->

                <!-- cart Single Item-->
                <div class="cart-single-item">
                    <div class="item-left">
                        <img src="assets/img/cart/02.png" alt="img">
                    </div>
                    <div class="item-right">
                        <div class="item-text">
                            <h5 class="heading-05">Auto Clutch & Brake</h5>
                            <div class="price"><span class="price_text"> Price:</span> $145 </div>
                        </div>
                    </div>
                    <div class="cart-item-close-btn">×</div>
                </div>
                <!--// cart Single Item-->

                <!-- cart Single Item-->
                <div class="cart-single-item">
                    <div class="item-left">
                        <img src="assets/img/cart/03.png" alt="img">
                    </div>
                    <div class="item-right">
                        <div class="item-text">
                            <h5 class="heading-05"></h5>
                            <div class="price"><span class="price_text"> Price:</span><?php echo $pdata2;?></div>
                        </div>
                    </div>
                    <div class="cart-item-close-btn">×</div>
                </div>
                <!--// cart Single Item-->

                <!-- Subtotal-->

                <!--// Subtotal-->

                <div class="main-btn-wrap padding-top-20">
                    <a href="#" class="main-btn black">VIEW CART</a>
                </div>
                <div class="main-btn-wrap padding-top-20">
                    <a href="#" class="main-btn black">CHECKOUT</a>
                </div>
                <!--// Button -->
            </div>
        </div>
    </div>
    <!--// Open Menu Cart-->


    <!--Main Header Start-->
    <?php include 'header.php'?>
    <!--// Main Header End Here-->


    <!--Breadcrumb Start-->
    <div class="breadcrumb-area style-03" style="background: url('assets/img/breadcrumb/op.jpg')">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-content">
                    <h1 class="page-title">Product</h1>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->

    <!--Product Details Tab-->
    <div class="product-details-tab padding-top-120 padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="Product-tab-big">
                        <div class="product-tab-big-active" style="padding: 212px 0;background-color: lightgreen;">
<!--                            <div class="product-tab-single-big-item" >-->
                                <img src="admin/galleryImg/<?php echo $pdata5;?>" alt="img">
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-02.png" alt="img">-->
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-03.png" alt="img">-->
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!---->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-04.png" alt="img">-->
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-01.png" alt="img">-->
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-02.png" alt="img">-->
<!--                            </div>-->
<!--                            <!--// Single Item-->-->
<!---->
<!--                            <!--// Single Item-->-->
<!--                            <div class="product-tab-single-big-item">-->
<!--                                <img src="assets/img/shop-details/big-03.png" alt="img">-->
<!--                            </div>-->
                            <!--// Single Item-->
                        </div>
                        <!--Slider Active Class-->
                    </div>
                    <!--// Product Tab Big-->

                    <div class="Product-tab-small-active padding-top-30">
<!--                        <div class="product-tab-single-small-item" data-slide-index="0">-->
<!--<!--                            <img src="assets/img/shop-details/small-01.png" alt="img">-->-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="1">-->
<!--<!--                            <img src="assets/img/shop-details/small-02.png" alt="img">-->-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="2">-->
<!--<!--                            <img src="assets/img/shop-details/small-03.png" alt="img">-->-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!---->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="3">-->
<!--<!--                            <img src="assets/img/shop-details/small-04.png" alt="img">-->-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!---->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="4">-->
<!--<!--                            <img src="assets/img/shop-details/small-01.png" alt="img">-->-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!---->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="5">-->
<!--                            <img src="assets/img/shop-details/small-02.png" alt="img">-->
<!--                        </div>-->
<!--                        <!--// Single Item-->-->
<!---->
<!--                        <!--// Single Item-->-->
<!--                        <div class="product-tab-single-small-item" data-slide-index="6">-->
<!--                            <img src="assets/img/shop-details/small-03.png" alt="img">-->
<!--                        </div>-->
                        <!--// Single Item-->

                    </div>
                    <!--// Slider Active Class-->

                    <!--Product Information-->
<!--                    <div class="product-information padding-top-40 padding-bottom-95">-->
<!--                        <ul class="nav nav-tabs" id="myTab" role="tablist">-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link active" data-toggle="pill" href="#pills-description">Description</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" data-toggle="pill" href="#pills-information">Additional-->
<!--                                    Information</a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" data-toggle="pill" href="#pills-review">Reviews</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                        <div class="tab-content description-tab-content">-->
<!--                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel">-->
<!--                                <p>-->
<!--                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem-->
<!--                                    Ipsum has been the industry's standard dummy-->
<!--                                    text ever since the 1500s, when an unknown printer took a galley of type and-->
<!--                                    scrambled it to make a type specimen book.-->
<!--                                    It has survived not only five centuries, but also the leap into electronic-->
<!--                                    typesetting, remaining essentially unchanged.-->
<!--                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem-->
<!--                                    Ipsum passages,-->
<!--                                    and more recently with desktop publishing software like Aldus PageMaker including-->
<!--                                    versions of Lorem Ipsum.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class="tab-pane fade" id="pills-information" role="tabpanel">-->
<!--                                <p>-->
<!--                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem-->
<!--                                    Ipsum has been the industry's standard dummy-->
<!--                                    text ever since the 1500s, when an unknown printer took a galley of type and-->
<!--                                    scrambled it to make a type specimen book.-->
<!--                                    It has survived not only five centuries, but also the leap into electronic-->
<!--                                    typesetting, remaining essentially unchanged.-->
<!--                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem-->
<!--                                    Ipsum passages,-->
<!--                                    and more recently with desktop publishing software like Aldus PageMaker including-->
<!--                                    versions of Lorem Ipsum.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div class="tab-pane fade" id="pills-review" role="tabpanel">-->
<!--                                <p>-->
<!--                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem-->
<!--                                    Ipsum has been the industry's standard dummy-->
<!--                                    text ever since the 1500s, when an unknown printer took a galley of type and-->
<!--                                    scrambled it to make a type specimen book.-->
<!--                                    It has survived not only five centuries, but also the leap into electronic-->
<!--                                    typesetting, remaining essentially unchanged.-->
<!--                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem-->
<!--                                    Ipsum passages,-->
<!--                                    and more recently with desktop publishing software like Aldus PageMaker including-->
<!--                                    versions of Lorem Ipsum.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--// Product Information-->
                </div>

                <div class="col-lg-5">
                    <!--Product Description-->
                    <div class="product-description pl-lg-4">
                        <h4 class="title"><?php echo $pdata;?></h4>
                        <!--// Title-->
                        <div class="rating-wrap">
                            <div class="common-rating-style left">
                                <input type="radio" name="start1" id="start51"><label for="start51"></label>
                                <input type="radio" name="start1" id="start52"><label for="start52"></label>
                                <input type="radio" name="start1" id="start53"><label for="start53"></label>
                                <input type="radio" name="start1" id="start54"><label for="start54"></label>
                                <input type="radio" name="start1" id="start55"><label for="start55"></label>
                            </div>
                            <span class="how-many-rating"> (1k Customer Review)</span>
                        </div>
                        <!--// Rating Wrap-->
                        <div class="common-price-style">
                            Price: <span class="black"><?php echo $pdata2;?></span>
                        </div>
                        <!--// Price-->
                        <div class="padding-20">
                            <p><?php echo $pdata3;?></p>
                        </div>

<!--                        <div class="color-list">-->
<!--                            <span class="color-text">Color</span>-->
<!--                            <ul class="color-list-row">-->
<!--                                <li class="list-item"><a href="#">Black</a></li>-->
<!--                                <li class="list-item"><a href="#">Blue</a></li>-->
<!--                                <li class="list-item"><a href="#">Green</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                       // Color List-->
<!--                        <div class="color-list">-->
<!--                            <span class="color-text">Size</span>-->
<!--                            <ul class="color-list-row">-->
<!--                                <li class="list-item"><a href="#">Large</a></li>-->
<!--                                <li class="list-item"><a href="#">Medium</a></li>-->
<!--                                <li class="list-item"><a href="#">Small</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <!--// Size List-->
                        <div class="cart-wrap padding-top-10 padding-bottom-30">
                            <input type="number" value="1" class="qty" min="1">
                            <div class="main-btn-wrap">
                                <a href="#" class="main-btn black"><i class="flaticon-shopping-cart"></i> Add To
                                    Cart</a>
                            </div>
                        </div>
                        <!--// Cart Wrap-->

<!--                        <div class="sku product-meta">-->
<!--                            <span class="product-meta-name"> Sku:</span>-->
<!--                            <span class="name">150</span>-->
<!--                        </div>-->
                        <!--// Sku-->
                        <div class="category product-meta">
                            <span class="product-meta-name">Category:</span>
                            <span class="name" style="color: #1c7430;"><?php echo $pdata4;?></span>
                        </div>
                        <!--// Category-->
<!--                        <div class="tag product-meta">-->
<!--                            <span class="product-meta-name">Tage:</span>-->
<!--                            <ul class="tag-list-row">-->
<!--                                <li><a href="#">Car,</a></li>-->
<!--                                <li><a href="#">Tyer,</a></li>-->
<!--                                <li><a href="#">Body</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <!-- Tag-->

                    </div>
                    <!--// Product Description-->
                </div>




            </div>

        </div>
    </div>
    <!--// Product Details Tab-->


    <!-- footer area start -->
    <?php include 'footer.php'?>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"> <img src="assets/img/back-to-top.png" alt="img"> </span>
    </div>
    <!-- back to top area end -->



    <!-- jquery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!--migrate-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- waypoint -->
    <script src="assets/js/waypoints.min.js"></script>
    <!--Jquery UI-->
    <script src="assets/js/jquery-ui.js"></script>
    <!-- wow -->
    <script src="assets/js/wow.min.js"></script>
    <!--Slick Js-->
    <script src="assets/js/slick.min.js"></script>
    <!-- counterup -->
    <script src="assets/js/jQuery.rcounter.js"></script>
    <!--Nice Select-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

</body>

</html>