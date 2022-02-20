<?php
	$db_host="localhost";
	$db_user="root";
	$db_pass="";
	$db_name="form";
	$con=mysqli_connect($db_host,$db_user,$db_pass);
	mysqli_select_db($con,$db_name);
	
	
	if(isset($_POST['email'])){
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    
    
    $query=mysqli_query($con,"select email,phone,password from register where email='$email' AND phone= '$phone' AND password = '$password'");
    
    $rows = mysqli_num_rows($query);
    if($rows == 1){
		
		echo "Login Successfull";
		header("location:homepagelogout.php");
    }
    else{
        
        echo "Fill in all the correct details";
	}}
?>
<html>
	<head>
		<title>validation form</title>
		<style type="text/css">
			#form1
				{
				width:500px;
				height:600px;
				background-color:#F5EAEA;
				margin:75px auto;padding:10px;border-radius:5%;
				}	.nav-link
			{
				color:#ffffff;
			}
		.nav-link:hover
			{
				color:#000000;
			}
		.navbar-brand
			{
				color:#ffffff;
			}
		.navbar-brand:hover
			{
				color:#000000;
			}
		.navbar
			{
				height:102px;font-size:18px;
			}
		.one
			{
				width:10px;
			}
		.two
			{
				margin-left:165px;
			}
			.loginheading
			{
				font-family:"TIMES NEW ROMAN";font-weight:bold;font-size:30px;
				text-align:center;
			}
			#design1
				{
					position:relative;margin-left:30px;
					padding:2px;
					align-text:center;
				}
			#design2
				{	
					position:relative;margin-left:30px;
					padding:2px;
					align-text:center;
				}
			#design3
				{
					position:relative;top:30px;left:125px;
					
				}
			
			label
				{
					width:127px;height:20px;position:relative;top:10.725px;padding:3px;float:left;font-size:25px;font-weight:bold;
				
				}
			input
				{
					width:257px;height:45px;padding:10px;margin-left:10px;margin:5px;
				}
			body
				{
			
				background-color:#F5EAEA;
				background-image:url('bharathi-kannan-rfL-thiRzDs-unsplash - Copy.jpg');
				font-family:'Courgette';
				}
			.error1
				{
					width:165px;margin-left:145px;
					height:6.25px;color:#E74C3C ;font-size:13px;
				}
			.error11
				{
					width:165px;margin-left:145px;
					height:6.25px;color:#E74C3C ;font-size:13px;
				}
			.error111
				{
					width:165px;margin-left:145px;
					height:6.25px;color:#E74C3C ;font-size:13px;
				}
			
			img
				{
					width:45px;
					height:45px;
					margin:3px;position:relative;top:23px;
				}
			.green1
				{
					display:none;
				}
			.red1
				{
					display:none;
				}
			.green11
				{
					display:none;
				}
			.red11
				{
					display:none;
				}
			.green111
				{
					display:none;
				}
			.red111
				{
					display:none;
				}
			.aftersignup
				{
					width:150px;margin-left:135px;
					position:relative;top:30px;left:33px;color:#52BE80 ;font-family:robot0 !important;font-size:33px;font-weight:bold;
				
				}
			.signup_completeagain
				{
					color:#E74C3C; 
				}

		</style><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' /><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="jquery-3.5.1.min.js"></script>
		<script src="jquery-3.5.1.min.js"></script>
	</head>
	
	
	
	
	<body>
	<div>
	<nav class="navbar navbar-expand-lg" style="background-color:#EA275C">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#" style="font-size:41px;">PetStore</a>

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="dog.php">Dog</a>
          <a class="dropdown-item" href="cat.php">Cat</a>
          
        </div>
      </li>
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="pupkart.php">Pupkart - Dog Food</a>
          <a class="dropdown-item" href="meowkart.php">Meowkart- Cat Food</a>
          <a class="dropdown-item" href="kart.php">Shopkart- All accessories</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
	 <li class="nav-item" >
          <a class="nav-link" style="margin-bottom:30px;" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="margin-bottom:30px;" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
	<span class="one"></span>
	  <a class="btn btn-dark btn-lg my-2 my-sm-0" href="login.php" type="submit">LOGIN</a>
	  <span class="one"></span>
	  <a class="btn btn-dark btn-lg my-2 my-sm-0" href="register.php" type="submit">REGISTER</a>
    </form>
  </div>
