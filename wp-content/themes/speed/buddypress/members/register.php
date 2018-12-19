<div id="buddypress" class="columns is-fullheight image-area">
    <div class="column is-8 media is-full image">
    <img src="<?php echo get_bloginfo('template_directory')?>/images/Log-in-page-SC.png" style="height: 100%;">
    </div>
    <div class="field">
        <!-- buddypress code register function -->
        
        <form action="" name="signup_form" id="signup_form" class="standard-form" method="post" enctype="multipart/form-data">
        <?php

			/**
			 * Fires before the display of member registration account details fields.
			 *
			 * @since 1.1.0
			 */
			do_action( 'bp_before_account_details_fields' ); ?>
        <div class="column login-area">
            <div class="container login-text">
                 <p class="acc-text-register">Not a member yet?</p>
			    <h1 class="register-text"><strong>REGISTER</strong></h1> 
            </div>
            
            
            <div class="container form-register">
                <input id="input-register" class="input" type="text" name="signup_username" placeholder="Username" value="<?php bp_signup_username_value(); ?>"/>
            </div>
  		    <div class="container form-register">
  			    <input id="input-register" class="input" type="email" name="signup_email" placeholder="Email address" value="<?php bp_signup_email_value();?>" />
  		    </div>
  		    <div class="container input-register">
  			    <input id="input-register"class="input" type="password" name="signup_password" placeholder="Password" <?php bp_form_field_attributes( 'password' ); ?>/>
                  <div id="pass-strength-result"></div>  
            </div>
            <div class="container input-register">
                <input id="signup_password_confirm" class="input password-entry-confirm" type="password" name="signup_password_confirm" <?php bp_form_field_attributes( 'password' ); ?> />
            </div>	
  		    <div class="field is-grouped">
  			    <div class="control login-button-area">
  				
    			<button id="button-register" class="button is-link login-button" type="submit">Submit</button>
              </div>
              <!-- end of buddypress code register function -->
        </div>
        </form>
    </div>
</div>