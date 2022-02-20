<html>
<head>
	<title>HOME P AGE</title>
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
		.jumbotron
			{
				background-image:url('julian-schiemann-tWvrUZNEKVs-unsplash.jpg');
				color:#FFFFFF;
			}
		body {
    font-family: "Open Sans", sans-serif;
    margin-top: 200px
}

h2 {
    color: #333;
    text-align: center;
    text-transform: uppercase;
    font-family: "Roboto", sans-serif;
    font-weight: bold;
    position: relative;
    margin: 25px 0 50px
}

h2::after {
    content: "";
    width: 100px;
    position: absolute;
    margin: 0 auto;
    height: 3px;
    background: #ffdc12;
    left: 0;
    right: 0;
    bottom: -10px
}

.carousel {
    width: 650px;
    margin: 0 auto;
    padding-bottom: 50px
}

.carousel .item {
    color: #999;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    min-height: 340px
}

.carousel .item a {
    color: #eb7245
}

.carousel .img-box {
    width: 145px;
    height: 145px;
    margin: 0 auto;
    border-radius: 50%
}

.carousel .img-box img {
    width: 100%;
    height: 100%;
    display: block;
    border-radius: 50%
}

.carousel .testimonial {
    padding: 30px 0 10px
}

.testimonial {
    color: #000000;
    font: Times Roman
}

.carousel .overview {
    text-align: center;
    padding-bottom: 5px
}

.carousel .overview b {
    color: #333;
    font-size: 15px;
    text-transform: uppercase;
    display: block;
    padding-bottom: 5px
}

.carousel .star-rating i {
    font-size: 18px;
    color: #ffdc12
}

.carousel .carousel-control {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: #999;
    text-shadow: none;
    top: 4px
}

.carousel-control i {
    font-size: 20px;
    margin-right: 2px
}

.carousel-control.left {
    left: auto;
    right: 40px
}

.carousel-control.right i {
    margin-right: -2px
}

.carousel .carousel-indicators {
    bottom: 15px
}

.carousel-indicators li,
.carousel-indicators li.active {
    width: 11px;
    height: 11px;
    margin: 1px 5px;
    border-radius: 50%
}

.carousel-indicators li {
    background: #e2e2e2;
    border-color: transparent
}

.carousel-indicators li.active {
    border: none;
    background: #888
}
		.para
			{
				text-align:center;font-size:30px;font-weight:900;font-family:TimesnEw Roman;margin:30px;
			}
			.three
				{
					background-color:#F2F4F4 ;
				}
			.four
				{
					height:30px;
				}
				#footer
				{
					width:100%;height:500px;background-color:#EA275C;
				}	
	</style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
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
	  <a class="btn btn-dark btn-lg my-2 my-sm-0" href="login.php" type="submit">LOGOUT</a>
	  <span class="one"></span>
	  <a class="btn btn-dark btn-lg my-2 my-sm-0" href="register.php" type="submit">REGISTER</a>
    </form>
  </div>
</nav>
	</div>
	<div>
	
<div class="jumbotron">
  <br><br><br>
  <h1 class="display-4">Pets and Products</h1>
  <p class="lead">Pets bring us together.Adopt and buy pets and all their related products<br>We bring the best from the rest</p>
  <br>
  <a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a>
  <br><br><br><br><br>
</div>	
	</div>
	
	<div class="para"> We offer a variety of Pets</div>
	
	<div>
	<div class="container">
	<div class="row">
	<div class="card-deck">
		<div class="card bg-danger mb-3 col-md-6" style="width: 50rem;"><br>
			  <img src="ken-reid-ZRZSmK362Xw-unsplash.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
				<p class="card-title para">Dogs</p>
				<p class="lead">A dog is the only thing on earth that loves you more than you love yourself.</p>
				<a class="btn btn-lg btn-dark two" href="dog.php" role="button">SHOP NOW</a>
			  </div>
			</div>
<div class="card bg-danger mb-3 col-md-6" style="width: 50rem;"><br>
			  <img src="76.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
				<p class="card-title para">Cats</p>	
				<p class="lead">A kitten is in the animal world what a rosebud is in the garden</p>
				<a class="btn btn-lg btn-dark two" href="cat.php" role="button">SHOP NOW</a>

			  </div>
			</div>	
		</div></div></div></div>
		
		
		<div class="para"> We offer a variety of Products</div>
		<div>
		<div class="row">
		<div class="card-deck">
  <div class="card bg-dark mb-3"><br>
    <img src="79.jpg" class="card-img-top" alt="..."><br>
    <div class="card-body text-white">
      <h5 class="card-title" style="text-align:center">PUP KART</h5>
      <p class="card-text lead">All kind of best quality food available on our store.Delicious healthy and tasty just perfect for your pet dog.</p>
	<a class="btn btn-lg btn-danger" href="pupkart.php" role="button">SHOP NOW</a>
    </div>
  </div>
  <div class="card bg-dark mb-3"><br>
    <img src="77.jpg" class="card-img-top" alt="..."><br>
    <div class="card-body text-white">
      <h5 class="card-title" style="text-align:center">MEOW KART</h5>
      <p class="card-text lead">
     All kind of best quality food available on our store.Delicious healthy and tasty just perfect for your pet cat.</p>
	<a class="btn btn-lg btn-danger" href="meowkart.php" role="button">SHOP NOW</a>
    </div>
  </div>
  <div class="card bg-dark mb-3"><br>
    <img src="78.jpg" class="card-img-top" alt="..."><br>
    <div class="card-body text-white">
      <h5 class="card-title" style="text-align:center">SHOP KART</h5>
      <p class="card-text lead"> 
     All kind of best quality accesories available on our store.Just right for your pets.</p>
	<br><a class="btn btn-lg btn-danger" href="kart.php" role="button">SHOP NOW</a>
  </div>
</div>
		
		
		
		</div></div>
		
		<
		<div class="para"> Testimonials</div><br><div class="three four"></div>
		<div class="three">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="item carousel-item active">
            <div class="img-box"><img src="80.jpg" alt=""></div>
            <p class="testimonial">I have bought varioud products for my dog and all were of great quality.I recommend everyone to use these products.I will continue buying great products from this site</p>
            <p class="overview"><b>Arya Telavane</b>Web Developer </p>
            <div class="star-rating"> </div>
        </div>
        <div class="item carousel-item">
            <div class="img-box"><img src="81.jpg" alt=""></div>
            <p class="testimonial">Great website.Always reliable and trustworthy,Bought all food products and they are just amazing.Great quality with perfect quantity.Most trustworthy website found till date.</p>
            <p class="overview"><b>Jayesh Dhanrajani</b>Media Analyst </p>
            <div class="star-rating"> </div>
        </div>
        <div class="item carousel-item">
            <div class="img-box"><img src="82.jpg" alt=""></div>
            <p class="testimonial">Cute pets and great products.Products also have warranty so over all I would rate 5 star.</p>
            <p class="overview"><b>Yashkumar Jain</b>CA</p>
            <div class="star-rating"> </div>
        </div>
    </div> <!-- Carousel controls --> <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-right"></i> </a>
</div></div><br><div id="footer"></div>



		
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>