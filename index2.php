<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>dogfood</title>
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
				height:81px;font-size:21px;
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
				background-image:url('nathalia-rosa-rWMIbqmOxrY-unsplash.jpg');
				text-align:center;
			}
		.align
			{
				text-align:center;
			}
		.card
		{
		 transition: box-shadow .3s;
			  width: 300px;
			  height:600px;
			  margin: 50px;
			  border-radius:10px;
			  border: 1px solid #ccc;
			  background: #fff;
			  float: left;
		}
		.card:hover
		{
		box-shadow: 0 0 11px rgba(33,33,33,.2);
		background-color:#FFEAE4;
		}
	#footer
				{
					width:100%;height:500px;background-color:#EA275C;
				}	
  
  </style>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
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
	 <li class="nav-item">
          <a class="nav-link" href="checkout.php" style="font-size:21px;"><i class="fas fa-money-check-alt fa-lg" style="margin-bottom:35px"></i>Checkout</a>
        </li>

		<li class="nav-item">
           <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart fa-md" style="margin-bottom:35px"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
	<span class="one"></span>
	  <a class="btn btn-dark btn-lg my-2 my-sm-0" href="login.php" type="submit">LOGIN</a>
	  <span class="one"></span>
	  <a class="btn btn-dark btn-lg my-2 my-sm-0" href="register.php" type="submit">REGISTER</a>
    </form>
  </div>
</nav>
	</div>
  <!-- Navbar start -->
  
  <!-- Displaying Products Start -->
  <div >
    <div id="message"></div>
	
    <div>
	
	<div class="row">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-lg-3 col-md-3 col-sm-12 ">
		<form>
       <div class="card" id="cart" style="width: 18rem;">
			  <img src="<?= $row['product_image'] ?>" class="card-img-top" alt="..." height="225px">
		<div class="card-body">
				<h5 class="card-text" onmouseover="style.color='#BB2B2B'" onmouseout="style.color='#231A1A'"> <? echo $row['product_name'] ?> </h5>
				<p class="card-text" style="font-size:18px;"><b><?php echo $row['product_name'] ?></b></p>
				<p class="card-text"><?php echo $row['description'] ?></p><b>PRICE: &#8377 <?php echo $row['product_price'] ?></b>
			
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value=" ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
				<input type="hidden" class="description" value="<?= $row['description'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
				<div class="card-body">
			
               <button class="btn btn-danger btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button></div>
              </form>
            </div>
          </div></form>
       
      </div>
      <?php endwhile; ?>
    </div>
  
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>