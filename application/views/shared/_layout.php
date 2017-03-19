<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--
Template Name: Travelite - Tours and Travels Online Booking HTML
Version: 1.0.0
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js" ng-app="travelApp"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js" ng-app="travelApp"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" ng-app="travelApp">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <meta name="robots" content="nofollow" />
    <title>Travelite - Tours and Travels Online Booking HTML</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="description" content="Travelite - Tours and Travels Online Booking HTML"/>
    <meta name="keywords" content="Travel, html template, Travelite template">
    <meta name="author" content="Kamleshyadav"/>
    <meta name="MobileOptimized" content="320">
    <!--srart theme style -->
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/style-fixes.css" rel="stylesheet" type="text/css"/>
    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url();?>favicon.ico"/>
    <link rel="icon" type="image/ico" href="<?php echo base_url();?>favicon.ico"/>
    <base href="<?php echo angular_base();?>">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ng/angular.1.6.1.js"></script>
</head>
<body class="travel_home">
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93988009-1', 'auto');
    ga('send', 'pageview');

</script>

<!--Page loading start-->
<?php //$this->load->view("shared/_loader");?>
<!--Page loading end-->
<!--Page main section start-->
<div id="travel_wrapper">
    <!--Header Include start-->
    <?php $this->load->view("shared/_header"); ?>
    <!--Header Include end-->

    <!--content body start-->
    <?php
    if (isset($content)) {
        $this->load->view($content);
    }
    ?>
    <!--content body end-->

    <!--footer start-->
    <?php $this->load->view("shared/_footer"); ?>
    <!--footer end-->
</div>
<!--Page main section end-->
<!--main js file start-->


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>assets/js/plugin/datetimepicker/jquery.datetimepicker.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>assets/js/plugin/parallax/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugin/owl/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugin/isotope/jquery.isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugin/bxslider/jquery-bxslider.js"></script>
<!-- pie chart js -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugin/pie-circle/circles.js"></script>
<!-- pie chart js -->
<!--counter js-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugin/counter/jquery.countTo.js">
</script>
<!--counter js-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugin/counter/jquery.countdown.js">
</script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript"
        src="<?php echo base_url(); ?>assets/js/plugin/revolution/js/jquery.themepunch.tools.min.js">
</script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>assets/js/plugin/revolution/js/jquery.themepunch.revolution.min.js">
</script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>assets/js/plugin/revolution/js/revolution.extension.layeranimation.min.js">
</script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>assets/js/plugin/revolution/js/revolution.extension.navigation.min.js">
</script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>assets/js/plugin/revolution/js/revolution.extension.slideanims.min.js">
</script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>assets/js/plugin/revolution/js/revolution.extension.actions.min.js">
</script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>assets/js/plugin/revolution/js/revolution.extension.parallax.min.js">
</script>
<!-- REVOLUTION JS FiLES -->
<!-- video_popup -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugin/video-popup/jquery.magnific-popup.js">
</script>
<!-- video_popup -->
<!-- slick slider -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugin/slick/jquery-migrate-1.2.1.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugin/slick/slick.min.js"></script>
<!-- slick slider -->
<!-- video player js -->
<script src="<?php echo base_url(); ?>assets/js/plugin/video_player/mediaelement-and-player.min.js"></script>
<!-- video player js -->
<!-- pricefilter -->
<script src="<?php echo base_url(); ?>assets/js/plugin/jquery-ui/jquery-ui.js"></script>
<!-- pricefilter-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<!--main js file end-->


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ng/ap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ng/tours.js"></script>
</body>
</html>
 