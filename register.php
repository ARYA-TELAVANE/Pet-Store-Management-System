<?php
require_once('link.php');


?>

<html>
	<head>
		<title>PROJECT</title>
		<style>	.nav-link
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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
		<script src="jquery-3.5.1.min.js"></script>
	</head>
	
	<body>
       <?php
			
			
			
			$con = mysqli_connect('localhost','root');
							/* if($con){
				echo "Connection sucess   ";
				}
				else
				{
				echo "Connection fail";
				} */
			mysqli_select_db($con ,'form');
			  if(isset($_POST['create'])){
            
			$Fname = $_POST['Fname'];
			$Lname = $_POST['Lname'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			$confirmpass = $_POST['confirmpass'];
			$address = $_POST['address'];
			$address2 = $_POST['address2'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
			$gender = $_POST['gender'];
			
		

 		$res=mysqli_query($con,"select * from register where email='$email'");

 if (mysqli_num_rows($res) > 0) {

	$row = mysqli_fetch_assoc($res);
	if($email==isset($row['email']))
	{
		echo "email already exists";
	}
}
 else{
			
			 $query ="INSERT INTO register(Fname, Lname, email,phone, password,confirmpass, address, address2, city, state, zip, gender) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmtinsert = $db->prepare($query);
            $result = $stmtinsert->execute([$Fname, $Lname, $email,$phone,$password,$confirmpass,$address,$address2,$city,$state,$zip,$gender]);
            if($result){
				echo "successfully saved";
				$to = $email;
				$subject = 'Form Submission';
				$message = "Name: ".$Fname."\n"."Your registration has been successful"."\n\n";
				$header="From: pet.store.allinone@gmail.com ";
				if(mail($to,$subject,$message,$header)){

					echo " successfully";
				}
				header('Location: login.php');
            }else{
                echo "There was an error while saving the data";
            }
			
	 }
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
	<div>
	<div>
        <form action="register.php" method="POST">
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
				  <input type="text" name="phone" class="form-control bfh-phone" data-country="INDIA" required>
				</div>
				</div>
				<div class="form-row">
				<div class="form-group col-md-6">
				  <label for="password">Password</label>
				  <input type="password"  name="password" class="form-control"  minlength="3" id="password" required>
				</div>
				<div class="form-group col-md-6">
				  <label for="confirmpassword">Confirm Password</label>
				  <input type="password" class="form-control"  minlength="3" id="confirmpassword" required name="confirmpass">
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
			
			<div style="font-family:'Courgette';"><label for="input" name="gender">Gender</label><input name="gender"></div>
			

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