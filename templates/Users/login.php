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
                        <li class="active">Members Login</li>
                    </ol>
                    
                </div><!-- breadcrumbs end -->               
                
            </div><!-- row end -->
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                            
                                
                                <h1 class="page-title">Login</h1>
                                
                                <div class="news-body">
                                	<div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <form id="contactform" method="post" action="/login">
                                        <div class="row"><!-- starts row -->
                                                <label for="contactName"><span class="required">*</span> User Name</label>
                                                <input type="text" aria-required="true" size="30" value="" name="contactName" id="contactName" class="form-control requiredField"/>
                                            	<br>
                                                <label for="email"><span class="required">*</span>Password</label>
                                                <input type="password"  size="30" value="" name="email" id="email" class="form-control" />
                                                <br>
                                                <div class="form-group clearfix col-lg-12 text-left remove-margin-bottom">
                                                
                                                <input type="submit" value="Login" id="submit" name="submit" class="btn btn-default" />

                                            	</div>
                                          
                                        </div><!-- ends row -->
                                        
                                    </form>
                                    <p>Forgot Password? <a href="">Click Here</a> </p>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <br><br>
                                    <p style="font-size: 19px;">Become a member and download unlimited content. <a href="/register"><strong>Create Account</strong> </a> </p>
                                    </div>
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