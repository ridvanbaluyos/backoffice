<?php
namespace Backoffice\Controllers\hr;
use Illuminate\Routing\Controller;
use View;
use Input;

/**
 * Controller for Employees
 */
class EmployeesController extends Controller {

    public function index()
    {
        return View::make('hr.employees');
    }

    public function add()
    {
        $values = array(
            'employee_number' => null,
            'button_submit' => 'Save'
        );
        return View::make('hr.employee')->with('values', $values);
    }

    public function add_employee()
    {
        $input = Input::all();

        // Employee Table
        $employee_input = array(
            'number' => $input['number'],
            'lastname' => $input['lastname'],
            'middlename' => $input['middlename'],
            'firstname' => $input['firstname'],
            'nickname' => $input['nickname'],
            'gender' => $input['gender'],
            'marital_status' => $input['marital_status'],
            'email' => $input['emal'],
            'emergency_name' => $input['emergency_name'],
            'emergency_relationship' => $input['emergency_relationship'],
            'emergency_contact' => $input['emergency_contact'],
        );

        // Biometrics Table
        $biometrics_input = array(
            'biometrics_number' => $input['biometrics_number'],
            'employee_number' => $input['employee_number'],
        );

        // Employee Work Info Table
        $work_info = array(
            'employee_number' => $input['employee_number'],
            'date_hired' => $input['date_hired'],
            'department_id' => $input['department_id'],
            'position' => $input['position'],
            'reports_to' => $input['reports_to'],
            'probationary' => $input['probationary'],
            'email' => $input['email'],
            'contact_number' => $input['contact_number'],
            'tin' => $input['tin'],
            'philhealth' => $input['philhealth'],
            'sss' => $input['sss'],
            'sick_leaves_max' => $input['sick_leaves_max'],
            'vacation_leaves_max' => $input['vacation_leaves_max'],
        );
    }

    public function edit($employee_number)
    {
        Section::inject('title', 'Backoffice - Employees');
        $values = array(
            'employee_number' => $employee_number,
            'button_submit' => 'Update'
        );
        return View::make('hr.employee')->with('values', $values);
    }

}
