<?php
namespace Backoffice\Controllers\hr;
use Illuminate\Routing\Controller;
use View;


/**
 * Controller for Official Business and Overtime Requests
 */
class OfficialBusinessOvertimeController extends Controller {

    public function index()
    {
        $values = array(
            'reference_number' => null,
            'button_submit' => null
        );
        return View::make('hr.obots');
    }

    public function add()
    {
        $values = array(
            'reference_number' => null,
            'button_submit' => 'Save'
        );
        return View::make('hr.obot')->with('values', $values);
    }
}
