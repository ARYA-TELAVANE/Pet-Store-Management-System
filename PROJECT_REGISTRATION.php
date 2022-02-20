<?php 
$db_host="localhost";
$db_user ="root";
$db_pass ="";
$db_name ="useraccounts";

$conn = mysqli_connect($db_host,$db_user,$db_pass);
mysqli_select_db($conn,$db_name);

if(isset($_POST['create'])){
            
	$Fname = $_POST['Fname'];
	$Lname = $_POST['Lname'];
	$email = $_POST['email'];
	$mobile_phone = $_POST['mobile_phone'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$gender = $_POST['gender'];
	
$sql="select * from users where email='$email'";

 $res=mysqli_query($conn,$sql);

 if (mysqli_num_rows($res) > 0) {

	$row = mysqli_fetch_assoc($res);
	if($email==isset($row['email']))
	{
		echo "email already exists";
	}

}
else{
	$sql ="INSERT INTO users (Fname, Lname, email, mobile_phone, password, address, address2, city, state, zip, gender) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
	$stmtinsert = $db->prepare($sql);
	$result = $stmtinsert->execute([$Fname, $Lname, $email,$mobile_phone,$password,$address,$address2,$city,$state,$zip,$gender]);
	if($result){
		header('Location:PROJECT_LOGIN.php');
		echo "successfully saved";
	}else{
		echo "There was an error while saving the data";
	}
	}
}
?>

<html>
	<head>
		<title>PROJECT</title>
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
				height:102px;font-size:25px;
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
				background-color:#F5EAEA;
				background-image:url('bharathi-kannan-rfL-thiRzDs-unsplash - Copy.jpg');
				font-family:'Courgette';
			}
		.form-row
			{
				font-family:'Courgette';
			}
		.form-group
			{
				font-family:'Courgette';
			}
		.form-check
			{
				font-family:'Courgette';
			}
		.loginheading
			{
				font-family:"TIMES NEW ROMAN";font-weight:bold;font-size:30px;
				text-align:center;
			}
		#containerone
			{
				width:750px;
				height:750px;
				background-color:#F5EAEA;
				margin:75px auto;padding:10px;border-radius:5%;
			}
		</style>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="jquery-3.5.1.min.js"></script>
	</head>
	
	<body>
        <div>
        <?php
            
            
            ?>
            
        
        
        </div>
		<div>
	<nav class="navbar navbar-expand-lg" style="background-color:#EA275C">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#" style="font-size:41px;">PetStore</a>

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="PROJECT_HOMEPAGE.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="PROJECT_ABOUTUS.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="PROJECT_PETDOG.php">Dog</a>
          <a class="dropdown-item" href="PROJECT_PETCAT.php">Cat</a>
          
        </div>
      </li>
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="PROJECT_PUPKART.php">Pupkart - Dog Food</a>
          <a class="dropdown-item" href="PROJECT_MEOWKART.php">Meowkart- Cat Food</a>
          <a class="dropdown-item" href="PROJECT_KART.php">Shopkart- All accessories</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="PROJECT_2.php">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
		<svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart3" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>
	<span class="one"></span>
	  <a class="btn btn-dark btn-lg my-2 my-sm-0" href="PROJECT_LOGIN_F.php" type="submit">LOGIN</a>
	  <span class="one"></span>
	  <a class="btn btn-dark btn-lg my-2 my-sm-0" href="PROJECT_REGISTRATION.php" type="submit">REGISTER</a>
    </form>
  </div>
</nav>
	</div>
	<div>
        <form action="PROJECT_REGISTRATION.php" method="post">
		  <div id="containerone">
            
			<p class="loginheading">REGISTER NOW</p>
			<form id="basic-form" action="" method="post">
			<div class="form-row">
				<div class="form-group col-md-6">
				  <label for=" firstname">First Name</label>
				  <input type="text" name="Fname" class="form-control"   minlength="3" id=" firstname" onfocus="myFunction(this)" required>
				</div>
				<div class="form-group col-md-6">
				  <label for="lastname">Last Name</label>
				  <input type="text" name="Lname" class="form-control"  minlength="3" id="lastname" required>
				</div>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6" name="email">
				  <label for="email">Email</label>
				  <input type="email" class="form-control" name="email" id="email" required>
				</div>
				<div class="form-group col-md-6">
				  <label for="Phone1">Phone</label>
				  <input type="text" name="mobile_phone" class="form-control bfh-phone" data-country="INDIA" required>
				</div>
				</div>
				<div class="form-row">
				<div class="form-group col-md-6">
				  <label for="password">Password</label>
				  <input type="password"  name="password" class="form-control"  minlength="3" id="password" required>
				</div>
				<div class="form-group col-md-6">
				  <label for="confirmpassword">Confirm Password</label>
				  <input type="password" class="form-control"  minlength="3" id="confirmpassword" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputAddress">Address</label>
				<input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
			  </div>
			  <div class="form-group">
				<label for="inputAddress2">Address 2</label>
				<input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputCity">City</label>
				  <input type="text" name="city" class="form-control" id="inputCity" required>
				</div>
				<div class="form-group col-md-4">
				  <label for="inputState">State</label>
				  <select id="inputState"  name="state" class="form-control">
					<option selected>Choose</option>
					<option>Maharashtra</option>
					<option>Jammu and K</option>
				  </select>
				</div>
				<div class="form-group col-md-2">
				  <label for="inputZip">Zip</label>
				  <input type="text" name="zip" class="form-control" id="inputZip" minlength="6" required>
				</div>
			  </div>
				<div>
			
			<div style="font-family:'Courgette';"><label for="input">Gender</label><input name="gender"></div>
						<!-- Material inline 1 -->
			
					  <div class="form-group" style="margin-top:20px;margin-left:15px;>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" id="gridCheck">
				  <label class="form-check-label" for="gridCheck">
					Accepting all the terms and conditions
				  </label>
				</div>
			  </div>
			  <button type="submit" class="btn btn-primary abutton" name="create" style="margin-top:20px;">Sign in</button>
			</form>
		
		</div>
        </form>                                                                                                
		<script>
		function myFunction(x) {
			x.style.background = "#FABAD2";
		}
		$(".abutton").click(function()
		{
			alert('REGISTRATION IN PROGRESS.PLEASE WAIT FOR SOME TIME');
		})
		// Wait for the DOM to be ready
		$(document).ready(function() {
			$("#basic-form").validate();
		});
	
	$(document).ready(function() {
		$("#basic-form").validate({
    
    rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
	   confirmpassword: {
        required: true,
        minlength: 5
      }
	 inputAddress: {
        required: true,
        minlength: 5
      } 
	inputAddress2: {
		required: true,
		minlength:5
	  }
	 inputZip: {
		required: true,
		minlength:7
	  }
	},
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
	  confirmpassword: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
	  inputAddress:{
        required: "Please provide a valid address as input",
        minlength: "Your password must be at least 5 characters long"
      },
	 inputAddress2:{
        required: "Please provide a valid address as input",
        minlength: "Your password must be at least 5 characters long"
      },
	  inputZip: {
		required: "Please provide a valid Zip",
		minlength: "Please provide correct code"
	  },
      email: "Please enter a valid email address"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
		
		</script>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	</body>
	                                                                                            
</html>