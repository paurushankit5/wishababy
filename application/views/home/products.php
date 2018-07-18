<?php
	$cat	=	$array['cat'];
	$singlecat	=	$array['singlecat'];
	$products	=	$array['products'];
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $singlecat['cat_title'];?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= $singlecat['cat_description'];?>" />
	<meta name="keywords" content="<?= $singlecat['cat_keyword'];?>" />
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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		.parallax { 
   
   

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.homeservice{
			border:2px solid gray;
			border-radius:20px;
			height:290px;
			margin:10px;
			margin-bottom:40px;
			padding:10px;
			box-shadow: 20px 20px 15px #888888;
		}
		.homeservice h3{
			font-size:25px;
		}
		
 	</style>
	</head>
	<body>
	<?php
		include('includes/header.php');
		include('includes/header2.php');
	?>
	 
			
	<section id="fh5co-pricing" data-section="pricing" style="margin-top:0px;padding-top:0px;">
		
		<div class="fh5co-pricing"  style="background-color:white;margin-top:0px;">
			<div class="container-fluid">
			
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						 <ol class="breadcrumb pull-right" style="font-size:12px;">
						  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
						  <li class="breadcrumb-item"><a href="<?= base_url('store');?>">Store</a></li>
						  <li class="breadcrumb-item active"><?= $singlecat['cat_name'];?></li>
						</ol>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate" style="font-size:30px;"><?= $singlecat['cat_name'];?> </h3>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row"  style="width:100%;">
					<div class="col-md-2" style="padding:0px;padding-left:1px;font-size:12px;">
						 <div class="mini-submenu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</div>
						
						<div class="list-group">
							<span href="#" class="list-group-item active">
								Category
								<span class="pull-right" id="slide-submenu">
									<i class="fa fa-times"></i>
								</span>
							</span>
							<?php
								if(count($cat))
								{
									foreach($cat as $x)
									{
										?>
											<span href="#" class="list-group-item ">
												<?= $x['cat_name'];?>
												<span class="pull-right" id="slide-submenu">
													 
													<input type="checkbox" name="cat_filter_id[]" class="checkclass" value="<?= $x['cat_id'];?>" />
												</span>
											</span>
										<?php
									}
								}
							?>
						</div> 
						<div class="list-group">
							<span href="#" class="list-group-item active">
								Price Range
								 
							</span>
							<span href="#" class="list-group-item ">
								 <div class="input-group">
									 
									<input id="donate-slider" type="range" class="form-control" min="50" max="10000" value="5000">
									 
								</div>
							</span>
							<span href="#" style="font-size:16px;"  class="list-group-item">
								<b>Rs.<span id="donate-text"> 5000</span></b>
								 
							</span>
							<span href="#"   class="list-group-item">
								<button class="btn btn-success btn-sm btn-block" onClick="applyfilter();"> Apply Filters</button>
							</span>
							
							<script>
						// Adjust the value and glyphicon based on the value
								document.getElementById('donate-slider').addEventListener('input', function() {
									var ammount = this.value
									document.getElementById('donate-text').innerHTML = ammount
								});
							</script>
						</div> 
						 
					</div>
					<div class="col-md-10" style="padding:0px;" >
						<div class="pricing" id="prodductlisttable" >
							<?php
								if(count($products))
								{
									$i=0;									
									foreach($products as $x)
									{
										if($i%3==0)
										{
											echo "<div class='row'>";
										}
										$i++;
										?>
											<div class="col-md-4" style="padding-left:40px;">
												<div class="price-box  popular" style="min-height:460px;">
													<h2 class="pricing-plan pricing-plan-offer">	<?= $x['product_name'];?></h2>
													<img style="width:100%;height:200px;" class="img-reponsive img-circle" src="<?= base_url('img/pro/'.$x['product_id'].'/a/'.$x['product_img1']);?>" alt="<?= $x['product_name'];?>">
													 
													<span style="font-size:22px;"><b> Rs.<?= $x['product_price'];?></b></span>
													 <br>
													 <br>
													 <div class="col-sm-12" style="padding:5px;">
														 <a href="<?= base_url('store/'.$singlecat['cat_slug'].'/'.$x['product_slug']);?>" 
													 style="background:green;" class="btn btn-success btn-select-plan btn-sm  btn-block">Details</a>
													 
													 
														<button onClick="addcart('<?= $x['product_id'];?>')" class="btn btn-select-plan btn-sm btn-block">Add to Cart</button>
													 </div>
												</div>
											</div>
										<?php
										if($i%3==0)
										{
											echo "</div>";
										}
									}
								}
							?>
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
		function applyfilter(){
			/* declare an checkbox array */
			var chkArray = [];
			
			/* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
			$(".checkclass:checked").each(function() {
				chkArray.push($(this).val());
			});
			 
			var price	=	$('#donate-slider').val();
			 
			$.ajax({
				type		:	'POST',
				data		:	'price='+price+'&cat='+chkArray,
				url			:	'<?= base_url('home/applyfilter');?>',
				beforeSend	:	function(){
									$('#prodductlisttable').html('<i class="fa fa-spinner fa-spin fa-2x" style="font-size:24px"></i>');
								},
				success		:	function(data){
									//alert(data);
									$('#prodductlisttable').html(data);
								},
			});
		} 
		 function addcart(cart_product_id)
		 {
			 var cart_unit	=	1;
			 $.ajax({
				 type	:	"POST",
				 url	:	"<?= base_url('cart/addtocart');?>",
				 data	:	'cart_product_id='+cart_product_id+'&cart_unit='+cart_unit,
				 success:	function(data){
							alert(data);
				 }
			 });
		 }
	</script>
	</body>
</html>

