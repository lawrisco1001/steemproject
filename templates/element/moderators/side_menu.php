<div id="k-sidebar" class="col-lg-3 col-md-3"><!-- sidebar wrapper -->
                    
                    <div class="col-padded col-shaded"><!-- inner custom column -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                            <li class="widget-container widget_nav_menu"><!-- widget -->
                    
                                <h1 class="title-widget">Menu</h1>
                                
                                <ul>
                                    <li><a href="/users/dashboard" title="menu item">Dashboard</a></li>
                                    <li><a href="/users/curation_request" title="menu item">Curation Request</a></li>
                                    <li><a href="/users/placement" title="menu item">Placement Lot</a></li>
                                    <li><a href="/users/ranks" title="menu item">Ranks</a></li>
                                    <li><a href="/users/request" title="menu item">Request (2)</a></li>
                                    <li><a href="/users/setting" title="menu item">Setting</a></li>
                                    <li><a href="#" title="menu item">Log Out</a></li>
                                </ul>
                    
                            </li>
                            
                            
                            <?php
                                echo $this->element('side');
                            ?>

                            <li class="widget-container widget_newsletter"><!-- widget -->
                            
                                <h1 class="title-titan">Newsletter SignUp</h1>
                                
                                <form role="search" method="get" class="newsletter-form" action="#">
                                    <div class="input-group">
                                        <input type="text" placeholder="Your e-mail address" autocomplete="off" class="form-control newsletter-form-input" name="email" />
                                        <span class="input-group-btn"><button type="submit" class="btn btn-default">GO!</button></span>
                                    </div>
                                    <span class="help-block">* Enter your e-mail address to subscribe.</span>
                                </form>
                            
                            </li>
                            
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- sidebar wrapper end -->