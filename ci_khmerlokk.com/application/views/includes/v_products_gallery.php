<div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">

           <?php for ($i=1; $i <=5 ; $i++) { ?>
               <div class="single-product-gallery-item" id="slide<?php echo $i ?>">
                <a data-lightbox="image-1" data-title="Gallery" href="<?php echo base_url() ?>assets/images/products/p<?php echo $i ?>.jpg">
                    <img class="img-responsive" alt="" src="<?php echo base_url() ?>assets/images/blank.gif" data-echo="<?php echo base_url() ?>assets/images/products/p<?php echo $i ?>.jpg" />
                </a>
            </div><!-- /.single-product-gallery-item -->          
           <?php } ?> 

        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <?php for ($i=1; $i <=5 ; $i++) { if ($i==1){ ?>
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="<?php echo $i ?>" href="#slide<?php echo $i ?>">
                        <img class="img-responsive" width="85" alt="" src="<?php echo base_url() ?>assets/images/blank.gif" data-echo="<?php echo base_url() ?>assets/images/products/p<?php echo $i ?>.jpg" />
                    </a>
                </div>
                <?php } else { ?> 
                <div class="item">
                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="<?php echo $i ?>" href="#slide<?php echo $i ?>">
                        <img class="img-responsive" width="85" alt="" src="<?php echo base_url() ?>assets/images/blank.gif" data-echo="<?php echo base_url() ?>assets/images/products/p<?php echo $i ?>.jpg"/>
                    </a>
                </div>
                <?php } } ?>
            </div><!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        	