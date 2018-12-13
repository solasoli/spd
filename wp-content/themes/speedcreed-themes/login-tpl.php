<?php
    /* Template Name: Login Template */ 
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory()?>/css/login-css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
    <div class="columns is-fullheight image-area">
        <div class="column is-8 media is-full image">
    	    <img src="<?php echo get_template_directory_uri(); ?>/img/Log-in-page-SC.png" style="height: 100%;">
          </div>
          <div class="field">
  	<div class="column login-area">
  		<div class="container login-text">
			<h1 class="login1"><strong>Log In</strong></h1>			  			
  		</div>
  		<p class="acc-text">to your account</p>
  		<div class="container login-input">
  			<input class="input" type="email" name="" placeholder="Email address">
  		</div>
  		<div class="container login-input">
  			<input class="input" type="password" name="" placeholder="Password">
  		</div>	
  		<div class="field is-grouped">
  			<div class="control login-button-area">
  				<label class="checkbox">
  					<input class="box-login" type="checkbox">
  						Remember me
				</label><br>
    			<button class="button is-link login-button" type="submit">Submit</button>
  			</div>	
  	</div>
  	</div>
    <div id="login-with" class="container">
      <p class="acc-text-register-from">Or you can register from:</p>
      <span>
      <a class="login-with-icon-facebook" href="#"><i class="fab fa-facebook-f fa-2x" style="color: #000;"></i></a>
      </span>
      <span>
      <a class="login-with-icon-google" href="#"><i class="fab fa-google-plus-g fa-2x" style="color: #000;"></i></a>
      </span>
     
    </div>

    <div class="container">
      <div id="already-have"class="field">
        <p>Don't have an account? <a href="#"><strong>REGISTER HERE</strong></a></p>
      </div>
    </div>
  	
  		
</div>  
    </div>
</body>
<style>
    /*Login - Register - Forgot Password - Check Email Styling Layout*/

html, body{
	margin: 0;
	padding: 0;
	/*overflow-y: hidden;*/

}

.columns:not(:last-child){
		margin-bottom: -0.75rem;
	}

	.column{
		padding-left: 0.75rem;
		padding-right: 0.75rem;
		padding-bottom: 0rem;
	}

a:link    {color:#000;}  /* unvisited link  */
a:visited {color:#000;}  /* visited link    */
a:hover   {color:#000;}  /* mouse over link */
a:active  {color:#000;}  /* selected link   */
/*Login - Register - Forgot Password - Check Email Styling Layout*/

/*Login CSS*/

	.acc-text{
		font-style: italic;
		/*padding-bottom: 80px;*/
		padding-left: 152px;
    	padding-bottom: 50px;
    	margin-left: 91px;
	}

	
    	
    .input{
    	width: 50%;
    	max-width: 50%;
    	border-color: #000;
    	border-radius: 0;
    }

    .button .is-link .login-button{
    	background-color: #000;
    }

    .checkbox{
    	margin-left: 90px;
    padding-bottom: 12px;
    }



    @media screen and (min-width: 1280px) {
    	.container{
    		max-width: 400px;
    		width: 400px;
    	}

    	.acc-text{
		font-style: italic;
		padding-left: 152px;
    	padding-bottom: 50px;
    	margin-left: -9px;
	}

	.login1 {
		padding-left: 152px;
		padding-top: 110px;
		font-size: 27px;

	}
	.input{
    	width: 50%;
    	max-width: 50%;
    	border-color: #000;
    	border-radius: 0;
    	margin-left: 92px;
    	margin-bottom: 10px;
    	text-align: center;		
    }

    .button{
    	background-color: #000 !important;
    	border-radius: 0px;
    	height: 36px;
    	width: 200px;
    	margin-left: 92px;	
    }
	
    .checkbox{
    	margin-left: 90px;
    padding-bottom: 12px;
    }
	
	
	  


	

	.login1 {
		padding-left: 152px;
		padding-top: 110px;
		font-size: 27px;
	}
}

/*End of Login CSS*/

/*Register CSS*/

.acc-text-register{
    	padding-top: 110px;
    	font-style: italic;
    	padding-left: 152px;
    }

.register-text{
	padding-left: 152px;
	font-size: 27px;
	padding-bottom: 20px;

}

#input-register{
	margin-left: 110px;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-top-color: transparent;
	border-left-color: transparent;
	border-right-color: transparent;
	text-align: left;


}

#button-register{
	margin-left: 110px;
	text-transform: uppercase;
	font-weight: bold;
}

.acc-text-register-from{
	padding-top: 110px;
   	font-style: italic;
    padding-left: 120px;
    padding-bottom: 0.75rem;

}

.login-with-icon-facebook{
	padding-left: 177px;
		
}

.login-with-icon-google{
	padding-left: 20px;
}

#already-have{
	padding-top: 110px;
	padding-left: 73px;
}

@media screen and (min-width: 1280px){
	.acc-text-register{
    	padding-top: 110px;
    	font-style: italic;
    	padding-left: 152px;
    }

.register-text{
	padding-left: 152px;
	font-size: 27px;
	padding-bottom: 20px;

}

#input-register{
	margin-left: 110px;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-top-color: transparent;
	border-left-color: transparent;
	border-right-color: transparent;
	text-align: left;


}

#button-register{
	margin-left: 110px;
}

.acc-text-register-from{
	padding-top: 110px;
   	font-style: italic;
    padding-left: 106px;
    padding-bottom: 0.75rem;

}

.login-with-icon-facebook{
	padding-left: 160px;
		
}

.login-with-icon-google{
	padding-left: 20px;
}	
}

/*End of Register CSS*/

/*Forgot Password CSS*/

.forgot-password-text{
	padding-top: 55%;
	padding-left: 22%;
	padding-right: 22%;
	padding-bottom: 20px;
	text-align: center;
	font-size: 18px;
	color: #000;
}

#dont-have-forgot-password{
	padding-top: 235px;
	padding-left: 59px
}

@media screen and (min-width: 1280px){
	
	.forgot-password-text{
	padding-top: 55%;
	padding-left: 22%;
	padding-right: 22%;
	padding-bottom: 20px;
	text-align: center;
	font-size: 18px;
	color: #000;
}

#dont-have-forgot-password{
	padding-top: 235px;
	padding-left: 59px
}	
}

/*End of Forgot Password CSS	*/

/*Check email CSS*/

.check-email-text{
	padding-top: 45%;
	padding-left: 27%;
	padding-right: 25%;
	padding-bottom: 20px;
	font-size: 20px;
	color: #000;

}

.acc-text-check-email{
	text-align: center;
	font-weight: bold;
	padding-bottom: 50px;
	color: #000;
	margin: 15%;

}

#button-check-email{
	margin-left: 119px;
}

@media screen and (min-width: 1280px){
	.check-email-text{
	padding-top: 45%;
	padding-left: 27%;
	padding-right: 18%;
	padding-bottom: 20px;
	font-size: 20px;
	color: #000;

}

.acc-text-check-email{
	text-align: center;
	font-weight: bold;
	padding-bottom: 50px;
	color: #000;
	margin: 15%;

}	
}
/*End of check email css*/
</style>
</html>