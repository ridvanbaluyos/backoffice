<?php
/**
 * Controller for Leave Requests
 */
class Hr_Leave_Controller extends Base_Controller {

	public function action_index()
	{
		Section::inject('title', 'Backoffice - Home');
		return View::make('hr.leave');
	}

}