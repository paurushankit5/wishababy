<?php
	$me	=	$array['me'];
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Expert</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img <?php if($me['user_image']!=''){?> src="<?= base_url('img/user/'.$me['user_id'].'/'.$me['user_image']);?>" <?php } else { ?> src="<?= base_url('img/expert.jpg');?>" <?php } ?>  class="user-image" alt="User Image">
              <span class="hidden-xs">Expert </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img <?php if($me['user_image']!=''){?> src="<?= base_url('img/user/'.$me['user_id'].'/'.$me['user_image']);?>" <?php } else { ?> src="<?= base_url('img/expert.jpg');?>" <?php } ?>  class="img-circle" alt="User Image">

                <p>
                  Expert
                   
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                 
                <div class="pull-right">
                  <a href="<?= base_url('expert/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
           
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img <?php if($me['user_image']!=''){?> src="<?= base_url('img/user/'.$me['user_id'].'/'.$me['user_image']);?>" <?php } else { ?> src="<?= base_url('img/expert.jpg');?>" <?php } ?> 
		  class="img-circle" alt="" style="min-height:5	0px;">
        </div>
        <div class="pull-left info">
          <p>Expert</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <ul class="sidebar-menu">
         
        
       
         <li><a href="<?= base_url('home');?>"><i class="fa fa-home"></i> <span>Home</span></a></li>
         <li><a href="<?= base_url('dashboard/expert');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
         <li><a href="<?= base_url('expert/profile');?>"><i class="fa fa-user"></i> <span>Profie</span></a></li>
         <li><a href="<?= base_url('expert/editprofile');?>"><i class="fa fa-user"></i> <span>Edit Profile</span></a></li>
         <li><a href="<?= base_url('expert/questions');?>"><i class="fa fa-lightbulb-o"></i> <span>Questions</span></a></li>
         <li><a href="<?= base_url('expert/myappointments');?>"><i class="fa fa-users"></i> <span>My appointments</span></a></li>
         <li><a href="<?= base_url('expert/callback');?>"><i class="fa fa-phone"></i> <span>Callback Requests</span></a></li>
        <li><a href="<?= base_url('expert/changepassword');?>"><i class="fa fa-lock"></i> <span>Change Password</span></a></li>
        
        
         
         
      <!--<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


 <div class="loadingDiv" id="loadingdiv" style="display:none;position:fixed;top:0px;right:0px;width:100%;height:100%;background-color:#666;background-image:url('<?= base_url('img/loading.gif');?>'); background-repeat:no-repeat;background-position:center;z-index:10000000;  opacity: 0.4;">
          <div>
            <h7>Please wait...</h7>
          </div>
        </div>