</nav>
	</div>
	<div>
	<div>
		<div id="form1">
            <form method="post" action="login.php">
				<p class="loginheading">LOGIN IN</p>	
				<div id="design1">
					<label for="email1">Email</label>
					<input type="text" name="email" id="email1" placeholder="name.surname@gmail.com">
					<img src="1.jpg" class="green1">
					<img src="2.jpg" class="red1">
				<p class="error1"></p>
				</div>
			
				<div id="design1">
					<label for="Phone1">Phone</label>
					<input type="text" name="phone" id="Phone1" placeholder="0123456789"> 
					<img src="1.jpg" class="green11">
					<img src="2.jpg" class="red11">
					<p class="error11"></p>
				</div>

				<div id="design1">
					<label for="password1">Password</label>
					<input type="password" name="password" id="password1">
					<img src="1.jpg" class="green111">
					<img src="2.jpg" class="red111">
					<p class="error111"></p>
				</div>
				<div id="design2">
				<label for="PasswordConfirm1">Confirm Password</label><input type=	"password" name="passwordConfirm" id="PasswordConfirm1">
				<img src="1.jpg" class="green111"><img src="2.jpg" class="red111">
				<p class="error111"></p>
				</div>
				<div id="design3">
						<input type="submit" class="abutton" value="LOGIN" name="signin">
							
							
				</div>
				<br>
				<div id="design3">
					<a class="btn btn-secondary btn-lg" href="adminlogin.php" role="button" style="margin-left:50px;">ADMIN LOGIN</a>
							
				</div>
					<div class="aftersignup">
				
					<p class="signup_complete"></p>
					
					</div>
                  	
				</div>
            </form>	
		</div>
	
		<script>
			function isEmail(email) 
				{
					var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					return regex.test(email);
				}



			$(".abutton").click(function()
				{
					let errormessage=0;
					if(isEmail($("#email1").val())==false)
						{
							$(".error1").html("email id is not valid");errormessage++;
							$(".red1").show();$(".green1").hide();
							
						}
					else if(isEmail($("#email1").val())==true)
						{
							$(".error1").html("");
							$(".green1").show();$(".red1").hide();
						}

					if($.isNumeric($("#Phone1").val())==false)
						{
							$(".error11").html("phone number is not valid");errormessage++;
							$(".red11").show();$(".green11").hide();
							
						}
					else if($.isNumeric($("#Phone1").val())==true)
						{
							$(".error11").html("");
							$(".green11").show();$(".red11").hide();
						}
					if($("#password1").val()=="" )
						{
							
							$(".red111").show();
						}					
					else if($("#password1").val()!= $("#PasswordConfirm1").val() )
						{	
							$(".error111").html("password is incorrect");errormessage++;
							$(".red111").show().$(".green111").hide();
						}
					else if($("#PasswordConfirm1").val()!= $("#password1").val())
						{
							$(".error111").html("");errormessage++;
							$(".red111").show();
						}
					else if($("#PasswordConfirm1").val()== $("#password1").val())
						{
							$(".error111").html("");
							$(".green111").show();$(".red111").hide();
						}
					if($(".red111").css("display")=="block")
						{
							$(".green111").hide();
						}
					else if($(".green111").css("display")=="block")
						{
							$(".red111").hide();
						}
					if(errormessage == 0)
						{
							$(".signup_complete").html("COMPLETED IT");
						}
					alert('LOGIN DONE SUCCESSFULLY.REDIRECTING TO YOUR PERSONALIZED HOME PAGE');
					})
             rules: {
	                email: {
                        required: true,
                        email: true
                    },
                    phone :"required",
                    password : "required",
                    passwordConfirm : "required"
             };
			
			
		</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        
	<body>
</html>