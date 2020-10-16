<!DOCTYPE html>
<html lang="en">

<?php require_once 'insert-review.php'?>

<?php
include 'db/dbConnection.php';
$result = $mysqli-> query("SELECT * FROM review_tbl") or die($mysqli->error);

?>
<?php include 'header2.php'?>

<!--Breadcrumb Start-->
<section><div class="padding-top-100" ></div></section>
<div class="breadcrumb-area style-02 padding-top-120">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-inner">
                <div class="breadcrumb-left">
                    <div class="breadcrumb-inner-wrap">
                        <div class="breadcrumb-border">
                            <h1 class="page-title">Tea Review</h1>
                            <ul class="page-list">
                                <li><a href="index.html">Home</a></li>
                                <li>Tea Reviews</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-right">
                    <div class="breadcrumb-thumb" style="background-image: url('assets/img/vivek-kumar-JKbyACnTvuE-unsplash.jpg')">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb End-->


<!--Blog Page Content-->
<div class="blog-page-content padding-top-120 padding-bottom-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="blog-details-wrap">



                    <!--// Blog Details Footer-->

                    <!--Comment area-->

                    <div class="comment-area padding-top-10">
                        <h5 class="comments-title">Reviews:</h5>
                        <ul class="comment-list">
                           <?php
                            $sql="SELECT * FROM review_tbl";
                           $data=mysqli_query($connection,$sql);
                           while ($dataRow=mysqli_fetch_assoc($data)){


                            ?>
                            <li>
                                <!-- single comment wrap -->
                                <div class="single-comment-wrap padding-40">
                                    <div class="thumb">
                                        <img src="assets/img/blog/blog-details/avatar-01.png" alt="comment images">
                                    </div>
                                    <div class="content bg-none">
                                        <div class="title-area">
                                            <h5 class="title"><?php echo $dataRow['name'];?></h5>

                                        </div>
                                        <p><?php echo $dataRow['review']?></p>

                                    </div>
                                </div><!-- // single comment wrap -->


                            </li>
                            <?php } ?>

                        </ul>

                        <!-- comment form wrap -->
                        <div class="comment-form-wrap">
                            <h5 class="reply-title">Add your Review</h5>
                            <div class="form-area">
                                <form action="insert-review.php" method="post">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" name="name" placeholder="Name"
                                                       class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="email" name="email" placeholder="Email"
                                                       class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                    <textarea name="review" class="form-control" placeholder="review"
                                                              rows="5"></textarea>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="main-btn-wrap">
                                                    <input class="main-btn  black" name="save" type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--// Form Area-->
                        </div>
                    </div>
                    <!--// Comment area-->
                </div>
            </div>


        </div>
    </div>
    <!--// Container-->
</div>
<!--// Blog Page Content-->


<!--Blog Related Post-->
<div class="related-post padding-bottom-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--Section Title-->
                <div class="section-title">
                    <div class="padding-bottom-20">
                        <h5 class="related-post-title">Related Posts</h5>
                    </div>
                </div>
                <!--// Section Title-->
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="latest-news-slider-items">
                            <div class="cards">
                                <div class="cards-img"><img src="assets/img/blog/blog-details/related-post/01.png"
                                                            alt="img"></div>
                                <div class="cards-body">
                                    <div class="padding-bottom-30 padding-top-10">
                                        <h5 class="heading-05"><a href="#">What is Important for Product Design or
                                                Sales</a></h5>
                                    </div>
                                    <div class="name-date">
                                        <div class="author-name">Tim Brown</div>
                                        <div class="publish-date">May 26, 2019</div>
                                    </div>
                                </div>
                                <!--// Cards Body-->
                            </div>
                            <!--//cards-->
                        </div>
                        <!--// Items-->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="latest-news-slider-items">
                            <div class="cards">
                                <div class="cards-img"><img src="assets/img/blog/blog-details/related-post/02.png"
                                                            alt="img"></div>
                                <div class="cards-body">
                                    <div class="padding-bottom-30 padding-top-10">
                                        <h5 class="heading-05"><a href="#">What is Important for Product Design or
                                                Sales</a></h5>
                                    </div>
                                    <div class="name-date">
                                        <div class="author-name">Tim Brown</div>
                                        <div class="publish-date">May 26, 2019</div>
                                    </div>
                                </div>
                                <!--// Cards Body-->
                            </div>
                        </div>
                        <!--// Items-->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="latest-news-slider-items">
                            <div class="cards">
                                <div class="cards-img"><img src="assets/img/blog/blog-details/related-post/03.png"
                                                            alt="img"></div>
                                <div class="cards-body">
                                    <div class="padding-bottom-30 padding-top-10">
                                        <h5 class="heading-05"><a href="#">What is Important for Product Design or
                                                Sales</a></h5>
                                    </div>
                                    <div class="name-date">
                                        <div class="author-name">Tim Brown</div>
                                        <div class="publish-date">May 26, 2019</div>
                                    </div>
                                </div>
                                <!--// Cards Body-->
                            </div>
                        </div>
                        <!--// Items-->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="latest-news-slider-items">
                            <div class="cards">
                                <div class="cards-img"><img src="assets/img/blog/blog-details/related-post/04.png"
                                                            alt="img"></div>
                                <div class="cards-body">
                                    <div class="padding-bottom-30 padding-top-10">
                                        <h5 class="heading-05"><a href="#">What is Important for Product Design or
                                                Sales</a></h5>
                                    </div>
                                    <div class="name-date">
                                        <div class="author-name">Tim Brown</div>
                                        <div class="publish-date">May 26, 2019</div>
                                    </div>
                                </div>
                                <!--// Cards Body-->
                            </div>
                        </div>
                        <!--// Items-->
                    </div>
                </div>
                <!--// Latest News Slider Wrap-->
            </div>
        </div>
    </div>
</div>
<!--// Blog Related Post-->


<!-- footer area start -->
<?php include 'footer2.php'?>
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
<!-- main js -->
<script src="assets/js/main.js"></script>

</body>

</html>