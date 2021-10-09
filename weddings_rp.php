<?php



include('header.php');

?>

<style>
.slick-slider {

    position: unset !important;

}

/* The Modal (background) */

.modal {

    display: none;
    /* Hidden by default */

    position: fixed;
    /* Stay in place */

    z-index: 1;
    /* Sit on top */

    left: 0;

    top: 0;

    width: 100%;
    /* Full width */

    height: 100%;
    /* Full height */

    overflow: auto;
    /* Enable scroll if needed */

    background-color: rgb(0, 0, 0);
    /* Fallback color */

    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */

}



/* Modal Content/Box */

.modal-content {

    background-color: #fefefe;

    margin: 3% auto;
    /* 15% from the top and centered */

    padding: 20px;

    border: 1px solid #888;

    width: 80%;
    /* Could be more or less, depending on screen size */

}



/* The Close Button */

.close {

    color: #aaa;

    float: right;

    font-size: 28px;

    font-weight: bold;

}



.close:hover,

.close:focus {

    color: black;

    text-decoration: none;

    cursor: pointer;

}

.shop-image img {

    width: 100% !important;

}

.shop-image {



    padding: 5px !important;

}

a.btn,
.btn#submit {

    padding: 12px 15px 12px !important;

}

/*adding code to make image responsive*/
@media only screen and (max-width: 415px) {
    .image-p {
        display: block;
        width: 100%;
        height: auto;
    }

    .image-l {
        display: none;
    }
}

@media only screen and (min-width: 415px) {
    .image-l {
        display: block;
        width: 100%;
        height: auto;
    }

    .image-p {
        display: none;
    }
}
</style>

<head>




    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--Default CSS-->

    <link href="css/default.css" rel="stylesheet" type="text/css">

    <!--Custom CSS-->

    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->

    <link href="css/plugin.css" rel="stylesheet" type="text/css">

    <!--Font Awesome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

</head>





<head>

    <!-- Google Tag Manager -->

    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':

                new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],

            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =

            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);

    })(window, document, 'script', 'dataLayer', 'GTM-M5QPCXK');
    </script>

    <!-- End Google Tag Manager -->



</head>





<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5QPCXK" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->





<!-- breadcrumb Starts -->

<section class="breadcrumb-outer">

    <div class="container">

        <div class="breadcrumb-content">

            <h2>Weddings</h2>

            <nav aria-label="breadcrumb">

                <ul class="breadcrumb">

                    <li class="breadcrumb-item"><a href="#">Home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Weddings</li>

                </ul>

            </nav>

        </div>

    </div>

</section>

<!-- breadcrumb Ends -->



<!-- shop starts -->

