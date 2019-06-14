<?php
session_start();
$con=mysqli_connect("localhost","root","","college");
if(!$con)
{
	die("could not connect to mysql");
	
}
if(isset($_POST['login'])) // if($_POST)
{
	$userid=$_POST['email'];
	$pass=$_POST['password'];
	$s="select * from registration where userid='$userid' and password='$pass'";
	$result=mysqli_query($con,$s);
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['user_id']=$userid;
		header('location:profile.php');
	}
	else
	{
		echo "invalid userid or password";
	}
	
}

?>

<html>

    <head>
        
        <title>jQuery</title>
 
        <script type="text/javascript" src="jquery.min.js"></script>
       
        <style type="text/css">
            
            body {

                font-family: helvetica, sans-serif;
                font-size:130%;
background-color:#7FB3D5;
            }

            input {

                padding: 5px 5px 12px 5px;
                font-size: 25px;
                border-radius: 5px;
                border: 1px solid grey;
                width:320px;

                }
            
            label {
                
                position: relative;
                top:12px;
                width:200px;
                float: left;
                
            }
            
            #wrapper {
                
                width: 550px;
                margin: 0 auto;
                
                
            }
            
            .form-element {
                
                margin-bottom: 10px;
                
            }
            
            #submitButton {
                
                width: 130px;
                margin-left: 200px;
            }
            
            #errorMessage {
                
                color: red;
                font-size: 90% !important;
                
            }
            
            #successMessage {
                
                color: green;
                font-size: 90% !important;
                display:none;
                margin-bottom:20px;
                
            }
			
			#hi{
			color:white;
			padding:5px;
			margin-left:400px;
			}
            
        </style>
     
    </head>

    <body>
	
	<h1 id="hi"> STUDENTS ENTRANCE</h1>
	
        
        <div id="wrapper">
            <form action="" method="post">
            <div id="successMessage">You've done it! Congratulations.</div>
            
            <div id="errorMessage"></div>
            
            <div class="form-element">
        
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder = "eg. yourname@gmail.com">
                
                </div>
            
           
            
            <div class="form-element">
            
                <label for="password">Password</label>
                <input type="password" name="password" id="password">

            </div>
            
          
            
             <div class="form-element">
            
                <input type="submit" name="login" id="submitButton" value="Sign Up"/>

            </div>
            </form>
        </div>
        
        <script type="text/javascript">
            
            function isEmail(email) {
  
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
                return regex.test(email);
                
            }
            
            $("#submitButton").click(function() {
                
                var errorMessage = "";
                var fieldsMissing = "";
                
                if ($("#email").val() == "") {
                    
                    fieldsMissing += "<br>Email";
                    
                }
                
                if ($("#phone").val() == "") {
                    
                    fieldsMissing += "<br>Telephone";
                    
                }
                
                if ($("#password").val() == "") {
                    
                    fieldsMissing += "<br>Password";
                    
                }
                
                if ($("#passwordConfirm").val() == "") {
                    
                    fieldsMissing += "<br>Confirm Password";
                    
                }
                
                if (fieldsMissing != "") {
                    
                    errorMessage += "<p>The following field(s) are missing:" + fieldsMissing;
                    
                }
                
                if (isEmail($("#email").val()) == false) {
                    
                    errorMessage += "<p>Your email address is not valid</p>";
                    
                }
                
                if ($.isNumeric($("#phone").val()) == false) {
                    
                    errorMessage += "<p>Your phone number is not numeric</p>"
                    
                }
                
                if ($("#password").val() != $("#passwordConfirm").val()) {
                    
                    errorMessage += "<p>Your passwords don't match</p>";
                    
                }
                
                if (errorMessage != "") {
                    
                    $("#errorMessage").html(errorMessage);
                    
                } else {
                    
                    $("#successMessage").show();
                    $("#errorMessage").hide();
                    
                }
                
            });
            
            
        </script>
        
    </body>

</html>