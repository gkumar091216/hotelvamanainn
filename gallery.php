
<?php
    $pagename = 'gallery';
include './layout/layout.php'; ?>
<?php include './layout/header.php'; ?>

    <!--end-->
    <section class="image-head-wrapper">
        <div class="inner-wrapper">
            <h1>Gallery</h1>
        </div>
    </section>
    <div class="clearfix"></div>

    <section class="gallery-block">
        <div class="container">
            <div class="row">
                <div class="grid hover-effect">
                    <div class="grid-sizer"></div>
                    <div class="grid-item percent37 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery1-1.jpg" data-lightbox="example-1"><img src="images/gallery1.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent25 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery2-2.jpg" data-lightbox="example-1"><img src="images/gallery2.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent37 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery3-3.jpg" data-lightbox="example-1"><img src="images/gallery3.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent25 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery4-4.jpg" data-lightbox="example-1"><img src="images/gallery4.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent37 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery5-5.jpg" data-lightbox="example-1"><img src="images/gallery5.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent20 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery6-6.jpg" data-lightbox="example-1"><img src="images/gallery6.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent20 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery7-7.jpg" data-lightbox="example-1"><img src="images/gallery7.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent20 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery8-8.jpg" data-lightbox="example-1"><img src="images/gallery8.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent20 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery9-9.jpg" data-lightbox="example-1"><img src="images/gallery9.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent20 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery10-10.jpg" data-lightbox="example-1"><img src="images/gallery10.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent20 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery11-11.jpg" data-lightbox="example-1"><img src="images/gallery11.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent20 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery12-12.jpg" data-lightbox="example-1"><img src="images/gallery12.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent20 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery13-13.jpg" data-lightbox="example-1"><img src="images/gallery13.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent20 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery14-14.jpg" data-lightbox="example-1"><img src="images/gallery14.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent20 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery15-15.jpg" data-lightbox="example-1"><img src="images/gallery15.jpg" class="img-responsive" alt="gallery1"></a>
                    </div>
                    <div class="grid-item percent20 gallery-image">
                        <a class="example-image-link img-responsive" href="images/gallery16-16.jpg" data-lightbox="example-1"><img src="images/gallery16.jpg" class="img-responsive" alt="gallery1"></a>
             </div>
        </div>
    </section>
    <section class="gallery-videos-block">
        <div class="container">
             <div class="row">
                <div class="col-xs-12 col-md-6">
                    <iframe width="100%"  style="min-height: 310px;margin-bottom: 28px;" src="https://www.youtube.com/embed/3vzIbsaDidk?si=npNcvsFUzpxbIgCi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-xs-12 col-md-6">
                    <iframe width="100%"   style="min-height: 310px;margin-bottom: 28px;"  src="https://www.youtube.com/embed/zh3S95rv9j4?si=hKxXMXI7mGLqcxjj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-xs-12 col-md-6">
                    <iframe width="100%"    style="min-height: 310px;margin-bottom: 28px;"  src="https://www.youtube.com/embed/GehxDMGd00Y?si=sQ6gMguwp6ivDxoE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
             </div>
            </div>
        </div>
    </section>


<?php include './layout/footer.php'; ?>


<script>
    var grid = document.querySelector('.grid');

    var msnry = new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
    });

    imagesLoaded(grid).on('progress', function () {
        // layout Masonry after each image loads
        msnry.layout();
    });
</script>