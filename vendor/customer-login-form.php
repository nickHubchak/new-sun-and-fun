<?php

session_start();
//var_dump($_SESSION);

if(isset($_SESSION['name-error']))
{
    echo($_SESSION['name-error']);
    $_SESSION['name-error']=null;
}

if(isset($_SESSION['email-error']))
{
    echo ($_SESSION["email-error"]);
    $_SESSION["email-error"]=null;

}


if(isset($_SESSION['registered']))
{
    echo("<br><br>".$_SESSION["registered"]);
    $_SESSION['registered']=null;
}
	if ($_SESSION['customer-loggedin']==True) {
	
header ("Location: http://localhost/new-sun-and-fun/index.php");

	}

	if($_SESSION['customer-credentials']=='Incorrect username and/or password!')
	{
		echo ('<script type="text/javascript">alert("Incorrect username and/or password!");</script>');
		$_SESSION['customer-credentials']="";
	} 

	
	?>
<html lang="en">
    <head>
        <title>Sun N Fun Customer Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" type="image/png" href="http://localhost/new-sun-and-fun\media\Stock-images\yellow_beach-chair-and-umbrella_icon-icons.com_59553.ico"/>
    
        <link rel="stylesheet" type="text/css" href="http://localhost/new-sun-and-fun\vendor\bootstrap\css\bootstrap.min.css">
    
        <link rel="stylesheet" type="text/css" href="http://localhost/new-sun-and-fun\fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    
        <link rel="stylesheet" type="text/css" href="http://localhost/new-sun-and-fun\vendor/animate/animate.css">
    
        <link rel="stylesheet" type="text/css" href="http://localhost/new-sun-and-fun\vendor/css-hamburgers/hamburgers.min.css">
    
        <link rel="stylesheet" type="text/css" href="http://localhost/new-sun-and-fun\vendor/animsition/css/animsition.min.css">
    
        <link rel="stylesheet" type="text/css" href="http://localhost/new-sun-and-fun\vendor/select2/select2.min.css">
        
        <link rel="stylesheet" type="text/css" href="http://localhost/new-sun-and-fun\vendor/daterangepicker/daterangepicker.css">
    
        <link rel="stylesheet" type="text/css" href="http://localhost/new-sun-and-fun\css/util.css">
        <link rel="stylesheet" type="text/css"  href="http://localhost/new-sun-and-fun/admin-site/admin-login-main.css">
    
    </head>
    <body>
        
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method ="post" action="customer-login.php" >
                        <span class="login100-form-title">
                            Customer Sign In
                        </span>
    
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100" type="text" name="customer-username" placeholder="Username">
                            <span class="focus-input100"></span>
                        </div>
    
                        <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                            <input class="input100" type="password" name="customer-password" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>
    
                        <div class="text-right p-t-13 p-b-23">
                        <span class="txt1">
							Not Rigistered? 
						</span>

						<a href="sign-up.html" class="txt2">
							create an account
						</a>
                        </div>
    
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Sign in
                            </button>
                        </div>
    
                        <div class="flex-col-c p-t-170 p-b-40">
                            <span class="txt1 p-b-9">
                                Don’t have an account?
                            </span>
    
                            <a href="http://localhost/new-sun-and-fun/admin-site/contact-supervisor/contact-supervisor-form.html" class="txt3">
                                Contact Support
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        
        
    
        <script src="http://localhost/new-sun-and-fun\vendor/jquery/jquery-3.2.1.min.js"></script>
    
        <script src="http://localhost/new-sun-and-fun\vendor/animsition/js/animsition.min.js"></script>
    
        <script src="http://localhost/new-sun-and-fun\vendor/bootstrap/js/popper.js"></script>
        <script src="http://localhost/new-sun-and-fun\vendor/bootstrap/js/bootstrap.min.js"></script>
    
        <script src="http://localhost/new-sun-and-fun\vendor/select2/select2.min.js"></script>
    
        <script src="http://localhost/new-sun-and-fun\vendor/daterangepicker/moment.min.js"></script>
        <script src="http://localhost/new-sun-and-fun\vendor/daterangepicker/daterangepicker.js"></script>
    
        <script src="http://localhost/new-sun-and-fun\vendor/countdowntime/countdowntime.js"></script>
    
        <script src="http://localhost/new-sun-and-fun\admin-site/admin-login-main.js"></script>
    
    </body>
    </html>