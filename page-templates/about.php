<?php /* Template Name: About Page */ ?>
<?php echo get_header(); ?>


<div class="hero about-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 align-self-center">

                <?php
                $aboutHeading = get_theme_mod('about-hero-heading');
                if ($aboutHeading != '') { ?>
                    <?php echo wpautop("<h1 class='display-1'> $aboutHeading </h1>"); ?>
                <?php } ?>


                <?php
                $aboutTagline = get_theme_mod('about-hero-tagline');
                if ($aboutTagline != '') { ?>
                    <?php echo wpautop("<p> $aboutTagline </p>"); ?>
                <?php } ?>


                <div class="button-container mb-5 mb-lg-0"><button class="btn btn-primary" type="button">Schedule</button><button class="btn btn-light" type="button">Learn More</button></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="about-hero-image-container"><img class="img-fluid about-hero-image" src="<?php echo wp_get_attachment_url(get_theme_mod('about-image')) ?>"></div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <h1 class="text-center mb-5">Our Teachers</h1>
        <div class="row">

            <!– /* Start the Loop */–>
                <?php

                $mypod = pods('team_member');
                $params = array(
                    'limit' => -1
                );

                $mypod->find($params);

                while ($mypod->fetch()) :
                ?>

                    <?php


                    $title = $mypod->display('title');
                    $image = $mypod->display('image');

                    $description = $mypod->display('description');
                    ?>

                    <div class="col-12 col-lg-6">
                        <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo esc_html($image) ?>">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo esc_html($title); ?></h2>
                                <p class="card-text"><?php echo esc_html($description); ?></p>
                            </div>
                        </div>
                    </div>

                <?php

                endwhile;
                ?>
                <!-- <div class="col-12 col-lg-6">
                    <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/temp-teacher-image.png">
                        <div class="card-body">
                            <h2 class="card-title">Title</h2>
                            <p class="card-text">Quisque in augue. Donec aliquam magna nonummy enim. Proin blandit imperdiet sem. Donec malesuada, urna sit amet varius aliquam, nibh tortor laoreet turpis, eget sodales felis&nbsp;nibh ac sapien. Fusce eget augue. Integer sed risus. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/temp-teacher-image.png">
                        <div class="card-body">
                            <h2 class="card-title">Title</h2>
                            <p class="card-text">Quisque in augue. Donec aliquam magna nonummy enim. Proin blandit imperdiet sem. Donec malesuada, urna sit amet varius aliquam, nibh tortor laoreet turpis, eget sodales felis&nbsp;nibh ac sapien. Fusce eget augue. Integer sed risus. </p>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</div>
<div class="section">
    <div class="container">


        <?php
        $aboutSecondHeading = get_theme_mod('second-about-heading');
        if ($aboutSecondHeading != '') { ?>
            <?php echo wpautop("<h1 class='text-center text-lg-left mb-0 mt-4 mt-lg-0'><strong> $aboutSecondHeading </strong></h1>"); ?>
        <?php } ?>



        <?php
        $aboutSecondTagline = get_theme_mod('second-about-tagline');
        if ($aboutSecondTagline != '') { ?>
            <?php echo wpautop("<p class='text-center text-lg-left'> $aboutSecondTagline </p>"); ?>
        <?php } ?>



        <div class="text-center text-lg-left button-container"><button class="btn btn-primary fons-book" type="button">Schedule</button><button class="btn btn-dark" type="button">Learn More</button></div>
    </div>
</div>
<?php echo get_footer(); ?>