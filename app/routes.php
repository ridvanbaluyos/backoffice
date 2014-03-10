<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Root URL
Route::get('/', function()
{
    if (1) // user is logged in
    {
        return Redirect::to('home');
    }
    else
    {
        return Redirect::to('login');
    }
});

// Home Login
Route::any('login', 'home@login');

// Home Index
Route::any('home', 'HomeController@index');

// Human Resources - Employees
Route::get('hrad/employees', 'Backoffice\Controllers\hr\EmployeesController@index');
Route::get('hrad/employees/add', 'Backoffice\Controllers\hr\EmployeesController@add');
Route::post('hrad/employees/add_employee', 'Backoffice\Controllers\hr\EmployeesController@add_employee');
Route::get('hrad/employees/edit/(:any)', 'Backoffice\Controllers\hr\EmployeesController@edit');
Route::get('hrad/employees/view/(:any)', 'hr.employees@view');


// Human Resources - Leaves
Route::get('hrad/leaves',  'Backoffice\Controllers\hr\LeavesController@index');
Route::get('hrad/leaves/list', 'hr.leaves@index');
Route::get('hrad/leaves/add', 'Backoffice\Controllers\hr\LeavesController@add');
Route::get('hrad/leaves/edit/(:any)', 'hr.leaves@edit');
Route::get('hrad/leaves/view/(:any)', 'hr.leaves@view');

// Human Resources - Official Business and Overtime
Route::get('hrad/obot',  'Backoffice\Controllers\hr\OfficialBusinessOvertimeController@index');
Route::get('hrad/obot/add', 'Backoffice\Controllers\hr\OfficialBusinessOvertimeController@add');




// Test Routes
Route::get('user/(:num)/(:num)', function($id, $id2)
{
    var_dump($id);
    var_dump($id2);
});
