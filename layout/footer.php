
    <!---footer--->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                    <div class="footer-details">
                        <h4>Contact Us</h4>
                        <ul class="list-unstyled footer-contact-list">
                            <li>
                                <i class="fa fa-map-marker fa-lg"></i>
                                <p>18-3-64/A, Shanthi Nagar, Tirumala Byepass Road, Besides Alipiri Police Station, TIRUPATI - 517501</p>
                            </li>
                            <li>
                                <i class="fa fa-phone fa-lg"></i>
                                <p><a href="tel:9441581777"> +91 - 9441581777</a></p>
                            </li>
                            <li style="margin-top: 10px;">
                                <i class="fa fa-phone fa-lg " style="opacity: 0;"></i>
                                <p><a href="tel:9393622333"> +91 - 9393622333</a></p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o fa-lg"></i>
                                <p><a href="mailto:anahotels.in@gmail.com"> anahotels.in@gmail.comm</a></p>
                            </li>
                        </ul>
                        <!-- <div class="footer-social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <div class="input-group" id="subscribe">
                            <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                            <span class="input-group-btn">
                                <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                            </span>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                    <div class="footer-details">
                        <h4>Menu Link</h4>
                        <ul class="list-unstyled footer-links">
                            <li class="<?php if ($pagename == 'home') {echo 'active';}?>"><a  href="<?php echo $base_url; ?>" >Home</a></li>
                            <li class="<?php if ($pagename == 'aboutus') {echo 'active';}?>"><a  href="<?php echo $base_url; ?>about-us" >About Us</a></li>
                            <li class="<?php if ($pagename == 'rooms') {echo 'active';}?>"><a  href="<?php echo $base_url; ?>our-rooms" >Our Rooms</a></li>
                            <li class="<?php if ($pagename == 'travels') {echo 'active';}?>"><a  href="<?php echo $base_url; ?>ana-holidays" >Ana Holidays</a></li>
                            <li class="<?php if ($pagename == 'gallery') {echo 'active';}?>"><a  href="<?php echo $base_url; ?>gallery" >Gallery</a></li>
                            <li class="<?php if ($pagename == 'contactus') {echo 'active';}?>"> <a  href="<?php echo $base_url; ?>contact-us" >Book A Room</a></li>
                            <li class="<?php if ($pagename == 'ourpolicies') {echo 'active';}?>"> <a  href="<?php echo $base_url; ?>our-policies" >Our Policies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="footer-details">
                        <!-- <h4>Map</h4> -->
                        <div class="row">
                            <div class="col-xs-12">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.154464699012!2d79.4206981707334!3d13.648366270383017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d4ba400000001%3A0x29c9841470837235!2sHotel%20Vamana%20inn%20(ANA%20Holidays)!5e0!3m2!1sen!2sin!4v1740212792279!5m2!1sen!2sin" width="100%" height="320" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="copyright">
                &copy; 2025 All right reserved. Designed by <a href="#" target="_blank">vamana.</a>
            </div> -->

        </div>
    </footer>

    <!--back to top--->
    <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
        <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
        <span>Top</span>
    </a>

    </div>

    <script src="<?php echo $base_url; ?>js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $base_url; ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo $base_url; ?>js/custom.js" type="text/javascript"></script>
  </body>
</html>
