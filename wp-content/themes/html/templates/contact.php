<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
        <div id="page-content">
            <div class="header-background height-400px">
                <div id="big-map"></div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <h2><strong>Get In Touch</strong></h2>
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-8 col-sm-8">
                            <p>Mauris condimentum non augue eu cursus. Sed eget cursus tortor. Donec egestas enim non augue ornare,
                                ultricies molestie nulla varius. Vestibulum euismod egestas enim, vitae venenatis enim pretium a.
                            </p>
                            <div class="separator"></div>
                            <!--end separator-->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <h4><strong>Contact Details</strong></h4>
                                    <figure>+1 (734) 123-4567</figure>
                                    <figure>hello@archits.com</figure>
                                    <br>
                                    <address>
                                        4877 Spruce Drive
                                        <br>
                                        West Newton, PA 15089
                                    </address>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h4><strong>Social Networks</strong></h4>
                                    <figure><a href="">Facebook</a></figure>
                                    <figure><a href="">Twitter</a></figure>
                                    <figure><a href="">Behance</a></figure>
                                    <figure><a href="">Youtube</a></figure>
                                </div>
                            </div>
                        </div>
                        <!--end col-md-8-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
            <!--end block-->
            <?php while (have_posts()) {
                the_post();
                the_content();
            } ?>
            <div class="block stick-to-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2><strong>Contact Form</strong></h2>
                        </div>
                        <div class="col-md-8">
                            <form id="form-contact" class="labels-uppercase clearfix" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="form-contact-name">Your Name<em>*</em></label>
                                            <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="form-contact-email">Your Email<em>*</em></label>
                                            <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="form-contact-message">Your Message<em>*</em></label>
                                    <textarea class="form-control" id="form-contact-message" rows="8" name="message" required="" placeholder="Message"></textarea>
                                </div>
                                <!--end form-group-->
                                <div id="form-status" class="pull-left"></div>
                                <div class="form-group pull-right">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                                <!--end form-group-->
                            </form>
                            <!--end form-->
                        </div>
                        <!--end col-md-8-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
                <div class="bg black opacity-2"></div>
                <!--end bg-->
            </div>
            <!--end block-->

        </div>
 <?php get_footer(); ?>