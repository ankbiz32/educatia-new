
        <section class="inner-banner" style="background-image: url(<?=base_url()?>assets/images/news-header.jpg);">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">News</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">News</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->

        <section class="blog-one blog-page">
            <div class="container">
                <div class="row">
                <?php foreach($events as $e){?>
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="<?=base_url()?>assets/images/<?=$e->img_src?>" alt="News">
                                <a class="blog-one__plus" href="<?=base_url('news/').$e->id.'/'.$e->slug?>"><i class="kipso-icon-plus-symbol"></i>
                                    <!-- /.kipso-icon-plus-symbol --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="Posted On <?=date('M d',strtotime($e->date))?>" href="#"><i class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted by <?=$e->author?>" href="#"><i class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h2 class="blog-one__title"><a href="<?=base_url('news/').$e->id.'/'.$e->slug?>"><?=$e->heading?></a>
                                </h2><!-- /.blog-one__title -->
                                <p class="blog-one__text"><?=substr($e->descr,0,50).'...'?></p><!-- /.blog-one__text -->
                                <a href="<?=base_url('news/').$e->id.'/'.$e->slug?>" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div>
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
        </section><!-- /.blog-one blog-page -->
       