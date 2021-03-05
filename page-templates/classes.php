<?php /* Template Name: Classes Page */ ?>
<?php echo get_header(); ?>


<div class="hero classes-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 align-self-center">


                <?php
                $classesHeading = get_theme_mod('classes-hero-heading');
                if ($classesHeading != '') { ?>
                    <?php echo wpautop("<h1 class='display-1'> $classesHeading </h1>"); ?>
                <?php } ?>


                <?php
                $classesTagline = get_theme_mod('classes-hero-tagline');
                if ($classesTagline != '') { ?>
                    <?php echo wpautop("<p> $classesTagline </p>"); ?>
                <?php } ?>




                <div class="button-container mb-5 mb-lg-0"><button class="btn btn-primary" type="button">Schedule</button><button class="btn btn-light" type="button">Learn More</button></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/class-image-1.png">
                    <div class="card-body">
                        <h2 class="card-title">Guitar Lessons</h2>
                        <p class="card-text">Quisque in augue. Donec aliquam magna nonummy enim. Proin blandit imperdiet sem. Donec malesuada, urna sit amet varius aliquam, nibh tortor laoreet turpis, eget sodales felis&nbsp;nibh ac sapien. Fusce eget augue. Integer sed risus. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <h1 class="mb-5">More Classess</h1>
        <div class="row">
            <!– /* Start the Loop */–>
                <?php

                $mypod = pods('class');
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
                    <div class="card mb-5 mb-lg-0"><img class="card-img-top w-100 d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/class-image-1.png">
                        <div class="card-body">
                            <h2 class="card-title">Guitar Lessons</h2>
                            <p class="card-text">Quisque in augue. Donec aliquam magna nonummy enim. Proin blandit imperdiet sem. Donec malesuada, urna sit amet varius aliquam, nibh tortor laoreet turpis, eget sodales felis&nbsp;nibh ac sapien. Fusce eget augue. Integer sed risus. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card mb-5 mb-lg-0"><img class="card-img-top w-100 d-block" src="<?php echo get_template_directory_uri() ?>/assets/img/class-image-2.png">
                        <div class="card-body">
                            <h2 class="card-title">Piano Lessons</h2>
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
        $classesSecondHeading = get_theme_mod('second-classes-heading');
        if ($classesSecondHeading != '') { ?>
            <?php echo wpautop("<h1 class='text-center text-lg-left mb-0 mt-4 mt-lg-0'><strong> $classesSecondHeading </strong></h1>"); ?>
        <?php } ?>



        <?php
        $classesSecondTagline = get_theme_mod('second-classes-tagline');
        if ($classesSecondTagline != '') { ?>
            <?php echo wpautop("<p class='text-center text-lg-left'> $classesSecondTagline </p>"); ?>
        <?php } ?>


        <div class="text-center text-lg-left button-container"><button class="btn btn-primary fons-book" type="button">Schedule</button><button class="btn btn-dark" type="button">Learn More</button></div>
    </div>
</div>
<?php echo get_footer(); ?>