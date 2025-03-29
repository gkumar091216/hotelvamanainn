<?php
    $pagename = 'aboutus';
include './layout/layout.php'; ?>
<?php  include './layout/header.php'; ?>
<!--end-->
<section class="image-head-wrapper" style="background-image: url('images/aboutus-banner.jpg');">
    <div class="inner-wrapper">
        <h1>About us</h1>
    </div>
</section>
<div class="clearfix"></div>


<section class="about-block">
    <div class="container">
        <div class="row about-box">
            <div class="col-md-5 about-left">
                <h3><img width="240px" src="<?php echo $base_url; ?>images/logo.png"></h3>
                <p>HOTEL<label>VAMANA</label>INN<span> - TIRUPATI</span></p>
            </div>
            <div class="col-md-7 about-right">
                <h3>Welcome to HOTEL VAMANA INN</h3>
                <p>HOTEL VAMANA INN Located in a prime location on Tirumala Byee-Pass Road Near to Tirumala Balaji Temple - The holiest pilgrimage sites located on top of the Tirumala Hills. Hotel Vamana Inn offers from the range of single standard rooms to family connecting rooms to our guests with a promise of exceptional services and warm hospitality, With a commitment of guest satisfaction. Hotel Vamana Inn ensures our guests well-cared, convenience and friendly services during their stay.</p>
                <p>Hotel Vamana Inn offers a range of modern and hygiene rooms to ensures a comfortable stay for everyone at budget friendly.</p>
                <span>Book a Hotel Room Now...</span>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="row">
            <div class="col-md-5 about-left">
                <h3><img width="240px" src="<?php echo $base_url; ?>images/ana-travels-logo.Png"></h3>
                <p><label>ANA</label>HOLIDAYS<span> - TIRUPATI</span></p>
            </div>
            <div class="col-md-7 about-right">
                <h3>Welcome to ANA HOLIDAYS</h3>
                <p>ANA HOLIDAYS - Being expert in Dealing with Car Rentals, Holiday Tour Packages and Hotel Bookings in Tirupati. We have more than 15 years of experience in car rental services and organizing state wise holiday tour packages in India. We Provide cars rental services to customers accordingly to there needs of Devotional Trips, Sightseeing Tours, Group tour packages and Honeymoon packages at best price.</p>
                <p>Whether you need a taxi for a short trip within the city or a long trip or any other nearby destinations, We provide a well-maintained and comfortable vehicles which was driven by a expert drivers with well knowledge on routes and places. Our Aim is to give a complete travel solutions to all types of our customers with a fulfilled excited journey and make your trip a memorable one.</p>
                <span>Book Now and Explore your Favourite Destination Place...</span>
            </div>

        </div>
        <div class="clearfix"> </div>
    </div>
</section>

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
