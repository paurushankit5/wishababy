<?php
	 
	$menu	=	$array['menu'];
	$cat	=	$array['cat'];
	 
?>
 
 
 
<header role="banner" id="fh5co-header">
		<div class="fluid-container">
			<nav class="navbar navbar-default" style="background:#3f5267;">
				 
				<div id="" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right" style="font-size:14px; font-family: 'PT Sans', Arial, serif;">
						 <?php
						if(count($menu))
						{
							foreach($menu as $x)
							{
							if($x['menu_top']=='1')
								{	
								?>									 
									<li class="dropdown">
									  <a class="external" style="color:white;" href='<?= base_url('wish/'.$x['menu_slug']);?>'><b><?= $x['menu_name'];?></b></a>
											<?php
												if(count($x['submenu']))
												{
													?>
													<ul class="dropdown-menu"> 
													<?php
													foreach($x['submenu'] as $y)
													{
														?>
															<li class="dropdown">
																<a  class="external" href='<?= base_url('wish/'.$x['menu_slug'].'/'.$y['submenu_slug']);?>'><b><?= $y['submenu_name'];?></b></a>
																<?php
																	if(count($y['nestedmenu']))
																	{
																		?>
																		<ul class="dropdown-menu" style=" right: 100%;  top: 0;"> 
																			<?php
																				foreach($y['nestedmenu'] as $z)
																				{
																					?>
																					<li>	
																						<a  class="external" href='<?= base_url('wish/'.$x['menu_slug'].'/'.$y['submenu_slug'].'/'.$z['nest_slug']);?>'><b><?= $z['nest_name'];?></b></a>
																					</li>
																					<li class="divider"></li>
																				<?php
																				}
																			?>
																		</ul>
																		<?php
																	}
																?>
															</li>
															<li class="divider"></li>
														<?php
													}
													?>
													 </ul>
													<?php
												}
											?>
										 
										  
									</li>
								<?php
							}
							}
						}
					?>
					  
						 
						 
					</ul>
				</div>
			</nav> 
			<nav class="navbar navbar-default"  style="border-bottom:3px solid #3f5267;">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="<?= base_url();?>"><img style="width:auto;height:auto;margin-top:-25px;" class="img img-responsive logo" src="<?= base_url('img/logo.png');?>"/></a> 
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class=""><a href="<?= base_url();?>" class="external"><span><b>Home</b></span></a></li>
						 <?php
						if(count($menu))
						{
							foreach($menu as $x)
							{
								
								?>									 
									<li class="dropdown  <?php if($x['menu_top']=='1'){ echo 'hidden-sm hidden-lg hidden-md';}?> " >
									  <a class="external" href='<?= base_url('wish/'.$x['menu_slug']);?>'><b><?= $x['menu_name'];?></b></a>
											<?php
												if(count($x['submenu']))
												{
													?>
													<ul class="dropdown-menu"> 
													<?php
													foreach($x['submenu'] as $y)
													{
														 ?>
															<li class="dropdown">
																<a  class="external" href='<?= base_url('wish/'.$x['menu_slug'].'/'.$y['submenu_slug']);?>'><b><?= $y['submenu_name'];?></b></a>
																<?php
																	if(count($y['nestedmenu']))
																	{
																		?>
																		<ul class="dropdown-menu" style=" left: 100%;  top: 0;"> 
																			<?php
																				foreach($y['nestedmenu'] as $z)
																				{
																					?>
																					<li>	
																						<a  class="external" href='<?= base_url('wish/'.$x['menu_slug'].'/'.$y['submenu_slug'].'/'.$z['nest_slug']);?>'><b><?= $z['nest_name'];?></b></a>
																					</li>
																					<li class="divider"></li>
																				<?php
																				}
																			?>
																		</ul>
																		<?php
																	}
																?>
															</li>
															<li class="divider"></li>
														<?php
													}
													//to manually put clinic and expert near you tabs
													if($x['menu_id']=='10')
													{
														?>
															<li><a  class="external" href="<?= base_url('Consult-An-Expert/Expert-Directory');?>"><b>Find an IVF Expert near you</b></a></li>
															<li class="divider"></li>
															<li><a  class="external" href="<?= base_url('findaclinic');?>"><b>Find an IVF Clinic near you</b></a></li>
															<li class="divider"></li>
															<li><a href="#" class="external"  data-toggle="modal" data-target="#searchbyname"><b>Search Clinic/Expert By Name</b></a></li>
															<li class="divider"></li>

														<?php
													}
													?>
													 </ul>
													<?php
												}
												
											?>
										 
										  
									</li>
								<?php
								
							}
							
						}
					?>
						<?php
							/*if(count($cat))
							{
								?>
								<li class="dropdown">
								  <a class="external" href="<?= base_url('store');?>" class="dropdown-toggle"><b>Store</b> <b class="caret"></b></a>
								  <ul class="dropdown-menu">								 
									<?php
									foreach($cat as $x)
									{
										?>									 
										<li><a class="external" href="<?= base_url('store/'.$x['cat_slug']);?>"><b><?= $x['cat_name'];?></b></a></li>
										<li class="divider"></li>
										<?php
									}
									?>
									</ul>
								</li>
								<?php
							}*/
						?>
						<li><a class="external" href="<?= base_url('blogs');?>"><b>Blogs</b></a></li>
						<!-- <li class="dropdown"><a href="#" class="external"><span><b>Media</b></span></a>
							<ul class="dropdown-menu">								 
								<li><a class="external" href="<?= base_url('blogs');?>"><b>Blogs</b></a></li>
								<li class="divider"></li>
							</ul>
						</li> -->
						<?php
							if(isset($_COOKIE['wish_user_id']) || isset($_COOKIE['wish_clinic_id']) || isset($_COOKIE['wish_expert_id']))
							{
								?>
								
										
										<?php 
										if(isset($_COOKIE['wish_user_id']))
										{
											?>
											<li class="dropdown">
											<a class="external" href='#'><b>My Account</b></a>									 
											<ul class="dropdown-menu">
											<li><a class="external" href="<?= base_url('myprofile');?>"><b>My Profile</b></a></li>
											<li class="divider"></li>											
											<!-- <li><a class="external" href="<?= base_url('Cart');?>"><b>Cart</b></a></li>
											<li class="divider"></li> -->
											<li><a class="external" href="<?= base_url('dashboard/myappointments');?>"><b>My Appointments</b></a></li>
											<li class="divider"></li>
											<li><a class="external" data-target="#changepasswordmodal" data-toggle="modal" href="#"><b>Change Password</b></a></li>
											<li class="divider"></li>
											<li><a class="external" href="<?= base_url('logout');?>"><b>Sign Out</b></a></li>
											<li class="divider"></li>
											</ul>
											</li>
										 
											<?php
										}
										else if(isset($_COOKIE['wish_clinic_id']))
										{
											?>
												<li><a class="external" href="<?= base_url('dashboard/clinic');?>"><b>My Account</b></a></li>
												<li><a class="external" href="<?= base_url('logout');?>"><b>Sign Out</b></a></li> 
											<?php
										}
										else if(isset($_COOKIE['wish_expert_id']))
										{
											?>
												<li><a class="external" href="<?= base_url('dashboard/expert');?>"><b>My Account</b></a></li>
												<li><a class="external" href="<?= base_url('logout');?>"><b>Sign Out</b></a></li> 
											<?php
										}
									 
							}
							else
							{
								?>
								<li class="dropdown">
									 <a class="external" href='#'><b>Login/Register</b></a>									 
									 <ul class="dropdown-menu">
										<li><a class="external" data-toggle="modal" data-target="#loginmodal" href="#"><b>Login</b></a></li>
										<li class="divider"></li>
										<li><a class="external" href="<?= base_url('register');?>"><b>Register</b></a></li>
										
										 </ul>
								</li> 
								<?php
							}
						?>
						 
					</ul>
				</div>
			</nav>
	  </div>
	</header>
	<?php
		include('modal.php');
	?>
	
