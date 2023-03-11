<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta name="description" content="" />
        <meta property="og:title" content="Bina Drives - We make driving A breeze" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="images/favicon.png" />
        <meta name="format-detection" content="telephone=no">

        <!-- FAVICONS ICON -->
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
        
        <!-- PAGE TITLE HERE -->
        <title>Bina Driving Courses</title>
        
        <!-- MOBILE SPECIFIC -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.min.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
            
        <!-- STYLESHEETS -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset("assets/css/style.min.css")); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset("assets/css/templete.min.css")); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset("assets/css/swiper.css")); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset("assets/css/skin.css")); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset("assets/plugins/rangeslider/rangeslider.css")); ?>">
    </head>
    <body id="bg">
        <div class="page-wraper creative-wraper-two">
            <!-- Header -->
            <?php echo $__env->make('shared.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <!-- Content -->
            <?php echo $__env->yieldContent('content'); ?>
            
            <!-- Footer -->
            <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>

        <!-- JavaScript  files ========================================= -->
        <script src="<?php echo e(URL::asset("assets/js/jquery.min.js")); ?>"></script><!-- JQUERY.MIN JS -->
        <script src="<?php echo e(URL::asset("assets/plugins/wow/wow.js")); ?>"></script><!-- WOW JS -->
        <script src="<?php echo e(URL::asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")); ?>"></script>
        <script src="<?php echo e(URL::asset("assets/plugins/bootstrap-select/bootstrap-select.min.js")); ?>"></script>
        <script src="<?php echo e(URL::asset("assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js")); ?>"></script>

        <script src="<?php echo e(URL::asset("assets/plugins/magnific-popup/magnific-popup.js")); ?>"></script><!-- MAGNIFIC POPUP JS -->
        <script src="<?php echo e(URL::asset("assets/plugins/counter/waypoints-min.js")); ?>"></script><!-- WAYPOINTS JS -->
        <script src="<?php echo e(URL::asset("assets/plugins/counter/counterup.min.js")); ?>"></script><!-- COUNTERUP JS -->
        <script src="<?php echo e(URL::asset("assets/plugins/imagesloaded/imagesloaded.js")); ?>"></script><!-- assets/imagesLOADED -->
        <script src="<?php echo e(URL::asset("assets/plugins/masonry/masonry-3.1.4.js")); ?>"></script><!-- MASONRY -->
        <script src="<?php echo e(URL::asset("assets/plugins/masonry/masonry.filter.js")); ?>"></script><!-- MASONRY -->
        <script src="<?php echo e(URL::asset("assets/plugins/owl-carousel/owl.carousel.js")); ?>"></script><!-- OWL SLIDER -->
        <script src="<?php echo e(URL::asset("assets/plugins/rangeslider/rangeslider.js")); ?>" ></script><!-- Rangeslider -->
        <script src="<?php echo e(URL::asset("assets/plugins/lightgallery/js/lightgallery-all.js")); ?>"></script><!-- LIGHT GALLERY -->
        <!-- CUSTOM FUCTIONS  -->
        <script src="<?php echo e(URL::asset("assets/js/custom.min.js")); ?>"></script>
        <script src="<?php echo e(URL::asset("assets/js/dz.carousel.min.js")); ?>"></script><!-- SORTCODE FUCTIONS  -->
        <script src="<?php echo e(URL::asset("assets/js/dz.ajax.js")); ?>"></script><!-- CONTACT JS -->
        <script src="<?php echo e(URL::asset("assets/js/swiper.js")); ?>"></script>
    </body>
</html>
<?php /**PATH /app/resources/views/layouts/app.blade.php ENDPATH**/ ?>