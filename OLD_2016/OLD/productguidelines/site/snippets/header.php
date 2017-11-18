<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $page->title() ?> | <?php echo $site->title() ?></title>
        <meta name="description" content="<?php echo $site->description() ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon-precomposed.png">

        <meta property="og:url" content="-" /> 
        <meta property="og:title" content="<?php echo $site->title() ?>" /> 
        <meta property="og:description" content="<?php echo $site->description() ?>" /> 
        <meta property="og:image"  content="-" />

        <link rel="stylesheet" href="<?php echo $site->url() ?>/assets/css/browserhappy.css">
        <link rel="stylesheet" href="<?php echo $site->url() ?>/assets/css/font.css">
        <link rel="stylesheet" href="<?php echo $site->url() ?>/assets/css/productguidelines.css">

        <script src="<?php echo $site->url() ?>/assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?php echo $site->url() ?>/assets/js/modernizr.custom.js"></script>

        <!--
                         +-----------------------------+
                   .---._|                             |
        __________/ ._____)        PREZI PRODUCT       |
                     ) __|      GUIDELINES WEBSITE     |
                       __|                             |
        .---------.._____|       by flame @ Prezi      |
                         |                             |
                         +-----------------------------+
        -->
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-51674277-1', 'blahblahblah.com');
          ga('send', 'pageview');

        </script>

    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
        <div class="top">
          <?php snippet('menu') ?>
        </div>