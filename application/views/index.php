
        <div class="banner-wrapper">
            <section class="banner-two banner-carousel__one no-dots owl-theme owl-carousel">
                <?php foreach($banners as $b){?>
                    <div class="banner-two__slide banner-two__slide-one" style="background-image: url(<?=base_url()?>assets/images/<?=$b->img_src?>);">
                        <div class="container">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <p class="banner-two__tag-line"><?=$b->tagline?></p><!-- /.banner-two__tag-line -->
                                    <h3 class="banner-two__title banner-two__light-color"><?=$b->head?></h3><!-- /.banner-two__title -->
                                    <a href="#" class="thm-btn banner-two__btn">Learn More</a>
                                </div><!-- /.col-xl-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.banner-two__slide -->
                <?php }?>
            </section><!-- /.banner-two -->
            <div class="banner-carousel-btn">
                <a href="#" class="banner-carousel-btn__left-btn"><i class="kipso-icon-left-arrow"></i></a>
                <a href="#" class="banner-carousel-btn__right-btn"><i class="kipso-icon-right-arrow"></i></a>
            </div><!-- /.banner-carousel-btn -->
        </div><!-- /.banner-wrapper -->

        <section class="course-category-two">
            <div class="container text-center">
                <div class="inner-container">

                    <div class="course-category-one__carousel owl-carousel owl-theme">
                        <?php foreach($categories as $cat){?>
                        <div class="item">
                            <div class="course-category-one__single <?=$cat->cat_color?>">
                                <div class="course-category-one__icon">
                                    <i class="<?=$cat->cat_img_src?>"></i><!-- /.kipso-icon-camera -->
                                </div><!-- /.course-category-one__icon -->
                                <h3 class="course-category-one__title"><a href="<?=base_url('category/').$cat->cat_id.'/'.$cat->cat_name?>"><?=$cat->cat_name?></a></h3>
                                <!-- /.course-category-one__title -->
                            </div><!-- /.course-category-one__single -->
                        </div><!-- /.item -->
                        <?php }?>
                    </div><!-- /.course-category-one__carousel owl-carousel owl-theme -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.course-category-two -->

        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__content">
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Why EducatiA ?</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="about-two__text"><strong>EducatiA</strong> covers all the information regarding latest technologies which is the key to experiencing the power of Science and Engineering in the real world & opens a gateway of development to the young technocrats with the zeal of achieving something significant. </p><!-- /.about-two__text -->
                            <div class="about-two__single-wrap">
                                <div class="about-two__single">
                                    <div class="about-two__single-icon">
                                        <i class="kipso-icon-professor"></i><!-- /.kipso-icon-professor -->
                                    </div><!-- /.about-two__single-icon -->
                                    <div class="about-two__single-content">
                                        <p class="about-two__single-text">Start learning from
                                            our experts</p><!-- /.about-two__single-text -->
                                    </div><!-- /.about-two__single-content -->
                                </div><!-- /.about-two__single -->
                                <div class="about-two__single">
                                    <div class="about-two__single-icon">
                                        <i class="kipso-icon-knowledge"></i><!-- /.kipso-icon-professor -->
                                    </div><!-- /.about-two__single-icon -->
                                    <div class="about-two__single-content">
                                        <p class="about-two__single-text">Enhance your skills
                                            with us now</p><!-- /.about-two__single-text -->
                                    </div><!-- /.about-two__single-content -->
                                </div><!-- /.about-two__single -->
                            </div><!-- /.about-two__single-wrap -->
                            <a href="#" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 d-flex justify-content-xl-end justify-content-sm-center">
                        <div class="about-two__image">
                            <span class="about-two__image-dots"></span><!-- /.about-two__image-dots -->
                            <img src="assets/images/about.jpg" alt="">
                            <div class="about-two__count">
                                <div class="about-two__count-text">Trusted by
                                    <span class="counter">2556</span></div><!-- /.about-two__count-text -->
                            </div><!-- /.about-two__count -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-two -->

        <section class="course-one__top-title home-one">
            <div class="container">
                <div class="block-title mb-0">
                    <h2 class="block-title__title">Explore our <br>
                        popular courses</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
            </div><!-- /.container -->
            <div class="course-one__top-title__curve"></div><!-- /.course-one__top-title__curve -->
        </section><!-- /.course-one__top-title -->

        <section class="course-one course-one__teacher-details home-one">
            <div class="container">
                <div class="course-one__carousel owl-carousel owl-theme">
                    <?php foreach($courses as $c){?>
                        <div class="item">
                            <div class="course-one__single <?=$c->cat_color?>">
                                <div class="course-one__image">
                                    <img src="<?=base_url()?>assets/images/<?=$c->img_src?>" alt="">
                                    <!-- <i class="far fa-heart"></i> -->
                                </div><!-- /.course-one__image -->
                                <div class="course-one__content">
                                    <a href="<?=base_url('category/').$c->cat_id.'/'.$c->cat_name?>" class="course-one__category"><?=$c->cat_name?></a>
                                    <h2 class="course-one__title"><a href="<?=base_url('course/').$c->id.'/'.$c->slug?>"><?=$c->name?></a></h2>
                                    <!-- /.course-one__title -->
                                    <div class="course-one__stars">
                                        <span class="course-one__stars-wrap">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span><!-- /.course-one__stars-wrap -->
                                        <span class="course-one__count"><?=$c->rating?></span>
                                        <!-- <span class="course-one__stars-count">250</span> -->
                                    </div><!-- /.course-one__stars -->
                                    <div class="course-one__meta">
                                        <!-- <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                        <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a> -->
                                        <a href="<?=base_url('course/').$c->id.'/'.$c->slug?>"><?=$c->new_price?>&nbsp;&nbsp;&emsp; <del><?=$c->old_price?></del></a>
                                    </div><!-- /.course-one__meta -->
                                    <a href="<?=base_url('course/').$c->id.'/'.$c->slug?>" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                                </div><!-- /.course-one__content -->
                            </div><!-- /.course-one__single -->
                        </div><!-- /.item -->
                    <?php }?>
                </div><!-- /.course-one__carousel -->
                
                <div class="text-center mt-3">
                    <a href="<?-base_url('courses')?>" class="thm-btn text-lg py-3 px-5">View All Courses</a>
                </div>
            </div><!-- /.container -->
        </section><!-- /.course-one course-page -->
        
        <section class="video-two">
            <div class="container">
                <img src="assets/images/scratch-1-1.png" class="video-two__scratch" alt="">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="video-two__content">
                            <h2 class="video-two__title">“ Education is the most powerful tool which you can use to change the world. ” 
                                <br>
                                <small style="font-size: 25px;">
                                        <em>- &nbsp; Nelson Mandela</em>
                                </small>
                            </h2><!-- /.video-two__title -->
                            <a href="#" class="thm-btn">Learn More</a><!-- /.thm-btn -->
                        </div><!-- /.video-two__content -->
                    </div><!-- /.col-lg-7 -->
                    <div class="col-lg-5 d-flex justify-content-lg-end justify-content-sm-start">
                        <div class="my-auto">
                            <a href="#" class="video-two__popup"><i class="fa fa-play"></i><!-- /.fa fa-play --></a>
                            <!-- /.video-two__popup -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-5 d-flex justify-content-end -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.video-two -->

        <section class="thm-gray-bg course-category-one">
            <div class="container-fluid text-center">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Browse online <br>
                        course categories</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="course-category-one__carousel owl-carousel owl-theme">
                    <?php foreach($categories as $cat){?>
                        <div class="item">
                            <div class="course-category-one__single <?=$cat->cat_color?>">
                                <div class="course-category-one__icon">
                                    <i class="<?=$cat->cat_img_src?>"></i><!-- /.kipso-icon-camera -->
                                </div><!-- /.course-category-one__icon -->
                                <h3 class="course-category-one__title"><a href="<?=base_url('category/').$cat->cat_id.'/'.$cat->cat_name?>"><?=$cat->cat_name?></a></h3>
                                <!-- /.course-category-one__title -->
                            </div><!-- /.course-category-one__single -->
                        </div><!-- /.item -->
                    <?php }?>
                </div><!-- /.course-category-one__carousel owl-carousel owl-theme -->

                <a href="<?=base_url('categories')?>" class="thm-btn">View All Categories</a><!-- /.thm-btn -->
            </div><!-- /.container-fluid -->
        </section><!-- /.thm-gray-bg course-category-one -->

        <section class="brand-two ">
            <div class="container">
                <div class="block-title">
                    <h2 class="block-title__title">Our company & partners</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="brand-one__carousel owl-carousel owl-theme">
                    <?php foreach($partners as $p){?>
                        <div class="item">
                            <img src="<?=base_url()?>assets/images/<?=$p->img_src?>" alt="<?=$p->name?>">
                        </div><!-- /.item -->
                    <?php }?>
                </div><!-- /.brand-one__carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.brand-one -->

        <section class="blog-two">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Our latest news <br>
                        & articles</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="blog-two__carousel owl-carousel owl-theme">
                    <?php foreach($events as $e){?>
                        <div class="item">
                            <div class="blog-two__single" style="background-image: url(<?=base_url()?>assets/images/<?=$e->img_src?>);">
                                <div class="blog-two__inner">
                                    <a href="<?=base_url('news/').$e->id.'/'.$e->slug?>" class="blog-two__date">
                                        <span><?=date('d',strtotime($e->date))?></span>
                                        <?=date('M',strtotime($e->date))?>
                                    </a><!-- /.blog-two__date -->
                                    <div class="blog-two__meta">
                                        <a href="<?=base_url('news/').$e->id.'/'.$e->slug?>">by <?=$e->author?></a>
                                    </div><!-- /.blog-two__meta -->
                                    <h3 class="blog-two__title">
                                        <a href="<?=base_url('news/').$e->id.'/'.$e->slug?>"><?=$e->heading?></a>
                                    </h3><!-- /.blog-two__title -->
                                </div><!-- /.blog-two__inner -->
                            </div><!-- /.blog-two__single -->
                        </div><!-- /.item -->
                    <?php }?>
                </div><!-- /.blog-two__carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-page -->
        