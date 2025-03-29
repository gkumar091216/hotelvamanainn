
<div class="clearfix position-relative overflow-hidden">
    <img class="col-sm-12 px-0 d-none d-sm-block img-banner" src="<?php echo $base_url; ?>images/about/services banner.png" />
    <img class="col-sm-12 px-0 d-sm-none d-block img-banner" src="<?php echo $base_url; ?>images/about/mservices banner.png" />
    <div class="clearfix  banner-tit-text w-100 h-100">
        <div class="container  h-100">
            <h2 class="text-white fw-bold fs-22 mx-0 mx-md-3 fs-md-32 row  h-100 align-items-center"><?php echo $pagename_text; ?></h2>
        </div>
    </div>
</div>
<div class="clearfix position-relative bgc-2nd d-none d-sm-block">
    <div class="container pt-4 serviceMenuMain">
        <div class="row align-items-center"  >

            <a href="<?php echo $base_url; ?>it-training-development" class="text-decoration-none col-3  col-lg-auto col-xl-3  serviceMenuBox <?php if($pagename == 'IT-Training'){ echo ' ActiveService bg-white '; } else { echo 'border-right'; } ?> text-center pb-4 pt-2">  
                <div class=" col-12  py-4">
                    <img  src="<?php echo $base_url; ?>images/<?php if($pagename == 'IT-Training'){ echo 'IT_Training.png'; } else{ echo 'IT_Training_G.png'; } ?> " alt="it training">
                </div>      
                <h5 class="card-heading col-auto fs-13 fs-md-17 px-0 textcs-3rd my-0 fw-100">IT Training & Development</h5>
            </a>

            <a href="<?php echo $base_url; ?>recruitement-process-outsourcing"  class="text-decoration-none col-4 col-lg-auto col-xl-4  serviceMenuBox <?php if($pagename == 'RPO'){ echo ' ActiveService bg-white '; } else { echo 'border-right'; } ?> text-center pb-4 pt-2">  
                <div class=" col-12  py-4">
                    <img  src="<?php echo $base_url; ?>images/<?php if($pagename == 'RPO'){ echo 'RPO.png'; } else{ echo 'RPO_G.png'; } ?>" alt="RPO">
                </div>      
                <h5 class="card-heading col-auto px-0 fs-13 fs-md-17 textcs-3rd  my-0 fw-100">Recruitement Process Outsourcing</h5>
            </a>

            <a href="<?php echo $base_url; ?>staff-augmentation"  class="text-decoration-none col-3 col-lg-auto col-xl-3 serviceMenuBox <?php if($pagename == 'Staff-Augmentation'){ echo ' ActiveService bg-white '; } else { echo 'border-right'; } ?> text-center pb-4 pt-2">  
                <div class=" col-12  py-4">
                    <img  src="<?php echo $base_url; ?>images/<?php if($pagename == 'Staff-Augmentation'){ echo 'staff_Aug.png'; } else{ echo 'staff_Aug_G.png'; } ?>" alt="staff augmentation">
                </div>      
                <h5 class="card-heading col-auto px-0 fs-13 fs-md-17 textcs-3rd my-0 fw-100">Staff Augmentation</h5>
            </a>

            <a href="<?php echo $base_url; ?>it-services"  class="text-decoration-none col-2 col-lg-auto col-xl-2 serviceMenuBox <?php if($pagename == 'IT-Services'){ echo ' ActiveService bg-white '; }  ?> text-center pb-4 pt-2">  
                <div class=" col-12  py-4">
                    <img  src="<?php echo $base_url; ?>images/<?php if($pagename == 'IT-Services'){ echo 'It_Services.png'; } else{ echo 'It_Services_G.png'; } ?>" alt="it services">
                </div>      
                <h5 class="card-heading col-auto px-0 fs-13 fs-md-17 textcs-3rd my-0 fw-100">IT Services</h5>
            </a>

        </div>
    </div>
</div>