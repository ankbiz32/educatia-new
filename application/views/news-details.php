
        <section class="inner-banner" style="background-image: url(<?=base_url()?>assets/images/news-header.jpg);">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">News Details</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">News Details</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->

        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="<?=base_url()?>assets/images/<?=$event->img_src?>" alt="News">

                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <div class="blog-one__meta">
                                    <a data-toggle="tooltip" data-placement="top" title="Posted On <?=date('M d',strtotime($event->date))?>" href="#"><i class="fa fa-calendar-alt"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Posted By <?=$event->author?>" href="#"><i class="fa fa-user"></i></a>
                                </div><!-- /.blog-one__meta -->
                                <h2 class="blog-one__title"><?=$event->heading?></h2><!-- /.blog-one__title -->
                                <?=$event->descr?>
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                        <div class="share-block">
                            <div class="social-block">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div><!-- /.social-block -->
                        </div><!-- /.share-block -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="text" name="search" placeholder="Search here...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest news</h3><!-- /.sidebar__title -->
                                <div class="sidebar__post-wrap">
                                <?php foreach($events as $e){?>
                                    <div class="sidebar__post__single">
                                        <div class="sidebar__post-image">
                                            <div class="inner-block"><img src="<?=base_url()?>assets/images/<?=$e->img_src?>" alt="News Image" /></div>
                                            <!-- /.inner-block -->
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h4 class="sidebar__post-title"><a href="<?=base_url('news/').$e->id.'/'.$e->slug?>"><?=$e->heading?></a></h4>
                                            <!-- /.sidebar__post-title -->
                                        </div><!-- /.sidebar__post-content -->
                                    </div>
                                <?php }?>
                                </div><!-- /.sidebar__post-wrap -->
                            </div><!-- /.sidebar__single -->

                            <!-- <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list">
                                    <li class="sidebar__category-list-item"><a href="#">Business</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">Introductions</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">One Page Template</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">Parallax Effects</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">New Technologies</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">Video Backgrounds</a></li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <ul class="sidebar__tags-list">
                                    <li class="sidebar__tags-list-item"><a href="#">Business,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Agency,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Technology,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Parallax,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Innovative,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Professional,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Experience,</a></li>
                                </ul>
                            </div>  -->

                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details -->
      