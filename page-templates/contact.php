<?php /* Template Name: Contact Page */ ?>
<?php echo get_header(); ?>


<div class="hero contact-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1 class="display-1">Get in Contact</h1>
                    <p>Vivamus iaculis dolor id felis. Phasellus cursus nulla non odio. Nulla a lectus sed nisi luctus pretium. Sed egestas rutrum odio. Nunc ornare arcu. Quisque at augue ac </p>
                    <div class="button-container mb-5 mb-lg-0"><button class="btn btn-primary" type="button">Schedule</button><button class="btn btn-light" type="button">Learn More</button></div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form><label>Name</label><input class="form-control mb-3" type="text"><label>Email</label><input class="form-control mb-3" type="text"><label>Subject</label><input class="form-control mb-3" type="text"><label>Message</label><textarea class="form-control mb-3"></textarea><button class="btn btn-primary" type="button">Submit</button></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section"></div>
    <?php echo get_footer(); ?>