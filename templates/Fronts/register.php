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
                        <li class="active">Members Registration</li>
                    </ol>
                    
                </div><!-- breadcrumbs end -->               
                
            </div><!-- row end -->
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                    
                    <div class="col-padded"><!-- inner custom column -->
                    
                        <div class="row gutter"><!-- row -->
                        
                            <div class="col-lg-12 col-md-12">
                            
                                
                                <h1 class="page-title">Register</h1>
                                
                                <div class="news-body">
                                    <p style="font-size: 18px;">For just <strong>$4.95/month (paid via Bitcoin Or PayPal,)</strong>  you get access to all the products. Subscription is Non-Renewing meaning we won’t automatically charge you every month. You can decide when you want to renew your membership if not at all. Please click the below link to join our membership.</p>
                                    <hr>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <form method="post" accept-charset="utf-8" action="/member/users/add"> 
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label for="contactName"><span class="required">*</span>First Name</label>
                                                <input type="text" aria-required="true" size="30" type="text" name="first_name" required="required" data-validity-message="This field cannot be left empty" oninvalid="this.setCustomValidity(&#039;&#039;); if (!this.value) this.setCustomValidity(this.dataset.validityMessage)" oninput="this.setCustomValidity(&#039;&#039;)" id="first-name" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> Last Name</label>
                                                <input type="text" aria-required="true" size="30" name="last_name" required="required" data-validity-message="This field cannot be left empty" oninvalid="this.setCustomValidity(&#039;&#039;); if (!this.value) this.setCustomValidity(this.dataset.validityMessage)" oninput="this.setCustomValidity(&#039;&#039;)" id="last-name" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> Phone Number</label>
                                                <input type="text" aria-required="true" size="30" name="phone_number" required="required" data-validity-message="This field cannot be left empty" oninvalid="this.setCustomValidity(&#039;&#039;); if (!this.value) this.setCustomValidity(this.dataset.validityMessage)" oninput="this.setCustomValidity(&#039;&#039;)" id="phone-number" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> Email</label>
                                                <input type="text" aria-required="true" size="30" name="email" required="required" data-validity-message="This field cannot be left empty" oninvalid="this.setCustomValidity(&#039;&#039;); if (!this.value) this.setCustomValidity(this.dataset.validityMessage)" oninput="this.setCustomValidity(&#039;&#039;)" id="email" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> User Name</label>
                                                <input type="text" aria-required="true" size="30" name="user_name" required="required" data-validity-message="This field cannot be left empty" oninvalid="this.setCustomValidity(&#039;&#039;); if (!this.value) this.setCustomValidity(this.dataset.validityMessage)" oninput="this.setCustomValidity(&#039;&#039;)" id="user-name" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="email"><span class="required">*</span>Password</label>
                                                <input type="password" aria-required="true" size="30" name="password" required="required" data-validity-message="This field cannot be left empty" oninvalid="this.setCustomValidity(&#039;&#039;); if (!this.value) this.setCustomValidity(this.dataset.validityMessage)" oninput="this.setCustomValidity(&#039;&#039;)" id="password" class="form-control requiredField" />
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="confirm_password"><span class="required">*</span>Confirm Password</label>
                                                <input type="password" aria-required="true" size="30" name="confirm_password" required="required" data-validity-message="This field cannot be left empty" oninvalid="this.setCustomValidity(&#039;&#039;); if (!this.value) this.setCustomValidity(this.dataset.validityMessage)" oninput="this.setCustomValidity(&#039;&#039;)" id="password" class="form-control requiredField" />
                                                <br>
                                            </div>
                                                <div class="form-group clearfix col-lg-12 text-left remove-margin-bottom">
                                                <input type="hidden" name="submitted" id="submitted" value="true" />
                                                <input type="submit" value="Register" id="submit" name="submit" class="btn btn-default" />

                                                </div>
                                          
                                        </div><!-- ends row -->
                                    </form>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <br><br>
                                    <p style="font-size: 19px;">Already have an account?. <a href="/login"><strong>LogIn Here</strong> </a> </p>
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


