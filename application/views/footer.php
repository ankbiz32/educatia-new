        <section class="testimonials-one  ">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">What our students <br>
                        have to say</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="testimonials-one__carousel owl-carousel owl-theme">
                    <?php foreach($feedbacks as $f){?>
                        <div class="item">
                            <div class="testimonials-one__single">
                                <div class="testimonials-one__qoute">
                                    <img src="<?=base_url()?>assets/images/qoute-1-1.png" alt="">
                                </div>
                                <p class="testimonials-one__text"><?=$f->content?></p>
                                <img src="<?=base_url()?>assets/images/<?=$f->img_src?>" alt="" class="testimonials-one__img">
                                <h3 class="testimonials-one__name"><?=$f->name?></h3>
                                <p class="testimonials-one__designation">Student</p>
                            </div><!-- /.testimonials-one__single -->
                        </div><!-- /.item -->
                    <?php }?>
                </div><!-- /.testimonials-one__carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->
        <section class="mailchimp-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mailchimp-one__content">
                            <div class="mailchimp-one__icon">
                                <i class="kipso-icon-email"></i><!-- /.kipso-icon-email -->
                            </div><!-- /.mailchimp-one__icon -->
                            <h2 class="mailchimp-one__title">Get latest courses <br>
                                updates by signing up</h2><!-- /.mailchimp-one__title -->
                        </div><!-- /.mailchimp-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 d-flex">
                        <div class="my-auto">
                            <form action="<?=base_url('Home/Subscribe')?>" method="POST" class="mailchimp-one__form">
                                <input type="text" id="mc-email" name="email" placeholder="Enter your email " required>
                                <button type="submit" class="thm-btn">Subscribe</button>
                            </form><!-- /.mailchimp-one__form -->
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.mailchimp-one -->
        <section class="countdown-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="countdown-one__content">
                            <h2 class="countdown-one__title">Register now </h2><!-- /.countdown-one__title -->
                            <p class="countdown-one__tag-line">get premium online courses for free!</p>
                            <!-- /.countdown-one__tag-line -->
                            <p class="countdown-one__text">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin,
                                lorem
                                quis bibendum auci elit consequat is simply free text available in the psutis sem nibh id eis
                                sed
                                odio sit amet.</p><!-- /.countdown-one__text -->
                        </div><!-- /.countdown-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="become-teacher__form">
                            <div class="become-teacher__form-top">
                                <h2 class="become-teacher__form-title">
                                    Get free courses
                                </h2><!-- /.become-teacher__form-title -->
                            </div><!-- /.become-teacher__top -->
                            <form action="<?=base_url('Home/Mail/Enquiry')?>" method="POST" class="become-teacher__form-content contact-form-validated">
                                <input type="text" maxlength="20" name="name" id="name" x-moz-errormessage="Enter name here" oninvalid="this.setCustomValidity('Enter name here')" oninput="this.setCustomValidity('')" class="" placeholder="Your Name" required>

                                <input type="email" placeholder="Email Address" name="email" class="" required>

                                <input type="text" x-moz-errormessage="Enter Contact no. here"  name="phone" pattern="[6-9]{1}[0-9]{9}" oninvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" maxlength="10" title="Enter 10 digit mobile no. starting with 6,7,8, or 9" class="" placeholder="Phone no.">

                                <input type="text" placeholder="Comment" maxlength="200" name="message">
                                <button type="submit" class="thm-btn become-teacher__form-btn">Apply For It</button>
                            </form><!-- /.become-teacher__form-content -->
                            <div class="result text-center"></div><!-- /.result -->
                        </div><!-- /.become-teacher__form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.countdown-one -->
        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__contact">
                                <h2 class="footer-widget__title">Contact</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__course-list">
                                    <li>
                                        <h2><a href="mailto:educatia@gmail.com">Email:</a></h2>
                                        <p><?=$web->email?></p>
                                    </li>
                                    <li>
                                        <h2><a href="tel:+919630022515
                                            "> Phone no. </a></h2>
                                        <p><?=$web->phone1?>
                                        </p>
                                    </li>
                                </ul><!-- /.footer-widget__course-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__link">
                                <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                                <div class="footer-widget__link-wrap">
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a href="<?=base_url()?>about">About</a></li>
                                        <li><a href="<?=base_url()?>training">Training</a></li>
                                        <li><a href="<?=base_url()?>privacy">Privacy Policy </a></li>
                                        <li><a href="<?=base_url()?>news">News</a></li>
                                    </ul><!-- /.footer-widget__link-list -->
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a href="<?=base_url()?>contact">Contact</a></li>
                                        <li><a href="">Enroll Now</a></li>
                                        <li><a href="<?=base_url()?>t&C">T&C</a></li>
                                    </ul><!-- /.footer-widget__link-list -->
                                </div><!-- /.footer-widget__link-wrap -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__gallery">
                                <h2 class="footer-widget__title">Gallery</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__gallery-list">
                                    <?php foreach($gallery as $g){?>
                                    <li><a href="<?=base_url('assets/images/').$g->img_src?>" class="spotlight"><img src="<?=base_url('assets/images/').$g->img_src?>" alt=""></a></li>
                                    <?php }?>
                                </ul><!-- /.footer-widget__gallery -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__about">
                                <h2 class="footer-widget__title">About</h2><!-- /.footer-widget__title -->
                                <p class="footer-widget__text">Lorem ipsum dolor sit ametcon, sectetur adipiscing elit.
                                    Phasellus vehic sagittis euismod.</p><!-- /.footer-widget__text -->
                                <div class="footer-widget__btn-block">
                                    <a href="<?=base_url('contact')?>" class="thm-btn">Contact</a><!-- /.thm-btn -->
                                    <a href="#" class="thm-btn">Enroll</a><!-- /.thm-btn -->
                                </div><!-- /.footer-widget__btn-block -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <p class="site-footer__copy">&copy; Copyright 2020 by <a href="#">Ramraj Services Pvt. Ltd.</a></p>
                    <div class="site-footer__social">
                        <a href="#" data-target="html" class="scroll-to-target site-footer__scroll-top"><i class="kipso-icon-top-arrow"></i></a>
                        <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                        <a href="<?=$web->fblink?>"><i class="fab fa-facebook-square"></i></a>
                        <a href="<?=$web->youtubelink?>"><i class="fab fa-youtube"></i></a>
                        <a href="<?=$web->instalink?>"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.site-footer__social -->
                    <!-- /.site-footer__copy -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            
            <form action="<?=base_url('Home/Mail/Enroll')?>" method="POST" class="become-teacher__form-content contact-form-validated search-popup__form">
                <input type="text" maxlength="20" name="name" id="name" x-moz-errormessage="Enter name here" oninvalid="this.setCustomValidity('Enter name here')" oninput="this.setCustomValidity('')" class="bg-gray mb-3" placeholder="Your Name" required>

                <input type="email" placeholder="Email Address" name="email" class="bg-gray mb-3" required>

                <input type="text" x-moz-errormessage="Enter Contact no. here"  name="phone" pattern="[6-9]{1}[0-9]{9}" oninvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" maxlength="10" title="Enter 10 digit mobile no. starting with 6,7,8, or 9" class="bg-gray" placeholder="Phone no." required>

                <button type="submit" class="thm-btn become-teacher__form-btn d-block mt-4 px-3 py-2">Enroll now</button>
            </form><!-- /.become-teacher__form-content -->
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/js/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?=base_url()?>assets/js/TweenMax.min.js"></script>
    <script src="<?=base_url()?>assets/js/wow.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url()?>assets/js/countdown.min.js"></script>
    <script src="<?=base_url()?>assets/js/vegas.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?=base_url()?>assets/js/spotlight.bundle.js"></script>

    <!-- template scripts -->
    <script src="<?=base_url()?>assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        //  Sweet alert for normal response
        var base_url = '<?=base_url()?>';
        $(document).ready(function(){
            const Toast = Swal.mixin({
                showConfirmButton: true,
                timer: 50000
            });

            <?php if($this->session->flashdata('success') || $message = $this->session->flashdata('failed')):
                $class = $this->session->flashdata('success') ? 'success' : 'error';
            ?>
                
                Toast.fire({
                    icon: '<?=$class?>',
                    title: '<?= $this->session->flashdata('success'); ?>
                            <?= $this->session->flashdata('failed'); ?>'
                });
            <?php 
                endif;
            ?>
        });

    </script>
</body>

</html>