	</div>
	<hr class="invisible">
	
	<footer class="section-footer bg-inverse" role="contentinfo">
      
    <div class="media">
  		<div style="text-align: center; margin: 0px auto; width: 90%;" class="middle">
            <ul class="nav nav-inline">
              <li class="nav-item">
                <a class="nav-link" href="https://exorath.com/home">Home<span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="https://exorath.com/news">News</a>
              </li>
              <li class="nav-item">
                  <a style="" class="nav-link" href="https://exorath.com/forums" target="_blank">Community</a>
              </li>
			  <li class="nav-item">
                  <img style="height: 150px; padding-left: 1.5rem; padding-right: 1.5rem; padding-bottom: 1.75rem;" src="https://www.exorath.com/res/img/EXORATH_TRANS.png">
              </li>
                
              <li class="nav-item">
                  <a class="nav-link" href="https://exorath.com/contact" target="_blank">Store</a>
              </li><li class="nav-item">
                  <a class="nav-link" href="https://exorath.com/contact" target="_blank">Account</a>
              </li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Support</a></li>
            </ul>
        </div>
  		<div style="margin: 0px auto; text-align: center; width: 80%; padding-top: 1rem;" class="row">
  			<div class="col-xs-6 left" style="text-align: right; display: inline-block; vertical-align: middle; padding-right: 2.5rem; width: 38%;">
				<h5>License</h5>
  				<h6>
	  				The contents of this site are protected under the exorath networks
	  				copyrights and licenses for more information please visit out license
	  				page for more information.
  				</h6>
			</div>
			<div class="col-xs-6 mid" style="border-right: 1px dotted rgba(255, 255, 255, 0.4); display: inline-block; border-left: 1px dotted rgba(255, 255, 255, 0.4); align-content: center; width: 24%;">
				<h5>Contact</h5>
				<h6>Email: support@exorath.com</h6>
				<h6>Phone: +44 7947 6694 67</h6>
			</div>
			<div class="col-xs-6 right" style="text-align: left; padding-left: 2.5rem; display: inline-block; width: 38%;">
				<h5>Disclaimer</h5>
				<h6>
					The Exorath Network is by no means affiliated with Mojang any issues 
					with payments or account issues not-related to you minecraft account 
					should be directed to our support staff through the means provided.
				</h6>
			</div>
		</div>
	</div>
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://exorath.com/res/js/landio.min.js"></script>
	  <script src="https://exorath.com/res/js/plugins/jquery.growl.js"></script>
		<?php if(isset($_SESSION['notification_error']) AND !empty($_SESSION['notification_error'])){
			echo "<script type='text/javascript'>$.growl.error({ message: '" . $_SESSION['notification_error'] . "' });</script>";
			unset($_SESSION['notification_error']);
		} elseif(isset($_SESSION['notification_notice']) AND !empty($_SESSION['notification_notice'])){
			echo "<script type='text/javascript'>$.growl.notice({ message: '" . $_SESSION['notification_notice']['message'] . "' });</script>";
			if($page_name == 'login'){
				if($_SESSION['notification_notice']['showlogin']){
					unset($_SESSION['notification_notice']);
				}
			} else {
				unset($_SESSION['notification_notice']);
			}
		}?>
  </body>
</html>