<!DOCTYPE html>
<?php
	if(isset($subdir)){
		require_once './../res/init.php';
	} else {
		require_once './res/init.php';
	}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Exorath</title>
    <meta name="description" content="The Exorath Network Site" />
    <meta name="keywords" content="Exorath, Network, News, Gamemodes, Minecraft, Server" />
    <meta name="author" content="Clickpoints UK" />
    <link rel="manifest" href="https://exorath.com/res/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-TileImage" content="https://exorath.com/res/img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="https://exorath.com/res/res/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#663fb5">
    <link rel="stylesheet" href="https://exorath.com/res/css/landio.css">
    <link rel="stylesheet" href="https://exorath.com/res/css/clkpts.css">
	  <link rel="stylesheet" href="https://exorath.com/res/css/growl.css">
  </head>

  <body class="bg-faded p-t-2">
    <!-- DARK navigation
    ================================================== -->
      <div style="height: 48px;">
      </div>
    <nav class="navbar-2 navbar-exorath bg-inverse-2">
      <div class="container">
        <a class="navbar-brand" href="https://exorath.com/home">
          <img style="height: 48px;" src="https://exorath.com/res/img/Exorath_Font.png"/>
        </a>
        <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbarInverse" aria-expanded="false" aria-controls="collapsingNavbarInverse">
        &#9776;
      </a>
        <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUserInverse" aria-expanded="false" aria-controls="collapsingMobileUserInverse">
          <span class="icon-user"></span>
        </a>
        <div id="collapsingNavbarInverse" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbarInverse">
          <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item nav-item-toggable <?php if($page_name == "home") echo 'active';?>">
              <a class="nav-link" href="https://exorath.com/home">Home<?php if($page_name == "home") echo '<span class="sr-only">(current)</span>';?></a>
            </li>
            <li class="nav-item nav-item-toggable <?php if($page_name == "news") echo 'active';?>">
              <a class="nav-link" href="https://exorath.com/news">News<?php if($page_name == "news") echo '<span class="sr-only">(current)</span>';?></a>
            </li>
            <li class="nav-item nav-item-toggable <?php if($page_name == "forum") echo 'active';?>">
              <a class="nav-link" href="https://exorath.com/forum">Community<?php if($page_name == "forum") echo '<span class="sr-only">(current)</span>';?></a>
            </li>
            <li class="nav-item nav-item-toggable <?php if($page_name == "store") echo 'active';?>">
              <a class="nav-link" href="https://exorath.com/store">Store<?php if($page_name == "store") echo '<span class="sr-only">(current)</span>';?></a>
            </li>
            <li class="nav-item nav-item-toggable <?php if($page_name == "contact") echo 'active';?>">
              <a class="nav-link" href="https://exorath.com/contact">Contact<?php if($page_name == "contact") echo '<span class="sr-only">(current)</span>';?></a>
            </li>
            <li class="nav-item nav-item-toggable hidden-sm-up">
              <form class="navbar-form">
                <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
              </form>
            </li>
            <?php 
            
            if($user_online){
            	?>
            		<li class="nav-item dropdown hidden-sm-down">
		              <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenuInverse2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                <img src="https://cravatar.eu/avatar/<?php echo $user['user_minecraft'];?>/60" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
		              </a>
		              <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenuInverse2">
		                <div class="media">
		                  <div class="media-left">
		                    <img src="https://cravatar.eu/avatar/<?php echo $user['user_minecraft'];?>/60" height="60" width="60" alt="Avatar" class="img-circle">
		                  </div>
		                  <div class="media-body media-middle">
		                    <h5 class="media-heading"><?php echo $user['user_name'];?></h5>
		                    <h6><?php echo $user['user_email'];?></h6>
		                  </div>
		                </div>
		                <a href="https://exorath.com/account/messages" class="dropdown-item text-uppercase">View posts</a>
		                <a href="https://exorath.com/account" class="dropdown-item text-uppercase">Account</a>
		                <a href="https://exorath.com/billing" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
		                <a href="https://exorath.com/logout" class="dropdown-item text-uppercase text-muted">Log out</a>
		              </div>
		            </li>
            	<?php
            } else {
            	?>
            		<li class="nav-item nav-item-toggable  <?php if($page_name == "login") echo 'active';?>">
              			<a class="nav-link" href="https://exorath.com/login">Login <?php if($page_name == "login") echo '<span class="sr-only">(current)</span>';?></a>
            		</li>
            	<?php
            }
            ?>
          </ul>
        </div>
        <div id="collapsingMobileUserInverse" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel" aria-labelledby="collapsingMobileUserInverse">
          <div class="media m-t-1">
            <div class="media-left">
              <img src="https://cravatar.eu/avatar/lkpridgeon/60" height="60" width="60" alt="Avatar" class="img-circle">
            </div>
            <div class="media-body media-middle">
              <h5 class="media-heading">LKPridgeon</h5>
              <h6>lkpridgeon@clkpts.uk</h6>
            </div>
          </div>
          <a href="#" class="dropdown-item text-uppercase">View posts</a>
          <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
          <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
          <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
        </div>
      </div>
    </nav>
      
    <hr class="invisible">
    <div class="container">