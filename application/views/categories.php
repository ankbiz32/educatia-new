
        <section class="inner-banner" style="background-image: url(<?=base_url()?>assets/images/categories-header.jpg);">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Categories</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Categories</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->

        <section class="blog-one blog-page">
            <div class="container">
                <div class="row">
                <?php foreach($categories as $cat){?>
                    <div class="item shadow col-lg-3 col-md-3 col-sm-2">
                        <div class="course-category-one__single <?=$cat->cat_color?>">
                            <div class="course-category-one__icon">
                                <i class="<?=$cat->cat_img_src?>"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="<?=base_url('category/').$cat->cat_id.'/'.$cat->cat_name?>"><?=$cat->cat_name?></a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div>
                <?php }?>
                </div>
            </div>
        </section>