<div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->
        
        	<?php
                    echo $this->element('/users/sub_menu');
                ?>
            
            <div class="row no-gutter"><!-- row -->

                <?php
                    echo $this->element('/users/side_menu');
                ?>
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->

                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                    
                            	<h1 class="page-title">My Curated Posts</h1><!-- category title -->
                            
                            </div>
                        
                        </div><!-- row end -->
                    
                    	 <div class="row gutter"><!-- row -->
                        
                            <div class="news-body">
                                    <p style="font-size: 18px;"><strong>User Profile Update</strong></p>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <form method="post" accept-charset="utf-8" action="/member/users/add"> 
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label for="contactName"><span class="required">*</span>First Name</label>
                                                <input type="text" aria-required="true" size="30" value="Darlene" type="text" name="first_name"  id="first-name" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> Last Name</label>
                                                <input type="text" aria-required="true" size="30" value="Lawrence" name="last_name"  id="last-name" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> Phone Number</label>
                                                <input type="text" aria-required="true" size="30" value="1234567" name="phone_number"  id="phone-number" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> Email</label>
                                                <input type="text" aria-required="true" size="30" value="test@gmail.com" name="email"  id="email" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> Steemit Username (@username)</label>
                                                <input type="text" aria-required="true" size="30" value="@lawrisco1001" name="user_name"  id="user-name" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> User Name</label>
                                                <input type="text" aria-required="true" size="30" value="me1001" name="user_name"  id="user-name" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                           
                                                <div class="form-group clearfix col-lg-12 text-left remove-margin-bottom">
                                                <input type="hidden" name="submitted" id="submitted" value="true" />
                                                <input type="submit" value="Update Profile" id="submit" name="submit" class="btn btn-default" />

                                                </div>
                                          
                                        </div><!-- ends row -->
                                    </form>
<hr>
<br>
                                    <p style="font-size: 18px;"><strong>Change Password</strong></p>

                                    <form method="post" accept-charset="utf-8" action="/member/users/add"> 
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> Old Password</label>
                                                <input type="password" aria-required="true" size="30"  name="user_name"  id="user-name" maxlength="250" class="form-control requiredField"/>
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label for="email"><span class="required">*</span>New Password</label>
                                                <input type="password" aria-required="true" size="30" name="password"  id="password" class="form-control requiredField" />
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                                <label for="confirm_password"><span class="required">*</span>Confirm New Password</label>
                                                <input type="password" aria-required="true" size="30" name="confirm_password" required="required" id="password" class="form-control requiredField" />
                                                <br>
                                            </div>
                                                <div class="form-group clearfix col-lg-12 text-left remove-margin-bottom">
                                                <input type="hidden" name="submitted" id="submitted" value="true" />
                                                <input type="submit" value="Update Password" id="submit" name="submit" class="btn btn-default" />

                                                </div>
                                          
                                        </div><!-- ends row -->
                                    </form>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    
                                    </div>
                                </div>
                        
                        </div><!-- row end --> 
                                        
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
    