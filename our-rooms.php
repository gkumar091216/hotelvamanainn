
<?php
    $pagename = 'rooms';
include './layout/layout.php'; ?>
<?php include './layout/header.php'; ?>
<!--end-->
    <section class="image-head-wrapper" style="background-image: url('images/rooms.jpg');">
        <div class="inner-wrapper">
            <h1>Rooms</h1>
        </div>
    </section>
    <div class="clearfix"></div>

    
    <!-- our_room -->
    <div  class="our_room">
    <?php include './layout/our-rooms.php'; ?>
    </div>
    <!-- end our_room -->

    <!--service block--->
    <section class="service-block bg-set-col">
        <?php include './layout/services.php'; ?>
    </section>

<?php include './layout/footer.php'; ?>