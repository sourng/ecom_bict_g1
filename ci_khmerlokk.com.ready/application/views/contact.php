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
            <div class="contact-page">
                <div class="row">

                    <div class="col-md-12 contact-map outer-bottom-vs">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.0080692193424!2d80.29172299999996!3d13.098675000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526f446a1c3187%3A0x298011b0b0d14d47!2sTransvelo!5e0!3m2!1sen!2sin!4v1412844527190" width="600" height="450" style="border:0"></iframe>
                    </div>

                    <?php 
						include_once 'include/v_form_contact.php';
						include_once 'include/v_contact_info.php'; 
					?>
                </div>
                <!-- /.contact-page -->
            </div>
            <!-- /.row -->

            <?php // include_once 'include/v_brands_carousel.php'; ?>
        </div>
        <!-- /.container -->
    </div>
        <?php include_once 'include/v_footer.php'; ?>

</body>

</html>