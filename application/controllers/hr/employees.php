<?php
/**
 * Controller for Leave Requests
 */
class Hr_Employees_Controller extends Base_Controller {

	public function action_index()
	{
		Section::inject('title', 'Backoffice - Employees');
		return View::make('hr.employees');
	}

	public function action_add()
	{
		Section::inject('title', 'Backoffice - Employees');
		return View::make('hr.employee-add');
	}

}