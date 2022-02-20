
<html>
<head>
	<title>admin log </title>
	<style>
		.nav-link
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
				height:81px;font-size:18px;
			}
		.one
			{
				width:10px;
			}
		.two
			{
				margin-left:165px;
			} 
		body
			{
				background-color:D9F6EA;
				font-family:'Courgette';
			} 
		#form1
				{
				width:750px;
				height:330px;
				background-color:FAF3F6;
				margin:75px auto;padding:10px;border-radius:5%;
				} 
		.loginheading
			{
				font-family:"TIMES NEW ROMAN";font-weight:bold;font-size:30px;
				text-align:center;
			}
		.horizontal{ height:30px;}
			</style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>
<body style="background-color:D9F6EA;">
<?php session_start();
$db_host="localhost";
$db_user ="root";
$db_pass ="";
$db_name ="form";

$con  = mysqli_connect($db_host,$db_user,$db_pass);
mysqli_select_db($con,$db_name);

if($con)
	{
		echo "CONNECTION IS SUCCESS";
	}else
	{
		echo "CONNECTION FAIL";
	}

	$bool=true;
	 if(isset($_POST['submit']))
		{	
			$user = $_POST['user'];
			$password = $_POST['password'];
			$query =mysqli_query($con,"select user,password from admin where user='$user' and password='$password' ");
    
			$rows = mysqli_num_rows($query);
				if($rows == 1){
        
				echo "Login Successfull";
				header('location:admin/index.php');
    }
    else{
        
        echo "Fill in all the correct details";
 				header('location:adminlogin.php');
       }
    mysqli_close($conn);
}	
?>
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
	
	<div id="form1">
	 <form method="post" action="adminlogin.php">
				<p class="loginheading">LOGIN IN</p>
				<div class="form-group " style="margin-left:30px;margin-right:30px;">
					<label>USERNAME</label>
					<input  type="text" name="user" value="" class="form-control">
				</div>
				<div class="form-group"style="margin-left:30px;margin-right:30px;">
					<label>PASSWORD</label>
					<input  type="text" name="password" value="" class="form-control">
				</div > 
				<div class="horizontal"></div>
				<input type="submit" class="btn btn-lg btn-success"style="margin-left:310px;" name="submit">
	</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        
</body>
</html>