<?php

include 'db/dbConnection.php';
$id1 =  $_GET['id'];
$dataqqq = " SELECT * FROM category_tbl  WHERE category_id = 1 ";
$sql2qw = mysqli_query($connection,$dataqqq);
$row3q = mysqli_fetch_array($sql2qw);
$row3q['category_id'];
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
                            <h5 class="heading-05">Flash Deals Tyre</h5>
                            <div class="price"><span class="price_text"> Price:</span> $145 </div>
                        </div>
                    </div>
                    <div class="cart-item-close-btn">×</div>
                </div>
                <!--// cart Single Item-->

                <!-- Subtotal-->
                <div class="cart-single-item subtotal">
                    <div class="item-left">
                        <h5 class="heading-05">Subtotal:</h5>
                    </div>
                    <div class="item-right">
                        <div class="amount">$45,180</div>
                    </div>
                </div>
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
    <header class="position-inherit border-none">
        <!--Topbar area-->
        <div class="topbar-area style-02">
            <div class="container">
                <div class="topbar-inner">
                    <div class="left-content">
                        Ordered before 17:30, shipped today - Support: (012) 800 456 789
                    </div>
                    <div class="right-content">
                        <div class="social-icon">
                            <ul>
                                <li><a class="icon" href="https://twitter.com/codingeeknet" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a class="icon" href="https://www.instagram.com/codingeeknet" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a class="icon" href="https://www.facebook.com/codingeek.net/" target="_blank"><i
                                            class="fab fa-facebook-square"></i></a></li>
                            </ul>
                        </div>
                        <div class="custom-select-box style-02">
                            <select>
                                <option value="ban">Ban</option>
                                <option value="eng">Eng</option>
                                <option value="hindi">Hindi</option>
                                <option value="tamil">Tamil</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Top Bar Area End-->

        <div class="container">
            <div class="row">
                <div class="header-bottom-area">
                    <!--Logo Area Start-->
                    <div class="logo-area">
                        <a href="index.html">
                            <img src="assets/img/logo-02.png" alt="Logo">
                        </a>
                    </div>
                    <!--// Logo Area End-->

                    <!--Navbar Area Start Here-->
                    <nav class="navbar navbar-area navbar-expand-lg style-02">
                        <div class="container nav-container">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#autoshop_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="humberger-menu black">
                                    <span class="one"></span>
                                    <span class="two"></span>
                                    <span class="three"></span>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse" id="autoshop_main_menu">
                                <ul class="navbar-nav">
                                    <li class="menu-item-has-children">
                                        <a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                            <li><a href="index-3.html">Home 03</a></li>
                                            <li><a href="index-4.html">Home 04</a></li>
                                            <li><a href="index-5.html">Home 05</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="service-details.html">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children current-menu-item">
                                        <a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-02.html">Shop 02</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="shop-details-2.html">Shop Details 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="#">UI Elements</a>
                                                <ul class="sub-menu">
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="accordions.html">Accordions</a></li>
                                                    <li><a href="buttons.html">Buttons</a></li>
                                                    <li><a href="icons.html">Icons</a></li>
                                                    <li><a href="table.html">Table</a></li>
                                                    <li><a href="pagination.html">Pagination</a></li>
                                                    <li><a href="modal.html">Modal</a></li>
                                                    <li><a href="form.html">Form</a></li>
                                                    <li><a href="header.html">Header</a></li>
                                                    <li><a href="footer.html">Footer</a></li>
                                                    <li><a href="alert.html">Alert</a></li>
                                                    <li><a href="countdown.html">Countdown</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="car-sell.html">Car Sell</a></li>
                                            <li><a href="car-repair.html">Car Repair</a></li>
                                            <li><a href="car-booking.html">Car Booking</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="sign-in.html">Sign In</a></li>
                                            <li><a href="sign-up.html">Sign Up</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!--Nav Right Content-->
                            <div class="nav-right-content black">
                                <ul>
                                    <li class="cart show-cart">
                                        <a href="#" class="notification">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="badge">3</span>
                                        </a>
                                    </li>
                                    <li class="search" id="search">
                                        <i class="fa fa-search"></i>
                                    </li>
                                    <li>
                                        <div class="humberger-menu black toggle-btn">
                                            <span class="one"></span>
                                            <span class="two"></span>
                                            <span class="three"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// Nav Right Content-->
                        </div>
                    </nav>
                    <!-- navbar area end -->
                </div>
                <!--// header Bottom-->
            </div>
        </div>
    </header>
    <!--// Main Header End Here-->



    <!--Breadcrumb Start-->
    <div class="breadcrumb-area style-03" style="background: url('assets/img/breadcrumb/04.png')">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-content">
                    <h1 class="page-title">Our Vehicles</h1>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->


    <!--Blog Page Content-->
    <div class="blog-page-content padding-top-120 padding-bottom-160">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Shop Page Grig View-->
                    <div class="shop-page-grid-view">
                        <div class="product-filtering-area">
                            <div class="filter-left" id="btnContainer">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home-grid">
                                            <i class="ti ti-layout-grid2-alt"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#single-grid">
                                            <i class="ti ti-menu"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-right">
                                <span class="sorting-text">Sort by</span>
                                <div class="custom-select-box">
                                    <select>
                                        <option value="ban">Sorting Items</option>
                                        <option value="ban">25 Products</option>
                                        <option value="ban">50 Products</option>
                                        <option value="ban">100 Products</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--// Product Filtering Area-->

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-grid">

                                <div class="grid-list-wrapper padding-top-40">
                                    <!-- Grid List Column-->
                                    <?php

