<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title><?php echo constant("SITE_NAME");?></title>
    <script src="<?php echo constant("SITE_URL");?>dist/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo constant("SITE_URL");?>dist/js/bootstrap.min.js"></script>
    <!-- Modernizr -->
    <script src="<?php echo constant("SITE_URL");?>assets/js/modernizr.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo constant("SITE_URL");?>dist/css/bootstrap.css" rel="stylesheet">

    <!-- Fonts include -->
    <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/f14b990e-7be7-4a38-bb1c-feb9daa4eaa0.css"/>

    <!-- Custom styles for this template -->
    <link href="<?php echo constant("SITE_URL");?>dist/css/angelheart.css" rel="stylesheet">
    <link href="<?php echo constant("SITE_URL");?>dist/css/responsive.css" rel="stylesheet">

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?php echo constant("SITE_URL");?>dist/js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo constant("SITE_URL");?>dist/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Select 2 Dropdown
    <link href="<?php echo constant("SITE_URL");?>dist/js/select2.css" rel="stylesheet"/>
    <script src="<?php echo constant("SITE_URL");?>dist/js/select2.js"></script>

 -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div class="collapse navbar-collapse">
          <a class="navbar-brand" href="<?php echo SITE_LINK?>">Angel Heart</a>
          <ul class="nav navbar-nav">
            <li id="nav-home-button"><a href="<?php echo SITE_LINK?>"><span class="gradient"></span>Home</a></li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == '/about/index.php' ? ' active' : '');?>"><a class="first" href="<?php echo SITE_LINK?>about"><span class="gradient"></span>About</a>
            <!-- dropdown here in future -->
            </li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == '/music/index.php' ? ' active' : '');?>"><a href="<?php echo SITE_LINK?>music"><span class="gradient"></span>Music</a></li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == '/app/index.php' ? ' active' : '');?>"><a href="<?php echo SITE_LINK?>app"><span class="gradient"></span>App</a></li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == '/stage/index.php' ? ' active' : '');?>"><a href="<?php echo SITE_LINK?>stage"><span class="gradient"></span>Stage</a></li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == '/original-artists/index.php' ? ' active' : '');?>"><a href="<?php echo SITE_LINK?>original-artists"><span class="gradient"></span>Artists</a></li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == '/join/index.php' ? ' active' : '');?>"><a target="_blank" href="http://oxingalerecords.com/"><span class="gradient"></span>Join the Story</a></li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == '/contact/index.php' ? ' active' : '');?>"><a class="last" href="<?php echo SITE_LINK?>contact"><span class="gradient"></span>Contact</a></li>
          </ul>

          <ul class="nav navbar-nav social">
            <li><a class="facebook" href="https://www.facebook.com/angelheartmusicstorybook" target="_blank"><span class="gradient"></span>Facebook</a></li>
            <li><a class="twitter" href="https://twitter.com/MusicStorybook" target="_blank"><span class="gradient"></span>Twitter</a></li>
            <li><a class="youtube" href="https://www.facebook.com/angelheartmusicstorybook/app_212104595551052" target="_blank"><span class="gradient"></span>YouTube</a></li>
            <li class="itunesli"><a class="itunes" href="https://itunes.apple.com/us/album/angel-heart-a-music-storybook/id701054791?ls=1" target="_blank"><span class="gradient"></span>iTunes</a></li>
            <li class="amazonli"><a class="amazon" href="http://www.amazon.com/gp/product/B00E4V0BUA/ref=as_li_qf_sp_asin_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B00E4V0BUA&linkCode=as2&tag=oxingale" target="_blank"><span class="gradient"></span>Amazon</a></li>

            <!--<li><a class="google" href="#"><span class="gradient"></span>Google Plus</a></li>
            -->
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
