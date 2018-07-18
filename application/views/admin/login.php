<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body  style="background:#f1f1f1;">

<div class="col-sm-6 col-sm-offset-3" style="background-color:white;margin-top:100px;"  >
  <h2 class="text text-center text-primary" ><b>Admin Login </b>	</h2>
  <?php
	if($this->session->flashdata('loginmsg'))
	{
		echo $this->session->flashdata('loginmsg');
	}
  ?>
  <form class="form-horizontal" method="post" action="<?=base_url('adminlogin/verifylogin');?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="admin_user" placeholder="Enter Usename">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="admin_pwd" placeholder="Enter password" >
      </div>
    </div>
 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
