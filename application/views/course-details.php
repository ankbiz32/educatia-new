
        <section class="inner-banner" style="background-image: url(<?=base_url()?>assets/images/courses-header.jpg);">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Course details</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Course details</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->

        <section class="course-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-details__content">

                            <div class="course-details__top">
                                <div class="course-details__top-left">
                                    <h2 class="course-details__title"><?=$course->name?></h2>
                                    <!-- /.course-details__title -->
                                    <div class="course-one__stars">
                                        <span class="course-one__stars-wrap">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <span class="course-one__count"><?=$course->rating?></span>
                                        <!-- <span class="course-one__stars-count">250</span> -->
                                    </div><!-- /.course-one__stars -->
                                </div><!-- /.course-details__top-left -->
                                <div class="course-details__top-right">
                                    <a href="<?=base_url('category/').$course->cat_id.'/'.$course->cat_name?>" class="course-one__category"><?=$course->cat_name?></a>
                                </div><!-- /.course-details__top-right -->
                            </div><!-- /.course-details__top -->
                            <div class="course-one__image">
                                <img src="<?=base_url()?>assets/images/<?=$course->img_src?>" alt="Course image">
                            </div><!-- /.course-one__image -->

                            <ul class="course-details__tab-navs list-unstyled nav nav-tabs" role="tablist">
                                <li>
                                    <a class="active" role="tab" data-toggle="tab" href="#overview">Overview</a>
                                </li>
                            <div class="tab-content course-details__tab-content ">
                                <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                                    <?=$course->overview?>
                                </div><!-- /.course-details__tab-content -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.course-details__content -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="course-details__price">
                            <p class="course-details__price-text">Course price </p><!-- /.course-details__price-text -->
                            <p class="course-details__price-amount"><?=$course->new_price?> &emsp;<small><del><?=$course->old_price?></del></small></p><!-- /.course-details__price-amount -->
                            <a href="#" class="thm-btn course-details__price-btn">Enroll Now</a><!-- /.thm-btn -->
                        </div><!-- /.course-details__price -->

                        <div class="course-details__meta">
                            <!-- <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-clock"></i>
                                </span>
                                Durations: <span>10 hours</span>
                            </a>
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-folder-open"></i>
                                </span>
                                Lectures: <span>6</span>
                            </a>
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-user-circle"></i>
                                </span>
                                Students: <span>Max 4</span>
                            </a>
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="fas fa-play"></i>
                                </span>
                                Video: <span>8 hours</span>
                            </a> -->
                            <a class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-flag"></i>
                                </span>
                                Skill Level: <span><?=$course->level?></span>
                            </a><!-- /.course-details__meta-link -->
                            <a  class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-bell"></i><!-- /.far fa-bell -->
                                </span><!-- /.course-details__icon -->
                                Language: <span><?=$course->lang?></span>
                            </a><!-- /.course-details__meta-link -->
                        </div><!-- /.course-details__meta -->
                        <div class="course-details__list">
                            <h2 class="course-details__list-title">New Courses</h2>
                            <?php foreach($courses as $c){?>
                                <div class="course-details__list-item">
                                    <div class="course-details__list-img">
                                        <img src="<?=base_url()?>assets/images/<?=$c->img_src?>" alt="New course">
                                    </div><!-- /.course-details__list-img -->
                                    <div class="course-details__list-content">
                                        <h3><a href="<?=base_url('course/').$c->id.'/'.$c->slug?>"><?=$c->name?></a></h3>
                                        <div class="course-details__list-stars">
                                            <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                            <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                            <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                            <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                            <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                            <span><?=$c->rating?></span>
                                        </div><!-- /.course-details__list-stars -->
                                    </div><!-- /.course-details__list-content -->
                                </div>
                            <?php }?>
                        </div><!-- /.course-details__list -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.course-details -->