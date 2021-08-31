   <div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
                <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->
                
                    <form action="#" id="top-searchform" method="get" role="search">
                        <div class="input-group">
                            <input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
                        </div>
                    </form>
                    
                    <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->
                
                </div><!-- top search end -->
            
            	<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
                
                	<ol class="breadcrumb">
                    	<li><a href="/">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                    
                </div><!-- breadcrumbs end -->               
                
            </div><!-- row end -->
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                            
                                
                                <h1 class="page-title">Contact Us</h1>
                                
                                <div class="news-body">
                                
                                    <p>We are an email away. Contact us below or send us an email to <strong>support@wsomonkey.com<br><br> NOTE:<br> </strong>
                                    We will respond to your email if you have the following issues:
                                    </p>
                                    
                                    <div class="row">
                                    	<div class="col-lg-1s 12 col-md-12 col-sm-12">
                                        	<h6 class="remove-margin-bottom">- Purchased membership but having trouble signing up</h6>
                                        	<h6 class="remove-margin-top remove-margin-bottom">- Having trouble loggin in</h6>
											<h6 class="remove-margin-top remove-margin-bottom">- Want to report broken Links?</h6>
											<h6 class="remove-margin-top remove-margin-bottom">- Wish to advertise</h6>
											<h6 class="remove-margin-top remove-margin-bottom">- Want to report broken Links?</h6>
                                        </div>
                                    </div>
                                    
                                    <hr/>
                                    
                                    <h6>Drop us note!</h6>
                                    
                                    <form id="contactform" method="post" action="#">
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> Name</label>
                                                <input type="text" aria-required="true" size="30" value="" name="contactName" id="contactName" class="form-control requiredField" />
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="email"><span class="required">*</span> E-mail</label>
                                                <input type="text" aria-required="true" size="30" value="" name="email" id="email" class="form-control requiredField" />
                                            </div>
                                        </div><!-- ends row -->
                                        
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <label for="contactPhone"><span class="required">*</span>Topic</label>
                                                <input type="text" aria-required="true" size="30" value="" name="contactPhone" id="contactPhone" class="form-control" />
                                            </div>
                                        </div><!-- ends row -->
                                                                               
                                        
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group clearfix col-lg-12">
                                                <label for="comments"><span class="required">*</span> Message</label>
                                                <textarea aria-required="true" rows="5" cols="45" name="comments" id="comments" class="form-control requiredField mezage"></textarea>
                                            </div>
                            
                                            <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">
                                                <input type="hidden" name="submitted" id="submitted" value="true" />
                                                <input type="submit" value="Send Message" id="submit" name="submit" class="btn btn-default" />
                                            </div>
                                        </div><!-- ends row -->
                                    </form>
                                    
                                </div>
                            
                            </div>
                        
                        </div><!-- row end -->               
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
                
             <?php
                    echo $this->element('side');
                ?>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->