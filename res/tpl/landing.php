<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Exorath | Landing Page</title>
    <meta name="description" content="Exorath Network Home" />
    <meta name="keywords" content="Exorath Key Words" />
    <meta name="author" content="LKPridgeon" />
    <link rel="manifest" href="https://exorath.com/res/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-config" content="https://exorath.com/res/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#663fb5">
    <link rel="stylesheet" href="https://exorath.com/res/css/landio.css">
  </head>

  <body>

    <!-- =====[ Navigation ]===== -->

    <nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <!-- <span class="icon-logo"></span> -->
          <span class="sr-only">Exorath</span>
        </a>
        <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
        &#9776;
      </a>
        <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUser" aria-expanded="false" aria-controls="collapsingMobileUser">
          <span class="icon-user"></span>
        </a>
      </div>
    </nav>

    <!-- =====[ Middle Section ]===== -->

    <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
      <div class="container">
          <h1 class="display-3"><img src="https://exorath.com/res/img/EXORATH_TRANS.png" style="max-width: 480px;" alt="Exorath"></img></h1>
        <h2 class="m-b-3">The <b>Exorath</b> network is coming soon... </h2>
        <a class="btn btn-secondary-outline m-b-1" href="https://exorath.com/news" role="button">More information</a>
        <ul class="nav nav-inline social-share">
          <li class="nav-item"><a class="nav-link" href="https://twitter.com/ExorathNetwork"><span class="icon-twitter"></span> <?php echo $conf->GET("CACHE.TWIT_FOLLOWERS");?></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span> <?php echo $conf->GET("CACHE.FACE_LIKES");?></a></li>
        </ul>
      </div>
    </header>