<!--------------------------------------Login  Modal ------------------------------------------------->
<div id="loginmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body"> 
		<div id="loginmsg"></div>
		  <div class="form-group">
			<label   style="font-size:14px;" for="email">Email:</label>
			 
			  <input type="text" class="form-control" onKeyDown="if(event.keyCode==13) login();" id="email" placeholder="Enter email">
			 
		  </div>
		 
		  <div class="form-group">
			<label   style="font-size:14px;" for="pwd">Password:</label>
			  
			  <input type="password" class="form-control" onKeyDown="if(event.keyCode==13) login();" id="pwd" placeholder="Enter password">
			 
		  </div>
		  &nbsp; <a href="#" data-toggle="modal"  data-target="#forgotmodal"data-dismiss="modal" style="font-size:14px;">Forgot Password ?</a>
			<div class="clearfix"></div>
      </div>
      <div class="modal-footer">
		<button type="submit" onClick="login();" class="btn btn-primary">Submit</button>			 
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>	
<!--------------------------------------Login  Modal ------------------------------------------------->
<!--------------------------------------Forgot  Modal ------------------------------------------------->


<div id="forgotmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Forgot Password</h4>
      </div>
      <div class="modal-body"> 
		<div id="forgotmsg"></div>
		  <div class="form-group">
			<label   style="font-size:14px;" for="forgot_email">Email:</label>			 
			  <input type="text" class="form-control" id="forgot_email" placeholder="Enter email">			 
		  </div>
		 
		   
		  
			<div class="clearfix"></div>
      </div>
      <div class="modal-footer">
		<button type="submit" onClick="forgotpassword();" class="btn btn-primary">Submit</button>			 
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--------------------------------------Forgot  Modal ------------------------------------------------->
<!--------------------------------------change password  Modal ------------------------------------------------->


