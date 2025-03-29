
<!---header top---->
<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4 text-right">
                <div class="social-grid">
                    <ul class="list-unstyled">
                        <li>
                            <a href="mailto:anahotels.in@gmail.com"><i class="fa fa-envelope-o"></i>&nbsp; <span>anahotels.in@gmail.com</span></a>
                        </li>
                        <li>
                            <a href="tel:9441581777"><i class="fa fa-phone"></i> &nbsp;+91 - 94415 81777</a>
                            &nbsp;&nbsp;<a>/ </a> &nbsp;&nbsp;
                            <a href="tel:9393622333"> +91 - 93936 22333</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="social-grid">
                    <ul class="list-unstyled text-right">
                        <li><a><i class="fa fa-facebook"></i></a></li>
                        <li><a><i class="fa fa-twitter"></i></a></li>
                        <li><a><i class="fa fa-linkedin"></i></a></li>
                        <li><a><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!--header--->
<header class="header-container">
    <div class="container">
        <div class="top-row">
            <div class="row header-tab">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div id="logo" class="logo">
                        <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                        <a href="<?php echo $base_url; ?>">
                            <img width="200px" src="<?php echo $base_url; ?>images/logo.png" />
                        </a>
                    </div>
                </div>
                <!-- <div class="col-sm-6 ">
                    <div class="text-right"><a href="<?php echo $base_url . 'contact-us'; ?>"class="book-now-btn">Contact Us</a></div>
                </div> -->
                <div class="col-lg-8 col-lg-offset-1 col-md-9 col-sm-12 col-xs-12 text-right remove-padd">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header mobile-icon page-scroll">
                            <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space mobile-nav">
                            <ul class="list-unstyled nav1 cl-effect-10">
                                <li><a data-hover="Home" href="<?php echo $base_url; ?>" class="<?php if ($pagename == 'home') {echo 'active';}?>"><span>HOME</span></a></li>
                                <li><a data-hover="About Us"  href="<?php echo $base_url . 'about-us'; ?>"  class="<?php if ($pagename == 'aboutus') {echo 'active';}?>"><span>ABOUT US</span></a></li>
                                <li><a data-hover="OUR ROOMS" href="<?php echo $base_url . 'our-rooms'; ?>" class="<?php if ($pagename == 'rooms') {echo 'active';}?>"><span>OUR ROOMS</span></a></li>
                                <li><a data-hover="ANA HOLIDAYS" href="<?php echo $base_url . 'ana-holidays'; ?>" class="<?php if ($pagename == 'travels') {echo 'active';}?>"><span>ANA HOLIDAYS</span></a></li>
                                <li><a data-hover="Gallery"  href="<?php echo $base_url . 'gallery'; ?>" class="<?php if ($pagename == 'gallery') {echo 'active';}?>"><span>GALLERY</span></a></li>
                                 <li><a data-hover="BOOK A ROOM" href="<?php echo $base_url . 'contact-us'; ?>"  class="active <?php if ($pagename == 'contactus') {echo 'active';}?>"><span>BOOK A ROOM</span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--<div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                    <div class="text-right"><a href="<?php echo $base_url . 'contact-us'; ?>"class="book-now-btn">Contact Us</a></div>
                </div>-->
            </div>
        </div>
    </div>
</header>
