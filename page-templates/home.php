<?php /* Template Name: Home Page */ ?>
<?php echo get_header(); ?>


<div class="hero">
        <div class="hero-clipped-images-container">
           
            <div data-rate=".6" data-direction="vertical" data-aos="fade-up" data-aos-duration="500" class="scroll hero-image-div">
                <div class="hero-clip-image-overlay"></div><img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-left-end.png">
            </div>

            <div data-rate=".4" data-direction="vertical" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" class="scroll hero-image-div">
                <div class="hero-clip-image-overlay"></div><img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-left-center.png">
            </div>

            <div data-rate=".2" data-direction="vertical" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500" class="scroll hero-image-div">
                <div class="hero-clip-image-overlay"></div><img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-center.png">
            </div>

            <div data-rate=".4" data-direction="vertical" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" class="scroll hero-image-div">
                <div class="hero-clip-image-overlay"></div><img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-right-center.png">
            </div>

            <div data-rate=".6" data-direction="vertical" data-aos="fade-up" data-aos-duration="500" class="scroll hero-image-div">
                <div class="hero-clip-image-overlay"></div><img src="<?php echo get_template_directory_uri() ?>/assets/img/hero-right-end.png">
            </div>

            <div  data-aos="fade-in" data-aos-delay="800" data-aos-duration="1500" class="hero-content-container">
                <div class="container text-center">
                    <h1 class="display-1">Music for<br>Everyone</h1>
                    <p>Vivamus iaculis dolor id felis. Phasellus cursus nulla non odio. Nulla a lectus sed nisi luctus pretium. Sed egestas rutrum odio. Nunc ornare arcu. Quisque at augue ac </p>
                    <div class="button-container">
                    <button class="btn btn-primary fons-book">Request a FREE Consultation</button> 

<!-- insert the scripts below before the closing body tag --> 


                        <!-- <button class="btn btn-primary" type="button">Consultation</button> -->
                        <button class="btn btn-light" type="button">About us</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-lg-5">
                    <div class="image-container"><img class="img-fluid image-col-left" src="<?php echo get_template_directory_uri() ?>/assets/img/section-image-left.png"></div>
                </div>
                <div class="col-12 col-lg-7 align-self-center">
                    <h1 class="text-center text-lg-left mb-0 mt-4 mt-lg-0"><strong>Music lessons without limits.</strong></h1>
                    <h2 class="text-center text-lg-left mb-0"><strong>Secondary Title</strong></h2>
                    <p class="text-center text-lg-left">Nulla quam. Aenean fermentum, turpis sed volutpat dignissim, diam risus facilisis nibh, sit amet iaculis est turpis non tellus. Nunc a mauris. Proin eget ligula. Nam cursus libero.<br><br>Vestibulum velit orci, bibendum eget, molestie eu, sagittis non, leo. Nullam sed enim. Duis ac lorem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse potenti. Sed tincidunt </p>
                    <div class="text-center text-lg-left button-container"><button class="btn btn-primary fons-book" type="button">Schedule</button></a><button class="btn btn-dark" type="button">Learn More</button></div>
                </div>
            </div>
            <div class="row flex-wrap-reverse flex-lg-wrap mb-5">
                <div class="col-12 col-lg-7 align-self-center">
                    <h1 class="text-center text-lg-left mb-0 mt-4 mt-lg-0"><strong>Music lessons without limits.</strong></h1>
                    <h2 class="text-center text-lg-left mb-0"><strong>Secondary Title</strong></h2>
                    <p class="text-center text-lg-left">Nulla quam. Aenean fermentum, turpis sed volutpat dignissim, diam risus facilisis nibh, sit amet iaculis est turpis non tellus. Nunc a mauris. Proin eget ligula. Nam cursus libero.<br><br>Vestibulum velit orci, bibendum eget, molestie eu, sagittis non, leo. Nullam sed enim. Duis ac lorem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse potenti. Sed tincidunt </p>
                    <div class="text-center text-lg-left button-container"><button class="btn btn-primary fons-book" type="button">Schedule</button></a><button class="btn btn-dark" type="button">Learn More</button></div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="image-container"><img class="img-fluid image-col-right" src="<?php echo get_template_directory_uri() ?>/assets/img/section-image-right.png"></div>
                </div>
            </div>
        </div>
    </div>
    <?php echo get_footer(); ?>