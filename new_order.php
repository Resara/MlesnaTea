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



<?php require_once 'insert-order.php'?>

<?php
include 'db/dbConnection.php';
//$result = $mysqli-> query("SELECT * FROM review_tbl") or die($mysqli->error);

?>

<!-- preloader area start -->
<?php include 'header2.php'?>
<!--// Open Menu Cart-->

<!--Main Header Start-->

<!--// Main Header End Here-->

<!--Breadcrumb Start-->
<div class="breadcrumb-area" style="background-image: url('assets/img/carolyn-v-SvbDNnbipj0-unsplash.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="page-title">Add New Order</h1>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Add New Order</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb End-->

<!--Cantact-->
<div class="contact-page padding-top-115 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="left-content">
                    <div class="section-title">
                        <h2 class="heading-02 padding-bottom-20">Get In Touch</h2>
                        <p>Tea is an aromatic beverage commonly prepared by pouring hot or boiling water over cured or
                            fresh leaves of the camellia sinensis, an evergreen shrub native to East Asia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <form action="insert-order.php" class="contact-form" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" name="firstname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="lastname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="postalcode">Postal Code</label>
                                <input type="text" class="form-control" name="postalcode">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="custom-select-box w-100">
                              <select name="teaCat">
                                <option value="">Select Tea Category</option>
                                <option value="Black Tea">Black Tea</option>
                                <option value="Jasmine Tea">Jasmine Tea</option>
                                <option value="Green Tea">Green Tea</option>
                                <option value="Normal Tea">Normal Tea</option>
                               </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="custom-select-box w-100">
                                <select name="teaType">
                                    <option value="">Select Tea Type</option>
                                    <option value="Loose Tea">Loose Tea</option>
                                    <option value="Tea Bags">Tea Bags</option>

                                </select>
                            </div>
                        </div>

                            <div>
                                <h2><br></h2>
                            </div>


                        <div class="col-lg-12">
                            <div class="main-btn-wrap">
                                <input class="main-btn black" name="save" type="submit" value="Send Message">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--// Cantact-->




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
<!--Google Map API-->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVyNXoXHkqAwBKJaouZWhHPCP5vg7N0HQ&callback=initMap"
    async defer></script> -->
<!--Google Map Active-->
<!-- <script src="assets/js/goolg-map-activate.js"></script> -->
<!-- main js -->
<script src="assets/js/main.js"></script>

</body>

</html>