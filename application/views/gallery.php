
        <section class="inner-banner" style="background-image: url(<?=base_url()?>assets/images/gallery-header.jpg);">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Gallery</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Gallery</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->

        <section class="gallery-one">
            <div class="container">
                <div class="row">
                <?php foreach($gallery as $g){?>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-one__single">
                            <img src="<?=base_url()?>assets/images/<?=$g->img_src?>" alt="Educatia image">
                            <a href="<?=base_url()?>assets/images/<?=$g->img_src?>" class="gallery-one__popup img-popup"><i class="kipso-icon-plus-symbol"></i><!-- /.kipso-icon-plus-symbol --></a>
                        </div><!-- /.gallery-one__single -->
                    </div>
                <?php }?>
                </div>
            </div>
        </section>