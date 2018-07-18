<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
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
              <span class="hidden-xs">Admin </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url('assets/admin/');?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Admin
                   
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                 
                <div class="pull-right">
                  <a href="<?= base_url('admin/signout');?>" class="btn btn-default btn-flat">Sign out</a>
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
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
        
       
         <li><a href="<?= base_url('admin');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        
		  <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/category');?>"><i class="fa fa-circle-o"></i> Category List</a></li>
            <li><a href="<?= base_url('admin/addcategory');?>"><i class="fa fa-circle-o"></i> Add Category </a></li>
            
          </ul>
        </li>-->
		
        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/productlist');?>"><i class="fa fa-circle-o"></i> Product List</a></li>
            <li><a href="<?= base_url('admin/addproduct');?>"><i class="fa fa-circle-o"></i> Add Product </a></li>
            
          </ul>
        </li>-->
         <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>User Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/parents');?>"><i class="fa fa-circle-o"></i> Parent</a></li>
            <li><a href="<?= base_url('admin/clinic');?>"><i class="fa fa-circle-o"></i> IVF Cinics</a></li>
            <li><a href="<?= base_url('admin/experts');?>"><i class="fa fa-circle-o"></i> IVF Experts</a></li>
            
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>SEO Tool</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/addseo');?>"><i class="fa fa-circle-o"></i> Add SEO to static Page</a></li>            
            <li><a href="<?= base_url('admin/viewseo');?>"><i class="fa fa-circle-o"></i> View SEO to static Pages</a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/addmenu');?>"><i class="fa fa-circle-o"></i> Add Menu</a></li>            
            <li><a href="<?= base_url('admin/viewmenu');?>"><i class="fa fa-circle-o"></i> View Menu</a></li>            
            <li><a href="<?= base_url('admin/managemenuorder');?>"><i class="fa fa-circle-o"></i> Manage Top Menu Order</a></li>            
            <li><a href="<?= base_url('admin/manageprimarymenuorder');?>"><i class="fa fa-circle-o"></i> Manage Primary Menu Order</a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Submenu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/addsubmenu');?>"><i class="fa fa-circle-o"></i> Add Submenu</a></li>            
            <li><a href="<?= base_url('admin/viewsubmenu');?>"><i class="fa fa-circle-o"></i> View Submenu</a></li>            
            <li><a href="<?= base_url('admin/managesubmenuorder');?>"><i class="fa fa-circle-o"></i> Manage Submenu Order</a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Nested Submenu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/addnestedsubmenu');?>"><i class="fa fa-circle-o"></i> Add Nested Submenu</a></li>            
            <li><a href="<?= base_url('admin/viewnestedsubmenu');?>"><i class="fa fa-circle-o"></i> View Nested Submenu</a></li>            
                     
          </ul>
        </li>
         
        <li><a href="<?= base_url('admin/appointments');?>"><i class="fa fa-circle-o text-red"></i> <span>Appointments</span></a></li>
        <li><a href="<?= base_url('admin/subscribers');?>"><i class="fa fa-circle-o text-red"></i> <span>Subscribers</span></a></li>
        <li><a href="<?= base_url('admin/blogs');?>"><i class="fa fa-circle-o text-red"></i> <span>Blogs</span></a></li>
        
        <li><a href="<?= base_url('admin/questions');?>"><i class="fa fa-circle-o text-red"></i> <span>Questions</span></a></li>
        <li><a href="<?= base_url('admin/quotes');?>"><i class="fa fa-circle-o text-red"></i> <span>Quotation Requests</span></a></li>
        <li><a href="<?= base_url('admin/callback');?>"><i class="fa fa-circle-o text-red"></i> <span>Callback Requests</span></a></li>
        <li><a href="<?= base_url('admin/states');?>"><i class="fa fa-circle-o text-red"></i> <span>State & Cities</span></a></li>
        <li><a href="<?= base_url('admin/mailtosomeone');?>"><i class="fa fa-circle-o text-red"></i> <span>Send Mail</span></a></li>
        <li><a href="<?= base_url('admin/export');?>"><i class="fa fa-circle-o text-yellow"></i> <span>Export Database to CSV</span></a></li>
        <!--<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
