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
		$values = array(
			'employee_number' => null,
			'button_submit' => 'Save'
		);
		return View::make('hr.employee')->with('values', $values);
	}

	public function action_edit($employee_number)
	{
		Section::inject('title', 'Backoffice - Employees');
		$values = array(
			'employee_number' => $employee_number,
			'button_submit' => 'Update'
		);
		return View::make('hr.employee')->with('values', $values);
	}

}