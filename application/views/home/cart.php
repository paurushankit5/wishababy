<?php
	$cart	=	$array['cart'];
 
	 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Wishababy.com" />

  
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/owl.theme.default.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/list.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/new.css">
	<link rel="shortcut icon" href="<?= base_url('img/logo2.png');?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Modernizr JS -->
	<script src="<?= base_url('assets/front/');?>js/modernizr-2.6.2.min.js"></script>
	 
	<style>
		.navbar-default .navbar-nav > li.dropdown:hover > a, 
		.navbar-default .navbar-nav > li.dropdown:hover > a:hover,
		.navbar-default .navbar-nav > li.dropdown:hover > a:focus {
			background-color: rgb(231, 231, 231);
			color: rgb(85, 85, 85);
		}
		li.dropdown:hover > .dropdown-menu {
			display: block;
		}
		 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.homeservice{
			border:2px solid gray;
			border-radius:20px;
			height:auto;
			margin:10px;
			margin-bottom:40px;
			padding:10px;
			box-shadow: 10px 10px 5px #888888;
		}
		.homeservice h3{
			font-size:25px;
		}
		#fh5co-explore{
			padding:0px;
		}
 	</style>
	</head>
	<body>
	<?php
		include('includes/header.php');
		include('includes/header2.php');
	?>
	 
	<section id="fh5co-explore" data-section="explore">
		<div class="container-fluid">
		 
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<ol class="breadcrumb pull-right" style="font-size:12px;">
						  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
						  <li class="breadcrumb-item active">Cart</li>
					</ol>
					<div class="clearfix"></div>
					<h2 class="to-animate">Cart</h2>
					 <div class="container-fluid">
						<div class="row">					 
							 <div class="col-sm-8 col-sm-offset-2">
								<table class="table table-responsive table-striped" style="font-size:14px;">
									<thead>
										<tr style="background:#3f5267;color:white;">
											<th class="hidden-xs">#</th>
											<th>Product Name</th>
											<th class="hidden-xs">Unit Price</th>
											<th	>Units</th>
											<th>Price</th>
											<th>Delete</th>
											
										</tr>
									</thead>
									<tbody class="text-left">
									<?php
										if(count($cart))
										{
											$j=0;
											$total	=	0;
											foreach($cart as $x)
											{
												?>
													<tr>
														<td class="hidden-xs"><?= ++$j; ?></td>
														<td><?= $x['product_name']; ?></td>
														<td class="hidden-xs">Rs. <?= $x['product_price']; ?></td>
														<td>
															 <select onChange='updatecart(this.value,"<?= $x['cart_id'];?>");'>
																<?php
																	for($i=1;$i<=20;$i++)
																	{
																		?>
																		<option <?php if($i==$x['cart_unit'])echo "selected"; ?>><?= $i; ?></option>
																		<?php
																	}
																?>
															 </select>
														</td>
														<td>Rs. <?= $x['product_price']*$x['cart_unit']; ?></td>
														<td><a href="<?= base_url('cart/deletecart/'.$x['cart_id']);?>" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></a></td>
														
													</tr>
												<?php
												$total	+=	$x['product_price']*$x['cart_unit']; 
											}
											?>
											<tr>
												<th colspan="6">
													<span class="pull-right">
													Total: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													Rs. <?= $total;?>
													<a href="#" class="btn btn-success" style="padding:20px 20px;border-radius:0px;">Proceed to Checkout</a>
													</span>
												</th>
											</tr>
											<?php
										}
										else
										{
											?>
											<tr>
												<th colspan="6">No items found in your cart.</th>
											</tr>
											<?php
										}
									?>
									</tbody>
								</table>
							 </div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>
	 
	 

	 
	<?php
		include('includes/footer.php');
	?>
	
	 
	
	<!-- jQuery -->
	<script src="<?= base_url('assets/front/');?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?= base_url('assets/front/');?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url('assets/front/');?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?= base_url('assets/front/');?>js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?= base_url('assets/front/');?>js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="<?= base_url('assets/front/');?>js/owl.carousel.min.js"></script>
	 
	<script src="<?= base_url('assets/front/');?>js/main.js"></script>
	<script>
		function updatecart(cart_unit,cart_id)
		{
			$.ajax({
				type	:	'POST',
				url		:	"<?= base_url('cart/updatecart');?>",
				data	:	'cart_unit='+cart_unit+'&cart_id='+cart_id,
				success	:	function(data)
				{
					location.reload();
				}
			});
		}
	</script>	 
		 
		 
		 
	</body>
</html>

