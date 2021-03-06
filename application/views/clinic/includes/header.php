<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Clinic</b></span>
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
              <img src="<?= base_url('assets/admin/');?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Clinic </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url('assets/admin/');?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Clinic
                   
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                 
                <div class="pull-right">
                  <a href="<?= base_url('clinic/logout');?>" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="<?= base_url('assets/admin/');?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Clinic</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <ul class="sidebar-menu">
        
        
       
         <li><a href="<?= base_url('home');?>"><i class="fa fa-home"></i> <span>Home</span></a></li>
         <li><a href="<?= base_url('dashboard/clinic');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
         <li><a href="<?= base_url('clinicprofile');?>"><i class="fa fa-user"></i> <span>Profie</span></a></li>
         <li><a href="<?= base_url('clinicprofile/edit');?>"><i class="fa fa-user"></i> <span>Edit Profile</span></a></li>
         <li><a href="<?= base_url('clinic/questions');?>"><i class="fa fa-lightbulb-o"></i> <span>Questions</span></a></li>
         <li><a href="<?= base_url('clinic/myappointments');?>"><i class="fa fa-users"></i> <span>My appointments</span></a></li>
         <li><a href="<?= base_url('clinic/callback');?>"><i class="fa fa-phone"></i> <span>Callback Requests</span></a></li>
         <li><a href="<?= base_url('clinic/changepassword');?>"><i class="fa fa-lock"></i> <span>Change Password</span></a></li>
        
        
         
         
      <!--<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


 <div class="loadingDiv" id="loadingdiv"style="display:none;position:fixed;top:0px;right:0px;width:100%;height:100%;background-color:#666;background-image:url('<?= base_url('img/loading.gif');?>'); background-repeat:no-repeat;background-position:center;z-index:10000000;  opacity: 0.4;">
          <div>
            <h7>Please wait...</h7>
          </div>
        </div>