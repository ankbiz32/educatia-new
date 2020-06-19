
        <section class="inner-banner" style="background-image: url(<?=base_url()?>assets/images/news-header.jpg);">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Contact</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Contact</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->

        <section class="contact-info-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-one__single wow fadeInDown" data-wow-duration="1500ms">
                            <div class="contact-info-one__icon"><i class="kipso-icon-manager"></i><!-- /.kipso-icon-manager -->
                            </div><!-- /.contact-info-one__icon -->
                            <h2 class="contact-info-one__title">About Us </h2><!-- /.contact-info-one__title -->
                            <p class="contact-info-one__text">Lorem ipsum is simply free text <br> available in the market to
                                use <br>
                                deliver satisfaction.</p><!-- /.contact-info-one__text -->
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="contact-info-one__single wow fadeInUp" data-wow-duration="1500ms">
                            <div class="contact-info-one__icon"><i class="kipso-icon-placeholder"></i>
                                <!-- /.kipso-icon-manager -->
                            </div><!-- /.contact-info-one__icon -->
                            <h2 class="contact-info-one__title">Our Address</h2><!-- /.contact-info-one__title -->
                            <p class="contact-info-one__text">855 Road Broklyn Street, <br>
                                600 New York, United States of <br> America</p><!-- /.contact-info-one__text -->
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="contact-info-one__single wow fadeInDown" data-wow-duration="1500ms">
                            <div class="contact-info-one__icon"><i class="kipso-icon-contact"></i><!-- /.kipso-icon-manager -->
                            </div><!-- /.contact-info-one__icon -->
                            <h2 class="contact-info-one__title">Contact Info</h2><!-- /.contact-info-one__title -->
                            <p class="contact-info-one__text"><?=$web->email?> <br>
                            <?=$web->phone1?> <br> &nbsp; </p><!-- /.contact-info-one__text -->
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->

        <section class="contact-one">
            <div class="container">
                <h2 class="contact-one__title text-center">Get in touch <br>
                    with us</h2><!-- /.contact-one__title -->
                <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                    <div class="row low-gutters">
                        <div class="col-lg-6">
                            <input type="text" name="name" placeholder="Your Name">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" placeholder="Email Address" name="email">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <textarea placeholder="Write Message" name="message"></textarea>
                            <div class="text-center">
                                <button type="submit" class="contact-one__btn thm-btn">Submit Comment</button>
                            </div><!-- /.text-center -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form><!-- /.contact-one__form -->
                <div class="result text-center"></div><!-- /.result -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

       