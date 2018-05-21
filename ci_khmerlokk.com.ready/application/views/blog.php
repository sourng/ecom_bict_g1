<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'include/v_head.php'; ?>

</head>

<body class="cnt-home">
    <?php 
	include_once 'include/v_header.php'; 
	include_once 'include/v_breadcrumb.php'; 
?>

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="blog-page">
                    <div class="col-md-9">
                        <?php include_once 'include/v_blog_lists.php'; ?>

                    </div>
                    <div class="col-md-3 sidebar">



                        <div class="sidebar-module-container">
                            <div class="search-area outer-bottom-small">
                                <form>
                                    <div class="control-group">
                                        <input placeholder="Type to search" class="search-field">
                                        <a href="#" class="search-button"></a>
                                    </div>
                                </form>
                            </div>

                            <div class="home-banner outer-top-n outer-bottom-xs">
                                <img src="<?php echo base_url() ?>assets/images/banners/LHS-banner.jpg" alt="Image">
                            </div>

                            <?php 
							  	include_once 'include/v_blog_widget.php';
							  	include_once 'include/v_products_tag.php'; 
							?>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once 'include/v_brands_carousel.php'; ?>
        </div>
    </div>
    <?php include_once 'include/v_footer.php'; ?>
</body>

</html>