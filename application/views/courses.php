
        <section class="inner-banner" style="background-image: url(<?=base_url()?>assets/images/courses-header.jpg);">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Courses</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Courses</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->

        <section class="course-one course-page">
            <div class="container">
                <div class="row">
                    <?php foreach($courses as $c){?>
                        <div class="col-lg-4">
                            <div class="course-one__single">
                                <div class="course-one__image">
                                    <img src="<?=base_url()?>assets/images/<?=$c->img_src?>" alt="Course">
                                </div><!-- /.course-one__image -->
                                <div class="course-one__content">
                                    <a href="<?=base_url('category/').$c->cat_id.'/'.$c->cat_name?>" class="course-one__category"><?=$c->cat_name?></a><!-- /.course-one__category -->
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
                                    </div><!-- /.course-one__stars -->
                                    <div class="course-one__meta">
                                        <!-- <a href="course-details.html"><i class="far fa-clock"></i> 10 Hours</a>
                                        <a href="course-details.html"><i class="far fa-folder-open"></i> 6 Lectures</a> -->
                                        <a href="<?=base_url('course/').$c->id.'/'.$c->slug?>"><?=$c->new_price?> &emsp;&emsp; <del><?=$c->old_price?></del></a>
                                    </div><!-- /.course-one__meta -->
                                    <a href="<?=base_url('course/').$c->id.'/'.$c->slug?>" class="course-one__link">See Preview</a><!-- /.course-one__link -->
                                </div><!-- /.course-one__content -->
                            </div><!-- /.course-one__single -->
                        </div><!-- /.col-lg-4 -->
                    <?php }?>
                </div><!-- /.row -->

                <!-- <div class="post-pagination">
                    <a href="#"><i class="fa fa-angle-double-left"></i></a>
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div> -->

            </div><!-- /.container -->
        </section><!-- /.course-one course-page -->
       