//                                    $dataq = " SELECT * FROM product_tbl  WHERE pro_catid = '$id1' ";
//                                    $sqlq = mysqli_query($connection,$dataq);
//                                    $rowq = mysqli_fetch_array($sqlq);
//                                    $dataiq = $rowq['pro_id'];
//
//
//                                    $datai = " SELECT * FROM image_table  WHERE pro_id = '$dataiq' ";
//                                    $sqli = mysqli_query($connection,$datai);
//                                    $rowi = mysqli_fetch_array($sqli);
//                                    $datai = $rowi['image_name'];

                                    $sql1 = mysqli_query($connection,"SELECT * FROM product_tbl  WHERE pro_catid = '$id1'");
                                    $row2 = mysqli_num_rows($sql1);
                                    while ($row2 = mysqli_fetch_array($sql1)){
                                        $proid =$row2['pro_id'];
                                        $datai = " SELECT * FROM image_table  WHERE pro_id = '$proid' ";
                                        $sqli = mysqli_query($connection,$datai);
                                        $rowi = mysqli_fetch_array($sqli);
                                        $datai = $rowi['image_name'];
                                    ?>
                                    <div class="grid-list-column-item style-02">
                                        <span class="price-drop-tag">New</span>
                                        <h5 class="title padding-top-30"><?php echo $row2['pro_name'] ;?></h5>
<!--                                        <h6 class="sub-title">Model 2019</h6>-->
                                        <div class="thumb">
                                            <img src="admin/galleryImg/<?php echo $datai;?>" alt="img">
                                        </div>
                                        <!--// Thumbnail-->
                                        </br>
                                        <div class="price-wrap">
                                            <div class="price">
                                                <div class="common-price-style">
                                                    <span class="black"><?php echo $row2['pro_prise'] ;?></span>
<!--                                                    <span class="black">500g</span>-->
                                                </div>
                                                <div class="common-price-style">
<!--                                                    <span class="black">--><?php //echo $row2['pro_prise'] ;?><!--</span>-->
                                                    <span class="black">500g</span>
                                                </div>
                                                <div class="common-rating-style" style="right: -60%">
                                                    <input type="radio" name="start1" id="start1"><label
                                                        for="start1"></label>
                                                    <input type="radio" name="start1" id="start2"><label
                                                        for="start2"></label>
                                                    <input type="radio" name="start1" id="start3"><label
                                                        for="start3"></label>
                                                    <input type="radio" name="start1" id="start4"><label
                                                        for="start4"></label>
                                                    <input type="radio" name="start1" id="start5"><label
                                                        for="start5"></label>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!--// Price Wrap-->
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
<!--                                                <div class="power">5.4s</div>-->
<!--                                                <div class="icon flaticon-speedometer"></div>-->
<!--                                                <div class="force">0-100kmph</div>-->
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="agentContactForm.php?id=<?php echo  $row2['agent_id']; ?>" class="main-btn black-border"><i class="icon flaticon-phone-call"
                                                        ></i>
                                                        Contact Agent</a>
                                                </div>
                                            </div>
                                            <div class="car-functional-wrap__item">
<!--                                                <div class="power">100.0</div>-->
<!--                                                <div class="icon flaticon-fuel-station"></div>-->
<!--                                                <div class="force">0-100kmph</div>-->
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item style-02">
                                        <span class="price-drop-tag">New</span>
                                        <h5 class="title padding-top-30">Dodge Challenger</h5>
                                        <h6 class="sub-title">Model 2016</h6>
                                        <div class="thumb">
                                            <img src="assets/img/shop-02/product-02.png" alt="img">
                                        </div>
                                        <!--// Thumbnail-->
                                        <div class="price-wrap">
                                            <div class="price">
                                                <div class="common-price-style">
                                                    <span class="black">$75,500</span>
                                                </div>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="start11"><label
                                                        for="start11"></label>
                                                    <input type="radio" name="start1" id="start21"><label
                                                        for="start21"></label>
                                                    <input type="radio" name="start1" id="start31"><label
                                                        for="start31"></label>
                                                    <input type="radio" name="start1" id="start41"><label
                                                        for="start41"></label>
                                                    <input type="radio" name="start1" id="start51"><label
                                                        for="start51"></label>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!--// Price Wrap-->
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item style-02">
                                        <span class="price-drop-tag">New</span>
                                        <h5 class="title padding-top-30">Mercedes S-Class</h5>
                                        <h6 class="sub-title">Model 2019</h6>
                                        <div class="thumb">
                                            <img src="assets/img/shop-02/product-03.png" alt="img">
                                        </div>
                                        <!--// Thumbnail-->
                                        <div class="price-wrap">
                                            <div class="price">
                                                <div class="common-price-style">
                                                    <span class="black">$49,999</span>
                                                </div>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="start12"><label
                                                        for="start12"></label>
                                                    <input type="radio" name="start1" id="start22"><label
                                                        for="start22"></label>
                                                    <input type="radio" name="start1" id="start32"><label
                                                        for="start32"></label>
                                                    <input type="radio" name="start1" id="start42"><label
                                                        for="start42"></label>
                                                    <input type="radio" name="start1" id="start52"><label
                                                        for="start52"></label>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!--// Price Wrap-->
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item style-02">
                                        <span class="price-drop-tag">New</span>
                                        <h5 class="title padding-top-30">Aston Martin</h5>
                                        <h6 class="sub-title">Model 2019</h6>
                                        <div class="thumb">
                                            <img src="assets/img/shop-02/product-04.png" alt="img">
                                        </div>
                                        <!--// Thumbnail-->
                                        <div class="price-wrap">
                                            <div class="price">
                                                <div class="common-price-style">
                                                    <span class="black">$60,990</span>
                                                </div>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="start13"><label
                                                        for="start13"></label>
                                                    <input type="radio" name="start1" id="start23"><label
                                                        for="start23"></label>
                                                    <input type="radio" name="start1" id="start33"><label
                                                        for="start33"></label>
                                                    <input type="radio" name="start1" id="start43"><label
                                                        for="start43"></label>
                                                    <input type="radio" name="start1" id="start53"><label
                                                        for="start53"></label>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!--// Price Wrap-->
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item style-02">
                                        <span class="price-drop-tag">New</span>
                                        <h5 class="title padding-top-30">Audi S3 Sedan</h5>
                                        <h6 class="sub-title">Model 2019</h6>
                                        <div class="thumb">
                                            <img src="assets/img/shop-02/product-01.png" alt="img">
                                        </div>
                                        <!--// Thumbnail-->
                                        <div class="price-wrap">
                                            <div class="price">
                                                <div class="common-price-style">
                                                    <span class="black">$44,500</span>
                                                </div>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="start14"><label
                                                        for="start14"></label>
                                                    <input type="radio" name="start1" id="start24"><label
                                                        for="start24"></label>
                                                    <input type="radio" name="start1" id="start34"><label
                                                        for="start34"></label>
                                                    <input type="radio" name="start1" id="start44"><label
                                                        for="start44"></label>
                                                    <input type="radio" name="start1" id="start54"><label
                                                        for="start54"></label>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!--// Price Wrap-->
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item style-02">
                                        <span class="price-drop-tag">New</span>
                                        <h5 class="title padding-top-30">Dodge Challenger</h5>
                                        <h6 class="sub-title">Model 2016</h6>
                                        <div class="thumb">
                                            <img src="assets/img/shop-02/product-02.png" alt="img">
                                        </div>
                                        <!--// Thumbnail-->
                                        <div class="price-wrap">
                                            <div class="price">
                                                <div class="common-price-style">
                                                    <span class="black">$75,500</span>
                                                </div>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="start15"><label
                                                        for="start15"></label>
                                                    <input type="radio" name="start1" id="start25"><label
                                                        for="start25"></label>
                                                    <input type="radio" name="start1" id="start35"><label
                                                        for="start35"></label>
                                                    <input type="radio" name="start1" id="start45"><label
                                                        for="start45"></label>
                                                    <input type="radio" name="start1" id="start55"><label
                                                        for="start55"></label>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!--// Price Wrap-->
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item style-02">
                                        <span class="price-drop-tag">New</span>
                                        <h5 class="title padding-top-30">Audi S3 Sedan</h5>
                                        <h6 class="sub-title">Model 2019</h6>
                                        <div class="thumb">
                                            <img src="assets/img/shop-02/product-01.png" alt="img">
                                        </div>
                                        <!--// Thumbnail-->
                                        <div class="price-wrap">
                                            <div class="price">
                                                <div class="common-price-style">
                                                    <span class="black">$44,500</span>
                                                </div>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="start16"><label
                                                        for="start16"></label>
                                                    <input type="radio" name="start1" id="start26"><label
                                                        for="start26"></label>
                                                    <input type="radio" name="start1" id="start36"><label
                                                        for="start36"></label>
                                                    <input type="radio" name="start1" id="start46"><label
                                                        for="start46"></label>
                                                    <input type="radio" name="start1" id="start56"><label
                                                        for="start56"></label>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!--// Price Wrap-->
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item style-02">
                                        <span class="price-drop-tag">New</span>
                                        <h5 class="title padding-top-30">Dodge Challenger</h5>
                                        <h6 class="sub-title">Model 2016</h6>
                                        <div class="thumb">
                                            <img src="assets/img/shop-02/product-02.png" alt="img">
                                        </div>
                                        <!--// Thumbnail-->
                                        <div class="price-wrap">
                                            <div class="price">
                                                <div class="common-price-style">
                                                    <span class="black">$75,500</span>
                                                </div>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="start17"><label
                                                        for="start17"></label>
                                                    <input type="radio" name="start1" id="start27"><label
                                                        for="start27"></label>
                                                    <input type="radio" name="start1" id="start37"><label
                                                        for="start37"></label>
                                                    <input type="radio" name="start1" id="start47"><label
                                                        for="start47"></label>
                                                    <input type="radio" name="start1" id="start57"><label
                                                        for="start57"></label>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!--// Price Wrap-->
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item style-02">
                                        <span class="price-drop-tag">New</span>
                                        <h5 class="title padding-top-30">Mercedes S-Class</h5>
                                        <h6 class="sub-title">Model 2019</h6>
                                        <div class="thumb">
                                            <img src="assets/img/shop-02/product-03.png" alt="img">
                                        </div>
                                        <!--// Thumbnail-->
                                        <div class="price-wrap">
                                            <div class="price">
                                                <div class="common-price-style">
                                                    <span class="black">$49,999</span>
                                                </div>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="start18"><label
                                                        for="start18"></label>
                                                    <input type="radio" name="start1" id="start28"><label
                                                        for="start28"></label>
                                                    <input type="radio" name="start1" id="start38"><label
                                                        for="start38"></label>
                                                    <input type="radio" name="start1" id="start48"><label
                                                        for="start48"></label>
                                                    <input type="radio" name="start1" id="start58"><label
                                                        for="start58"></label>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <a href="#"><i class="icon flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!--// Price Wrap-->
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// Grid List Column-->

                                </div>
                                <!--// Grid List Wrapper-->
                            </div>

                            <div class="tab-pane fade" id="single-grid">
                                <div class="grid-list-wrapper padding-top-40">
                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view style-02">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop-02/product-01.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title">Mercedes S-Class</h5>
                                                <h6 class="sub-title">Model 2019</h6>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="starts01"><label
                                                        for="starts01"></label>
                                                    <input type="radio" name="start1" id="starts02"><label
                                                        for="starts02"></label>
                                                    <input type="radio" name="start1" id="starts03"><label
                                                        for="starts03"></label>
                                                    <input type="radio" name="start1" id="starts04"><label
                                                        for="starts04"></label>
                                                    <input type="radio" name="start1" id="starts05"><label
                                                        for="starts05"></label>
                                                </div>
                                                <div class="common-price-style">
                                                    Price: <span class="black">$145</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->

                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view style-02">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop-02/product-02.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title">Dodge Challenger</h5>
                                                <h6 class="sub-title">Model 2016</h6>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="starts11"><label
                                                        for="starts11"></label>
                                                    <input type="radio" name="start1" id="starts12"><label
                                                        for="starts12"></label>
                                                    <input type="radio" name="start1" id="starts13"><label
                                                        for="starts13"></label>
                                                    <input type="radio" name="start1" id="starts14"><label
                                                        for="starts14"></label>
                                                    <input type="radio" name="start1" id="starts15"><label
                                                        for="starts15"></label>
                                                </div>
                                                <div class="common-price-style">
                                                    Price: <span class="black">$75,500</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view style-02">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop-02/product-03.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title">Mercedes S-Class</h5>
                                                <h6 class="sub-title">Model 2019</h6>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="starts21"><label
                                                        for="starts21"></label>
                                                    <input type="radio" name="start1" id="starts22"><label
                                                        for="starts22"></label>
                                                    <input type="radio" name="start1" id="starts23"><label
                                                        for="starts23"></label>
                                                    <input type="radio" name="start1" id="starts24"><label
                                                        for="starts24"></label>
                                                    <input type="radio" name="start1" id="starts25"><label
                                                        for="starts25"></label>
                                                </div>
                                                <div class="common-price-style">
                                                    Price: <span class="black">$49,999</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view style-02">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop-02/product-04.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title">Aston Martin</h5>
                                                <h6 class="sub-title">Model 2019</h6>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="starts31"><label
                                                        for="starts31"></label>
                                                    <input type="radio" name="start1" id="starts32"><label
                                                        for="starts32"></label>
                                                    <input type="radio" name="start1" id="starts33"><label
                                                        for="starts33"></label>
                                                    <input type="radio" name="start1" id="starts34"><label
                                                        for="starts34"></label>
                                                    <input type="radio" name="start1" id="starts35"><label
                                                        for="starts35"></label>
                                                </div>
                                                <div class="common-price-style">
                                                    Price: <span class="black">$60,990</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view style-02">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop-02/product-01.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title">Mercedes S-Class</h5>
                                                <h6 class="sub-title">Model 2019</h6>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="starts41"><label
                                                        for="starts41"></label>
                                                    <input type="radio" name="start1" id="starts42"><label
                                                        for="starts42"></label>
                                                    <input type="radio" name="start1" id="starts43"><label
                                                        for="starts43"></label>
                                                    <input type="radio" name="start1" id="starts44"><label
                                                        for="starts44"></label>
                                                    <input type="radio" name="start1" id="starts45"><label
                                                        for="starts45"></label>
                                                </div>
                                                <div class="common-price-style">
                                                    Price: <span class="black">$145</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->

                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view style-02">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop-02/product-02.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title">Dodge Challenger</h5>
                                                <h6 class="sub-title">Model 2016</h6>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="starts51"><label
                                                        for="starts51"></label>
                                                    <input type="radio" name="start1" id="starts52"><label
                                                        for="starts52"></label>
                                                    <input type="radio" name="start1" id="starts53"><label
                                                        for="starts53"></label>
                                                    <input type="radio" name="start1" id="starts54"><label
                                                        for="starts54"></label>
                                                    <input type="radio" name="start1" id="starts55"><label
                                                        for="starts55"></label>
                                                </div>
                                                <div class="common-price-style">
                                                    Price: <span class="black">$75,500</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view style-02">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop-02/product-03.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title">Mercedes S-Class</h5>
                                                <h6 class="sub-title">Model 2019</h6>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="starts61"><label
                                                        for="starts61"></label>
                                                    <input type="radio" name="start1" id="starts62"><label
                                                        for="starts62"></label>
                                                    <input type="radio" name="start1" id="starts63"><label
                                                        for="starts63"></label>
                                                    <input type="radio" name="start1" id="starts64"><label
                                                        for="starts64"></label>
                                                    <input type="radio" name="start1" id="starts65"><label
                                                        for="starts65"></label>
                                                </div>
                                                <div class="common-price-style">
                                                    Price: <span class="black">$49,999</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view style-02">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop-02/product-04.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title">Aston Martin</h5>
                                                <h6 class="sub-title">Model 2019</h6>
                                                <div class="common-rating-style">
                                                    <input type="radio" name="start1" id="starts71"><label
                                                        for="starts71"></label>
                                                    <input type="radio" name="start1" id="starts72"><label
                                                        for="starts72"></label>
                                                    <input type="radio" name="start1" id="starts73"><label
                                                        for="starts73"></label>
                                                    <input type="radio" name="start1" id="starts74"><label
                                                        for="starts74"></label>
                                                    <input type="radio" name="start1" id="starts75"><label
                                                        for="starts75"></label>
                                                </div>
                                                <div class="common-price-style">
                                                    Price: <span class="black">$60,990</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-functional-wrap">
                                            <div class="car-functional-wrap__item">
                                                <div class="power">5.4s</div>
                                                <div class="icon flaticon-speedometer"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">280hp</div>
                                                <div class="icon flaticon-engine"></div>
                                                <div class="force">Engine Power</div>
                                            </div>
                                            <div class="car-functional-wrap__item">
                                                <div class="power">100.0</div>
                                                <div class="icon flaticon-fuel-station"></div>
                                                <div class="force">0-100kmph</div>
                                            </div>
                                        </div>
                                        <!--// Car Functional Wrap-->
                                    </div>
                                    <!--// list View Item-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Shop Page Grid View-->

                    <!-- Pagination-->
                    <div class="col-lg-12 margin-bottom-60">
                        <div class="blog-pagination text-center">
                            <ul class="page-numbers">
                                <li><a class="next page-numbers" href="#"><i class="flaticon-left-arrow"></i></a></li>
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="page-numbers" href="#">4</a></li>
                                <li><a class="next page-numbers" href="#"><i class="flaticon-right-arrow"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--// Pagination-->
                </div>


                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget widget_search blog-bg">
                            <form action="blog.html" class="search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--// Search Widget -->

                        <div class="widget blog-bg">
                            <h5 class="widget-title border-bottom">Filters By Price</h5>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <input type="submit" value="Enter Filters" />
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                            </div>
                        </div>
                        <!--// Price Filter widget-->

                        <div class="widget blog-bg style-01">
                            <h5 class="widget-title border-bottom">Popular Vehicles</h5>
                            <ul class="recent_post_item">
                                <?php


                                $sql = mysqli_query($connection,"SELECT * FROM category_tbl ");
                                $row = mysqli_num_rows($sql);
                                while ($row = mysqli_fetch_array($sql)){ ?>
                                    <!--                                    echo "<option value='". $row['category_id'] ."'>" .$row['category_name'] ." </option>" ;-->

<!--                                    <li  ><a class="active" href="agents.php?id=--><?php //echo $row['category_id'] ?><!--">--><?php //echo $row['category_name'] ?><!--</a></li>-->

                                <li class="single-recent-post-item">
                                    <div class="thumb">
                                        <img src="assets/img/shop-02/product-01.png" alt="popular post">
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="products.php?id=<?php echo $row['category_id'] ?>"><?php echo $row['category_name'] ?></a></h5>
                                        <div class="common-rating-style left">
                                            <input type="radio" name="start1" id="start111"><label
                                                for="start111"></label>
                                            <input type="radio" name="start1" id="start112"><label
                                                for="start112"></label>
                                            <input type="radio" name="start1" id="start113"><label
                                                for="start113"></label>
                                            <input type="radio" name="start1" id="start114"><label
                                                for="start114"></label>
                                            <input type="radio" name="start1" id="start115"><label
                                                for="start115"></label>
                                        </div>
                                        <div class="common-price-style">
                                            Price: <span class="black">$145</span>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                }
                                ?>
                                <li class="single-recent-post-item">
                                    <div class="thumb">
                                        <img src="assets/img/shop-02/product-02.png" alt="popular post">
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#">Flash Deals Chair</a></h5>
                                        <div class="common-rating-style left">
                                            <input type="radio" name="start1" id="start221"><label
                                                for="start221"></label>
                                            <input type="radio" name="start1" id="start222"><label
                                                for="start222"></label>
                                            <input type="radio" name="start1" id="start223"><label
                                                for="start223"></label>
                                            <input type="radio" name="start1" id="start224"><label
                                                for="start224"></label>
                                            <input type="radio" name="start1" id="start225"><label
                                                for="start225"></label>
                                        </div>
                                        <div class="common-price-style">
                                            Price: <span class="black">$145</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-recent-post-item">
                                    <div class="thumb">
                                        <img src="assets/img/shop-02/product-03.png" alt="popular post">
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#">Hanging 4K Camera</a></h5>
                                        <div class="common-rating-style left">
                                            <input type="radio" name="start1" id="start331"><label
                                                for="start331"></label>
                                            <input type="radio" name="start1" id="start332"><label
                                                for="start332"></label>
                                            <input type="radio" name="start1" id="start333"><label
                                                for="start333"></label>
                                            <input type="radio" name="start1" id="start334"><label
                                                for="start334"></label>
                                            <input type="radio" name="start1" id="start335"><label
                                                for="start335"></label>
                                        </div>
                                        <div class="common-price-style">
                                            Price: <span class="black">$145</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-recent-post-item">
                                    <div class="thumb">
                                        <img src="assets/img/shop-02/product-01.png" alt="popular post">
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#">Back Camera Display</a></h5>
                                        <div class="common-rating-style left">
                                            <input type="radio" name="start1" id="start441"><label
                                                for="start441"></label>
                                            <input type="radio" name="start1" id="start442"><label
                                                for="start442"></label>
                                            <input type="radio" name="start1" id="start443"><label
                                                for="start443"></label>
                                            <input type="radio" name="start1" id="start444"><label
                                                for="start444"></label>
                                            <input type="radio" name="start1" id="start445"><label
                                                for="start445"></label>
                                        </div>
                                        <div class="common-price-style">
                                            Price: <span class="black">$145</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--// New Product Widget-->


                        <div class="widget blog-bg style-01">
                            <h5 class="widget-title border-bottom">Popular Brands</h5>
                            <ul class="gallery-items">
                                <li><a href="#"><img src="assets/img/blog/gallery/01.png" alt="img"></a></li>
                                <li><a href="#"><img src="assets/img/blog/gallery/02.png" alt="img"></a></li>
                                <li><a href="#"><img src="assets/img/blog/gallery/03.png" alt="img"></a></li>
                                <li><a href="#"><img src="assets/img/blog/gallery/04.png" alt="img"></a></li>
                                <li><a href="#"><img src="assets/img/blog/gallery/05.png" alt="img"></a></li>
                                <li><a href="#"><img src="assets/img/blog/gallery/06.png" alt="img"></a></li>
                            </ul>

                        </div>
                        <!--// Tag Widget-->
                    </div>

                </div>
            </div>
        </div>
        <!--// Container-->
    </div>
    <!--// Blog Page Content-->


    <!-- footer area start -->
    <footer class="footer-area style-02" style="background-image: url('assets/img/bg/footer-bg.png')">
        <div class="footer-top ">
            <div class="container">
                <div class="row">
                    <div class="footer-subscribe-area">
                        <h4 class="title">Subscribe News Letter & Get Company News</h4>
                        <div class="subscribe-area">
                            <form>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter your email address">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <input type="submit" value="Subscribe">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row padding-top-120 padding-bottom-40">
                    <div class="col-lg-4 col-md-6 px-lg-0">
                        <div class="footer-widget widget">
                            <div class="about_us_widget">
                                <a href="index.html" class="footer-logo"> <img src="assets/img/logo.png"
                                        alt="footer logo"></a>
                                <p>We believe brand interaction is key in commu- nication. Real innovations and a
                                    positive customer
                                    experience are the heart of successful communication.</p>

                                <div class="footer-social-icon padding-top-10">
                                    <div class="banner__header__follow_us">
                                        <div class="text">FOLLOW US</div>
                                        <div class="banner__header__icon">
                                            <ul>
                                                <li><a class="icon" href="https://www.facebook.com/codingeek.net/"
                                                        target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a class="icon" href="https://twitter.com/codingeeknet"
                                                        target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a class="icon" href="https://www.instagram.com/codingeeknet"
                                                        target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                <li><a class="icon"
                                                        href="https://www.linkedin.com/company/codingeek/about"
                                                        target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-6 px-lg-0">
                        <div class="footer-widget widget widget_nav_menu">
                            <h5 class="widget-title">Company</h5>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 px-lg-0">
                        <div class="footer-widget widget widget_nav_menu">
                            <h5 class="widget-title">Services</h5>
                            <ul>
                                <li><a href="#">Latest Cars</a></li>
                                <li><a href="#">Featured Car</a></li>
                                <li><a href="#">Sell Your Car</a></li>
                                <li><a href="#">Buy a Car</a></li>
                                <li><a href="#">Strategy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 px-lg-0">
                        <div class="footer-widget widget">
                            <h5 class="widget-title">Contact us</h5>
                            <div class="contact-area">
                                <ul>
                                    <li><i class="icon flaticon-pin"></i><a href="#">Lavaca Street, Suite 2000 Austin,
                                            TX 24141</a></li>
                                    <li><i class="icon flaticon-email"></i><a href="#">autoshop@gmail.com</a></li>
                                    <li><i class="icon flaticon-call-answer"></i><a href="#">(+88) 0172 570051</a></li>
                                    <li><i class="icon flaticon-global"></i><a href="#">www.autoshop.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-inner">
                            &copy; Auto shop 2019 All rights reserved. Powered with <span class="coypright-icon"><i
                                    class="fas fa-heart"></i></span> by
                            <a href="https://codingeek.net/" target="_blank">Codingeek</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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