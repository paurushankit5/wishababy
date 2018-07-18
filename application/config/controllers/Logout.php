<?php
	Class Logout extends CI_Controller
	{		
		public function index()
		{
			setcookie('wish_user_id',0, time() - (86400 * 30), "/");
			setcookie('wish_clinic_id',0, time() - (86400 * 30), "/");
			setcookie('wish_expert_id',0, time() - (86400 * 30), "/");
			return redirect(base_url());
		}
	}
?>