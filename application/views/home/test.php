<?php
	$cat		=	$array['cat'];
	$singlesubmenu	=	$array['singlesubmenu'];
	$menu	=	$array['menu'];
	if(count($menu))
	{
		$i=	0;
		foreach($menu as $x)
		{
			//echo $x['menu_id']."<br>";
			if($x['menu_id']	==	$singlesubmenu['submenu_menu_id'])
			{
				$j	=	$i;
			}
			$i++;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $singlesubmenu['submenu_title'];?></title>
		<meta name="description" content="<?=   $singlesubmenu['submenu_description']; ?>">
		<meta name="keywords" content="<?= $singlesubmenu['submenu_keyword']; ?>">
     
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/fonts/fonts.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/select2.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/gray.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/buttons.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/style.css">
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/media-queries.css">
		<link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/list.css">

        <link rel="shortcut icon" href="<?= base_url('assets/front');?>/assets/img/logo2.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/front/');?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/front/');?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets/front/');?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/front/');?>assets/ico/apple-touch-icon-57-precomposed.png">
	 
		<script src="<?= base_url('assets/front/');?>assets/js/jquery-1.10.2.min.js"></script>

        <style>
			#product:hover , #advertise1:hover
			{
				box-shadow: 0 0 10px rgba(0,0,0,0.6);
				-moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
				-webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
				-o-box-shadow: 0 0 10px rgba(0,0,0,0.6);
			}
		</style>
        
    </head>

    <body>

		<?php
			include('includes/header.php');
			include('includes/header2.php');
		?>
		
		<div class="container">
        <ol class="breadcrumb pull-right">
			
		  <li class="breadcrumb-item"><a href="<?= base_url();?>"><b>Home</b></a></li>
		  
		  <li class="breadcrumb-item active"><b><?= $singlesubmenu['submenu_name'];?></b></li>
		  
		</ol>
		</div>
		<div class="services-containe" style="text-align:left;">
	        <div class="container-fluid">
				
	            <div class="row">
	           <div class="col-sm-3" style="margin-bottom:100px;">
					<ul class="nav nav-pills nav-stacked">
						 
							<li  class="active" style="border:1px solid gray;border-radius:4px;"><a href="#"><b><?= $menu[$j]['menu_name'];?></b></a></li>
						 <?php
						 
							if(count($menu[$j]['submenu']))
							{
								foreach($menu[$j]['submenu'] as $y)
								{
									?>
										 <li <?php if($y['submenu_id']==$singlesubmenu['submenu_id']){echo "class='active'";} ?>  style="border:1px solid gray;border-radius:4px;"><a href="<?= base_url('wish/'.$menu[$j]['menu_slug'].'/'.$y['submenu_slug']);?>"><b><?= $y['submenu_name'];?></b></a></li>
						
									<?php
								}
							} 
						 						 
					  ?>
					 </ul>
					 
				</div>
	            <div class="col-sm-9">
					<div class="contact-us">
					<h2 style="font-size:45px;"><?= $singlesubmenu['submenu_name'];?></h2>
					<hr>
					</div>
					<?php
						echo $singlesubmenu['submenu_content'];
					?>
					<br>
					<br>
				</div>
					
	                
	              
				</div>
        </div>
        </div>
        
		 

	  
		 
	<?php
		include('includes/footer.php');
	?>
     
		<script src="<?= base_url('assets/front/');?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/masonry.pkgd.min.js"></script>
        <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/select2.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/jquery.gray.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?= base_url('assets/front/');?>assets/js/scripts.js"></script>
     

    </body>

</html>

