<?php
    $pagename = 'home';
include './layout/layout.php'; ?>
<?php include './layout/header.php'; ?>


    <!--end-->
    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->

        <ol class="carousel-indicators">
            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel1" data-slide-to="1"></li>
            <li data-target="#myCarousel1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active"> <img src="images/banner.png" style="width:100%; height: 500px" alt="First slide">
                <div class="carousel-caption">
                    <h1>Welcome to<br> Hotel Vamana Inn </h1>
                </div>
            </div>
            <div class="item"> <img src="images/banner2.png" style="width:100%; height: 500px" alt="Second slide">
                <div class="carousel-caption">
                    <h1>Best Rates for<br> Luxury Hotels</h1>
                </div>
            </div>
            <div class="item"> <img src="images/banner3.png" style="width:100%; height: 500px" alt="Third slide">
                <div class="carousel-caption">
                    <h1>Ana Holidays<br> Travels & Tour Packages </h1>
                </div>
            </div>
            <div class="item"> <img src="images/banner5.png" style="width:100%; height: 500px" alt="Third slide">
                <div class="carousel-caption">
                    <h1>Explore Tirupati<br> A Relaxing and fun-filled weekend destination for your family</h1>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'" alt="left"></a>
        <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'" alt="left"></a>

    </div>
    <div class="clearfix"></div>

    <!--service block--->
    <section class="service-block">
    <?php include './layout/services.php'; ?>
    </section>
    <!-- our_room -->
    <div  class="our_room our_room_color">
    <?php include './layout/our-rooms.php'; ?>
    </div>
    <!-- end our_room -->
    <!--gallery block--->
    <!-- <section class="gallery-block gallery-front">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="images/room1.png">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="images/room1.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>Classic Room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="images/room2.png">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="images/room2.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>Standard Room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="images/room3.png">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="images/room3.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>Delux Room</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="gallery-image">
                        <img class="img-responsive" src="images/room4.png">
                        <div class="overlay">
                            <a class="info pop example-image-link img-responsive" href="images/room4.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <p><a>Connecting Room</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!--offer block-->
    <section class="vacation-offer-block">
        <div class="vacation-offer-bgbanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="vacation-offer-details">
                            <h1>ANA HOLIDAYS - Travels & Tour Packages</h1>
                            <h4>You Need a Car at Tirupati</h4>
                            <button type="button" class="btn btn-default">Choose a package</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End-->

    <!----resort-overview--->
    <section class="resort-overview-block">
    <?php include './layout/ana-holidays.php'; ?>
    </section>
    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap">
        <div class="container">
            <!-- <div class="section_title text-center">
                <h2 class="title_color">Testimonial from our Clients</h2>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
            </div> -->

            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Guest Reviews</h2>
                        <p>Our guests have loved their stay experience with us and their reviews speak for our hospitality</p>
                    </div>
                </div>
            </div>
            <div class="testimonial_slider owl-carousel">
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="images/testtimonial-1.jpg" alt="">
                    <div class="media-body custom-media-body">
                        <p>“Amazing, attentive staff and comfortable, clean rooms. Great location! I'd live here if I could. Definitely coming back. Thank you for the wonderful experience!</p>
                        <a href="#"><h4 class="sec_h4">K V Ramanna</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="images/testtimonial-1.jpg" alt="">
                    <div class="media-body custom-media-body">
                        <p>“I highly recommend this hotel. The rooms are good and cozy, the location is convenient, and the staff is kind and welcoming.”</p>
                        <a href="#"><h4 class="sec_h4">Raghava Mullakala</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="images/testtimonial-1.jpg" alt="">
                    <div class="media-body custom-media-body">
                        <p>“Good room sizes and very well maintained bathroom. Very welcoming staff and professional service quality with nice behaviour of room service operator.”</p>
                        <a href="#"><h4 class="sec_h4">Devendar Viswakarma</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="images/testtimonial-1.jpg" alt="">
                    <div class="media-body custom-media-body">
                        <p>“Excellent location, well connected to Tirumala and all Local Temples in Tirupati. Clean, comfortable property with very nice and helpful staff.”</p>
                        <a href="#"><h4 class="sec_h4">Gopalan kuravi</h4></a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Testimonial Area  =================-->
    <!-----blog slider----->
    <!--blog trainer block-->
    <!-- <section class="blog-block-slider">
        <div class="blog-block-slider-fix-image">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <div class="container">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="blog-box">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client1.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Walter Hucko</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client2.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Jules Boutin</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client3.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Attilio Marzi</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section> -->

    <!---blog block--->
    <!-- <section class="blog-block">
        <div class="container">
            <div class="row offspace-45">
                <div class="view-set-block">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="event-blog-image">
                            <img alt="image" class="img-responsive" src="images/blog1.png">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                        <div class="event-blog-details">
                            <h4><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h4>
                            <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                            <a class="btn btn-default" href="single-blog.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row offspace-45">
                <div class="view-set-block">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="event-blog-image">
                            <img alt="image" class="img-responsive" src="images/blog2.png">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                        <div class="event-blog-details">
                            <h4><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h4>
                            <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                            <a class="btn btn-default" href="single-blog.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<?php include './layout/footer.php'; ?>
<!-- <script>
    window.onscroll = function() {scrollTop()};
    function scrollTop() {
        if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
            document.getElementById("site-header").className = "col-12 sec-header header-home headerScrollOut";
        } else {
            document.getElementById("site-header").className = "col-12 sec-header header-home headerScrollIn";
        }
    }
    scrollTop();
</script> -->
