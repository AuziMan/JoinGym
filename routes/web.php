<?php

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/SecurityReroute', function(){
    return view('SecurityReroute');
});
    
Route::get('/suspendedUser', function(){
    return view('suspendedUser');
});

Route::get('/customer', function(){
    echo "Hello customer";
})->middleware('customer');

Route::get('/suspended', function(){
    echo "Hello suspended user";
})->middleware('suspended');

Route::get('blank', function(){
    return View('/userPages/blankEditUser');
});

//===================Admin Routes======================

Route::get('/admin', 'AdminController@index');

Route::post('/editView', 'AdminController@editView');

Route::post('/editUser', 'AdminController@editUser');

Route::post('/suspend', 'AdminController@suspend');

Route::post('/delete', 'AdminController@delete');

Route::post('viewUser', 'AdminController@details');

Route::get('/moreinfo', function()
{
    return view('/userPages/moreinfo');
});

Route::post('/addNewInfo', 'UserController@addNewInfo');


//=================Job Listing Routes=================

Route::get('/jobAdmin', 'AdminController@jobAdmin');

Route::get('/addJob', function(){
    if(Auth::user()->role=='admin')
    {
        return view('/adminPages/addJobListing');
    } 
    else 
    {
        return view('securityReroute');
    }
});

Route::post('/addJobListing', 'AdminController@addJob');

Route::post('/editJobView', 'AdminController@editJob');

Route::post('/editJobData', 'AdminController@editJobData');

Route::post('/deleteJob', 'AdminController@deleteJob');

Route::get('/searchJob', function()
{
	return view('/userPages/searchForJob');
});

Route::post('/searchJobFunc', 'UserController@searchJob');

Route::post('/viewOneJob', 'UserController@viewOneJob');

Route::post('/applyJob', 'UserController@apply');

//================User Portfolio Routes===============
Route::get('/userPortfolio', function()
{
    return view('/userPages/userPortfolio');
});
    
Route::post('/addUserPortfolio', 'UserController@addUserPortfolio');

//=======================Group Routes========================
Route::get('/adminGroup', 'AdminController@adminGroup');

Route::get('/addGroupView', function(){
    return view('/adminPages/addGroup');
});

Route::post('/addGroup', 'AdminController@addGroup');

Route::post('/viewGroup', 'GroupController@viewGroupMembers');

Route::post('/editGroupView','AdminController@editGroupView');

Route::post('/editGroup', 'AdminController@editGroup');

Route::post('/deleteGroup', 'AdminController@deleteGroup');

Route::get('/groups', 'GroupController@userGroupView' );

Route::post('/joinGroup', 'GroupController@joinGroup');

Route::post('/leaveGroup', 'GroupController@leaveGroup');
