<?php
namespace Backoffice\Controllers\hr;
use Illuminate\Routing\Controller;
use View;


/**
 * Controller for Leave Requests
 */
class LeavesController extends Controller {

    public function index()
    {
        $values = array(
            'reference_number' => null,
            'button_submit' => null
        );
        return View::make('hr.leaves');
    }

    public function add()
    {
        echo 'asdf';exit;
        $values = array(
            'reference_number' => null,
            'button_submit' => 'Save'
        );
        return View::make('hr.leave')->with('values', $values);
    }

    public function action_edit($reference_number)
    {
        Section::inject('title', 'Backoffice - Home');

        $values = array(
            'reference_number' => $reference_number,
            'type' => 'sl',
            'leave_start_date' => '2013-06-16',
            'start_meridian' => 'am',
            'leave_end_date' => '2013-06-23',
            'end_meridian' => 'pm',
            'button_submit' => 'Update'
        );

        return View::make('hr.leave')->with('values', $values);
    }
}
