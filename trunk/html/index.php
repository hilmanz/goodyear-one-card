<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>GOODYEAR - #ONEGOODCARD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="GOODYEAR - #ONEGOODCARD" />
        <meta name="keywords" content="GOODYEAR,ONEGOODCARD" />
        <meta name="author" content="ACITJAZZ" />
      	<link rel="shortcut icon" href="assets/images/favicon.png"> 
        <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="assets/vendor/eufont/eufont.css" />
        <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" type="text/css" href="assets/vendor/owlcarousel/owl.carousel.css" />
        <link rel="stylesheet" type="text/css" href="assets/vendor/owlcarousel/owl.theme.css" />
        <link rel="stylesheet" type="text/css" href="assets/vendor/owlcarousel/owl.transitions.css" />
        <link rel="stylesheet" type="text/css" href="assets/fonts/bebas.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/onecard.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
		<script src="assets/vendor/jquery.js"></script>
		<script src="assets/vendor/jquery-ui.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="assets/vendor/modernizr.js"></script>
    </head>
    <body>
        <?php 
        if($_GET['page']=='home'){
            include("home.php");
        }else if($_GET['page']=='home2'){ 
            include("home2.php");
        }else{ 
            include("home.php");
        }?>
    	<?php  include("footer.php"); ?>
        <script src="assets/vendor/waypoints.min.js"></script>
		<script src="assets/vendor/wowanimate/wow.js"></script>
        <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
        <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/jquery.stellar.js"></script>
        <script src="assets/vendor/parallax.js"></script>
		<script src="assets/vendor/custom.js"></script>
    </body>
</html>