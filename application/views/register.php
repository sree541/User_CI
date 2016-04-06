
      <div class="top-content">
      	
        <div class="inner-bg">
          <div class="container">
          	
              <!-- <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 text">
                      <h1><strong>Bootstrap</strong> Login &amp; Register Forms</h1>
                      <div class="description">
                      	<p>
                        	This is a free responsive <strong>"login and register forms"</strong> template made with Bootstrap. 
                        	Download it on <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>, 
                        	customize and use it as you like!
                      	</p>
                      </div>
                  </div>
              </div> -->
              
              <div class="row">
                  <div class="col-sm-5">
                  	
                  	<div class="form-box">
                    	<div class="form-top">
                    		<div class="form-top-left">
                    			<h3>Login to our site</h3>
                        		<p>Enter username and password to log on:</p>
                    		</div>
                    		<div class="form-top-right">
                    			<i class="fa fa-lock"></i>
                    		</div>
                        </div>
                        <div class="form-bottom">
	                    <form role="form" action="<?php echo base_url(); ?>index.php/user/login" method="post" class="login-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-username">Email Id</label>
	                        	<input type="text" name="email" placeholder="Username..." class="form-username form-control" id="email">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-password">Password</label>
	                        	<input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="pass">
	                        </div>
	                        <button type="submit" class="btn">Sign in!</button>
	                    </form>
                    </div>
                  </div>
            
                    
                  </div>
                  
                  <div class="col-sm-1 middle-border"></div>
                  <div class="col-sm-1"></div>
                  	
                  <div class="col-sm-5">
                  	
                  	<div class="form-box">
                  		<div class="form-top">
                    		<div class="form-top-left">
                    			<h3>Sign up now</h3>
                        		<p>Fill in the form below to get instant access:</p>
                    		</div>
                    		<div class="form-top-right">
                    			<i class="fa fa-pencil"></i>
                    		</div>
                        </div>
                        <div class="form-bottom">
	                    <form role="form" action="<?php echo base_url(); ?>index.php/user/registration" method="post" class="registration-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-first-name">Username</label>
	                        	<input type="text" name="user_name" placeholder="Username.." class="form-first-name form-control"value="<?php //echo set_value('user_name'); ?>">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-last-name">Name</label>
	                        	<input type="text" name="form-last-name" placeholder="Name..." class="form-last-name form-control" id="form-last-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-email">Email</label>
	                        	<input type="text" name="email_address" placeholder="Email..." class="form-email form-control" id="form-email">
	                        </div>
                                   <div class="form-group">
                                      <label class="sr-only" for="form-email">Password</label>
                                      <input type="text" name="password" value="<?php //echo set_value('password'); ?>" placeholder="Password..." class="form-email form-control" id="form-email">
                                  </div>
                                   <div class="form-group">
                                      <label class="sr-only" for="form-email">Confirm Password</label>
                                      <input type="text" name="con_password" value="<?php //echo set_value('con_password'); ?>" placeholder="Confirm Password..." class="form-email form-control" id="form-email">
                                  </div>
	                    
	                        <button type="submit" class="btn">Sign me up!</button>
	                    </form>
                    </div>
                  	</div>
                  	
                  </div>
              </div>
              
          </div>
        </div>
          
      </div>

       