<div id="changepasswordmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change Password</h4>
      </div>
      <div class="modal-body"> 
		<div id="changepasswordmsg"></div>
		  <div class="form-group">
			<label   style="font-size:14px;" for="forgot_email">Current Password:</label>			 
			  <input type="password" class="form-control" id="cur_password" placeholder="Current Password">			 
		  </div>
		 <div class="form-group">
			<label   style="font-size:14px;" for="forgot_email">New Password:</label>			 
			  <input type="password" class="form-control" id="new_password" placeholder="New Password">			 
		  </div>
		 <div class="form-group">
			<label   style="font-size:14px;" for="forgot_email">Confirm Password:</label>			 
			  <input type="password" class="form-control" id="new_password1" placeholder="Confirm Password">			 
		  </div>
		 
		   
		  
			<div class="clearfix"></div>
      </div>
      <div class="modal-footer">
		<button type="submit" onClick="changepassword();" class="btn btn-primary">Submit</button>			 
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--------------------------------------change password    Modal ------------------------------------------------->

 <script type="text/javascript">
	function changepassword()
	{
		var cur_password	=	$('#cur_password').val();
		var new_password	=	$('#new_password').val();
		var new_password1	=	$('#new_password1').val();
		if(cur_password=='')
		{
			$("#changepasswordmsg").html('<div class="alert alert-danger" style="background:red;color:white;">Oops!.. Please enter your current password.</div>');
			$("#changepasswordmsg").show().delay(3000).fadeOut();
		}
		else if(new_password==''){
			$("#changepasswordmsg").html('<div class="alert alert-danger" style="background:red;color:white;">Oops!.. Please enter your new password.</div>');
			$("#changepasswordmsg").show().delay(3000).fadeOut();
		}
		else if(new_password!=new_password1){
			$("#changepasswordmsg").html('<div class="alert alert-danger" style="background:red;color:white;">Oops!.. Passwords do not match.</div>');
			$("#changepasswordmsg").show().delay(3000).fadeOut();
		}
		else{
			$.ajax({
				type	:	'POST',
				data	:	{
								old		:	cur_password,
								pwd		:	new_password,
							},
				url		:	'<?= base_url('dashboard/changepassword');?>',
				success	:	function(res){
							res	=	res.trim();
							if(res	==	'1')
							{
								$("#changepasswordmsg").html('<div class="alert alert-success" style="background:red;color:white;">Password changed successfully.</div>');
								$("#changepasswordmsg").show().delay(3000).fadeOut();
								setTimeout(function(){location.reload();}, 3000);
							}
							else if(res	==	'3')
							{
								$("#changepasswordmsg").html('<div class="alert alert-danger" style="background:red;color:white;">Incorrect Password.</div>');
								$("#changepasswordmsg").show().delay(3000).fadeOut();
							}
							else{
								$("#changepasswordmsg").html('<div class="alert alert-danger" style="background:red;color:white;">We figured some technical issue. Please try later.</div>');
								$("#changepasswordmsg").show().delay(3000).fadeOut();
							}							
								
							
				},
			});
		}		
			
	}
	
	function login()
	{
		var email	=	$('#email').val();
		var pwd		=	$('#pwd').val();
		if(email=='')
		{
			$("#loginmsg").html('<div class="alert alert-danger" style="background:red;color:white;">Oops!.. Please enter your email-id.</div>');
			$("#loginmsg").show().delay(3000).fadeOut();
		}
		else if(pwd=='')
		{
			$("#loginmsg").html('<div class="alert alert-danger" style="background:red;color:white;">Oops!.. Please enter your password.</div>');
			$("#loginmsg").show().delay(3000).fadeOut();
		}
		else
		{
			$.ajax({
				type	:	'POST',
				data	:	'user_email='+email+'&user_pwd='+pwd,
				url		:	'<?= base_url('login/verifylogin');?>',
				beforeSend:	function(){},
				success	:	function(data){
					data	=	data.trim();
					//alert(data);
					if(data=='4')
					{
						$("#loginmsg").html('<div class="alert alert-danger" style="background:red;color:white;">Oops!.. Incorrect username or password.</div>');
						$("#loginmsg").show().delay(3000).fadeOut();
					}
					else if(data	==	'5')
					{
						location.href="<?= base_url('Resetpassword');?>";
					}
					else
					{
						//$("#loginmsg").show().html(data);
						location.reload();
					}
					//alert(data);
				},
			});
		}
	}
	function forgotpassword(){
		var email	=	$('#forgot_email').val();
		if(email=='')
		{
			$("#forgotmsg").html('<div class="alert alert-danger" style="background:red;color:white;">Oops!.. Please enter your email-id.</div>');
			$("#forgotmsg").fadeIn().delay(3000).fadeOut();
		}
		else
		{
			$.ajax({
				type	:	'POST',
				data	:	'user_email='+email,
				url		:	'<?= base_url('login/forgotpassword');?>',
				beforeSend:	function(){
					$("#forgotmsg").html('<div class="alert alert-success" style="background:red;color:white;"><b>Please Wait.</b></div>');
				},
				success	:	function(data){
					data	=	data.trim();
					if(data	=='1')
					{
						$("#forgotmsg").html('<div class="alert alert-success"><p>An email has been sent to your registered email id with new login details.</p></div>');
						$("#forgotmsg").fadeIn().delay(3000).fadeOut();
						setTimeout(function(){location.reload();}, 3000);
					}
					else if(data	=='2')
					{
						$("#forgotmsg").html('<div class="alert alert-danger" style="background:red;color:white;">Currently we are facing some technical issue. Please try after some time.</div>');
						$("#forgotmsg").fadeIn().delay(3000).fadeOut();
					}
					else if(data	=='3')
					{
						$("#forgotmsg").html('<div class="alert alert-danger" style="background:red;color:white;">This email is not registered.</div>');
						$("#forgotmsg").fadeIn().delay(3000).fadeOut();
					}
					
				},
			});
		}
	}
 </script>


 
 
 <div class="loadingDiv" style="display:none;position:fixed;top:0px;right:0px;width:100%;height:100%;background-color:#666;background-image:url('<?= base_url('img/loading.gif');?>'); background-repeat:no-repeat;background-position:center;z-index:10000000;  opacity: 0.4;">
					<div>
						<h7>Please wait...</h7>
					</div>
				</div>