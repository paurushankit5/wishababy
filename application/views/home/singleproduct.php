<?php
	$cat	=	$array['cat'];
	$singlecat	=	$array['singlecat'];
	$product	=	$array['product'];
?>
 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $product['product_title'];?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= $product['product_keyword'];?>" />
	<meta name="keywords" content="<?= $product['product_description'];?>" />
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
	<link rel="stylesheet" href="<?= base_url('assets/front/');?>css/smoothproducts.css">
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
	 <ol class="breadcrumb pull-right" style="font-size:12px;">
	  <li class="breadcrumb-item"><a href="<?= base_url();?>">Home</a></li>
	  <li class="breadcrumb-item"><a href="<?= base_url('store');?>">Store</a></li>
	  <li class="breadcrumb-item"><a href="<?= base_url('store/'.$singlecat['cat_slug']);?>"><?= $singlecat['cat_name'];?></a></li>
	  <li class="breadcrumb-item active"><?= $product['product_name'];?></li>
	</ol>
	<div class="container-fluid" style="background-color:;">
		<div class="col-sm-3 page" style="padding-top:80px;">
			<div class="sp-loading"><img src="<?= base_url('img/demo/');?>sp-loading.gif" alt=""><br>LOADING IMAGES</div>
			<div class="sp-wrap" style="width:100%;">
				<?php
					if($product['product_img1']!='')
					{
						?>
						<a href="<?= base_url('img/pro/'.$product['product_id'].'/a/'.$product['product_img1']);?>"> 
						<img src="<?= base_url('img/pro/'.$product['product_id'].'/a/'.$product['product_img1']);?>" alt="" /> 
						</a>
						<?php
					}
					if($product['product_img2']!='')
					{
						?>
						<a href="<?= base_url('img/pro/'.$product['product_id'].'/b/'.$product['product_img2']);?>"> 
						<img src="<?= base_url('img/pro/'.$product['product_id'].'/b/'.$product['product_img2']);?>" alt="" /> 
						</a>
						<?php
					}
					if($product['product_img3']!='')
					{
						?>
						<a href="<?= base_url('img/pro/'.$product['product_id'].'/c/'.$product['product_img3']);?>"> 
						<img src="<?= base_url('img/pro/'.$product['product_id'].'/c/'.$product['product_img3']);?>" alt="" /> 
						</a>
						<?php
					}
					if($product['product_img4']!='')
					{
						?>
						<a href="<?= base_url('img/pro/'.$product['product_id'].'/d/'.$product['product_img4']);?>"> 
						<img src="<?= base_url('img/pro/'.$product['product_id'].'/d/'.$product['product_img4']);?>" alt="" /> 
						</a>
						<?php
					}
					if($product['product_img5']!='')
					{
						?>
						<a href="<?= base_url('img/pro/'.$product['product_id'].'/e/'.$product['product_img5']);?>"> 
						<img src="<?= base_url('img/pro/'.$product['product_id'].'/e/'.$product['product_img5']);?>" alt="" /> 
						</a>
						<?php
					}
					if($product['product_img6']!='')
					{
						?>
						<a href="<?= base_url('img/pro/'.$product['product_id'].'/f/'.$product['product_img6']);?>"> 
						<img src="<?= base_url('img/pro/'.$product['product_id'].'/f/'.$product['product_img6']);?>" alt="" /> 
						</a>
						<?php
					}
					
				 ?>
			</div>
		</div>
		<div class="col-sm-6" style="padding:30px;">
			<h2 style='font-family: "Goudy Old Style",Garamond,"Big Caslon","Times New Roman",serif;color:#3f5267;'>
			<b><?= ucwords($product['product_name']);?></b>
			</h2>
			<p style='color:#3f5267;font-size:12px;margin-top:-10px;'>
				PRODUCT REFERENCE NUMBER: <b><?= $product['product_ref_no'];?></b>
				


			</p>
			<div class="row" style="margin-bottom:0px;">
				<div class="col-sm-4">
					<b style="font-size:40px;">Rs. <?= $product['product_price']; ?></b>
				</div>
				<div class="col-sm-4">
					<div class="input-group pull-right">
					  <span class="input-group-btn">
						<button class="btn btn-danger" onClick="decr();" type="button">-</button>
					  </span>
					  <input type="text" id="cart_unit" style="height:41px;margin-top:1px;" readonly class="form-control" value="1">
					  <span class="input-group-btn">
						<button class="btn btn-primary" onClick="incr();" type="button">+</button>
					  </span>
					</div>
				</div>
				<div class="col-sm-4">
					<?php
						if(isset($_COOKIE['wish_user_id']))
						{
							?>
								<button class="btn btn-primary" onClick="addcart('<?= $product['product_id'];?>');" style="background:#337ab7;">Add To Cart</button>
							<?php
						}
						else
						{
							?>
								<button class="btn btn-primary" data-toggle="modal" data-target="#loginmodal" style="background:#337ab7;">Add To Cart</button>
							<?php
						}
					?>
				</div>
			</div>
				
			<span class="text text-justify" style="font-size:14px !important;">
				<?= $product['product_details'];?>
			</span>
			<a href="javascript:fbshareCurrentPage()" style="background-color:#4267b2;" target="_blank" class="btn btn-success" alt="Share on Facebook"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a> 
			<a class="tweet btn btn-success" style="background-color:#3f5267;" href="javascript:tweetCurrentPage()" target="_blank"  alt="Tweet this page"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
			<script language="javascript">
				function fbshareCurrentPage()
				{window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 
				'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
				return false; }
			 
				function tweetCurrentPage()
				{ window.open("https://twitter.com/share?url="+escape(window.location.href)+"&text="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false; }
			</script>
 		</div>
		<div class="col-sm-3">
			<div class="pricing" style="margin-top:50px;border-radius:5px;background-image:url(<?= base_url('assets/front/sidebar/sidebar-1.jpg');?>);background-size:cover;width:100%; width: 100%;">
				<div class="">
					<div class="price-box popular" style="text-align:left;">
						<ul class="nav nav-pills nav-stacked" style="font-size:14px;padding:20px;">
							<?php
								if(count($cat))
								{
									foreach($cat as $x)
									{
										?>
										<li  <?php if($x['cat_id']==$product['cat_id']){echo "class='active'";}?>><a style='color:white;' href="<?= base_url('store/'.$x['cat_slug']);?>"><?= $x['cat_name'];?></a></li>
										<?php
									}
								}
							?>										 
						  </ul>
					</div>
				</div>						
			</div>
		</div>
		 
		
	</div>
			
	 
 
	<?php
		include('includes/footer.php');
	?>
	<script src="<?= base_url('assets/front/');?>js/jquery-2.1.3.min.js"></script>
	<script src="<?= base_url('assets/front/');?>js/smoothproducts.min.js"></script>
	<script type="text/javascript">
	/* wait for images to load */
	$(window).load(function() {
		$('.sp-wrap').smoothproducts();
	});
	function incr()
	{
		var cart_unit	=	$('#cart_unit').val();
		if(cart_unit>=1 && cart_unit<20)
		{
			cart_unit++;
			$('#cart_unit').val(cart_unit);
		}		
	}
	function decr()
	{
		var cart_unit	=	$('#cart_unit').val();
		if(cart_unit>1)
		{
			cart_unit--;
			$('#cart_unit').val(cart_unit);
		}		
	}
	 function addcart(cart_product_id)
	 {
		 var cart_unit	=	$('#cart_unit').val();
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
	 
	</body>
</html>