<section class="shop">

    <div class="container">

        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 pull-right">

                <div class="row">

                    <div class="image-p">
                        <!--added class to display p-->

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="shop-item">

                                <div class="shop-image">


                                    <img class="image-p"
                                        src="https://indiacarz.s3.ap-south-1.amazonaws.com/indiacarz_images/bangalore-gate-img/small_group_wedding_img.jpg"
                                        alt="image">



                                </div>

                                <div class="shop-content">

                                    <h4 class="text-capitalize"><a href="#">​​Small Group Wedding - Regent Hall</a></h4>

                                    <div class="shop-price">

                                        <del><span>₹35000</span></del>

                                        <ins><span>₹31200</span></ins>

                                    </div>

                                    <a class="btn btn-orange mar-top-20" data-toggle="modal" data-target="#myModal">View
                                        Details</a>

                                    <a class="btn btn-orange mar-top-20" href="#">Send Enquiry</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="shop-item">

                                <div class="shop-image">

                                    <img class="image-p"
                                        src="https://indiacarz.s3.ap-south-1.amazonaws.com/indiacarz_images/bangalore-gate-img/medium_group_wedding_img.jpg"
                                        alt="image">



                                </div>

                                <div class="shop-content">

                                    <h4 class="text-capitalize"><a href="#">Medium Group Wedding - Regal Hall</a></h4>

                                    <div class="shop-price">

                                        <del><span>₹50000</span></del>

                                        <ins><span>₹44400</span></ins>

                                    </div>

                                    <a class="btn btn-orange mar-top-20" data-toggle="modal" data-target="#myModal">View
                                        Details</a>

                                    <a class="btn btn-orange mar-top-20" href="#">Send Enquiry</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="shop-item">

                                <div class="shop-image">

                                    <img class="image-p"
                                        src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                        alt="image">



                                </div>

                                <div class="shop-content">

                                    <h4 class="text-capitalize"><a href="#">​​Large Group Wedding - Royal Hall</a></h4>

                                    <div class="shop-price">

                                        <del><span>₹75000</span></del>

                                        <ins><span>₹69000</span></ins>

                                    </div>



                                    <a class="btn btn-orange mar-top-20" data-toggle="modal" data-target="#myModal">View
                                        Details</a>

                                    <a class="btn btn-orange mar-top-20" href="#">Send Enquiry</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="shop-item">

                                <div class="shop-image">

                                    <img class="image-p"
                                        src="https://indiacarz.s3.ap-south-1.amazonaws.com/indiacarz_images/bangalore-gate-img/medium_group_wedding_img2.jpg"
                                        alt="image">

                                </div>

                                <div class="shop-content">

                                    <h4 class="text-capitalize"><a href="#">​​Medium Group Wedding - Regal Hall</a></h4>

                                    <div class="shop-price">

                                        <del><span>₹49000</span></del>

                                        <ins><span>₹44400</span></ins>

                                    </div>

                                    <a class="btn btn-orange mar-top-20" data-toggle="modal" data-target="#myModal">View
                                        Details</a>

                                    <a class="btn btn-orange mar-top-20" href="#">Send Enquiry</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="shop-item">

                                <div class="shop-image">

                                    <img class="image-p"
                                        src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                        alt="image">



                                </div>

                                <div class="shop-content">

                                    <h4 class="text-capitalize"><a href="#">​​Large Group Wedding - Royal Hall</a></h4>

                                    <div class="shop-price">

                                        <del><span>₹69000</span></del>

                                        <ins><span>₹75000</span></ins>

                                    </div>

                                    <a class="btn btn-orange mar-top-20" data-toggle="modal" data-target="#myModal">View
                                        Details</a>

                                    <a class="btn btn-orange mar-top-20" href="#">Send Enquiry</a>

                                </div>

                            </div>

                        </div>
                    </div>
                    <!--end of class image-p-->
                    <div class="image-l">
                        <!--added class to display l-->

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="shop-item">

                                <div class="shop-image">


                                    <img class="image-l"
                                        src="https://indiacarz.s3.ap-south-1.amazonaws.com/indiacarz_images/indiacarz_home_image/indiacarz_home_image_slider_l_kashmir.jpg"
                                        alt="image">



                                </div>

                                <div class="shop-content">

                                    <h4 class="text-capitalize"><a href="#">​​Small Group Wedding - Regent Hall</a></h4>

                                    <div class="shop-price">

                                        <del><span>₹35000</span></del>

                                        <ins><span>₹31200</span></ins>

                                    </div>

                                    <a class="btn btn-orange mar-top-20" data-toggle="modal" data-target="#myModal">View
                                        Details</a>

                                    <a class="btn btn-orange mar-top-20" href="#">Send Enquiry</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="shop-item">

                                <div class="shop-image">

                                    <img class="image-l"
                                        src="https://indiacarz.s3.ap-south-1.amazonaws.com/indiacarz_images/indiacarz_home_image/indiacarz_home_image_slider_l_sikkim.jpg"
                                        alt="image">



                                </div>

                                <div class="shop-content">

                                    <h4 class="text-capitalize"><a href="#">Medium Group Wedding - Regal Hall</a></h4>

                                    <div class="shop-price">

                                        <del><span>₹50000</span></del>

                                        <ins><span>₹44400</span></ins>

                                    </div>

                                    <a class="btn btn-orange mar-top-20" data-toggle="modal" data-target="#myModal">View
                                        Details</a>

                                    <a class="btn btn-orange mar-top-20" href="#">Send Enquiry</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="shop-item">

                                <div class="shop-image">

                                    <img class="image-l"
                                        src="https://indiacarz.s3.ap-south-1.amazonaws.com/indiacarz_images/indiacarz_home_image/indiacarz_home_image_slider_l_darjeeling.jpg"
                                        alt="image">



                                </div>

                                <div class="shop-content">

                                    <h4 class="text-capitalize"><a href="#">​​Large Group Wedding - Royal Hall</a></h4>

                                    <div class="shop-price">

                                        <del><span>₹75000</span></del>

                                        <ins><span>₹69000</span></ins>

                                    </div>



                                    <a class="btn btn-orange mar-top-20" data-toggle="modal" data-target="#myModal">View
                                        Details</a>

                                    <a class="btn btn-orange mar-top-20" href="#">Send Enquiry</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="shop-item">

                                <div class="shop-image">

                                    <img class="image-l"
                                        src="https://indiacarz.s3.ap-south-1.amazonaws.com/indiacarz_images/indiacarz_home_image/indiacarz_home_image_slider_l_darjeeling.jpg"
                                        alt="image">

                                </div>

                                <div class="shop-content">

                                    <h4 class="text-capitalize"><a href="#">​​Medium Group Wedding - Regal Hall</a></h4>

                                    <div class="shop-price">

                                        <del><span>₹49000</span></del>

                                        <ins><span>₹44400</span></ins>

                                    </div>

                                    <a class="btn btn-orange mar-top-20" data-toggle="modal" data-target="#myModal">View
                                        Details</a>

                                    <a class="btn btn-orange mar-top-20" href="#">Send Enquiry</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="shop-item">

                                <div class="shop-image">

                                    <img class="image-l"
                                        src="https://indiacarz.s3.ap-south-1.amazonaws.com/indiacarz_images/indiacarz_home_image/indiacarz_home_image_slider_l_darjeeling.jpg"
                                        alt="image">



                                </div>

                                <div class="shop-content">

                                    <h4 class="text-capitalize"><a href="#">​​Large Group Wedding - Royal Hall</a></h4>

                                    <div class="shop-price">

                                        <del><span>₹69000</span></del>

                                        <ins><span>₹75000</span></ins>

                                    </div>

                                    <a class="btn btn-orange mar-top-20" data-toggle="modal" data-target="#myModal">View
                                        Details</a>

                                    <a class="btn btn-orange mar-top-20" href="#">Send Enquiry</a>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-12 col-xs-12">

                <div class="sidebar">

                    <div class="sidebar-box">

                        <div class="sidebar-title">

                            <h4>Featured Services</h4>

                        </div>

                        <div class="recent-item clearfix">

                            <div class="recent-image">

                                <img src="https://indiacarz.s3.ap-south-1.amazonaws.com/indiacarz_images/bangalore-gate-img/small_group_wedding_img.jpg"
                                    alt="image">

                            </div>

                            <div class="recent-content">

                                <h5 class="text-capitalize"><a href="#">​​ Small Group Wedding - Regent Hall</a>
                                </h5>



                            </div>

                        </div>

                        <div class="recent-item clearfix">

                            <div class="recent-image">

                                <img src="https://indiacarz.s3.ap-south-1.amazonaws.com/indiacarz_images/bangalore-gate-img/medium_group_wedding_img.jpg"
                                    alt="image">

                            </div>

                            <div class="recent-content">

                                <h5 class="text-capitalize"><a href="#">​​Medium Group Wedding - Regal Hall</a></h5>



                            </div>

                        </div>
                    </div>






                    <div class="recent-item clearfix">

                        <div class="recent-image">

                            <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                alt="image" alt="image">

                        </div>

                        <div class="recent-content">

                            <h5 class="text-capitalize"><a href="#">​​Large Group Wedding - Royal Hal</a></h5>



                        </div>

                    

                

            

            <div class="sidebar-box">

                <div class="sidebar-title">

                    <h4>Categories</h4>

                </div>

                <div class="sidebar-content">

                    <ul>

                        <li class="active"><a href="#">​​Wedding Hall Booking</a></li>

                        <li><a href="#">​​Flower Packages</a></li>

                        <li><a href="#">​​Taxi & Transport Packages</a></li>

                        <li class="active"><a href="#">​​Still Photography Packages</a></li>

                        <li><a href="#">​​Video Photography Package</a></li>

                        <li><a href="#">​​Wedding Car Decoration</a></li>

                        <li><a href="#">​​Pre Wedding PhotoShoot Package</a></li>

                        <li class="active"><a href="#">​​Engagement Package</a></li>

                        <li><a href="#">​​Video Wedding Priest/Pandit Services</a></li>



                    </ul>

                </div>

            </div>



            <div class="sidebar-ad">

                <div class="ad-content">

                    <p>We are available 24/7 at your service.</p>

                    <h3>Banquet Manager & staff for details </h3>



                    <a href="tel:+918041100777" class="btn btn-orange">Contact Us</a>

                </div>

            </div>

        </div>

    </div>



    </div>

    </div>

