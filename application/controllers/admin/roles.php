<?php

class Admin_Roles_Controller extends Base_Controller
{

	public function action_index()
	{
		return View::make('admin/roles.index');
	}

}