</section>

<!-- Shop Ends -->



<!-- The Modal -->

<div id="myModal" class="modal">



    <div class="modal-content">

        <div class="modal-header">

            <h3 class="modal-title">Wedding Details</h3>

            <button type="button" class="close  " data-dismiss="modal" style="color:red;">×</button>

        </div>

        <div class="modal-body">

            <!-- Shop detail starts -->

            <section class="shop-main">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 col-sm-12">

                            <div class="shop-detail">

                                <div class="row">

                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <div class="thumbnail-images">

                                            <div class="slider-store">

                                                <div>

                                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                                        alt="1">

                                                </div>

                                                <div>

                                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                                        alt="1">

                                                </div>

                                                <div>

                                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                                        alt="1">

                                                </div>

                                                <div>

                                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                                        alt="1">

                                                </div>

                                                <div>

                                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                                        alt="1">

                                                </div>

                                            </div>

                                            <div class="slider-thumbs">

                                                <div>

                                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                                        alt="1">

                                                </div>

                                                <div>

                                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                                        alt="1">

                                                </div>

                                                <div>

                                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                                        alt="1">

                                                </div>

                                                <div>

                                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                                        alt="1">

                                                </div>

                                                <div>

                                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/Bangalore+Gate+Wedding+Party+Photos/Royale_Wedding_Reception.jpeg"
                                                        alt="1">

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <div class="single-content">

                                            <h3>Small Group Wedding - Regent Hall</h3>

                                            <div class="shop-price mar-bottom-20">

                                                <del><span>₹35000</span></del>

                                                <ins><span>₹31200</span></ins>

                                            </div>

                                            <div class="product-detail">

                                                <p>All Deposits are non-refundable once we have confirmed the booking.
                                                </p>

                                            </div>

                                            <form class="cart mar-top-30" action="_self" method="post">

                                                <div class="quantity-buttons">

                                                    <label class="screen-reader-text">Quantity</label>

                                                    <input type="number" class="quantity-input" name="quantity" min="1"
                                                        max="100" placeholder="No.">

                                                </div>

                                                <a href="#" class="btn btn-orange">Add to cart</a>

                                            </form>

                                            <div class="product-tags">

                                                <p>Tags:</p>

                                                <a href="#">Health,</a>

                                                <a href="#">Machine,</a>

                                                <a href="#">Pain,</a>

                                                <a href="#">Relax,</a>

                                                <a href="#">Leak Proof</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div id="store-tab-main" class="mar-top-60">

                                <ul class="nav nav-tabs">

                                    <li class="active"><a href="#1" data-toggle="tab">Description</a></li>

                                    <li><a href="#2" data-toggle="tab">Additional Information</a></li>

                                    <li><a href="#3" data-toggle="tab">Solution</a></li>

                                </ul>



                                <div class="tab-content">

                                    <div class="tab-pane active" id="1">

                                        <p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliqueenean
                                            sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec
                                            sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi
                                            accumsan ipsum velit. Nam nec tellus a odioeThis is Photoshop’s version of
                                            Lorem Ipsum. Proin gravida nibh vel velit auctor aliqueenean sollicitudin,
                                            lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem
                                            nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum
                                            velit. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                                            Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>

                                    </div>



                                    <div class="tab-pane" id="2">

                                        <p>Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis
                                            bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit.
                                            vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Aliquam
                                            lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                            nulla ut metus varius laoreet. Quisque rutrum.</p>

                                    </div>



                                    <div class="tab-pane" id="3">

                                        <p>Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis
                                            bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit.
                                            vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Nam nec
                                            tellus a odioeThis is Photoshop’s version of Lorem Ipsum. Proin gravida nibh
                                            vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi
                                            elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit
                                            amet mauri s. Morbi accumsan ipsum velit. Aliquam lorem ante, dapibus in.
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- <div class="col-md-4 col-sm-12">

                    <div class="sidebar">

                        <div class="sidebar-box">

                            <div class="sidebar-title">

                                <h4>Featured Products</h4>

                            </div>

                            <div class="recent-item clearfix">

                                <div class="recent-image">

                                    <img src="images/shop/shop1.jpg" alt="image">

                                </div>

                                <div class="recent-content">

                                    <h5 class="text-capitalize"><a href="shop-detail.html">Analog Titan Watch</a></h5>

                                    <div class="post-detail">

                                        <div class="shop-price">

                                            <del><span>$42.00</span></del>

                                            <ins><span>$35.00</span></ins>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="recent-item clearfix">

                                <div class="recent-image">

                                    <img src="images/shop/shop2.jpg" alt="image">

                                </div>

                                <div class="recent-content">

                                    <h5 class="text-capitalize"><a href="shop-detail.html">Lange & Söhne</a></h5>

                                    <div class="post-detail">

                                        <div class="shop-price">

                                            <del><span>$22.00</span></del>

                                            <ins><span>$15.00</span></ins>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="recent-item clearfix">

                                <div class="recent-image">

                                    <img src="images/shop/shop3.jpg" alt="image">

                                </div>

                                <div class="recent-content">

                                    <h5 class="text-capitalize"><a href="shop-detail.html">Audemars Piguet</a></h5>

                                    <div class="post-detail">

                                        <div class="shop-price">

                                            <del><span>$50.00</span></del>

                                            <ins><span>$45.00</span></ins>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="recent-item clearfix">

                                <div class="recent-image">

                                    <img src="images/shop/shop4.jpg" alt="image">

                                </div>

                                <div class="recent-content">

                                    <h5 class="text-capitalize"><a href="shop-detail.html">Baume & Mercier</a></h5>

                                    <div class="post-detail">

                                        <div class="shop-price">

                                            <del><span>$20.00</span></del>

                                            <ins><span>$15.00</span></ins>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="sidebar-box">

                            <div class="sidebar-title">

                                <h4>Categories</h4>

                            </div>

                            <div class="sidebar-content">

                                <ul>

                                    <li class="active"><a href="#">Clothes</a></li>

                                    <li><a href="#">Wathches</a></li>

                                    <li><a href="#">Shoes</a></li>

                                    <li><a href="#">Hats</a></li>

                                    <li><a href="#">Glasses</a></li>

                                </ul>

                            </div>

                        </div>

                        

                        <div class="sidebar-ad">

                            <div class="ad-content">

                                <p>We are available 24/7</p>

                                <h3>We provide you full time at your service</h3>

                                <a class="btn btn-orange">Contact Us</a>

                            </div>

                        </div>

                    </div>

                </div> -->

                    </div>

                </div>

            </section>

        </div>

    </div>



</div>







<!-- Footer Starts -->



<?php

include('footer.php');

?>